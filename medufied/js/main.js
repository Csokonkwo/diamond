function menuBtn(){
  document.getElementById("nav-bar").classList.toggle('active');
  document.getElementById("nav-li").classList.toggle('nav-li');
    
};

function mainBtn(){
  document.getElementById("nav-bar").classList.remove('active');
  document.getElementById("nav-li").classList.remove('nav-li');
}


window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.querySelector("header");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.className="sticky"
  } 
    if(window.scrollY ==0){
        
        navbar.className= ""
    }
    
}