function sendEmail(){
    
    var url = "includes/newsletter.php";
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
