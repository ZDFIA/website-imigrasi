function toggleMenu() {
  const nav = document.querySelector(".nav.nav-button");
  const hamburger = document.querySelector(".hamburger");
  const header = document.querySelector(".header");

  nav.classList.toggle("show");
  hamburger.classList.toggle("active");
  header.classList.toggle("menu-open");
}
