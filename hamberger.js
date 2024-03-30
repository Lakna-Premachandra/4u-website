const hamburger = document.querySelector(".hamburger");
const list = document.querySelector(".header-sub-nav");
const overlay = document.querySelector(".overlay");

hamburger.addEventListener("click", toggleMenu);

function toggleMenu(e) {
  e.stopPropagation(); // Prevent click event from reaching the document

  list.classList.toggle("active");
  overlay.classList.toggle("active");

  if (list.classList.contains("active")) {
    overlay.style.pointerEvents = "auto"; // Make the overlay clickable when the menu is active
  } else {
    overlay.style.pointerEvents = "none"; // Ensure the overlay is unclickable when the menu is closed
  }
}

document.addEventListener("click", function(e) {
  if (!list.contains(e.target) && !hamburger.contains(e.target)) {
    list.classList.remove("active");
    overlay.classList.remove("active");
    overlay.style.pointerEvents = "none"; // Ensure the overlay is unclickable when the menu is closed
  }
});