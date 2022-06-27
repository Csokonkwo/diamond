var Beginner = {
    name : "Beginner",
    percentage : 42,
    minimum : 500,
    maximum : 9999

}

var Standard = {
    name : "Standard",
    percentage : 56,
    minimum : 10000,
    maximum : 49999

}

var Advanced= {
    name : "Advanced",
    percentage : 70,
    minimum :50000,
    maximum : 99000

}

var Business = {
    name : "Business",
    percentage : 84,
    minimum :100000,
    maximum : 10000000

}



var Bronze = {
    name : "Bronze",
    percentage : 49,
    minimum : 10000,
    maximum : 49999

}

var Silver= {
    name : "Silver",
    percentage : 58.5,
    minimum :50000,
    maximum : 99000

}

var Gold = {
    name : "Gold",
    percentage : 66,
    minimum :100000,
    maximum : 999999

}

var Platinum = {
    name : "Platinum",
    percentage : 75,
    minimum :1000000,
    maximum : 100000000

}

function calculate(type){
var plans = Array(Beginner,Standard,Advanced,Business,Bronze,Silver,Gold,Platinum);

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
    var plans = Array(Beginner,Standard,Advanced,Business,Bronze,Silver,Gold,Platinum);

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
    
    var plans = Array(Beginner,Standard,Advanced,Business,Bronze,Silver,Gold,Platinum);

    var amount = document.querySelector("#invest-amount");
    var plan = document.querySelector("#invest-plan");
    var expected = document.querySelector("#expecteda");

    if(plan.value == 'Beginner'){
        expect_this = amount.value * 0.015 + " daily profit";
    }

    else if(plan.value == 'Standard'){
        expect_this = amount.value * 0.020 + " daily profit";
    }

    else if(plan.value == 'Advanced'){
        expect_this = amount.value * 0.025 + " daily profit";
    }

    else if(plan.value == 'Business'){
        expect_this = amount.value * 0.030 + " daily profit";
    }

    else if(plan.value == 'Bronze'){
        expect_this = amount.value * 0.490 + " Monthly profit";
    }

    else if(plan.value == 'Silver'){
        expect_this = amount.value * 0.585 + " Monthly profit";
    }

    else if(plan.value == 'Gold'){
        expect_this = amount.value * 0.660 + " Monthly profit";
    }

    else if(plan.value == 'Platinum'){
        expect_this = amount.value * 0.750 + " Monthly profit";
    }

    expected.innerHTML = "$" + expect_this;

}