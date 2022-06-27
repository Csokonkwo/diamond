$(document).ready(function(){
    $('.menu-btn').click(function(){
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
    });
    
    
    $('.slider img:gt(0)').hide();
	setInterval(function(){$('.slider :first-child').fadeOut(1500).next('img').fadeIn(1500).end().appendTo('.slider');}, 5000);
    
    
    
    $("main").click(function(){
        $(".nav").removeClass("showing"); 
        
    });
    
     
});

    
window.onscroll = function() {myFunction()};

// Get the navbar
var header = document.querySelector("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.scrollY >= sticky) {
    header.className="sticky"
  } 
    if(window.scrollY ==0){
        
       header.className= ""
    }
    
};


function allLoaded(){

}