$(document).ready(function(){
    
    $('.menu-btn').click(function(){
        $('.nav').toggleClass('showing');
        $('#menu-btn1').toggleClass('showing-btn');
        
    }); 
    
    $("main, footer, .signin").click(function(){
        $(".nav").removeClass("showing"); 
        $('#menu-btn1').removeClass('showing-btn')
        
    });
    
    //THIS SHOWS AND HIDES THE REGSITER AND LOGIN FORMS
    
    $(".signin").click(function(){
        $("#login").fadeIn(500);
        $("#register").fadeOut(200);
    });
    
    $(".signup").click(function(){
        $("#login").fadeOut(200);
        $("#register").fadeIn(500);
    });
    
    $(".cancel").click(function(){
        $("#login").fadeOut(200);
        $("#register").fadeOut(200);
    });
    
    
    //This is for Hero slider
    
    $('.slider img:gt(0)').hide();
	setInterval(function(){$('.slider :first-child').fadeOut(1500).next('img').fadeIn(1500).end().appendTo('.slider');}, 5000);
    


    //FAQS SECTION CLICK TO ADD AND REMOVE

    $("#faqs a:eq(0)").click(function(){
          $('#faqs p:eq(0)').fadeToggle(100);
          $('#faqs p:eq(0)').siblings('p').hide();
      });

      $("#faqs a:eq(1)").click(function(){
          $('#faqs p:eq(1)').fadeToggle(100);
          $('#faqs p:eq(1)').siblings('p').hide();
      });

      $("#faqs a:eq(2)").click(function(){
          $('#faqs p:eq(2)').fadeToggle(100);
          $('#faqs p:eq(2)').siblings('p').hide();
      });

      $("#faqs a:eq(3)").click(function(){
          $('#faqs p:eq(3)').fadeToggle(100);
          $('#faqs p:eq(3)').siblings('p').hide();
      });

      $("#faqs a:eq(4)").click(function(){
          $('#faqs p:eq(4)').fadeToggle(100);
          $('#faqs p:eq(4)').siblings('p').hide();
      });

      $("#faqs a:eq(5)").click(function(){
          $('#faqs p:eq(5)').fadeToggle(100);
          $('#faqs p:eq(5)').siblings('p').hide();
      });

      $("#faqs a:eq(6)").click(function(){
          $('#faqs p:eq(6)').fadeToggle(100);
          $('#faqs p:eq(6)').siblings('p').hide();
      });

      $("#faqs a:eq(7)").click(function(){
          $('#faqs p:eq(7)').fadeToggle(100);
          $('#faqs p:eq(7)').siblings('p').hide();
      });

      $("#faqs a:eq(8)").click(function(){
          $('#faqs p:eq(8)').fadeToggle(100);
          $('#faqs p:eq(8)').siblings('p').hide();
      });

      $("#faqs a:eq(9)").click(function(){
          $('#faqs p:eq(9)').fadeToggle(100);
          $('#faqs p:eq(9)').siblings('p').hide();
      });

      $("#faqs a:eq(10)").click(function(){
          $('#faqs p:eq(10)').fadeToggle(100);
          $('#faqs p:eq(10)').siblings('p').hide();
      });

      $("#faqs a:eq(11)").click(function(){
          $('#faqs p:eq(11)').fadeToggle(100);
          $('#faqs p:eq(11)').siblings('p').hide();
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

