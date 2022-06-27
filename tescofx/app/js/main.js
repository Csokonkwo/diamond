$(document).ready(function(){
    
    $('.menu-btn').click(function(){
        $('aside').toggleClass('showing');
    }); 
    
    $("main, footer").click(function(){
        $("aside").removeClass("showing"); 
        
    });

    $("#where a:eq(0)").click(function(){
        $('#where p:eq(0)').fadeToggle(100);
        });
})