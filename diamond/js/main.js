var menu_btn = document.querySelector('menu_btn');
var menu = document.querySelector('header ul');

function menu_show(){
    menu.classList.toggle('show');
}



var sideBar = document.querySelector('header .nav-bar')
var contentBar = document.querySelector('nav');

var sideBarClass = sideBar.className;
var contentBarClass = contentBar.className;


var isClosed = true;
function toggleBar(){
if(isClosed == true){
sideBar.className+=" active"
contentBar.className+=" active"
isClosed = false;
}
else{
    sideBar.className= sideBarClass
contentBar.className=contentBarClass
isClosed=true;
}




}


var dropdown = document.querySelectorAll("header nav ul li");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.firstChid;

  });
} 
