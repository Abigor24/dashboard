let menuToggle = document.querySelector("#menuToggle");
let navMenu = document.querySelector(".nav");

menuToggle.addEventListener('click', function() {
  navMenu.classList.toggle('active')
})