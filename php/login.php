<?php
  session_start();
  require 'sql_conn.php';
  $Query_User='SELECT * from Usuario;';
  $Result= getResult($Query_User);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include '../html/head.html';
  ?>
  <title>Login</title>
</head>
<body>
  <header>
    <?php
      include '../html/header.html';
    ?>
  </header>
  <section>
    <div class="container">
      <h1 style="text-align:center;">Administrador</h1>
      <div class="row">
          <div id="LoginContainer">
            <?php
              require 'login-process.php';
            ?>
              <form class="" action="login.php" method="post">
                <p style="margin-top:0;" class="LoginTitle">Usuario: </p>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i style="margin:0;" id="toggle_menu" class="fa fa-user" name="bars" aria-hidden="true"></i></span>
                  <input  type="text" class="form-control" placeholder="Ingrese el nombre de usuario" aria-describedby="basic-addon1" name="User" value="">
                </div>
                <p class="LoginTitle">Password: </p>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i style="margin:0;" id="toggle_menu" class="fa fa-key" name="bars" aria-hidden="true"></i></span>
                  <input  type="password" class="form-control" placeholder="Ingrese la contraseña de usuario" aria-describedby="basic-addon1" name="Pass" value="">
                </div>
                <input type="submit" style="display:block; width:100%; margin-top:30px;" class="btn btn-success" name="Submit" value="Ingresar">
              </form>
      </div>
    </div>
  </section>
  <footer>
    <?php
      include '../html/Topscroller-dark.html';
    ?>
  </footer>
</body>
</html>
