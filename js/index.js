"use strict";
const navBtn = document.getElementById("navToggler");
const mobileLinksDiv = document.getElementById("mobileLinks");
let isNavOpen = false;

// Js function to close and open the navbar in mobile screens
navBtn.addEventListener("click", () => {
  if (isNavOpen) {
    mobileLinksDiv.style.display = "none";
    isNavOpen = !isNavOpen;
  } else {
    mobileLinksDiv.style.display = "flex";
    isNavOpen = !isNavOpen;
  }
});
