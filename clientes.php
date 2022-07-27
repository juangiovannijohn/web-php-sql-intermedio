<?php
include('includes/header.php');
?>
<!--
En ésta página se utiliza un formulario para enviar la información del 
formulario del login a través del metodo POST a un archivo externo llamado 
"validar_cliente.php" donde se corrobora con la base de datos los datos ingresados, 
en caso de ser el login exitoso se crea una sesion activa y se muestra contenido 
exclusivo para el tipo de rol. En éste ejemplo hay dos roles, administrador: 
puede ver las consultas realizadas desde la pagina "contacto"; rol cliente: puede 
ver información exclusiva de los clientes. 
-->
<section id="contenido">
  <h2>Clientes - Unidad VII</h2>
  <?php if (!isset($_SESSION['user_role']) ){ ?>
    <h3 class="h3 mt-4">Iniciar Sesion</h3>
    <div class="row">
      <div class="col">
        <p>Prueba con:</p>
        <ul>
          <li> <strong> Email:</strong> admin@gmail.com</li>
          <li><strong>Password:</strong> admin</li>
        </ul>
      </div>
      <div class="col">
        <p>O con:</p>
        <ul>
          <li><strong>Email:</strong> cliente@gmail.com</li>
          <li><strong>Password:</strong> phpintermedio</li>
        </ul>
      </div>
    </div>
    <form method="post" action="validar_cliente.php"  >
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="login_email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="login_password" class="form-control" id="exampleInputPassword1" required>
      </div>
      <input type="submit" class="btn btn-primary" name="login_submit" value="Ingresar">
    </form>
  <?php } ?>
  <?php
  //Validar si la session clientes se creó correctamente
    if ($_SESSION['user_role'] == 'cliente') {
    //luego se crea un boton para cerrar sesion
  ?>
  <h3 class="h3 mt-4">¡ Bienvenid@ !</h3>
  <form class="my-3" action="validar_cliente.php" method="post">
    <input class="btn btn-secondary" type="submit" name="logout" value="Cerrar sesion">
  </form>
  <?php
    //se incluye el codigo a mostrar a usuarios conectados y validados
    include('contenido_clientes.php');
    }elseif (isset($_SESSION['login_error'])) {
      //mensaje de error en caso de validacion fallida
  ?>
    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
      <p>
        <?php echo $_SESSION['login_error']; ?>
      </p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php };
  if ($_SESSION['user_role'] == 'admin') {
  ?>
    <h3 class="h3 mt-4">¡ Bienvenid@ !</h3>
    <form class="my-3" action="validar_cliente.php" method="post">
      <input class="btn btn-secondary" type="submit" name="logout" value="Cerrar sesion">
    </form>
    <div class="row row-cols-1 row-cols-md-3 g-3 my-3" style="justify-content: space-around;">
      <?php
      include('db.php');
      $query_select = mysqli_query($connect_db, "SELECT * FROM consultas ORDER by id_consulta DESC");
      while($consultas_listado = mysqli_fetch_assoc($query_select)){ ?>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $consultas_listado['nombre'].' '.$consultas_listado['apellido']; ?></h5>
            <h6 class="card-title"><em> <?php echo $consultas_listado['correo']; ?></em></h6>
            <p class="card-text">Consulta: <?php echo '<br>'.$consultas_listado['consulta']; ?></p>
            <form class="my-3" action="responder_correo.php" method="post">
              <input class="btn btn-primary" type="submit" name="responder_submit" value="Responder">
            </form>
          </div>
        </div>
      <?php  } } ?>
    </div>
    <?php if(isset($_SESSION['respondido'])){ ?>
      <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
        <p>
          <?php echo $_SESSION['respondido']; ?>
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php } ?>
</section>
<?php
include('includes/footer.php');
?>
