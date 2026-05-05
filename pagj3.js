const botonLeo = document.getElementById("leo-btm");
const carros2Menu = document.getElementById("carros2-menu");
const enlacesMenu = carros2Menu.querySelectorAll("a");

botonLeo.addEventListener("click", function() {
    carros2Menu.classList.toggle("active");
});

enlacesMenu.forEach(function(enlace) {
    enlace.addEventListener("click", function() {
        carros2Menu.classList.remove("active");
    });
});

document.addEventListener("click", function(event) {
    if (!carros2Menu.contains(event.target) && event.target !== botonLeo) {
        carros2Menu.classList.remove("active");
    }
});
document.querySelectorAll(".btn-leer").forEach(function (btn) {

  btn.addEventListener("click", function () {

 var contenedor = btn.closest(".texto, .texto2");

    var extra = contenedor.querySelector(".extra");
    var puntos = contenedor.querySelector(".puntos");
    var btnVer = contenedor.querySelector(".btn-ver");

    var abierto = extra.classList.contains("activo");
  if (abierto) {
    extra.classList.remove("activo");
    puntos.style.display = "inline";
    btn.innerText = "Leer más";
    btnVer.style.display = "none";
  } else {
    extra.classList.add("activo");
    puntos.style.display = "none";
    btn.innerText = "Leer menos";
    btnVer.style.display = "inline-block";
  }
});
});
