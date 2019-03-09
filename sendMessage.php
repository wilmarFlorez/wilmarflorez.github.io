<?php

if(isset($_POST["name"], $_POST["phone"], $_POST["email"]) and $_POST["name"] !="" and $_POST["phone"] !="" and $_POST["email"] !="")
{
   $destino = "info@lakesystems.com.co";
   $asunto = "Información página web";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

   $finalMessage = 'Nombre: '.$name."\r\n".'Teléfono: '.$phone."\r\n".'E-mail: '.$email."\r\n".'Mensaje: '.$message;
   if(mail($destino, $asunto, $finalMessage))
   {
      echo json_encode('Su mensaje se ha enviado, pronto nos comunicaremos contigo!');   
   }   
   
}else{
   echo json_encode('error');
}