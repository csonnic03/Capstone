//h1
document.querySelectorAll("h1")[0].style.color = "gray";
document.querySelectorAll("h1")[0].style.textAlign = "center";

//Paragraph Tag
document.querySelectorAll("p")[0].style.color = "lightgray";
document.querySelectorAll("p")[0].style.textAlign = "center";

//Footer
// Set background and text color for the Footer
document.querySelectorAll("footer")[0].style.backgroundColor = "black";
document.querySelectorAll("footer")[0].style.color = "white";

// Set the Footer Element to be center
document.querySelectorAll("footer")[0].style.textAlign = "center";

// Slideshow
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}