const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelector("ul");

hamburger.addEventListener('click',() => {
  navLinks.classList.toggle("open");
    hamburger.classList.toggle("fixed");
});

links.addEventListener('click',() => {

    navLinks.classList.toggle("open");                 hamburger.classList.toggle("fixed");
});




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

});


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


// Slide down animations

