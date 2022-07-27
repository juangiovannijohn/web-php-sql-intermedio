<?php
session_start();
include('db.php');

if (isset($_POST['consulta_submit'])) {
  $consulta_nombre = $_POST['consulta_nombre'];
  $consulta_apellido = $_POST['consulta_apellido'];
  $consulta_correo =  $_POST['consulta_correo'];
  $Consulta_mensaje =  $_POST['consulta_mensaje'];

  $consulta_enviada = mysqli_query($connect_db, " INSERT INTO consultas VALUES (DEFAULT,'$consulta_nombre','$consulta_apellido','$consulta_correo','$Consulta_mensaje')");
  //compruebo si la consulta fue enviada correctamente o no. Y creo la informacion para la alerta a traves de sesiones.
  if (!$consulta_enviada) {
    $_SESSION['alert'] = 'Error en enviar la consulta, pruebe más tarde';
    $_SESSION['color'] = 'danger';
  }else {
    $_SESSION['alert'] = 'Mensaje enviado correctamente, a la brevedad nos pondremos en contacto contigo.';
    $_SESSION['color'] = 'success';
  }
  header('Location: contacto.php#contact-form');
}
