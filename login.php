<?php
$pageTitle = "Login";
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
            <h5 class="card-title text-center">Iniciá sesión</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Nombre de Usuario</label>
              </div>
              <hr>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Contraseña</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciá sesión</button>
              <div class="d-flex justify-content-center">
                <label for="">
                  <input type="checkbox" name="recordarUsuario" value=""  checked > Recordarme
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
