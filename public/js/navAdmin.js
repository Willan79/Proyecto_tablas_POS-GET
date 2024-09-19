const burger2 = document.querySelector(".nav-burger2");
const navul2 = document.querySelector(".lateral");

burger2.addEventListener("click", () =>{
  navul2.classList.toggle("lateral_visible");  
});
// Función para ocultar el mensaje de eliminación después de 3 segundos
window.onload = function() {
  const mensaje = document.getElementById("mensaje");
  if (mensaje) {
    setTimeout(function() {
      mensaje.style.display = "none";
    }, 3000); // Ocultar después de 3 segundos
  }
};