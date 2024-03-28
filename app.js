// function toggleMenu() {
//     var menu = document.getElementById("menu");
//     menu.classList.toggle("show");
//   }

//   function logout() {
//     alert("Logging out...");
//   }


// ----Login Toggle----
function toggleMenu() {
  var menu = document.getElementById("menu");
  menu.classList.toggle("show");
}


// ----AboutUs Slides----
var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000);
}

showSlides();


//Fixed Nav Bar
window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar');
  if (window.scrollY > 0) {
  navbar.classList.add('navbar-scrolled');
  } else {
  navbar.classList.remove('navbar-scrolled');
  }
});