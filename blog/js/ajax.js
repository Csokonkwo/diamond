function sendEmail(){
    
    var url = "includes/ajax.php";
    var newsResponse =  document.querySelector('#news-response');
    var newsForm = document.querySelector("#news-form");
    var email = document.querySelector('#email').value;

    var xhttp = new XMLHttpRequest();

    newsResponse.innerHTML = "Sending..."
    
    xhttp.onload = function(){
        newsResponse.innerHTML = this.responseText;
        newsForm.reset()
    }
    
    xhttp.open("POST", url, true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + email + "&news_submit=submitted"); 
    
    return false;
    
}


function sendComment(){
    
    var url = "includes/ajax.php";
    var commentResponse =  document.querySelector('#comment-response');
    var commentForm = document.querySelector("#comment-form");
    var comment = document.querySelector('#comment').value;
    var username = document.querySelector('#username').value;
    var post_id = document.querySelector('#post_id').value;

    var xhttp = new XMLHttpRequest();

    commentResponse.innerHTML = "Sending..."
    
    xhttp.onload = function(){
        commentResponse.innerHTML = this.responseText;
        commentForm.reset()
    }
    
    xhttp.open("POST", url, true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("comment="+comment+"&username="+username+"&post_id="+post_id+"&comment_submit=submitted"); 
    
    return false;
    
}

function sendMessage(){
    
    var url = "includes/sendMessage.php";
    var messageResponse =  document.querySelector('#message-response');
    var messageForm = document.querySelector("#message-form");

    var formData = new FormData(messageForm);
    var email =  document.querySelector('#message-email').value;
    var message =  document.querySelector('#message-message').value;

    var xhttp = new XMLHttpRequest();
    
    messageResponse.innerHTML = "Sending..."
    
    xhttp.onload = function(){
    messageResponse.innerHTML = this.responseText;
    messageForm.reset();
    }
    
    xhttp.open("POST",url,true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email+"&message="+message+""); 
    return false;
    
    }
    
    