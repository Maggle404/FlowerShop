
const loginButton = document.getElementById("loginButton");
const loginPopup = document.getElementById("loginPopup");
loginPopup.style.display= "none";
loginButton.addEventListener("click", function (event) {
  if (loginPopup.style.display === "none" || loginPopup.style.display === "") {
    loginPopup.style.display = "block";
  } else {
    loginPopup.style.display = "none";
  }
});

const closePopup = document.getElementById("closePopup");
closePopup.addEventListener("click", function () {
  loginPopup.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === loginPopup) {
    loginPopup.style.display = "none";
  }
});
