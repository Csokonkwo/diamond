var loadingScreen = document.querySelector("#preloader");
loadingScreen.style.display = "block";
 
window.onload = function(){
    loadingScreen.style.display = "none";
}


//Scroll command
window.onscroll = function() {myFunction()};

//Functions of all scroll events

function myFunction() {

    if (window.scrollY >= counterSticky) {
        countOne.start();
        countTwo.start();
        countThree.start();
        countFour.start();
    } 
    
};

