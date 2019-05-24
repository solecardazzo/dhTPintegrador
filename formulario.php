<?php
$pageTitle = "Registro";
require("header.php");
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
              <form class="form-signin">
                <div class="form-label-group">
                  <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                  <label for="inputUserame">Nombre de Usuario</label>
                </div>

                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                  <label for="inputEmail">Email</label>
                </div>

                <hr>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Contraseña</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                  <label for="inputConfirmPassword">Confirma tu contraseña</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrate</button>
                <a class="d-block text-center mt-2 small" href="login.html">Iniciá sesión</a>
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
require("footer.php");
?>
