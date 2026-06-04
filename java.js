/* =============================================
   CareOut | careout.js
   - Menú hamburguesa
   - Favoritos
   - Buscador
   - Loader
   - Dark mode
   - Header scroll
============================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* -----------------------------------------------
     LOADER
  ----------------------------------------------- */
  const loader = document.getElementById('loader');
  if (loader) {
    window.addEventListener('load', () => {
      loader.classList.add('ocultar');
      setTimeout(() => loader.remove(), 600);
    });
  }


  /* -----------------------------------------------
     HEADER — sombra al hacer scroll
  ----------------------------------------------- */
  const header = document.getElementById('header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
  }


  /* -----------------------------------------------
     MENÚ HAMBURGUESA
  ----------------------------------------------- */
  const btnMenu   = document.getElementById('btn-menu');
  const nav       = document.getElementById('nav');
  const body      = document.body;

  if (btnMenu && nav) {

    // Abrir / cerrar menú
    btnMenu.addEventListener('click', () => {
      const abierto = nav.classList.toggle('nav-open');
      btnMenu.classList.toggle('activo', abierto);
      body.classList.toggle('no-scroll', abierto);  // evita scroll de fondo
      btnMenu.setAttribute('aria-expanded', abierto);
    });

    // Cerrar menú al hacer click fuera
    document.addEventListener('click', (e) => {
      if (!nav.contains(e.target) && !btnMenu.contains(e.target)) {
        nav.classList.remove('nav-open');
        btnMenu.classList.remove('activo');
        body.classList.remove('no-scroll');
        btnMenu.setAttribute('aria-expanded', 'false');
      }
    });

    // Submenús en móvil — toggle al tap
    const submenus = nav.querySelectorAll('.submenu > a');
    submenus.forEach(link => {
      link.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          const parent = link.closest('.submenu');
          const dropdown = parent.querySelector('.dropdown');
          const estaAbierto = parent.classList.toggle('submenu-open');
          if (dropdown) {
            dropdown.style.maxHeight = estaAbierto
              ? dropdown.scrollHeight + 'px'
              : '0';
          }
        }
      });
    });

    // Cerrar menú al cambiar a pantalla grande
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        nav.classList.remove('nav-open');
        btnMenu.classList.remove('activo');
        body.classList.remove('no-scroll');
        nav.querySelectorAll('.submenu').forEach(s => {
          s.classList.remove('submenu-open');
          const d = s.querySelector('.dropdown');
          if (d) d.style.maxHeight = '';
        });
      }
    });
  }


  /* -----------------------------------------------
     DARK MODE
  ----------------------------------------------- */
  const btnDark = document.getElementById('btn-dark');
  const DARK_KEY = 'careout-dark';

  const aplicarModo = (oscuro) => {
    body.classList.toggle('dark-mode', oscuro);
    if (btnDark) {
      btnDark.innerHTML = oscuro
        ? '<i class="fa-solid fa-sun"></i>'
        : '<i class="fa-solid fa-moon"></i>';
    }
    localStorage.setItem(DARK_KEY, oscuro ? '1' : '0');
  };

  // Recordar preferencia
  const modoGuardado = localStorage.getItem(DARK_KEY);
  if (modoGuardado !== null) {
    aplicarModo(modoGuardado === '1');
  } else {
    aplicarModo(window.matchMedia('(prefers-color-scheme: dark)').matches);
  }

  if (btnDark) {
    btnDark.addEventListener('click', () => {
      aplicarModo(!body.classList.contains('dark-mode'));
    });
  }


  /* -----------------------------------------------
     FAVORITOS
  ----------------------------------------------- */
  const FAV_KEY  = 'careout-favoritos';
  const favCount = document.getElementById('fav-count');

  // Cargar favoritos guardados
  let favoritos = JSON.parse(localStorage.getItem(FAV_KEY) || '[]');

  const guardarFavoritos = () => {
    localStorage.setItem(FAV_KEY, JSON.stringify(favoritos));
  };

  const actualizarContador = () => {
    if (favCount) {
      favCount.textContent  = favoritos.length;
      favCount.style.display = favoritos.length > 0 ? 'flex' : 'none';
    }
  };

  const mostrarToast = (msg) => {
    // Eliminar toast anterior si existe
    const viejo = document.querySelector('.careout-toast');
    if (viejo) viejo.remove();

    const toast = document.createElement('div');
    toast.className = 'careout-toast';
    toast.textContent = msg;
    document.body.appendChild(toast);
    requestAnimationFrame(() => toast.classList.add('toast-visible'));
    setTimeout(() => {
      toast.classList.remove('toast-visible');
      setTimeout(() => toast.remove(), 400);
    }, 2500);
  };

  // Conectar botones de favoritos a las cards
  const iniciarFavBtns = () => {
    document.querySelectorAll('.fav-btn').forEach(btn => {
      const card  = btn.closest('.card-auto');
      const nombre = card?.querySelector('h3')?.textContent?.trim() || 'Auto';
      const img    = card?.querySelector('img')?.src || '';
      const precio = card?.querySelector('h4')?.textContent?.trim() || '';
      const id     = nombre.toLowerCase().replace(/\s+/g, '-');

      // Marcar si ya está en favoritos
      if (favoritos.find(f => f.id === id)) {
        btn.classList.add('activo');
        btn.querySelector('i').className = 'fa-solid fa-heart';
      }

      btn.addEventListener('click', () => {
        const idx = favoritos.findIndex(f => f.id === id);
        if (idx === -1) {
          favoritos.push({ id, nombre, img, precio });
          btn.classList.add('activo');
          btn.querySelector('i').className = 'fa-solid fa-heart';
          mostrarToast(`❤️ "${nombre}" agregado a favoritos`);
        } else {
          favoritos.splice(idx, 1);
          btn.classList.remove('activo');
          btn.querySelector('i').className = 'fa-regular fa-heart';
          mostrarToast(`💔 "${nombre}" quitado de favoritos`);
          // Si el panel está abierto, refrescar lista
          if (document.querySelector('.fav-panel')?.classList.contains('panel-open')) {
            renderFavPanel();
          }
        }
        guardarFavoritos();
        actualizarContador();
      });
    });
  };

  // Panel lateral de favoritos
  const crearPanelFav = () => {
    const panel = document.createElement('div');
    panel.className = 'fav-panel';
    panel.innerHTML = `
      <div class="fav-panel-header">
        <h3><i class="fa-solid fa-heart"></i> Mis Favoritos</h3>
        <button class="fav-panel-close" aria-label="Cerrar favoritos">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="fav-panel-body"></div>
    `;
    document.body.appendChild(panel);

    // Overlay
    const overlay = document.createElement('div');
    overlay.className = 'fav-overlay';
    document.body.appendChild(overlay);

    panel.querySelector('.fav-panel-close').addEventListener('click', cerrarPanel);
    overlay.addEventListener('click', cerrarPanel);

    return panel;
  };

  const renderFavPanel = () => {
    const panel = document.querySelector('.fav-panel');
    if (!panel) return;
    const body2 = panel.querySelector('.fav-panel-body');

    if (favoritos.length === 0) {
      body2.innerHTML = `
        <div class="fav-vacio">
          <i class="fa-regular fa-heart fa-3x"></i>
          <p>No tienes favoritos aún</p>
        </div>`;
      return;
    }

    body2.innerHTML = favoritos.map(f => `
      <div class="fav-item" data-id="${f.id}">
        <img src="${f.img}" alt="${f.nombre}" onerror="this.src='logochad.webp'">
        <div class="fav-item-info">
          <strong>${f.nombre}</strong>
          <span>${f.precio}</span>
        </div>
        <button class="fav-item-remove" data-id="${f.id}" aria-label="Quitar favorito">
          <i class="fa-solid fa-trash"></i>
        </button>
      </div>
    `).join('');

    body2.querySelectorAll('.fav-item-remove').forEach(btn => {
      btn.addEventListener('click', () => {
        const id  = btn.dataset.id;
        favoritos = favoritos.filter(f => f.id !== id);
        guardarFavoritos();
        actualizarContador();
        renderFavPanel();
        // Desmarcar el botón en la card correspondiente
        document.querySelectorAll('.fav-btn').forEach(fb => {
          const card   = fb.closest('.card-auto');
          const nombre = card?.querySelector('h3')?.textContent?.trim() || '';
          if (nombre.toLowerCase().replace(/\s+/g, '-') === id) {
            fb.classList.remove('activo');
            fb.querySelector('i').className = 'fa-regular fa-heart';
          }
        });
      });
    });
  };

  const abrirPanel = () => {
    let panel = document.querySelector('.fav-panel');
    if (!panel) panel = crearPanelFav();
    renderFavPanel();
    panel.classList.add('panel-open');
    document.querySelector('.fav-overlay')?.classList.add('overlay-visible');
    body.classList.add('no-scroll');
  };

  const cerrarPanel = () => {
    document.querySelector('.fav-panel')?.classList.remove('panel-open');
    document.querySelector('.fav-overlay')?.classList.remove('overlay-visible');
    body.classList.remove('no-scroll');
  };

  const iconoFav = document.getElementById('favoritos-icono');
  if (iconoFav) {
    iconoFav.addEventListener('click', () => {
      const panel = document.querySelector('.fav-panel');
      if (panel?.classList.contains('panel-open')) {
        cerrarPanel();
      } else {
        abrirPanel();
      }
    });
  }

  iniciarFavBtns();
  actualizarContador();


  /* -----------------------------------------------
     BUSCADOR EN TIEMPO REAL
  ----------------------------------------------- */
  const inputBuscar  = document.querySelector('.barra-busqueda input');
  const selectCat    = document.querySelector('.barra-busqueda select');
  const btnBuscar    = document.querySelector('.barra-busqueda button[type="submit"]');
  const seccionAutos = document.getElementById('autos');

  const filtrarAutos = () => {
    const texto = inputBuscar?.value.toLowerCase().trim() || '';
    const cat   = selectCat?.value || 'Todas las categorías';
    const cards = document.querySelectorAll('.card-auto');
    let visibles = 0;

    cards.forEach(card => {
      const nombre  = card.querySelector('h3')?.textContent.toLowerCase() || '';
      const badge   = card.querySelector('.badge')?.textContent.toLowerCase() || '';
      const desc    = card.querySelector('p')?.textContent.toLowerCase() || '';

      const coincideTexto = !texto || nombre.includes(texto) || desc.includes(texto);
      const coincideCat   = cat === 'Todas las categorías'
        || badge.includes(cat.toLowerCase())
        || nombre.includes(cat.toLowerCase());

      const mostrar = coincideTexto && coincideCat;
      card.style.display    = mostrar ? '' : 'none';
      card.style.animation  = mostrar ? 'fadeInCard 0.4s ease' : '';
      if (mostrar) visibles++;
    });

    // Mensaje si no hay resultados
    let sinResultados = document.querySelector('.sin-resultados');
    if (visibles === 0) {
      if (!sinResultados) {
        sinResultados = document.createElement('p');
        sinResultados.className = 'sin-resultados';
        sinResultados.textContent = 'ಠ⁠﹏⁠ಠ No encontramos autos con ese criterio.';
        document.querySelector('.autos-grid')?.appendChild(sinResultados);
      }
    } else {
      sinResultados?.remove();
    }

    // Scroll suave hacia la sección de autos
    if (texto || cat !== 'Todas las categorías') {
      seccionAutos?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  };

  if (inputBuscar) {
    inputBuscar.addEventListener('input', filtrarAutos);
    inputBuscar.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') filtrarAutos();
    });
  }

  if (selectCat) selectCat.addEventListener('change', filtrarAutos);
  if (btnBuscar) btnBuscar.addEventListener('click', filtrarAutos);


  /* -----------------------------------------------
     ESTILOS DINÁMICOS INYECTADOS
  ----------------------------------------------- */
  const estilos = document.createElement('style');
  estilos.textContent = `

    /* Scroll bloqueado */
    body.no-scroll { overflow: hidden; }

    /* Header con sombra al scroll */
    .header.scrolled {
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      background: rgba(10,10,10,0.98) !important;
    }

    /* ---- Hamburguesa animada ---- */
    .hamburger span {
      display: block;
      width: 24px;
      height: 2px;
      background: currentColor;
      transition: transform 0.35s ease, opacity 0.25s ease;
      transform-origin: center;
    }
    .hamburger.activo span:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }
    .hamburger.activo span:nth-child(2) {
      opacity: 0;
    }
    .hamburger.activo span:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }

    /* ---- Menú móvil ---- */
    @media (max-width: 768px) {
      .nav {
        position: fixed;
        top: 0; right: -100%;
        width: min(320px, 85vw);
        height: 100dvh;
        background: #0a0a0a;
        padding: 80px 24px 40px;
        transition: right 0.4s cubic-bezier(0.4,0,0.2,1);
        overflow-y: auto;
        z-index: 999;
        box-shadow: -4px 0 30px rgba(0,0,0,0.5);
      }
      .nav.nav-open { right: 0; }
      .nav ul { flex-direction: column; gap: 0; }
      .nav ul li { border-bottom: 1px solid rgba(255,255,255,0.07); }
      .nav ul li a { display: flex; align-items: center; justify-content: space-between; padding: 14px 0; font-size: 15px; }

      /* Dropdown móvil animado */
      .nav .dropdown {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease;
        background: rgba(255,255,255,0.04);
        border-radius: 8px;
        margin-bottom: 8px;
      }
      .nav .submenu-open .dropdown { /* controlado por JS */ }
      .nav .dropdown li a { padding: 10px 16px; font-size: 13px; }
    }

    /* ---- Botón favorito ---- */
    .fav-btn {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 18px;
      color: #aaa;
      transition: color 0.2s, transform 0.2s;
      padding: 4px;
    }
    .fav-btn:hover { transform: scale(1.2); }
    .fav-btn.activo { color: #e63946; }
    .fav-btn.activo i { animation: latido 0.35s ease; }

    @keyframes latido {
      0%   { transform: scale(1); }
      50%  { transform: scale(1.4); }
      100% { transform: scale(1); }
    }

    /* ---- Panel lateral de favoritos ---- */
    .fav-overlay {
      position: fixed; inset: 0;
      background: rgba(0,0,0,0.55);
      z-index: 1099;
      opacity: 0; pointer-events: none;
      transition: opacity 0.3s;
      backdrop-filter: blur(3px);
    }
    .fav-overlay.overlay-visible { opacity: 1; pointer-events: all; }

    .fav-panel {
      position: fixed;
      top: 0; right: -400px;
      width: min(380px, 92vw);
      height: 100dvh;
      background: #111;
      z-index: 1100;
      display: flex; flex-direction: column;
      transition: right 0.4s cubic-bezier(0.4,0,0.2,1);
      box-shadow: -6px 0 40px rgba(0,0,0,0.6);
    }
    .fav-panel.panel-open { right: 0; }

    .fav-panel-header {
      display: flex; align-items: center; justify-content: space-between;
      padding: 20px 24px;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      background: #0d0d0d;
    }
    .fav-panel-header h3 {
      font-size: 18px; font-weight: 600;
      color: #c9a84c;
      display: flex; align-items: center; gap: 8px;
    }
    .fav-panel-close {
      background: none; border: none;
      color: #aaa; font-size: 20px;
      cursor: pointer; transition: color 0.2s, transform 0.2s;
    }
    .fav-panel-close:hover { color: #fff; transform: rotate(90deg); }

    .fav-panel-body {
      flex: 1; overflow-y: auto; padding: 16px;
      display: flex; flex-direction: column; gap: 12px;
    }

    .fav-item {
      display: flex; align-items: center; gap: 12px;
      background: rgba(255,255,255,0.05);
      border-radius: 10px; padding: 10px;
      transition: background 0.2s;
    }
    .fav-item:hover { background: rgba(255,255,255,0.09); }
    .fav-item img {
      width: 64px; height: 48px;
      object-fit: cover; border-radius: 6px;
      flex-shrink: 0;
    }
    .fav-item-info { flex: 1; }
    .fav-item-info strong { display: block; font-size: 13px; color: #eee; }
    .fav-item-info span  { font-size: 12px; color: #c9a84c; }
    .fav-item-remove {
      background: none; border: none;
      color: #e63946; font-size: 14px;
      cursor: pointer; opacity: 0.6;
      transition: opacity 0.2s, transform 0.2s;
    }
    .fav-item-remove:hover { opacity: 1; transform: scale(1.15); }

    .fav-vacio {
      flex: 1; display: flex; flex-direction: column;
      align-items: center; justify-content: center; gap: 12px;
      color: #555; padding: 40px 0;
    }
    .fav-vacio p { font-size: 14px; }

    /* ---- Toast ---- */
    .careout-toast {
      position: fixed; bottom: 28px; left: 50%;
      transform: translateX(-50%) translateY(30px);
      background: #1a1a1a;
      color: #fff;
      padding: 12px 22px;
      border-radius: 50px;
      font-size: 14px;
      box-shadow: 0 6px 30px rgba(0,0,0,0.4);
      border: 1px solid rgba(201,168,76,0.3);
      z-index: 9999;
      opacity: 0;
      transition: opacity 0.3s, transform 0.3s;
      pointer-events: none;
      white-space: nowrap;
    }
    .careout-toast.toast-visible {
      opacity: 1;
      transform: translateX(-50%) translateY(0);
    }

    /* ---- Sin resultados ---- */
    .sin-resultados {
      grid-column: 1 / -1;
      text-align: center;
      padding: 40px;
      font-size: 16px;
      color: #888;
    }

    /* ---- Animación cards al filtrar ---- */
    @keyframes fadeInCard {
      from { opacity: 0; transform: translateY(16px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ---- Icono favoritos con contador ---- */
    .favoritos-icono {
      position: relative;
      cursor: pointer;
    }
    #fav-count {
      display: none;
      position: absolute;
      top: -6px; right: -8px;
      background: #e63946;
      color: #fff;
      font-size: 10px;
      font-weight: 700;
      width: 18px; height: 18px;
      border-radius: 50%;
      align-items: center; justify-content: center;
    }
  `;
  document.head.appendChild(estilos);

}); // fin DOMContentLoaded