let acc = document.getElementsByClassName("accordion");
let i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

// Header scroll behavior
window.addEventListener("scroll", () => {
  const navbar = document.querySelector(".header");
  if (window.scrollY > 150) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

let fullYear = document.getElementById("fullYear");
fullYear.innerHTML = new Date().getFullYear();
