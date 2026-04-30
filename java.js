
const btn = document.getElementById("miguel-btm");
const menu = document.getElementById("carros-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("active");
});
const form = document.getElementById("registroForm");

form.addEventListener("submit", function(e){
    e.preventDefault();

    // Validación automática tipo navegador
    if(!form.checkValidity()){
        form.reportValidity();
        return;
    }

    const pass = document.getElementById("password").value;
    const confirm = document.getElementById("confirmar").value;

    if(pass !== confirm){
        alert("Las contraseñas no coinciden");
        return;
    }

    // Validar edad (opcional)
    const fecha = document.getElementById("fecha").value;
    const hoy = new Date();
    const nacimiento = new Date(fecha);
    const edad = hoy.getFullYear() - nacimiento.getFullYear();

    if(edad < 18){
        alert("Debes ser mayor de 18 años");
        return;
    }

    // ✅ Mensaje final
    document.getElementById("mensaje").style.display = "block";

    form.reset();
});
fetch("header.html")
  .then(res => res.text())
  .then(data => {
    document.getElementById("header").innerHTML = data;

    // activar botón hamburguesa después de cargar
    const btn = document.getElementById("btn-menu");
    const menu = document.getElementById("menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("active");
    });
});