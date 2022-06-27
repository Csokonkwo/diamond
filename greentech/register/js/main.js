$(document).ready(function(){
    $('.menu-btn, .sub-menu-btn').click(function(){
        $('.aside').toggleClass('showing');
    });
    
    $(".main").click(function(){
        $(".aside").removeClass("showing"); 
        
    });

     
});
