<?php
session_start();

if(isset($_SESSION["email"])){
  $pageTitle = "eventos";
  require_once("header-login.php");
}else {
  $pageTitle = "eventos";
  require_once("header.php");
}

?>

  <section class="agradecimientos">

    <div class="titulos-agradecimientos">
      <h2 class="title-agrade"> Eventos </h2>
      <p>
        Conocé los eventos a beneficio que realizamos para ayudar a niños y niñas de Argentina.
      </p>
    </div>

    <div class="row">
      <div class="card "col-sm-6"" style="width: 18rem;">
        <img src="/img/hockey-mendoza.jpg" class="card-img-top" alt="Hockey en Mendoza">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card "col-sm-6"" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card "col-sm-6"" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card "col-sm-6"" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

  </div>

  </section>




<?php
require_once("footer.php");
?>
