
var nav = document.querySelector("nav");
var main = document.querySelector("main");
var footer = document.querySelector("footer");

menu_btn.addEventListener("click", function(){
    nav.classList.toggle("showing");
});

main.addEventListener("click", function(){
    nav.classList.remove("showing");
});

footer.addEventListener("click", function(){
  nav.classList.remove("showing");
});



//Scroll command
window.onscroll = function() {myFunction()};

// Get the navbar
var header = document.querySelector(".nav");
var headerClassName = header.className;
var mainHeader = document.querySelector("header");
var mainHeaderClassName = mainHeader.className;

var sticky = header.offsetTop;

var counterPos = document.querySelector(".counter_target");
var counterSticky = counterPos.offsetTop;

//Scroll command
window.onscroll = function() {myFunction()};


