'use strict';


const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navbarToggler = document.querySelector("[data-nav-toggler]");

navbarToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function () {
    navbar.classList.remove("active");
    navbarToggler.classList.remove("active");
  });
}



/**
 * search toggle
 */

const searchTogglers = document.querySelectorAll("[data-search-toggler]");
const searchBox = document.querySelector("[data-search-box]");

for (let i = 0; i < searchTogglers.length; i++) {
  searchTogglers[i].addEventListener("click", function () {
    searchBox.classList.toggle("active");
  });
}



/**
 * header
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");
const logo = document.querySelector("#logo");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 200) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
    logo.setAttribute("style", "width: 6.5%; top: 0vw; left: 3.5vw;");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
    logo.setAttribute("style", "width:10%; top: -2.5vw; left: 2.5vw;");
  }
});