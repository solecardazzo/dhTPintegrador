<?php
// cargo las funciones para validar los datos del formulario
require_once("helpers.php");
require_once("controladores/funciones.php");
if($_POST){
  $errores = validar($_POST);
  if(count($errores)== 0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: login.php");
    exit;
  }
}
// Cargo el header de la pagina
$pageTitle = "Registro";
require_once("header.php");
?>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registrate</h5>
            <form class="form-signin" action="" method="POST" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" placeholder="Username" name="nombre" >
                <label for="inputUserame">Nombre de Usuario</label>
                <span class="text-danger"> <?=(isset($errores["nombre"]))? $errores["nombre"]:""?></span>
              </div>
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" value="<?= isset($errores["enail"])? "": persistir("enail") ?>" placeholder="Email address" name="email">
                <label for="inputEmail">Email</label>
                <span class="text-danger"> <?=(isset($errores["email"]))? $errores["email"]:""?></span>
              </div>
              <hr>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <label for="inputPassword">Contraseña</label>
                <span class="text-danger"> <?=(isset($errores["password"]))? $errores["password"]:""?></span>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" name="repassword">
                <label for="inputConfirmPassword">Confirma tu contraseña</label>
                <span class="text-danger"> <?=(isset($errores["repassword"]))? $errores["repassword"]:""?></span>
              </div>
              <div class="form-label-group">
                <p class="text-center">Cargar foto de perfil</p>
                <input type="file" id="inputavatar" name="avatar">
                <span class="text-danger"> <?=(isset($errores["avatar"]))? $errores["avatar"]:""?></span>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrate</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Registrate con Google </button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Registrate con Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
require_once("footer.php");
?>
