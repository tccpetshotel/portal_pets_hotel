<?php include_once('./partials/headerhome.php'); ?>  

<body background="assets/images/background.jpg">
    <!-- Slideshow container -->
<div class="slideshow-container " style="max-width: 100vw !important">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade" style="width: 100%"> 
  <div class="numbertext">1 / 3</div>
  <img src="assets/images/puppy.jpg" height = "750" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/images/cat.jpg" height = "750" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/images/dog.jpg" height = "750" width="100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>


<button onclick="window.location.href = 'assets/images/tcc.mp4'" class="button"><span>Descubra mais</span></button>

<script>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>


