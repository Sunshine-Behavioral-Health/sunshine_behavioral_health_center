var slideIndex = 1;
showSlides (slideIndex);

function plusSlides (n) {

  showSlides ((slideIndex += n));
  console.log("finished PlusSlide()")

}

function currentSlide (n) {
  showSlides ((slideIndex = n));
  console.log("finished currentSlide()")

}

function showSlides (n) {
  let i;
  let slides = document.getElementsByClassName ('carousel-slide');
  let dots = document.getElementsByClassName ('dot');
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace (' active', '');
  }
  slides[slideIndex - 1].style.display = 'block';
  dots[slideIndex - 1].className += ' active';

  console.log("finished showSlides()")
}

console.log("All of carousel.js has run")