<?php
//  if(isset($_POST['email'])&&isset($_POST["subject"])&&isset($_POST["message"])){
//       $email = $_POST['email'];
//       $asunto = $_POST['subject'];
//       $mensaje = $_POST['message'];
//       $header = "From: dogui-lp@hotmail.com"."<br>";
//       $header .= "Reply-To: ".$email."<br>";
//       $header .= "X-Mailer: PHP/".phpversion();
//       $to = "guido.n_1997@outlook.com";
//       $subject = $asunto;
//       $message = $mensaje;
//     // $mail = mail($to,$subject,$message,$header);
//     if($mail){
//         echo "Mensaje Enviado con exito";
//     }
//     else{
//        echo "Ha ocurrido un error al enviar el mail";
//     }
//  }
//  else{
//      echo "Datos proporcionados erroneos";
//  }



// Mostrar errores PHP (Desactivar en producción)
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Incluir la libreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Inicio
$mail = new PHPMailer(true);

$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

try {
    // Configuracion SMTP
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         // Mostrar salida (Desactivar en producción)
    $mail->isSMTP();                                               // Activar envio SMTP
    $mail->Host  = "smtp.gmail.com";                               // Servidor SMTP
    $mail->SMTPAuth  = true;                                       // Identificacion SMTP
    $mail->Username  = 'guidocabrerasdla97@gmail.com';             // Usuario SMTP
    $mail->Password  = 'guidocabrera97';	                       // Contraseña SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port  = 587;
    $mail->setFrom('guidocabrerasdla97@gmail.com', 'PortafolioWeb'); // Remitente del correo

    // Destinatarios
    $mail->addAddress('GuidoNC.97@gmail.com', 'Guido Cabrera');  // Email y nombre del destinatario

    // Contenido del correo
    $mail->Subject = $asunto;
    $header = "From: GuidoNC.97@gmail.com"."<br>";
    $header .= "Reply-To: ".$email."<br>";
    $header .= "X-Mailer: PHP/".phpversion()."<br><br>";
    $mail->Body  = $header.$mensaje;
    $mail->isHTML(true);
    $mail->send();
    $result = "success";
    header("location: http://192.168.72.109/PHP/Portfolio/mail?result=".$result);
} catch (Exception $e) {
    $result = "failure";
    header("location: http://192.168.72.109/PHP/Portfolio/mail?result=".$result);
}
?>