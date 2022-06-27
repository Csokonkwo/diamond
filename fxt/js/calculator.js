var starter = {
    name : "starter",
    percentage : 10,
    minimum : 30,
    maximum : 99


}
var regular = {
    name : "regular",
    percentage : 25,
    minimum : 100,
    maximum : 499


}
var standard = {
    name : "standard",
    percentage : 30,
    minimum : 100,
    maximum : 999

}

var premier = {
    name : "premier",
    percentage : 40,
    minimum : 1000,
    maximum : 3000


}
var premium = {
    name : "premium",
    percentage : 40,
    minimum : 3000,
    maximum : 20000


}
var deluxe = {
    name : "deluxe",
    percentage : 90,
    minimum :20000,
    maximum : 1000000


}



function calculate(type){
    var plans = Array(starter,regular,standard,premier,premium,deluxe);

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
    var plans = Array(starter,regular,standard,premier,premium,deluxe);

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
    expected.innerHTML ="Please enter a valid amount for Plan selected";
    //Checks whether the amount entered is equal to the selected plans value return false here ;
    return false;
}
else{

  //Else statement means if is contained in the range as specified return true here
  return true
}


}



function calcInv(){
    
    var plans = Array(starter,regular,standard,premier,premium,deluxe);

    var amount = document.querySelector("#invest-amount");
    var plan = document.querySelector("#invest-plan");
    var expected = document.querySelector("#expecteda");

    if(plan.value == 'starter'){
        expect_this = amount.value * 1.2;
    }

    else if(plan.value == 'regular'){
        expect_this = amount.value * 1.4;
    }

    else if(plan.value == 'standard'){
        expect_this = amount.value * 2;
    }

    else if(plan.value == 'premier'){
        expect_this = amount.value * 2.5;
    }

    else if(plan.value == 'premium'){
        expect_this = amount.value * 3.5;
    }

    else if(plan.value == 'deluxe'){
        expect_this = amount.value * 4.5;
    }

    expected.innerHTML ="$" + expect_this;

}