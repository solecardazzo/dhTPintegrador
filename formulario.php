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

    <footer class="section footer-classic context-dark bg-image bg-dark piepagina">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <a class="brand" href="index.html"><img class="imagen-logo" src="img/logo_baja.png" alt="" width="140" height="37" srcset="img/logo_baja.png 2x"></a>
                <p> Trabajamos por l@s niños y niñas que se encuentran en zonas inhóspitas e inaccesibles de la cordillera Argentina. </p>
                <!-- Rights-->
                <p class="rights"><span>© </span><span class="copyright-year">2019</span><span> </span><span>Waves</span><span>. </span><span> Todos los derechos reservados</span></p>
              </div>
            </div>

            <div class="col-md-4">
              <h5>Contacto</h5>
              <dl class="contact-list">
                <dt> Informes: </dt>
                <dd>de Lunes a Viernes de 8 a 17 hs. </dd>
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">fnm.sedecentral@gmail.com </a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Teléfono:</dt>
                <dd><a href="tel:#">+53 351 152532021</a> <span>or</span> <a href="tel:#">+53 351 152532022</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Nuestro Sitio</h5>
              <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Quienes Somos</a></li>
                <li><a href="#">Area de Distribución</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Agradecientos</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
