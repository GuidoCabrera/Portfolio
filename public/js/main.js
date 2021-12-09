var linkeDin = document.getElementById("cardLinke");
var git = document.getElementById("cardGit");
var email = document.getElementById("cardEmail");

linkeDin.addEventListener("click",function(){
    window.open("https://www.linkedin.com/in/guido-cabrera/",'_blank');
});

email.addEventListener("click",function(){
   window.open("http://192.168.2.102/PHP/Portfolio/mail", "_blank");
});

git.addEventListener("click",function(){
    window.open("https://github.com/GuidoCabrera",'_blank');
});