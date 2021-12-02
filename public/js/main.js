var linkeDin = document.getElementById("cardLinke");
var git = document.getElementById("cardGit");
var email = document.getElementById("cardEmail");

linkeDin.addEventListener("click",function(){
    window.open("https://www.linkedin.com/in/guido-cabrera/",'_blank');
});

email.addEventListener("click",function(){
   location.href = "http://192.168.72.109/PHP/Portfolio/mail";
});

git.addEventListener("click",function(){
    window.open("https://github.com/GuidoCabrera",'_blank');
});