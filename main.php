<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,500&family=PT+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    <!-- Icons -->
    <link href="https://file.myfontastic.com/f3jk84yc6gRkQexzYqf3HV/icons.css" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="public/css/Estilo.css">
    <title>Document</title>
</head>
<body id="bodyMain">

 <div id="menu" class="">

  <input type="checkbox" id="check">
        
  <label for="check" class="checkbtn">
        <i class="icon-menu"></i>
  </label>
    
     <ul id="items">
         <li><a href="#Home">Home</a></li>
         <li><a href="#Projects">Proyectos</a></li>
         <li><a href="#aboutMe">Sobre Mí</a></li>
         <li><a href="#contact">Contacto</a></li>
     </ul>
 </div>

 <div id="Home">
    <div id="Hero" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(public/img/ProgImg.jpg);">
        <h2>Guido Cabrera</h2>
        <p>Programador con preferencia en back-end</p>
        <p>Argentina, Buenos Aires</p>
        <a href="cv/GuidoCabrera-CurriculumVitae.pdf" target="_blank" download="GuidoCabrera-CurriculumVitae.pdf">Descargar CV</a>
    </div>
 </div>

   <div class="sectionSeparator">
     <hr class="hr-text" id="Projects" data-content="Proyectos">
   </div>

 <div id="containerProjects">
     <div id="projects">

         <div class="containerProject" data-name="FormVanet">
            <div class="containerDetails">
                <h2 class="nameProject">FormVanet</h2>
                <p class="features">- Web app</p>
            </div>
            <img src="public/img/Projects/FormVanet.jpg" alt="" class="imgProject">
         </div>

         <div class="containerProject" data-name="VanetTransaction">
            <div class="containerDetails">
                <h2 class="nameProject">VanetTransaction</h2>
                <p class="features">- Web app</p>
            </div>
            <img src="public/img/Projects/VanetTransaction.jpg" alt="" class="imgProject">
         </div>

         <div class="containerProject" data-name="ProyectoBootstrap">
            <div class="containerDetails">
                <h2 class="nameProject">ProyectoBootstrap</h2>
                <p class="features">- Web app</p>
            </div>
            <img src="public/img/Projects/ProyectoBootstrap.jpg" alt="" class="imgProject">
         </div>

         <div class="containerProject" data-name="WFGestion">
            <div class="containerDetails">
                <h2 class="nameProject">WFGestion</h2>
                <p class="features">- Desktop app</p>
            </div>
            <img src="public/img/Projects/AppDesktop.png" alt="" class="imgProject">
         </div>

         <div class="containerProject" data-name="ProPoker">
            <div class="containerDetails">
                <h2 class="nameProject">ProPoker</h2>
                <p class="features">- Desktop app</p>
            </div>
            <img src="public/img/Projects/ProPoker.jpg" alt="" class="imgProject">
         </div>

     </div>
 </div>

  <div id="containerSkills">

 <div class="sectionSeparator">
     <hr class="hr-text" data-content="Habilidades">
 </div>
    
    <div id="skills">

    <img src="public/icons/javascript-2.jpg" title="Javascript" alt="" class="logoSkill">

    <img src="public/icons/css-2.jpg" title="Css" alt="" class="logoSkill">

    <img src="public/icons/php.jpg" title="PHP" alt="" class="logoSkill">

    <img src="public/icons/mysql-3.jpg" title="MySql" alt="" class="logoSkill">

    <img src="public/icons/java-2.jpg" title="Java" alt="" class="logoSkill">

    <img src="public/icons/c-2.jpg" title="C#" alt="" class="logoSkill">

    <img src="public/icons/html-2.jpg" title="HTML" alt="" class="logoSkill">

    </div>

 </div> 

 <div class="sectionSeparator">
     <hr class="hr-text" id="aboutMe" data-content="Sobre Mí">
 </div>

 <div id="divAboutMe">
       <p id="Im">Mi nombre es Guido Nicolas Cabrera, tengo 24 años y vivo en Argentina, Buenos Aires.</p> <br>
       <p id="txtAboutMe">
        Me considero una persona proactiva, autodidacta, con ganas de autosuperación y entusiasta.
        En mis ratos de ocio me gusta jugar videojuegos, leer libros de fantasia<small>(Mi favorito es el señor de los anillos)</small>, practicar voley, jugar con mis mascotas 
         o simplemente ver videos randoms en youtube. <br> <br>
        Desde chico siempre estuve atraido por la tecnologia abordandola desde el lado de los videojuegos o edicion de videos hasta uso con fines educativos o de simple curiosidad, por esto mismo
         cuando tuve que elegir a que me dedicaria decidí que seria la programación.
        Mis primeros pasos en este mundo fueron en la Universidad Tecnologica Nacional(<i>UTN</i>) donde gracias a los profesores y ayudantes pude comenzar
         mi aprendizaje en distintos lenguajes y desarrollar varias aplicaciones, como por ejemplo el primero año utilizando <b>c++</b> en aplicaciones de consola o el ultimo año donde utilizamos <b>java</b> para desarrollo de windows forms. <br> <br>
        Hoy en dia me encuentro recibido de programador. Continuo aprendiendo de forma autodidacta enfocandome en el area back-end de aplicaciones web usando <b>php</b> y <b>mysql</b>, pero realmente estoy en busca de mas
         y la mejor forma de poder seguir mejorando mis capacidades es insertandome en el ambito laboral, pudiendo relacionarme con programadores con mas experiencia y conocimientos, asi mismo trabajando en conjunto 
         para el logro de objetivos a corto y largo plazo.
       </p>
 </div>

 <div id="containerContact">

      <div class="sectionSeparator">
        <hr class="hr-text" id="contact" data-content="Contacto">
      </div>

    <div id="cards">
      <div class="card" id="cardLinke">
        <i class="card-icon icon-linkedin"></i>
        <p>Linkedin/Guido-Cabrera</p>
      </div>

      <div class="card">
        <i class="card-icon icon-email"></i>
        <p>guido.n_1997@outlook.com</p>
      </div>

      <div class="card" id="cardGit">
        <i class="card-icon icon-github"></i>
        <p>Github/GuidoCabrera</p>
      </div>
    </div>

 </div>

 <div id="footer">
      <p>Copyright &copy; <script>
         document.write(new Date().getFullYear());
      </script> All rights reserved | This site is was created by <br> Guido Cabrera </p>
</div>

<div class="containerModal" id="contModal">
  <div class="modal" id="modalProj">
      
    <h2 id="nameProject"></h2>

    <div id="modalDetails">
      <video controls autoplay muted id="videoDetails">
        <source src="" id="sourceDetails" type="video/mp4">
      </video>

      <p id="details"></p>

    </div>

    <div id="btnBoxModal">
     <button type="button" id="btnCloseModal" class="icon-close"></button>
    </div>

  </div>
</div>

 <script src="public/js/menu.js"></script>
 <script src="public/js/main.js"></script>
 <script src="public/js/modal.js"></script>
</body>
</html>