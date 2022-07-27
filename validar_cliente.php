<?php
session_start();
include('db.php');

//validacion login
if (isset($_POST['login_submit'])) {
  $login_email = $_POST['login_email'];
  $login_pass = $_POST['login_password'];

  if ($login_email == 'cliente@gmail.com' && $login_pass == 'phpintermedio') {
    $_SESSION['user_role'] = 'cliente';
  }elseif ($login_email == 'admin@gmail.com' && $login_pass == 'admin') {
    $_SESSION['user_role'] = 'admin';
  }
  else{
    $_SESSION['login_error'] = 'Error al iniciar sesion !';
  }

  header('Location: clientes.php');
}


//codigo para cerrar session
if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: clientes.php');
}
