var msj = document.getElementById("msjResult");

window.onload = function(){
    if(msj==""||msj==null){
    }
    else{
      setTimeout(function(){
        msj.textContent= "";
        msj.style.display = "none";
      }, 4000);
    }
    }