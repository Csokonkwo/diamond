$(document).ready(function(){
    
    $('.menu-btn').click(function(){
        $('.nav').toggleClass('showing');
        $('#menu-btn1').toggleClass('showing-btn');
        
    }); 
    
    $("main").click(function(){
        $(".nav").removeClass("showing"); 
        $('#menu-btn1').removeClass('showing-btn')
        
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

