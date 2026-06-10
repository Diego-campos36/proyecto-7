/* =============================================
   CareOut | script.js — Catálogo / Comprar
   - Menú hamburguesa
   - Dark mode
   - Favoritos con panel lateral
   - Buscador + filtros en tiempo real
   - Calculadora de financiamiento
   - Animaciones scroll (IntersectionObserver)
   - Ordenar por precio
   - Contador de resultados
   - Botón "Volver arriba"
   - Animación de pasos al hacer scroll
============================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* ═══════════════════════════════════════════
     HEADER — sombra + transparencia al scroll
  ═══════════════════════════════════════════ */
  const header = document.querySelector('.header');
  window.addEventListener('scroll', () => {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 60);
  });


  /* ═══════════════════════════════════════════
     MENÚ HAMBURGUESA
  ═══════════════════════════════════════════ */
  const btnMenu = document.getElementById('btn-menu');
  const nav     = document.getElementById('nav');
  const body    = document.body;

  if (btnMenu && nav) {
    btnMenu.addEventListener('click', () => {
      const open = nav.classList.toggle('nav-open');
      btnMenu.classList.toggle('activo', open);
      body.classList.toggle('no-scroll', open);
      btnMenu.setAttribute('aria-expanded', open);
    });

    document.addEventListener('click', (e) => {
      if (!nav.contains(e.target) && !btnMenu.contains(e.target)) {
        nav.classList.remove('nav-open');
        btnMenu.classList.remove('activo');
        body.classList.remove('no-scroll');
      }
    });

    nav.querySelectorAll('.submenu > a').forEach(link => {
      link.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          const parent   = link.closest('.submenu');
          const dropdown = parent.querySelector('.dropdown');
          const open     = parent.classList.toggle('submenu-open');
          if (dropdown) dropdown.style.maxHeight = open ? dropdown.scrollHeight + 'px' : '0';
        }
      });
    });

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


  /* ═══════════════════════════════════════════
     DARK MODE
  ═══════════════════════════════════════════ */
  const btnDark  = document.querySelector('.btn-dark');
  const DARK_KEY = 'careout-dark';

  const aplicarModo = (oscuro) => {
    body.classList.toggle('dark-mode', oscuro);
    if (btnDark) btnDark.innerHTML = oscuro
      ? '<i class="fa-solid fa-sun"></i>'
      : '<i class="fa-solid fa-moon"></i>';
    localStorage.setItem(DARK_KEY, oscuro ? '1' : '0');
  };

  const guardado = localStorage.getItem(DARK_KEY);
  aplicarModo(guardado !== null
    ? guardado === '1'
    : window.matchMedia('(prefers-color-scheme: dark)').matches);

  btnDark?.addEventListener('click', () =>
    aplicarModo(!body.classList.contains('dark-mode')));


  /* ═══════════════════════════════════════════
     TOAST
  ═══════════════════════════════════════════ */
  const mostrarToast = (msg, tipo = 'info') => {
    document.querySelector('.careout-toast')?.remove();
    const toast = document.createElement('div');
    toast.className = `careout-toast toast-${tipo}`;
    toast.innerHTML = msg;
    document.body.appendChild(toast);
    requestAnimationFrame(() => toast.classList.add('toast-visible'));
    setTimeout(() => {
      toast.classList.remove('toast-visible');
      setTimeout(() => toast.remove(), 400);
    }, 2800);
  };


  /* ═══════════════════════════════════════════
     FAVORITOS
  ═══════════════════════════════════════════ */
  const FAV_KEY  = 'careout-favoritos';
  const favSpan  = document.querySelector('.favoritos-icono span');
  const favIcono = document.querySelector('.favoritos-icono');

  let favoritos = JSON.parse(localStorage.getItem(FAV_KEY) || '[]');

  const guardarFav   = () => localStorage.setItem(FAV_KEY, JSON.stringify(favoritos));
  const actualizarContador = () => {
    if (!favSpan) return;
    favSpan.textContent  = favoritos.length;
    favSpan.style.display = favoritos.length > 0 ? 'flex' : 'none';
  };

  // Inicializar todos los botones .fav de la página
  const iniciarFavBtns = () => {
    document.querySelectorAll('.fav').forEach(btn => {
      const card   = btn.closest('.card-auto');
      const nombre = card?.querySelector('h3')?.textContent?.trim() || 'Auto';
      const img    = card?.querySelector('img')?.src || '';
      const precio = card?.querySelector('.precio')?.textContent?.trim() || '';
      const id     = nombre.toLowerCase().replace(/\s+/g, '-');

      if (favoritos.find(f => f.id === id)) marcadoActivo(btn, true);

      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const idx = favoritos.findIndex(f => f.id === id);
        if (idx === -1) {
          favoritos.push({ id, nombre, img, precio });
          marcadoActivo(btn, true);
          mostrarToast(`❤️ <b>${nombre}</b> agregado a favoritos`, 'success');
        } else {
          favoritos.splice(idx, 1);
          marcadoActivo(btn, false);
          mostrarToast(`💔 <b>${nombre}</b> quitado de favoritos`, 'warn');
          if (document.querySelector('.fav-panel.panel-open')) renderFavPanel();
        }
        guardarFav();
        actualizarContador();
      });
    });
  };

  const marcadoActivo = (btn, activo) => {
    btn.classList.toggle('activo', activo);
    btn.querySelector('i').className = activo ? 'fa-solid fa-heart' : 'fa-regular fa-heart';
    if (activo) btn.querySelector('i').style.animation = 'latido 0.35s ease';
    setTimeout(() => { if (btn.querySelector('i')) btn.querySelector('i').style.animation = ''; }, 400);
  };

  // Panel lateral
  const crearPanelFav = () => {
    const panel = document.createElement('div');
    panel.className = 'fav-panel';
    panel.innerHTML = `
      <div class="fav-panel-header">
        <h3><i class="fa-solid fa-heart"></i> Mis Favoritos
          <span class="fav-panel-count">${favoritos.length}</span>
        </h3>
        <button class="fav-panel-close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="fav-panel-body"></div>
      <div class="fav-panel-footer">
        <button class="btn-limpiar-fav">
          <i class="fa-solid fa-trash"></i> Limpiar todo
        </button>
      </div>`;
    document.body.appendChild(panel);

    const overlay = document.createElement('div');
    overlay.className = 'fav-overlay';
    document.body.appendChild(overlay);

    panel.querySelector('.fav-panel-close').addEventListener('click', cerrarPanel);
    overlay.addEventListener('click', cerrarPanel);
    panel.querySelector('.btn-limpiar-fav').addEventListener('click', () => {
      if (!favoritos.length) return;
      favoritos = [];
      guardarFav();
      actualizarContador();
      renderFavPanel();
      // Desmarcar todas las cards
      document.querySelectorAll('.fav.activo').forEach(b => marcadoActivo(b, false));
      mostrarToast('🗑️ Favoritos eliminados', 'warn');
    });
    return panel;
  };

  const renderFavPanel = () => {
    const panel = document.querySelector('.fav-panel');
    if (!panel) return;

    // Actualizar contador del panel
    const countEl = panel.querySelector('.fav-panel-count');
    if (countEl) countEl.textContent = favoritos.length;

    const panelBody = panel.querySelector('.fav-panel-body');
    if (favoritos.length === 0) {
      panelBody.innerHTML = `
        <div class="fav-vacio">
          <i class="fa-regular fa-heart fa-3x"></i>
          <p>No tienes favoritos aún</p>
          <span>Agrega autos con el botón ❤️</span>
        </div>`;
      return;
    }

    panelBody.innerHTML = favoritos.map(f => `
      <div class="fav-item" data-id="${f.id}">
        <img src="${f.img}" alt="${f.nombre}" onerror="this.src='logochad.webp'">
        <div class="fav-item-info">
          <strong>${f.nombre}</strong>
          <span>${f.precio}</span>
        </div>
        <button class="fav-item-remove" data-id="${f.id}" title="Quitar favorito">
          <i class="fa-solid fa-trash"></i>
        </button>
      </div>`).join('');

    panelBody.querySelectorAll('.fav-item-remove').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.id;
        favoritos = favoritos.filter(f => f.id !== id);
        guardarFav();
        actualizarContador();
        renderFavPanel();
        document.querySelectorAll('.fav').forEach(fb => {
          const n = fb.closest('.card-auto')?.querySelector('h3')?.textContent?.trim() || '';
          if (n.toLowerCase().replace(/\s+/g, '-') === id) marcadoActivo(fb, false);
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

  favIcono?.addEventListener('click', () =>
    document.querySelector('.fav-panel.panel-open') ? cerrarPanel() : abrirPanel());

  iniciarFavBtns();
  actualizarContador();


  /* ═══════════════════════════════════════════
     BUSCADOR + FILTROS + ORDENAR
  ═══════════════════════════════════════════ */
  const inputBuscar = document.querySelector('.search-box input[type="text"]');
  const selectCat   = document.querySelector('.search-box select');
  const btnBuscar   = document.querySelector('.search-box button');
  const secAutos    = document.getElementById('autos');
  const grid        = document.querySelector('.autos-grid');

  // Barra de herramientas extra (ordenar + contador)
  if (grid && !document.querySelector('.toolbar-autos')) {
    const toolbar = document.createElement('div');
    toolbar.className = 'toolbar-autos';
    toolbar.innerHTML = `
      <span class="contador-resultados">Mostrando <strong>0</strong> autos</span>
      <div class="toolbar-right">
        <label>Ordenar:</label>
        <select class="ordenar-select">
          <option value="">— Sin orden —</option>
          <option value="asc">Precio: menor a mayor</option>
          <option value="desc">Precio: mayor a menor</option>
          <option value="az">Nombre A–Z</option>
        </select>
      </div>`;
    secAutos?.querySelector('.section-title')?.after(toolbar);
  }

  const ordenarSelect     = document.querySelector('.ordenar-select');
  const contadorResultados = document.querySelector('.contador-resultados strong');

  const getPrecio = (card) => {
    const txt = card.querySelector('.precio')?.textContent || '0';
    return parseInt(txt.replace(/[^0-9]/g, '')) || 0;
  };

  const filtrarYOrdenar = () => {
    const texto = inputBuscar?.value.toLowerCase().trim() || '';
    const cat   = selectCat?.value || 'Todas las categorías';
    const orden = ordenarSelect?.value || '';
    const cards = [...document.querySelectorAll('.card-auto')];

    const mapaCat = {
      'SUV':        ['suv', 'camioneta', 'premium', '7 pasajeros'],
      'Deportivos': ['camaro', 'sport', 'deportivo', 'km/h', 'turbo', 'hp', 'racer'],
      'Sedán':      ['sedán', 'sedan', 'elegancia'],
    };

    // Filtrar
    let visibles = cards.filter(card => {
      const nombre = card.querySelector('h3')?.textContent.toLowerCase() || '';
      const desc   = card.querySelector('p')?.textContent.toLowerCase() || '';
      const specs  = card.querySelector('.specs')?.textContent.toLowerCase() || '';
      const texto2 = nombre + ' ' + desc + ' ' + specs;

      const okTexto = !texto || texto2.includes(texto);
      let okCat = cat === 'Todas las categorías';
      if (!okCat && mapaCat[cat]) {
        okCat = mapaCat[cat].some(k => texto2.includes(k));
      }
      return okTexto && okCat;
    });

    // Ocultar todas primero
    cards.forEach(c => { c.style.display = 'none'; c.classList.remove('visible'); });

    // Ordenar visibles
    if (orden === 'asc') visibles.sort((a, b) => getPrecio(a) - getPrecio(b));
    if (orden === 'desc') visibles.sort((a, b) => getPrecio(b) - getPrecio(a));
    if (orden === 'az') visibles.sort((a, b) =>
      (a.querySelector('h3')?.textContent || '').localeCompare(b.querySelector('h3')?.textContent || ''));

    // Mostrar con animación escalonada
    visibles.forEach((card, i) => {
      card.style.display = '';
      card.style.animationDelay = `${i * 0.07}s`;
      card.classList.add('visible');
      // Reordenar en el DOM según orden
      grid?.appendChild(card);
    });

    if (contadorResultados) contadorResultados.textContent = visibles.length;

    // Sin resultados
    document.querySelector('.sin-resultados')?.remove();
    if (visibles.length === 0) {
      const p = document.createElement('div');
      p.className = 'sin-resultados';
      p.innerHTML = `<i class="fa-solid fa-car-burst"></i><p>Sin resultados para "<b>${texto || cat}</b>"</p><button onclick="limpiarFiltros()">Limpiar filtros</button>`;
      grid?.appendChild(p);
    }

    if (texto || cat !== 'Todas las categorías') {
      secAutos?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  };

  // Exponer para el botón del mensaje "sin resultados"
  window.limpiarFiltros = () => {
    if (inputBuscar) inputBuscar.value = '';
    if (selectCat)   selectCat.value   = 'Todas las categorías';
    if (ordenarSelect) ordenarSelect.value = '';
    filtrarYOrdenar();
  };

  inputBuscar?.addEventListener('input', filtrarYOrdenar);
  inputBuscar?.addEventListener('keydown', e => { if (e.key === 'Enter') filtrarYOrdenar(); });
  selectCat?.addEventListener('change', filtrarYOrdenar);
  btnBuscar?.addEventListener('click', filtrarYOrdenar);
  ordenarSelect?.addEventListener('change', filtrarYOrdenar);

  // Inicializar contador
  filtrarYOrdenar();


  /* ═══════════════════════════════════════════
     CALCULADORA DE FINANCIAMIENTO
  ═══════════════════════════════════════════ */
  const financeForm   = document.querySelector('.finance-form');
  const inputPrecio   = financeForm?.querySelector('input[placeholder="Precio del auto"]');
  const inputEnganche = financeForm?.querySelector('input[placeholder="Enganche"]');
  const btnCalc       = financeForm?.querySelector('button');
  const resultadoEl   = financeForm?.querySelector('strong');

  // Inyectar selector de plazo y tasa
  if (financeForm && !financeForm.querySelector('.calc-extras')) {
    const extras = document.createElement('div');
    extras.className = 'calc-extras';
    extras.innerHTML = `
      <div class="calc-field">
        <label>Plazo</label>
        <select class="plazo-select">
          <option value="12">12 meses</option>
          <option value="24">24 meses</option>
          <option value="36" selected>36 meses</option>
          <option value="48">48 meses</option>
          <option value="60">60 meses</option>
        </select>
      </div>
      <div class="calc-field">
        <label>Tasa anual</label>
        <select class="tasa-select">
          <option value="0.0099">~11.9% (estándar)</option>
          <option value="0.0083">~9.9% (promocional)</option>
          <option value="0.0125">~14.9% (especial)</option>
        </select>
      </div>`;
    btnCalc?.before(extras);
  }

  const calcularPago = () => {
    const precio   = parseFloat(inputPrecio?.value) || 0;
    const enganche = parseFloat(inputEnganche?.value) || 0;
    const plazo    = parseInt(financeForm?.querySelector('.plazo-select')?.value || 36);
    const tasa     = parseFloat(financeForm?.querySelector('.tasa-select')?.value || 0.0099);

    if (precio <= 0) { mostrarToast('⚠️ Ingresa el precio del auto', 'warn'); inputPrecio?.focus(); return; }
    if (enganche < 0) { mostrarToast('⚠️ El enganche no puede ser negativo', 'warn'); return; }
    if (enganche >= precio) { mostrarToast('⚠️ El enganche no puede superar el precio total', 'warn'); return; }

    const monto = precio - enganche;
    const pago  = monto * (tasa * Math.pow(1 + tasa, plazo)) / (Math.pow(1 + tasa, plazo) - 1);
    const total = pago * plazo;
    const intereses = total - monto;

    if (resultadoEl) resultadoEl.textContent = `$${Math.round(pago).toLocaleString('es-MX')} MXN`;

    // Desglose
    let desglose = financeForm.querySelector('.desglose');
    if (!desglose) {
      desglose = document.createElement('div');
      desglose.className = 'desglose';
      resultadoEl?.closest('p')?.after(desglose);
    }
    desglose.innerHTML = `
      <div class="desglose-item"><span>Precio del auto</span><strong>$${precio.toLocaleString('es-MX')}</strong></div>
      <div class="desglose-item"><span>Enganche</span><strong>$${enganche.toLocaleString('es-MX')}</strong></div>
      <div class="desglose-item"><span>Monto financiado</span><strong>$${Math.round(monto).toLocaleString('es-MX')}</strong></div>
      <div class="desglose-item"><span>Plazo</span><strong>${plazo} meses</strong></div>
      <div class="desglose-item destaque"><span>Pago mensual</span><strong>$${Math.round(pago).toLocaleString('es-MX')} MXN</strong></div>
      <div class="desglose-item"><span>Total a pagar</span><strong>$${Math.round(total).toLocaleString('es-MX')}</strong></div>
      <div class="desglose-item"><span>Total intereses</span><strong>$${Math.round(intereses).toLocaleString('es-MX')}</strong></div>
      <div class="desglose-item"><span>Tasa mensual</span><strong>${(tasa * 100).toFixed(2)}%</strong></div>`;

    mostrarToast('✅ Cálculo listo', 'success');
    desglose.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  };

  btnCalc?.addEventListener('click', calcularPago);
  [inputPrecio, inputEnganche].forEach(inp =>
    inp?.addEventListener('keydown', e => { if (e.key === 'Enter') calcularPago(); }));


  /* ═══════════════════════════════════════════
     ANIMACIONES SCROLL — IntersectionObserver
  ═══════════════════════════════════════════ */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  // Observar elementos que quieres animar al scroll
  document.querySelectorAll(
    '.beneficio, .paso, .card-auto, .finance-box, .section-title, .cta-content'
  ).forEach(el => {
    el.classList.add('fade-in-up');
    observer.observe(el);
  });

  // Números animados en pasos (1, 2, 3, 4)
  const stepObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('paso-visible');
        stepObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.paso').forEach((p, i) => {
    p.style.transitionDelay = `${i * 0.12}s`;
    stepObserver.observe(p);
  });


  /* ═══════════════════════════════════════════
     BOTÓN "VOLVER ARRIBA"
  ═══════════════════════════════════════════ */
  const btnTop = document.createElement('button');
  btnTop.className  = 'btn-top';
  btnTop.innerHTML  = '<i class="fa-solid fa-chevron-up"></i>';
  btnTop.title      = 'Volver arriba';
  btnTop.setAttribute('aria-label', 'Volver arriba');
  document.body.appendChild(btnTop);

  window.addEventListener('scroll', () => {
    btnTop.classList.toggle('btn-top-visible', window.scrollY > 400);
  });
  btnTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));


  /* ═══════════════════════════════════════════
     VISTA PREVIA DE CARD AL HOVER (tooltip specs)
  ═══════════════════════════════════════════ */
  document.querySelectorAll('.card-auto').forEach(card => {
    card.addEventListener('mouseenter', () => card.classList.add('card-hover'));
    card.addEventListener('mouseleave', () => card.classList.remove('card-hover'));
  });


  /* ═══════════════════════════════════════════
     ESTILOS DINÁMICOS
  ═══════════════════════════════════════════ */
  const css = document.createElement('style');
  css.textContent = `

    /* ── Base ── */
    body.no-scroll { overflow: hidden; }

    .header.scrolled {
      box-shadow: 0 4px 24px rgba(0,0,0,0.35);
      background: rgba(8,8,8,0.97) !important;
      backdrop-filter: blur(12px);
    }

    /* ── Hamburguesa ── */
    .hamburger { cursor: pointer; display: flex; flex-direction: column; gap: 6px; padding: 4px; }
    .hamburger span {
      display: block; width: 24px; height: 2px;
      background: currentColor;
      transition: transform 0.35s ease, opacity 0.25s;
      transform-origin: center;
    }
    .hamburger.activo span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
    .hamburger.activo span:nth-child(2) { opacity: 0; }
    .hamburger.activo span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

    @media (max-width: 768px) {
      .nav {
        position: fixed; top: 0; right: -100%;
        width: min(320px, 85vw); height: 100dvh;
        background: #090909; padding: 80px 24px 40px;
        transition: right 0.4s cubic-bezier(0.4,0,0.2,1);
        overflow-y: auto; z-index: 999;
        box-shadow: -4px 0 30px rgba(0,0,0,0.5);
        border-left: 1px solid rgba(255,255,255,0.06);
      }
      .nav.nav-open { right: 0; }
      .nav ul { flex-direction: column; gap: 0; }
      .nav ul li { border-bottom: 1px solid rgba(255,255,255,0.07); }
      .nav ul li a {
        display: flex; align-items: center; justify-content: space-between;
        padding: 14px 0; font-size: 15px;
      }
      .nav .dropdown {
        max-height: 0; overflow: hidden;
        transition: max-height 0.35s ease;
        background: rgba(255,255,255,0.04);
        border-radius: 8px; margin-bottom: 8px;
      }
      .nav .dropdown li a { padding: 10px 16px; font-size: 13px; }
    }

    /* ── Botón .fav ── */
    .card-img { position: relative; overflow: hidden; }
    .fav {
      position: absolute; top: 10px; right: 10px;
      background: rgba(0,0,0,0.6); border: none; border-radius: 50%;
      width: 38px; height: 38px;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; font-size: 16px; color: #fff;
      transition: background 0.25s, transform 0.2s;
      backdrop-filter: blur(6px);
      z-index: 2;
    }
    .fav:hover { background: rgba(230,57,70,0.85); transform: scale(1.12); }
    .fav.activo { background: #e63946; }
    @keyframes latido {
      0%   { transform: scale(1); }
      50%  { transform: scale(1.5); }
      100% { transform: scale(1); }
    }

    /* ── Favoritos panel ── */
    .fav-overlay {
      position: fixed; inset: 0; background: rgba(0,0,0,0.6);
      z-index: 1099; opacity: 0; pointer-events: none;
      transition: opacity 0.3s; backdrop-filter: blur(4px);
    }
    .fav-overlay.overlay-visible { opacity: 1; pointer-events: all; }

    .fav-panel {
      position: fixed; top: 0; right: -420px;
      width: min(400px, 94vw); height: 100dvh;
      background: #111; z-index: 1100;
      display: flex; flex-direction: column;
      transition: right 0.4s cubic-bezier(0.4,0,0.2,1);
      box-shadow: -8px 0 50px rgba(0,0,0,0.7);
    }
    .fav-panel.panel-open { right: 0; }

    .fav-panel-header {
      display: flex; align-items: center; justify-content: space-between;
      padding: 20px 24px;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      background: #0d0d0d;
    }
    .fav-panel-header h3 {
      font-size: 17px; font-weight: 600; color: #c9a84c;
      display: flex; align-items: center; gap: 8px;
    }
    .fav-panel-count {
      background: #e63946; color: #fff; font-size: 11px;
      font-weight: 700; min-width: 20px; height: 20px;
      border-radius: 10px; display: inline-flex;
      align-items: center; justify-content: center; padding: 0 5px;
    }
    .fav-panel-close {
      background: none; border: none; color: #aaa;
      font-size: 20px; cursor: pointer;
      transition: color 0.2s, transform 0.2s;
    }
    .fav-panel-close:hover { color: #fff; transform: rotate(90deg); }

    .fav-panel-body {
      flex: 1; overflow-y: auto; padding: 16px;
      display: flex; flex-direction: column; gap: 10px;
    }
    .fav-panel-footer {
      padding: 16px 20px;
      border-top: 1px solid rgba(255,255,255,0.08);
    }
    .btn-limpiar-fav {
      width: 100%; padding: 10px;
      background: rgba(230,57,70,0.12);
      border: 1px solid rgba(230,57,70,0.3);
      color: #e63946; border-radius: 8px;
      cursor: pointer; font-size: 13px;
      transition: background 0.2s;
    }
    .btn-limpiar-fav:hover { background: rgba(230,57,70,0.25); }

    .fav-item {
      display: flex; align-items: center; gap: 12px;
      background: rgba(255,255,255,0.05); border-radius: 10px;
      padding: 10px; transition: background 0.2s;
      animation: slideIn 0.3s ease;
    }
    .fav-item:hover { background: rgba(255,255,255,0.09); }
    .fav-item img {
      width: 68px; height: 50px;
      object-fit: cover; border-radius: 7px; flex-shrink: 0;
    }
    .fav-item-info { flex: 1; }
    .fav-item-info strong { display: block; font-size: 13px; color: #eee; }
    .fav-item-info span  { font-size: 12px; color: #c9a84c; }
    .fav-item-remove {
      background: none; border: none; color: #e63946;
      font-size: 14px; cursor: pointer; opacity: 0.55;
      transition: opacity 0.2s, transform 0.2s;
    }
    .fav-item-remove:hover { opacity: 1; transform: scale(1.2); }

    .fav-vacio {
      flex: 1; display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      gap: 10px; color: #555; padding: 40px 0; text-align: center;
    }
    .fav-vacio p    { font-size: 15px; color: #777; }
    .fav-vacio span { font-size: 12px; color: #444; }

    @keyframes slideIn {
      from { opacity: 0; transform: translateX(20px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    /* ── Favoritos icono ── */
    .favoritos-icono { position: relative; }
    .favoritos-icono span {
      display: none; position: absolute; top: -6px; right: -8px;
      background: #e63946; color: #fff; font-size: 10px; font-weight: 700;
      width: 18px; height: 18px; border-radius: 50%;
      align-items: center; justify-content: center;
    }

    /* ── Toast ── */
    .careout-toast {
      position: fixed; bottom: 28px; left: 50%;
      transform: translateX(-50%) translateY(30px);
      background: #1a1a1a; color: #fff;
      padding: 12px 24px; border-radius: 50px;
      font-size: 14px; font-weight: 500;
      box-shadow: 0 8px 32px rgba(0,0,0,0.4);
      border: 1px solid rgba(255,255,255,0.08);
      z-index: 9999; opacity: 0;
      transition: opacity 0.3s, transform 0.3s;
      pointer-events: none; white-space: nowrap;
    }
    .careout-toast.toast-visible { opacity: 1; transform: translateX(-50%) translateY(0); }
    .careout-toast.toast-success { border-color: rgba(39,174,96,0.4); }
    .careout-toast.toast-warn    { border-color: rgba(230,57,70,0.4); }

    /* ── Toolbar autos ── */
    .toolbar-autos {
      display: flex; align-items: center; justify-content: space-between;
      flex-wrap: wrap; gap: 12px;
      padding: 14px 20px; margin-bottom: 20px;
      background: rgba(255,255,255,0.04);
      border-radius: 10px;
      border: 1px solid rgba(255,255,255,0.07);
    }
    .contador-resultados { font-size: 14px; color: #888; }
    .contador-resultados strong { color: #c9a84c; font-size: 16px; }
    .toolbar-right { display: flex; align-items: center; gap: 10px; }
    .toolbar-right label { font-size: 13px; color: #888; }
    .ordenar-select {
      padding: 8px 12px; border-radius: 8px;
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.1);
      color: inherit; font-size: 13px; cursor: pointer;
    }
    .ordenar-select:focus { outline: none; border-color: #c9a84c; }

    /* ── Sin resultados ── */
    .sin-resultados {
      grid-column: 1 / -1; text-align: center;
      padding: 50px 20px; color: #666;
      display: flex; flex-direction: column; align-items: center; gap: 14px;
    }
    .sin-resultados i  { font-size: 3rem; color: #333; }
    .sin-resultados p  { font-size: 16px; }
    .sin-resultados button {
      padding: 10px 24px; border-radius: 50px;
      background: #c9a84c; color: #000; border: none;
      cursor: pointer; font-weight: 600; font-size: 13px;
      transition: opacity 0.2s;
    }
    .sin-resultados button:hover { opacity: 0.85; }

    /* ── Cards animadas ── */
    .card-auto {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-auto.card-hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 40px rgba(0,0,0,0.4);
    }
    .card-auto.fade-in-up {
      opacity: 0; transform: translateY(24px);
      transition: opacity 0.55s ease, transform 0.55s ease;
    }
    .card-auto.visible {
      opacity: 1; transform: translateY(0);
    }
    @keyframes fadeInCard {
      from { opacity: 0; transform: translateY(16px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Animaciones scroll genéricas ── */
    .fade-in-up {
      opacity: 0; transform: translateY(28px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .fade-in-up.visible {
      opacity: 1; transform: translateY(0);
    }

    /* ── Pasos ── */
    .paso {
      opacity: 0; transform: translateY(30px) scale(0.97);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .paso.paso-visible {
      opacity: 1; transform: translateY(0) scale(1);
    }

    /* ── Calculadora extras ── */
    .calc-extras {
      display: grid; grid-template-columns: 1fr 1fr; gap: 10px;
      margin-bottom: 2px;
    }
    .calc-field { display: flex; flex-direction: column; gap: 5px; }
    .calc-field label { font-size: 11px; color: #888; text-transform: uppercase; letter-spacing: 0.5px; }
    .plazo-select, .tasa-select {
      padding: 10px 12px; border-radius: 8px;
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.1);
      color: inherit; font-size: 13px; cursor: pointer;
    }
    .plazo-select:focus, .tasa-select:focus { outline: none; border-color: #c9a84c; }

    .desglose {
      display: grid; grid-template-columns: 1fr 1fr; gap: 10px;
      margin-top: 14px; padding: 16px;
      background: rgba(255,255,255,0.04);
      border-radius: 12px;
      border: 1px solid rgba(201,168,76,0.2);
      animation: fadeInCard 0.4s ease;
    }
    .desglose-item { display: flex; flex-direction: column; gap: 3px; }
    .desglose-item span   { font-size: 11px; color: #777; }
    .desglose-item strong { font-size: 13px; color: #ddd; }
    .desglose-item.destaque {
      grid-column: 1 / -1; background: rgba(201,168,76,0.1);
      border-radius: 8px; padding: 10px 12px;
      border: 1px solid rgba(201,168,76,0.25);
    }
    .desglose-item.destaque strong { font-size: 20px; color: #c9a84c; }

    /* ── Botón volver arriba ── */
    .btn-top {
      position: fixed; bottom: 28px; right: 24px;
      width: 44px; height: 44px; border-radius: 50%;
      background: #c9a84c; color: #000; border: none;
      font-size: 16px; cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 20px rgba(201,168,76,0.4);
      opacity: 0; pointer-events: none;
      transform: translateY(12px);
      transition: opacity 0.3s, transform 0.3s;
      z-index: 999;
    }
    .btn-top.btn-top-visible { opacity: 1; pointer-events: all; transform: translateY(0); }
    .btn-top:hover { background: #e0bb60; transform: translateY(-3px) !important; }

    @media (max-width: 480px) {
      .calc-extras { grid-template-columns: 1fr; }
      .desglose    { grid-template-columns: 1fr; }
      .toolbar-autos { flex-direction: column; align-items: flex-start; }
    }
  `;
  document.head.appendChild(css);

}); // fin DOMContentLoaded