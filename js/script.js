const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelector('.nav-links li');


hamburger.addEventListener('click',() => {
  navLinks.classList.toggle("open");
    hamburger.classList.toggle("fixed");

});




/*
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("sidenav").style.top = "0";
  } else {
    document.getElementById("sidenav").style.top = "-90px";
  }
  prevScrollpos = currentScrollPos;
}
*/



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


// when I click right, it does to the right

nextButton.addEventListener('click', e => {

    const currentSlide = track.querySelector('.current-slide');
   const  nextSlide = currentSlide.nextElementSibling;

    moveToSlide(track, currentSlide, nextSlide);
});




let sliderImages = document.querySelectorAll('.slide'),
         arrowRight = document.querySelector('.how-next-button'),
        current = 0;


// Clear all images

function reset(){
    for(let i = 0; i < sliderImages.length; i++){
        sliderImages[i].style.display = 'none';

    }
}

function startSlide(){
    reset();
    sliderImages[0].style.display = 'block';
}

// Show prev

function slideRight(){
    reset();
    sliderImages[current + 1].style.display = 'block';
    current++;
}

// Right arrow click

arrowRight.addEventListener('click', function(){
    if (current === sliderImages.length -1){
        current = -1;
    }
    slideRight();
})

startSlide();


let hoverNext = document.querySelector('.how-next-button');

hoverNext.addEventListener('hover',a =>{

})



