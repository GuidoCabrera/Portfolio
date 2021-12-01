var imgs = document.querySelectorAll("#containerProjects #projects .containerProject");
var contModal = document.getElementById("contModal");
var modal = document.getElementById("modalProj");
var body = document.getElementById("bodyMain")
var btnClose = document.getElementById("btnCloseModal");
var Title = document.getElementById("nameProject");
var txtDetails = document.getElementById("details");
var video = document.getElementById("videoDetails");
var source = document.getElementById("sourceDetails");
 var arrayP = {
     "FormVanet": "FormVanet es un proyecto web que cuenta con un total de dos vistas. La vista principal se basa en un formulario con validaciones para cada uno de los campos, tiene como fin el ingreso de datos de un cliente para luego almacenarlos en la base de datos."+ 
      " La segunda vista es una tabla indexada que vuelca los datos almacenados, cuenta con un buscador para obtener rapidamente los campos deseados y con la opcion de borrado multiple de registros. Estas dos vistas mencionadas anteriormente estan diseñadadas de manera responsiva."+
      "<br/> Desarrollado utilizando HTML5, CSS3, PHP, JAVASCRIP Y MYSQL",
     "ProyectoBootstrap": "Este proyecto web esta destinado a la creacion de una tienda online de ropa y accesorios, donde se puede ver diferentes fotos de los productos y elegir las caracteristicas deseadas a la hora de su compra."+
      "<br/> Cuenta con un sistema para registrarse y posteriormente loguearse, tambien contiene una vista para recuperar la contraseña en caso que sea necesario, todo esto logrado gracias a la validacion mediante gmail configurado en el software Xampp"+ 
      "<br/> ProyectoBootsrap esta diseñado de manera responsiva dando uso del patron MVC(Modelo,Vista,Controlador) y desarrollado en HTML5, CSS3, BOOTSTRAP, PHP, JAVASCRIP, MYSQL y uso ocacional DE JSON Y JQUERY",
     "VanetTransaction": "VanetTransaction es un proyecto web enfocado completamente en las diferentes transacciones de una empresa. \n"+
      "<br/>La primera vista que se visualiza es para iniciar sesion. Segun el Rol del usuario iniciado la vista principal va a tener multiple diferencias en su diseño, las transacciones se van a mostrar mediante una tabla y se pueden categorizar segun el dia en que se realizaron y/o segun el usuario que las haya ingresado."+ 
      "<br/> Los usuarios que posean el Rol de administrador van a poder ingresar a dos vistas que emplean ABM en los atributos 'Movimiento' y 'Usuarios'."+ 
      "<br/> Esta diseñado dando uso del patron MVC y desarrollado en HTML5, CSS3, PHP, JAVASCRIP, MYSQL y uso ocacional DE JSON Y JQUERY",
     "ProPoker": "Proyecto Windows Form fue desarrollado en lenguaje Java que implementa una tabla con las diferentes combinaciones de cartas, este programa puede ser utilizado tanto como para estudiar o durante el juego.",
     "WFGestion": "WFGestion es un proyecto Windows Form desarrollado en c# con conexion a base de datos relacional MYSQL, representa el sistema de un local especializado en reparacion de dispositivos electronicos."+ 
     "<br/> Este programa contiene ABM de la mayoria de atributos, como por ejemplo... Usuarios, Equipos, Repuestos, Service. <br/> La finalidad del programa es dar un seguimiento del equipo en reparacion, teniendo en cuenta los repuestos, costos, service, etc.. y emitiendo una factura una ves terminado el service y dado de alta el equipo."+ 
     "<br/> Adicionalmente en la pestaña de 'informes' cuenta con datos estadisticos tales como el porcentaje de equipos por tipo."
 };

imgs.forEach((e) => {
    e.addEventListener("click", function () {
        //   alert(e.dataset.name);
        if (contModal.classList.contains("show")) {} else {
            setClass("modal modalOpen", "containerModal show", "noscroll")
            source.setAttribute('src',"public/videos/"+e.dataset.name+".mp4");
            video.load();
            video.play();
            Title.innerHTML = e.dataset.name;
            txtDetails.innerHTML = arrayP[e.dataset.name];
        }
    });
})

btnClose.addEventListener("click", function () {
    setClass("modal", "containerModal", "");
});

function setClass(classModal, classCont, classBody) {
    modal.setAttribute("class", classModal);
    contModal.setAttribute("class", classCont);
    body.setAttribute("class", classBody);
}