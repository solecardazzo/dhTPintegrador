<?php
session_start();

require_once("helpers.php");

function validar($datos, $tipo){
  $errores = [];
  if(isset($datos["nombre"])){
    $nombre = trim($datos["nombre"]);
    if(empty($nombre)){
      $errores["nombre"] = "El campo no puede estar vacio";
    }
  }
  if(isset($datos["email"])){
    $email = trim($datos["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errores["email"] = "El email no es válido";
    }
  }
  $password = trim($datos["password"]);
  if(isset($datos["password"])){
    if(empty($password)){
      $errores["password"] = "El password no puede estar vacio";
    }elseif(strlen($password) < 6){
      $errores["password"] = "El password debe tener mínimo 6 cacteres";
    }
  }
  if(isset($datos["repassword"])){
    $repassword = trim($datos["repassword"]);
    if(empty($repassword)){
      $errores["repassword"] = "El campo no debe estar vacio";
    }
    if($password != $repassword){
      $errores["repassword"] = "Las contraseñas deben coincidir";
    }
  }
  if(isset($_FILES) && $tipo == "registro"){
    if($_FILES["avatar"]["error"] != 0){
      $errores["avatar"] = "No recibi la imagen";
    }
    $avatar = $_FILES["avatar"]["name"];
    $ext = pathinfo($avatar,PATHINFO_EXTENSION);
    if($ext != "jpg" && $ext != "png"){
      $errores["avatar"] = "La extensión debe ser PNG ó JPG";
    }
  }
  return $errores;
}

function armarAvatar($datos){
  $ext = pathinfo($datos["avatar"]["name"],PATHINFO_EXTENSION);
  //dd($datos);
  $nombreArchivo = date ("YmdH-i", filemtime($datos["avatar"]["tmp_name"])).".".$ext;
  $archivoSubir = dirname(__DIR__)."/archivos/". date ("YmdH-i", filemtime($datos["avatar"]["tmp_name"])).".".$ext;
  move_uploaded_file($datos["avatar"]["tmp_name"],$archivoSubir);
  return $nombreArchivo;
}

function armarUsuario($datos,$archivo){
  $usuario = [
    "nombre" => $datos["nombre"],
    "email" => $datos["email"],
    "password" => password_hash($datos[password], PASSWORD_DEFAULT),
    "avatar" => $archivo,
    "perfil" => 1
  ];
  return $usuario;
}

function guardarUsuario($usuarios){
  $json = json_encode($usuarios);
  file_put_contents("usuarios.json", $json.PHP_EOL, FILE_APPEND);
}
function buscarPorEmail($email){
  $usuarios = abrirBaseJSON("usuarios.json");
  foreach ($usuarios as $key => $value) {
    if($email == $value["email"]){
      return $value;
    }
  }
  return null;
}

function abrirBaseJSON($archivo){
  if(file_exists($archivo)){
    $json = file_get_contents($archivo);  // recupera el string con el contenido
    $json = explode(PHP_EOL, $json); //divide un string en varios strings
    array_pop($json); // extrae el ultimo elemento
    foreach ($json as $key => $value) {
      $arrayUsuarios[] = json_decode($value, true);
    }
    return $arrayUsuarios;
  }
  return null;
}

function seteoUsuario($usuario, $datos){
  session_start();
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["email"] = $usuario["email"];
  $_SESSION["avatar"] = $usuario["avatar"];
  $_SESSION["perfil"] = $usuario["perfil"];

  if(isset($datos["recordar"])){
    setcookie("email", $datos["email"], time()+3600); // guardo las cookies
    setcookie("password", $datos["password"], time()+3600);
  }
}

function validarAcceso(){
  if(isset($_SESSION["email"])){
    return true;
  }elseif (isset($_COOKIE["email"])) {
    $_SESSION["email"] = $_COOKIE["email"];
    $_SESSION["password"] = $_COOKIE["password"];
    return true;
  }else{
    return false;
  }
}

?>
