
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