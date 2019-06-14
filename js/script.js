


// FEATURED CAROUSEL

const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
console.log(slides);

const nextButton = document.querySelector('.carousel-button-right');
const prevButton = document.querySelector('.carousel-button-left');

const slideWidth = slides[0].getBoundingClientRect().width;



// arrange the slides next to one another

const setSlidePosition = (slide, index) => {
     slide.style.left = slideWidth * index + 'px';
}

slides.forEach(setSlidePosition);


const moveToSlide = (track, currentSlide, targetSlide) => {

    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';

    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');

}

//when I click left, moves to the left

prevButton.addEventListener('click', e => {
     const currentSlide = track.querySelector('.current-slide');
   const  prevSlide = currentSlide.previousElementSibling;

    moveToSlide(track, currentSlide, prevSlide);

});


// when I click right, it goes to the right

nextButton.addEventListener('click', e => {

    const currentSlide = track.querySelector('.current-slide');
   const  nextSlide = currentSlide.nextElementSibling;

    moveToSlide(track, currentSlide, nextSlide);
});



// HoW SECTION CAROUSEL

var timer = null;
var slideIndex = 0;
function currentSlide(n) {
    clearTimeout(timer);
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;

  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
    slideIndex++; //it's incrementing (making them move)
    if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
    timer = setTimeout(showSlides, 3000);

}

showSlides(slideIndex);




$(window).on('load',function(){
    $('.preloader').addClass('complete');

 });


// When the user scrolls the page, execute scrollProgressBar
window.onscroll = function() {
    scrollProgressBar()
};

function scrollProgressBar() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
};



// BURGER MENU

const hamburger = document.querySelector('#menuToggle');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelector("ul");
const closeInput = document.querySelector("input");

hamburger.addEventListener('click',() => {
  navLinks.classList.toggle("open");
    hamburger.classList.toggle('fixed');


links.addEventListener('click',() => {
     navLinks.classList.remove("open");
    hamburger.classList.remove('fixed');
    closeInput.checked = false;

});


    });

const readMore = document.querySelector('.carousel-slide');
const hover = document.querySelector('.read-more');
readMore.addEventListener("mouseover",showReadMore => {
    hover.style.opacity = 1;
});

readMore.addEventListener("mouseout",showReadMore => {
    hover.style.opacity = 0;

});


//updates the current entry in the session history to have the gi
const submitButton = document.querySelector('.btn-form');

submitButton.addEventListener('click', ()=> {
  document.ready ( function() {
        window.history.replaceState( null, null, window.location.href = '#collaborate' );

    })

});


