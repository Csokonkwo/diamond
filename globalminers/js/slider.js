
const item = document.querySelector(".hero-slider-holder");
var margin  = 0;
var totalElements = 0;

setInterval(next,5000);


var total = document.querySelectorAll(".hero-container");
for(var x = 0;x<total.length;x++){
  totalElements +=1;
}
function next() { 
margin+=100;

if(margin >=totalElements * 100){
margin = 0;
}
update();
}

function previous() {

if(margin <= 0){
margin = totalElements * 100;
}
margin-=100;
update()

}
var timeout;
function update(){
item.className = "hero-slider-holder";
try{ 
clearTimeout(timeout);

}
catch(e){
console.log(e);
}
item.style.marginLeft = -margin +"vw";
console.log(margin);
item.classList.toggle("another");
timeout = setTimeout(function(){
item.classList.toggle("another");

},2000)

}

