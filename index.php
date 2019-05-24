    <?php
    $pageTitle = "Home";
    require("header.php");
    ?>

      <section>
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carousel01.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <button type="button" class="btn boton-dona">Doná</button>
                  <h5>Sabemos que es posible</h5>
                  <p>Si todos colaboramos con un poco</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <button type="button" class="btn boton-dona">Doná</button>
                  <h5>Sabemos que es posible</h5>
                  <p>Si todos colaboramos con un poco</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <button type="button" class="btn boton-dona">Doná</button>
                  <h5>Sabemos que es posible</h5>
                  <p>Si todos colaboramos con un poco</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </section>

      <!-- Three columns of text below the carousel -->
     <div class="row marketing">
       <div class="col-lg-4">
         <img class="rounded-circle" src="img/hogar.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>Eventos</h2>
         <p>Todas las ultimas novedades de nuestra fundacion, los proximos eventos y lo que fuimos haciendo hasta ahora</p>
         <p><a class="btn btn-secondary" href="#" role="button">Conoce más </a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-4">
         <img class="rounded-circle" src="img/preg_frec.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>Ayudanos</h2>
         <p>Como podes sumarte, donar y todo lo que queres saber de nosotros</p>
         <p><a class="btn btn-secondary" href="preguntas frecuentes.html" role="button">Conoce más </a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-4">
         <img class="rounded-circle" src="img/agrade.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>Agradecimientos</h2>
         <p>Conoce las empresas que colaboran con nosotros y hacen posible que ayudemos a tontos niños</p>
         <p><a class="btn btn-secondary" href="agradecimientos.php" role="button">Conoce más </a></p>
       </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


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
