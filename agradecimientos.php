<?php
session_start();

if(isset($_SESSION["email"])){
  $pageTitle = "Agradecimientos";
  require_once("header-login.php");
}else {
  $pageTitle = "Agradecimientos";
  require_once("header.php");
}

?>

  <section class="agradecimientos">
    <div class="titulos-agradecimientos">
      <h2 class="title-agrade"> Agradecimientos </h2>
      <p>
        Las siguientes empresas colaboran con la Fundación.
      </p>
      <p>
        Su compromiso solidario hace posible que ayudemos a tantos niños de la Argentina.
      </p>
    </div>

    <div class="row no-gutters agrade-container">
      <div class="col"><a class="social-inner" href="#"><img src="img/atilra.jpg" alt=""></a></div>
      <div class="col"><a class="social-inner" href="#"><img src="img/cali_logo.jpg" alt=""></a></div>
      <div class="col"><a class="social-inner" href="#"><img src="img/districar_logo.jpg" alt=""></a></div>
      <div class="col"><a class="social-inner" href="#"><img src="img/fadepa_logo.jpg" alt=""></a></div>
    </div>

    <div class="row no-gutters agrade-container">
      <div class="col"><a class="social-inner" href="#"><img src="img/iso_rosamonte.jpg" alt=""></a></div>
      <div class="col"><a class="social-inner" href="#"><img src="img/LOGO CONTA.jpg" alt=""></a></div>
      <div class="col"><a class="social-inner" href="#"><img src="img/logo_lospinos.jpg" alt=""></a></div>
      <div class="col"><a class="social-inner" href="#"><img src="img/logo-epta.jpg" alt=""></a></div>
    </div>
  </section>

<?php
require_once("footer.php");
?>
