$(document).ready(function(){
    
    $('.menu-btn').click(function(){
        $('aside').toggleClass('showing');
        
        //change brightness
        $("main").toggleClass('darken');
        
        $("#logo").toggleClass('logo-move');
    }); 
    
    $("main, .sub-menu-btn").click(function(){
        $("aside").removeClass("showing");
        $("main").removeClass('darken');
        $("#logo").removeClass('logo-move');
    });
    
    $("#header-search").click(function(){
        $("#header-form").fadeToggle(500);
    });
    
    


    //For carousel
            
    $('.slider-content').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
    });


});

    
// -------- When you scroll add sticky class
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

