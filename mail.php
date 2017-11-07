<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mensaje = $_POST['mensaje'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
		
$mail = new PHPMailer();
$mail->IsSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port = 25;
$mail->Username = 'jcgalotto@gmail.com';
$mail->Password = '*****';
$mail->SMTPAuth = true;
$mail->CharSet="UTF-8";
$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'tls';
$mail->SetFrom("jcgalotto@gmai.com");
$mail->Subject =  "Consulta de ".$nombre;
$mail->Body =$mensaje;
$mail->AddAddress($email, $nombre);
$mail->AddAddress('jcgalotto@gmail.com');



$mail->IsHTML(true);
$mail->Subject    = "Consulta de ".$nombre;
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body = $mensaje;

 if(!$mail->Send())

{
   echo "<script> alert('Hubo un error vuelva a intentarlo')</script>". $mail->ErrorInfo;

}
else
{
  echo "<script> alert('Hubo un error vuelva a intentarlo')</script>";
  header("location: index.html");
}

?>