const burger = document.querySelector(".nav-burger");
const navul = document.querySelector(".nav-menu");

burger.addEventListener("click", () =>{
  navul.classList.toggle("nav-menu_visible");  
});

const InputNum = document.getElementById("Input");
InputNum.addEventListener("keypress", (e)=>{
  const expre = /[0-9]/;
  if(!expre.test(e,key)) e.preventDefault();
});