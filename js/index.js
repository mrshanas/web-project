"use strict";

let isNavOpen = false;

/**
 * Navbar for All pages Logic
 */

// Js function to close and open the navbar in mobile screens
document.getElementById("navToggler").addEventListener("click", () => {
  document.getElementById("mobileLinks").style.display = isNavOpen
    ? "none"
    : "flex";
  isNavOpen = !isNavOpen;
});
