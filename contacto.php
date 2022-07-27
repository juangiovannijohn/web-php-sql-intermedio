<?php
include('includes/header.php');
?>
<!--
En ésta página se obtienen las consultas ingresadas en el formulario, 
se las envia por medio del metodo POST al archivo "enviar_consulta.php", 
se guarda la consulta en una tabla de la base de datos y se muestran todas 
las consultas en la pagina "clientes" ingresando con el rol de "admin" 
-->
<section id="contenido">
<h2>Contáctenos - Unidad VIII</h2>
<form class="my-4" id="contact-form" action="enviar_consulta.php" method="post">
  <div class="row g-3">
    <div class="col-sm">
      <input type="text" class="form-control" placeholder="Nombre" name="consulta_nombre" required>
    </div>
    <div class="col-sm">
      <input type="text" class="form-control" placeholder="Apellido" name="consulta_apellido" required>
    </div>
    <div class="col-sm">
      <input type="email" class="form-control" placeholder="Correo" name="consulta_correo" required>
    </div>
  </div>
  <div class="my-3">
    <textarea class="form-control"  rows="3" name="consulta_mensaje" placeholder="Consulta" required></textarea>
  </div>
  <div class="d-grid">
    <input class="btn btn-primary" type="submit" name="consulta_submit" value="Enviar">
  </div>
</form>
<?php
  //Mensaje de alerta
  if (isset($_SESSION['alert'])) { ?>
    <div class="alert alert-<?php echo $_SESSION['color'];  ?> alert-dismissible fade show my-3" role="alert">
      <p><?php echo $_SESSION['alert']; ?></p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION['alert']); ?></button>
    </div>
  <?php } 
?>
  <p style="font-style: italic;"> Si quieres ver todas las consultas, dirigete a la seccion de <a href="clientes.php">clientes</a>.</p>
</section>
<?php
include('includes/footer.php');
?>
