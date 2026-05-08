document
.getElementById("loginForm")
.addEventListener("submit", function(e){

    e.preventDefault();

    const usuario = document.getElementById("usuario").value;

    const password = document.getElementById("password").value;

    const mensaje = document.getElementById("mensaje");

    if(usuario === "admin" && password === "1234"){

        mensaje.textContent = "Login correcto";
        mensaje.style.color = "limegreen";

        setTimeout(() => {

            window.location.href = "index.html";

        }, 1000);

    } 
    
    else {

        mensaje.textContent = "Usuario o contraseña incorrectos";
        mensaje.style.color = "red";

    }

});


function mensaje(e){
    e.preventDefault();
    alert("Mensaje enviado ");
}