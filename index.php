<?php
session_start();

if(isset($_SESSION["email"])){
  $pageTitle = "Home";
  require_once("header-login.php");
}else {
  $pageTitle = "Home";
  require_once("header.php");
}
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
                  <img class="titulo-logo" src="img/logo_baja.png" alt="">
                  <p>
                    <button type="button" class="btn boton-dona">Doná</button>
                    <h5 class="subtitulos-carousel">Sabemos que es posible</h5>
                    <h5 class="subtitulos-carousel">Si todos colaboramos con un poco</h5>
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="titulo-carousel">Fundación los niños del mañana</h1>
                  <button type="button" class="btn boton-dona">Doná</button>
                  <h5>Sabemos que es posible</h5>
                  <p>Si todos colaboramos con un poco</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <img class="titulo-logo" src="img/logo_baja.png" alt="">
                  <p>
                    <button type="button" class="btn boton-dona">Doná</button>
                    <h5 class="subtitulos-carousel">Sabemos que es posible</h5>
                    <h5 class="subtitulos-carousel">Si todos colaboramos con un poco</h5>
                  </p>
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
         <p><a class="btn btn-secondary" href="preguntasFrecuentes.php" role="button">Conoce más </a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-4">
         <img class="rounded-circle" src="img/agrade.jpg" alt="Generic placeholder image" width="140" height="140">
         <h2>Agradecimientos</h2>
         <p>Conoce las empresas que colaboran con nosotros y hacen posible que ayudemos a tontos niños</p>
         <p><a class="btn btn-secondary" href="agradecimientos.php" role="button">Conoce más </a></p>
       </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    <?php
    require_once("footer.php");
    ?>
