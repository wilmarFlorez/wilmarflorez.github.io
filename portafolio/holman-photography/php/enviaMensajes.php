<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Templo de la eternidad</title>

      <link rel="stylesheet" href="../css/index.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <script type="text/javascript">
        function redireccionar ()
        {
            window.location = "../index.html";
        }
        setTimeout("redireccionar()",4000);
      </script>

</head>

<body>

<?php
if(
  isset ( $_POST["email"],$_POST["nombre"],$_POST["telefono"])
  and  $_POST["email"] !="" and $_POST["nombre"] !="" and $_POST["telefono"] !="")
{

$destino = "holmancastillo7@gmai.com";
$correo = $_POST["email"];
$asunto = "MÁS INFORMACIÓN";
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$mensaje =  $_POST["mensaje"];

$mensaje = "Nombre: ". $nombre.",\r\nSu correo electronico es: ".$correo."\r\nSu teléfono es: ".$telefono."\r\nMensaje: ".$mensaje;




if(mail($destino, $asunto , $mensaje)){
  print("<div class='contenedor'><h2>El mensaje se ha enviado correctamente.</h2>
           <div>
            <img class='gif' src='../img/load.gif' alt='load'><p style='display: inline-block;'>Redireccionando al sitio web...</p>
           </div>
        </div>

       ");
}else
{
   print("<div class='contenedor'><h2>Ha fallado el servidor de correos, intente más tarde.</h2>
           <div>
            <img class='gif' src='../img/load.gif' alt='load'><p style='display: inline-block;'>Redireccionando al sitio web...</p>
           </div>
        </div>

       ");
}

}else{
   print("<div class='contenedor'><h2>Se ha presentado un error, completa los campos del formulario.</h2>
           <div>
             <a href='../contacto.html'>Formulario de contacto</a>
           </div>
        </div>

       ");
}
?>

</body>
</html>
