var menu = document.getElementById('menu');
var check = document.getElementById("check");
var items = document.getElementById("items");

window.onload = function(){
//  Variable Altura necesaria por si hay elementos anteriores al menu
//  var altura = menu.scrollTop;
    window.onscroll = function(){
      var scroll = document.documentElement.scrollTop || document.body.scrollTop;
        if(scroll>=60){
          menu.classList.add('menuFixed');
        }
        else{
          menu.classList.remove('menuFixed');
        }
    }
}

check.addEventListener("change",function(){
     if(this.checked){
      items.style.maxHeight = "240px";
     }
     else{
      items.removeAttribute("style");
     }
     items.style.height = "auto";
});