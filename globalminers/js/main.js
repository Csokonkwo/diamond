$(document).ready(function(){
    
    //All Menu bar effects
    
    $("#menu-btn, #sub-menu-btn").click(function(){
        $(".nav").toggleClass("showing"); 
    });
    
    //Removes nav-bar on main click
    
    $("main, footer").click(function(){
        $(".nav").removeClass("showing");
        
    });
    
    //Question SECTION CLICK TO ADD AND REMOVE
    
    
    $("#left a:eq(0)").click(function(){
        $('#left p:eq(0)').fadeToggle(100);
        $('#left p:eq(1), #left p:eq(2),#left p:eq(4), #left p:eq(3)').hide();
    });
    
    $("#left a:eq(1)").click(function(){
        $('#left p:eq(1)').fadeToggle(100);
        $('#left p:eq(0), #left p:eq(2),#left p:eq(4), #left p:eq(3)').hide();
    });
    
    $("#left a:eq(2)").click(function(){
        $('#left p:eq(2)').fadeToggle(100);
        $('#left p:eq(0), #left p:eq(1),#left p:eq(4), #left p:eq(3)').hide();
    });
    
    $("#left a:eq(3)").click(function(){
        $('#left p:eq(3)').fadeToggle(100);
        $('#left p:eq(1), #left p:eq(2),#left p:eq(4), #left p:eq(0)').hide();
    });
    
    $("#left a:eq(4)").click(function(){
        $('#left p:eq(4)').fadeToggle(100);
        $('#left p:eq(1), #left p:eq(2),#left p:eq(3), #left p:eq(0)').hide();
    });
    
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
    
});



window.onscroll = function() {myFunction()};

// Get the navbar
var header = document.querySelector("ul.clearfix");
var headerClassName = header.className;
var mainHeader = document.querySelector("header");
var mainHeaderClassName = mainHeader.className;



// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {

    var serviceSectionTop = document.querySelector("#hero").offsetTop;

  if (window.scrollY >= serviceSectionTop) {
    header.className=headerClassName +" sticky";
    mainHeader.className = mainHeaderClassName + " sticky";
  } 
    if(window.scrollY < serviceSectionTop){
        
       header.className= headerClassName;
       mainHeader.className = mainHeaderClassName;
    }
    
};