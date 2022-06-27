function responsiveBar(){
    document.getElementById("navbar").classList.toggle('active');
    
    //changes the opacity as navbar comes out
    document.getElementById("navli").classList.toggle('navli');
    
    //changes the width of first hamburger button
    document.getElementById("activo1").classList.toggle('activo1');
    
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

function con(){
    var conHide = document.querySelector("#con");
    conHide.classList.toggle('show');
}