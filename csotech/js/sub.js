$(document).ready(function(){
    
    //This is for Hero slider
    
    $('.slider img:gt(0)').hide();
	setInterval(function(){$('.slider :first-child').fadeOut(1500).next('img').fadeIn(1500).end().appendTo('.slider');}, 5000);
    
    
    
});
