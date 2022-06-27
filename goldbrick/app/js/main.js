var aside = document.querySelector("aside");
var menu_btn = document.querySelector(".menu-btn");
var log = document.querySelector("#log");

menu_btn.addEventListener("click", function(){
    aside.classList.toggle("showing")
});

setTimeout(
    function(){
        log.style = 'display: none';
    }, 7000
);


function showWallet(){

    var method = document.querySelector("#payment-method");
    var address = document.querySelector("#wallet-address"); 
    var refer = document.querySelector("#refer"); 

    if(method.value == 'bitcoin'){
        address.style.display = "block"
        refer.style.display = "block"
        address.innerHTML = 'Send Bitcoin to : <br> <input id="btcAdd" value ="18KsVevjSv9zeeaXFqVJyxqEUVGSDb1gtV"> <br> <a onclick="copyBtc()"> Copy </a> <br> <br> '
    }

    if(method.value == 'other'){
        address.style.display = "block"
        refer.style.display = "none"
        address.innerHTML = "Please contact our Online support for other payment methods. <br> <br> "
    }

    if(method.value == 'bankaccount'){
        refer.style.display = "block"
        address.style.display = "block"
        address.innerHTML = 'Make Payments to <br>' + bankName + '<br>' + bankAccountName + '<br>' + bankAccount;
    }

    if(method.value == 'goldbrick'){
        address.style.display = "none"
        refer.style.display = "none"
    }

    if(method.value == ""){
        address.style.display = "none"
        refer.style.display = "none"
    }

}

function showDepWallet(){

    var method = document.querySelector("#payment-method");
    var address = document.querySelector("#wallet-address"); 

    if(method.value == 'bitcoin'){
        address.style.display = "block"
        address.innerHTML = 'Send Bitcoin to : <br> <input id="btcAdd" value ="18KsVevjSv9zeeaXFqVJyxqEUVGSDb1gtV"> <br> <a onclick="copyBtc()"> Copy </a> <br> <br> '
    }

    if(method.value == 'other'){
        address.style.display = "block"
        address.innerHTML = "Please contact our Online support for other payment methods. <br> <br> "
    }


    if(method.value == ""){
        address.style.display = "none"
        refer.style.display = "none"
    }

}


function copyItem() { 
    var copyText = document.querySelector("#myInput");
  
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");
  
    alert("Copied : " + copyText.value);
}

function copyUsdt() { 
    var copyText = document.querySelector("#usdtAdd");
  
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy"); 
  
    alert("Copied : " + copyText.value);
}

function copyBtc() {
    var copyText = document.querySelector("#btcAdd");
  
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");
  
    alert("Copied : " + copyText.value);
}

function inputMax(){
    document.querySelector('.max-input').value = balance
}