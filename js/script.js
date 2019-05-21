let sidenav = document.getElementById("sidenav");


function openNav() {
    sidenav.classList.add('open');
    sidenav.classList.remove('close');
    sidenav.style.transition = "0.5s";
}


function closeNav() {
    sidenav.style.transition = "0.5s";
    sidenav.classList.remove('open');
    sidenav.classList.remove('open-mq');
    sidenav.classList.add('close');

}


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
