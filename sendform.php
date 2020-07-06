<?php 

$nombre = $_POST['nombre'];

$email = $_POST['email'];

$comentario = $_POST['comentario'];

$newsletter = $_POST['newsletter'];


if($nombre!='' && $email!='' && $comentario!='' && $newsletter!=''){
  $to_email_address = 'sweetplacedecoraciones@gmail.com';

  $subject = 'Formulario de Contacto';
  
  $message = 
  
  '<html>
  
  <head>
  
    <title>Formulario de contacto</title>
  
  </head>
  
  <body>
  
      <h3>Nombre:</h3>
  
      <p>'.$nombre.'</p>
  
      <h3>Email:</h3>
  
      <p>'.$email.'</p>
  
      <h3>Comentario:</h3>
  
      <p>'.$comentario.'</p>
  
      <h3>Newsletter</h3>
  
      <p>'.$newsletter.'</p>
  
  </body>
  
  </html>';
  
  $headers = 'MIME-Version: 1.0' . "\r\n";
  
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  $headers .= 'From: contacto@sweetplacedecoraciones.cl';
  
  
  
  mail($to_email_address,$subject,$message,$headers);
}

?>



<html>

<meta http-equiv="refresh" content="1;url=confirmacion.php"> 

</html>