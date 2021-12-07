<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,500&family=PT+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <link rel="stylesheet" href="public/css/Mail.css">
    <title>Document</title>
</head>
<body>

 <div id="containerMail">

  <h2 id="title">Enviar correo a Guido Cabrera</h2>

  <?php
  if(isset($_GET["result"])){
    if($_GET["result"]=="success"){
      $msj = "El mail se ha enviado satisfactoriamente, muchas gracias por su interes.";
      ?><p id="msjResult" class="success"><?php echo $msj; ?></p> <?php
    }
    else if($_GET["result"]=="failure"){
      $msj = "Ha surgido un error al enviar el mail, vuelva a intentarlo nuevamente mas tarde.";
      ?> <p id="msjResult" class="failure"><?php echo $msj; ?></p> <?php 
    }
  }
  ?>
  
   <form action="sendMail" method="POST" id="formSendMail">

      <div id="formGroup">
          <div class="inputGroup">
            <p class="txtInput">Email remitente</p>
            <input type="text" name="email" id="emailRemitente" placeholder="Ingrese su email">
          </div>
          <div class="inputGroup">
            <p class="txtInput">Asunto</p>
            <input type="text" name="subject" id="emailAsunto" placeholder="Ingrese el asunto del email">
          </div>
          <div class="inputGroup">
            <p class="txtInput">Mensaje</p>
            <textarea name="message" id="emailTxtArea" placeholder="Inserte su mensaje" cols="60" rows="10"></textarea>
          </div>
      </div>

      <div id="boxBtnMail">
        <button type="submit" form="formSendMail">Enviar</button>
      </div>

   </form>
 </div>
    
 <script src="public/js/mail.js"></script>
</body>
</html>