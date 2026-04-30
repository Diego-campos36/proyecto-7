const btn = document.getElementById("miguel-btm");
const menu = document.getElementById("carros-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("active");
});