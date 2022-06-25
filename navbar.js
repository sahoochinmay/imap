

var getBtn = document.getElementById('menuBtn');
var getSideBar = document.getElementById('sideNav');

getSideBar.style.left = "-300px";

getBtn.onclick = function(){
    if(getSideBar.style.left == "-300px"){
        getSideBar.style.left = "0" ;
    }

    else{

        getSideBar.style.left = "-300px";

    }
}