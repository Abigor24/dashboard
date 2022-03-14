let menuToggle = document.querySelector("#menuToggle");
let navMenu = document.querySelector(".nav");

menuToggle.addEventListener('click', function() {
  navMenu.classList.toggle('active')
});

let menuButton = document.querySelector("#menu-button");
let dropMenu = document.querySelector("#drop-menu");
menuButton.addEventListener('click', function() {
  dropMenu.classList.toggle('active');
});