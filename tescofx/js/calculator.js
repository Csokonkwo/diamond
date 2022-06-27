var basic = {
    name : "basic",
    percentage : 20,
    minimum : 50,
    maximum : 499


}

var regular = {
    name : "regular",
    percentage : 40,
    minimum : 500,
    maximum : 9999


}

var premium = {
    name : "premium",
    percentage : 80,
    minimum : 10000,
    maximum : 10000000

}




function calculate(type){
    var packages = Array(basic,regular,premium);

var select = document.querySelector(".calculator select");

var amount = document.querySelector(".calculator .amount");

var interest = document.querySelector(".calculator .interest span");

var totalreturns = document.querySelector(".calculator .total span");
//Determines which object to use
var toUse = null;

for(var x = 0;x<packages.length;x++){
var value = select.value;
if(value == packages[x].name){
toUse = packages[x];
}



}
if(type == 'package'){
    var calcAmount = toUse.minimum;
amount.min = toUse.minimum;
amount.max = toUse.maximum;
amount.value = calcAmount

}
else{
    var calcAmount = amount.value;
    amount.value = calcAmount
}


if(amount.value < toUse.minimum || amount.value > toUse.maximum){
amount.value = "Reselect package"
}
else{

    var profit = (toUse.percentage/100) * calcAmount;

    interest.innerHTML = profit;
    
    amount.value = calcAmount;
    totalreturns.innerHTML = Number(amount.value) + Number(profit);
}



}


function calcInvest(){
    
    var expected = document.querySelector("#expecteda");
    var packages = Array(basic,regular,premium);

var select = document.querySelector("select");

var amount = document.querySelector("#invest-amount");

//Determines which object to use when you catch the required object in the loop
var toUse = null;

for(var x = 0;x<packages.length;x++){

var value = select.value; //gets the value of the select element

if(value == packages[x].name){
toUse = packages[x]; //If the value is correct assign the particular element to the global toUse variable to work with on the next line
}

}



if(amount.value < toUse.minimum || amount.value > toUse.maximum){
    expected.innerHTML ="Please enter a valid amount for package selected";
    //Checks whether the amount entered is equal to the selected packages value return false here ;
    return false;
}
else{

  //Else statement means if is contained in the range as specified return true here
  return true
}


}



function calcInv(){
    
    var packages = Array(basic,regular,premium);

    var amount = document.querySelector("#invest-amount");
    var package = document.querySelector("#invest-package");
    var expected = document.querySelector("#expecteda");

    if(package.value == 'basic'){
        expect_this = amount.value * 1.2;
    }

    else if(package.value == 'regular'){
        expect_this = amount.value * 1.4;
    }

    else if(package.value == 'premium'){
        expect_this = amount.value * 2;
    }

    expected.innerHTML ="$" + expect_this;

}

function showWallet(){

    var method = document.querySelector("#payment-method");
    var address = document.querySelector("#wallet-address"); 

    if(method.value == 'etherium'){
        address.innerHTML = "Send Etherium to : <br> 0x44221108716713d3c408911Da8d935e2B93c5D79 <br> <br> "
    }

    if(method.value == 'bitcoin'){
        address.innerHTML = "Send Bitcoin to : <br> 3QpmWLysK3TmwScjc2PYdsjwUXK281Fu3e <br> <br> "
    }

}


