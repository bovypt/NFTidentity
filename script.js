/* const header = document.getElementById("header");
const siteName = document.getElementById("siteName");

window.addEventListener("scroll", function () {
  if (window.scrollY > 0) {
    siteName.style.position = "fixed";
    siteName.style.top = "0";
    siteName.style.right = "0";
    header.style.display = "none";
  } else {
    siteName.style.position = "";
    siteName.style.top = "";
    siteName.style.right = "";
    header.style.display = "";
  }
}); */

function initTyped() {
  new Typed(".ChangeText", {
    strings: ["Vos achats ", "Votre santé", "Votre identité"],
    loop: true,
    typeSpeed: 100,
    backSpeed: 80,
    backDelay: 1500,
  });
}

initTyped();
