$(document).ready(function(){
    $('.menu-btn, .sub-menu-btn').click(function(){
        $('aside').toggleClass('showing');
        $('main').toggleClass('dark');
    });
    
    $("main").click(function(){
        $("aside").removeClass("showing"); 
        $('main').removeClass('dark');
    });

     
});

//---------------Classic editor

ClassicEditor
.create( document.querySelector( '#body' ), {
    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
        ]
    }
} )
.catch( error => {
    console.log( error );
});