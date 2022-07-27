<?php
session_start();
$_SESSION['respondido'] = 'Respondido!';
header('Location: clientes.php');

 ?>
