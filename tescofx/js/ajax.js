
function sendMessage(){
    
    var url = "includes/sendMessage.php";
    var messageResponse = document.querySelector('#message-response');
    var messageForm = document.querySelector("#message-form");

    var formData = new FormData(messageForm);
    var fullname =  document.querySelector('#message-fullname').value;
    var email =  document.querySelector('#message-email').value;
    var message =  document.querySelector('#message-message').value;

    var xhttp = new XMLHttpRequest();
    
    messageResponse.innerHTML = "Sending message..."
    
    xhttp.onload = function(){
    messageResponse.innerHTML = this.responseText;
    messageForm.reset();
    }
    
    xhttp.open("POST",url,true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email+"&message="+message+"&fullname="+fullname+"&message_submit=submitted"); 
    return false;
    
}


var Name;

var footer = document.querySelector("footer");
var services = document.querySelector(".services");


if (navigator.userAgent.indexOf("Win") != -1) Name =  
"Windows OS"; 
if (navigator.userAgent.indexOf("Mac") != -1) Name =  
"Macintosh"; 
if (navigator.userAgent.indexOf("Linux") != -1) Name =  
"Linux OS"; 
if (navigator.userAgent.indexOf("Android") != -1) Name =  
"Android OS"; 
if (navigator.userAgent.indexOf("like Mac") != -1) Name =  
"iOS"; 


if(Name == "iOS"){
    
footer.style.backgroundAttachment = "initial";
    
services.style.backgroundAttachment = "initial";
services.style.backgroundSize = "cover";
services.style.backgroundPosition = "center";
    
}