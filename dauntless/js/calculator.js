var Basic = {
    name : "Basic",
    percentage : 52.5,
    minimum : 4,
    maximum : 9

}

var Starter = {
    name : "Starter",
    percentage : 60,
    minimum : 10,
    maximum : 19

}

var Standard= {
    name : "Standard",
    percentage : 63,
    minimum :20,
    maximum : 49

}

var Premium = {
    name : "Premium",
    percentage : 60,
    minimum :50,
    maximum : 1000

}


function calculate(type){
var plans = Array(Basic,Starter,Standard,Premium);

var select = document.querySelector(".calculator select");

var amount = document.querySelector(".calculator .amount");

var interest = document.querySelector(".calculator .interest span");

var totalreturns = document.querySelector(".calculator .total span");
    
    
//Determines which object to use
var toUse = null;

for(var x = 0;x<plans.length;x++){
var value = select.value;
if(value == plans[x].name){
toUse = plans[x];
}



}
if(type == 'plan'){
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
amount.value = "Invalid Amount"
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
    var plans = Array(Basic,Starter,Standard,Premium);

    var select = document.querySelector("select");

    var amount = document.querySelector("#invest-amount");

    //Determines which object to use when you catch the required object in the loop
        
    var toUse = null;

    for(var x = 0;x<plans.length;x++){

    var value = select.value; //gets the value of the select element

    if(value == plans[x].name){
    toUse = plans[x]; //If the value is correct assign the particular element to the global toUse variable to work with on the next line
    }

    } 



    if(amount.value < toUse.minimum || amount.value > toUse.maximum){
        expected.innerHTML ="Please enter a valid amount for Package selected";
        //Checks whether the amount entered is equal to the selected plans value return false here ;
        return false;
    }
    else{

    //Else statement means if is contained in the range as specified return true here
    return true
    }

}



function calcInv(){
    
    var plans = Array(Basic,Starter,Standard,Premium);

    var amount = document.querySelector("#invest-amount");
    var plan = document.querySelector("#invest-plan");
    var expected = document.querySelector("#expecteda");

    if(plan.value == 'Basic'){
        expect_this = amount.value * 0.035 + " daily profits";
    }

    else if(plan.value == 'Starter'){
        expect_this = amount.value * 0.040 + " daily profits";
    }

    else if(plan.value == 'Standard'){
        expect_this = amount.value * 0.042 + " daily profits";
    }

    else if(plan.value == 'Premium'){
        expect_this = amount.value * 0.046 + " daily profits";
    }

    expected.innerHTML = "$" + expect_this;

}


function showWallet(){

    var method = document.querySelector("#payment-method");
    var address = document.querySelector("#wallet-address"); 

    if(method.value == 'etherium'){
        address.innerHTML = "Send Etherium to : <br> 0x6D4dD2C14d9E81ed1B56259d097DBaF7F2D496D4 <br> <br> "
    }

    if(method.value == 'bitcoin'){
        address.innerHTML = "Send Bitcoin to : <br> bc1qj5h69gd98p2vqmg86ysy4ltngg5uxqlnqe2ktr <br> <br> "
    }

}