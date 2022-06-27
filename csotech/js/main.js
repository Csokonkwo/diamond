var menu_btn = document.getElementById("menu-btn");
var sub_menu_btn = document.getElementById('sub-menu-btn');
var main = document.querySelector('main');

menu_btn.addEventListener("click", function(){
    document.getElementById("nav-bar").classList.toggle("active");
});

sub_menu_btn.addEventListener("click", function(){
    document.getElementById("nav-bar").classList.toggle("active");
});

//FOR MAIN TO REMOVE CLASSLIST

main.addEventListener("click", function(){
    document.getElementById("nav-bar").classList.remove("active");
});


//WINDOW TO ADD THE STICKY CLASS ON SCROLL

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


//Ajax STARTS FROM HERE



