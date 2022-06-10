"use strict";

let isNavOpen = false;

// Js function to close and open the navbar in mobile screens
document.getElementById("navToggler").addEventListener("click", () => {
  document.getElementById("mobileLinks").style.display = isNavOpen
    ? "none"
    : "flex";
  isNavOpen = !isNavOpen;
});
