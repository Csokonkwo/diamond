function sendEmail(){
    
    var url = "includes/server.php";
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


function sendMessage(){
    
    var url = "includes/server.php";
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
    xhttp.send("email="+email+"&message="+message+"&messages_submit=submitted"); 
    return false;
    
    }
    

function sendOrder(){
    
    var url = "includes/server.php";
    var orderResponse =  document.querySelector('#order-response');
    var orderForm = document.querySelector("#order-form");

    var formData = new FormData(orderForm);
    var email =  document.querySelector('#order-email').value;
    var date =  document.querySelector('#order-date').value;
    var type =  document.querySelector('#order-type').value;

    var xhttp = new XMLHttpRequest();
    
    orderResponse.innerHTML = "Sending..."
    
    xhttp.onload = function(){
    orderResponse.innerHTML = this.responseText;
    formData.reset();
    }
    
    xhttp.open("POST", url, true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email+"&date="+date+"&type="+type+"&orders_submit=submitted"); 
    return false;
    
    }
    