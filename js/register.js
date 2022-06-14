/**
 * Register Page JavaScript Logic
 */

const passwordField = document.getElementById("pswd");

const validatePassword = (element) => {
  // regex to check if element contains special characters
  const regularExpression =
    /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

  return element.length >= 8 && regularExpression.test(element);
};

// password fill event handler
passwordField.addEventListener("change", (e) => {
  passwordField.style.border = `2px solid ${
    validatePassword(e.target.value) ? "green" : "red"
  }`;
});
