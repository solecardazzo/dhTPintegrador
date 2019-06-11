<?php
// cargo las funciones para validar los datos del login
require_once("controladores/funciones.php");
if($_POST){
  $errores = validar($_POST, "login");
  if(count($errores) == 0){
    $usuario = buscarPorEmail($_POST["email"]);

    if($usuario == null){
      $errores["email"] = "Acceso incorrecto al sistema";
    }else{
      if(password_verify($_POST["password"], $usuario["password"]) == false){
        $errores["password"] = "Acceso incorrecto al sistema";
      }else {
        seteoUsuario($usuario, $_POST);
        if(validarAcceso()){
          // echo "entre acaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
          // dd($_SESSION);
          header("location: index.php");
          exit;
        }else{
          header("location: registro.php");
          exit;
        }
      }
    }
  }
}
// Cargo el header de la pagina
session_start();
if(isset($_SESSION["email"])){
  $pageTitle = "Login";
  require_once("header-login.php");
}else {
  $pageTitle = "Login";
  require_once("header.php");
}

?>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Iniciá sesión</h5>
            <form class="form-signin" action="" method="POST" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email address">
                <label for="inputEmail">Email</label>
              </div>
              <hr>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
                <label for="inputPassword">Contraseña</label>
                <span class="text-danger"> <?=(isset($errores["email"]))? $errores["email"]:""?></span>
                <span class="text-danger"> <?=(isset($errores["password"]))? $errores["password"]:""?></span>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciá sesión</button>
              <div class="d-flex justify-content-center">
                <label for="">
                  <input type="checkbox" name="recordar" value=""  checked > Recordarme
                </label>
              </div>
              <br>
              <div class="card-footer">
                <div class="d-flex justify-content-center">
                  <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>


<?php
require_once("footer.php");
?>
