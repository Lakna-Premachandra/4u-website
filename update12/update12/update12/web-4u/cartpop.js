const order = document.querySelector("#add-to-cart");
          
const popup = document.querySelector(".confirmation");
const close = document.querySelector(".bx-x");
const body=document.querySelector("body")



order.addEventListener("click", mobileMenu);
close.addEventListener("click", closemenu);
  
function mobileMenu() {
    popup.classList.toggle("active-popup");
    body.style.overflow="hidden";
  

}

function closemenu(){

    popup.classList.remove("active-popup")
    body.style.overflowY="auto";

}

 





