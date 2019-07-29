<?php
require_once("autoload.php");
if ($_POST){
  //Esta variable es quien controla si se desea guardar en archivo JSON o en MYSQL
  $tipoConexion = "MYSQL";
  // Si la función retorn false, significa que se va a guardar los datos en JSON, de lo contrario se guardará los datos en MYSQL
  if($tipoConexion=="JSON"){
    $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_FILES );

    $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);

    if(count($errores)==0){
      $usuarioEncontrado = $json->buscarEmail($usuario->getEmail());

      if($usuarioEncontrado != null){
        $errores["email"]="Usuario ya registrado";
      }else{
        $avatar = $registro->armarAvatar($usuario->getAvatar());
        $registroUsuario = $registro->armarUsuario($usuario,$avatar);

        $json->guardar($registroUsuario);

        redirect ("login.php");
      }
    }
  }
 else{
   //Si arriba en la variable $tipoConexion se coloco "MYSQL", entonces genero todo el trabajo pero con MYSQL.
  //Aquí genero mi objeto usuario, partiendo de la clase Usuario
  $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_FILES );
  //Aquí verifico si los datos registrados por el usuario pasan las validaciones
  $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
  //De no existir errores entonces:
  if(count($errores)==0){
    //Busco a ver si el usuario existe o no en la base de datos
    $usuarioEncontrado = BaseMYSQL::buscarPorEmail($usuario->getEmail(),$pdo,'users');
    if($usuarioEncontrado != false){
      $errores["email"]= "Usuario ya Registrado";
    }else{
      //Aquí guardo en el servidor la foto que el usuario seleccionó
      $avatar = $registro->armarAvatar($usuario->getAvatar());
      //Aquí procedo a guardar los datos del usuario en la base de datos, ,aquí le paso el objeto PDO, el objeto usuario, la tabla donde se va a guardar los datos y el nombre del archivo de la imagen del usuario.
      BaseMYSQL::guardarUsuario($pdo,$usuario,'users',$avatar);
      //Aquí redirecciono el usuario al login
      header("location: login.php");
    }
  }

 }
}

// // cargo las funciones para validar los datos del formulario
// require_once("helpers.php");
// require_once("controladores/funciones.php");
// if($_POST){
//   $errores = validar($_POST, "registro");
//   if(count($errores) == 0){
//     $avatar = armarAvatar($_FILES);
//     $usuario = armarUsuario($_POST, $avatar);
//     guardarUsuario($usuario);
//     header("location: login.php");
//     exit;
//   }
// }
//
// Cargo el header de la pagina
//session_start();
if(isset($_SESSION["email"])){
  $pageTitle = "Registro";
  require_once("header-login.php");
}else {
  $pageTitle = "Registro";
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
            <h5 class="card-title text-center">Registrate</h5>
            <form class="form-signin" action="" method="POST" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" placeholder="Username" name="nombre" >
                <label for="inputUserame">Nombre </label>
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
                <input type="file" id="inputavatar" name="avatar" value="<?= isset($errores["avatar"])? "": persistir("avatar") ?>>
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
