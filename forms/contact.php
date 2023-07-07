<?php 
  $myemail = 'agenciadigital.arya@gmail.com';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = $myemail;
  $email_subject = "Nuevo mensaje";
  $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Tel: $subject \n Mensaje: \n $message";
  $headers = "From: $email";

  mail($to, $email_subject, $email_body, $headers);
  echo "OK";
  ?>
