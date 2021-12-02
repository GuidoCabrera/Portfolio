<?php
 if(isset($_POST['email'])&&isset($_POST["subject"])&&isset($_POST["message"])){
      $email = $_POST['email'];
      $asunto = $_POST['subject'];
      $mensaje = $_POST['message'];
      $header = "From: dogui-lp@hotmail.com"."<br>";
      $header .= "Reply-To: ".$email."<br>";
      $header .= "X-Mailer: PHP/".phpversion();
      $to = "guido.n_1997@outlook.com";
      $subject = $asunto;
      $message = $mensaje;
    // $mail = mail($to,$subject,$message,$header);
    if($mail){
        echo "Mensaje Enviado con exito";
    }
    else{
       echo "Ha ocurrido un error al enviar el mail";
    }
 }
 else{
     echo "Datos proporcionados erroneos";
 }
?>