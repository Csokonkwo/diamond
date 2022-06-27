$(document).ready(function(){
    
  //All Menu bar effects
  
  $("#menu-btn, #sub-menu-btn").click(function(){
      $("aside").toggleClass("showing"); 
  });
  
  //Removes nav-bar on main click
  
  $("main, footer").click(function(){
      $("aside").removeClass("showing");
      
  });
  
  
   $("#where a:eq(0)").click(function(){
      $('#where p:eq(0)').fadeToggle(100);
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