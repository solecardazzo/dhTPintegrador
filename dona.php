<?php
session_start();

if(isset($_SESSION["email"])){
  $pageTitle = "dona";
  require_once("header-login.php");
}else {
  $pageTitle = "dona";
  require_once("header.php");
}

?>

  <section class="agradecimientos">

    <div class="titulos-agradecimientos">
      <h2 class="title-agrade"> Colaborá con nosotros </h2>
      <p>
        Tu compromiso solidario hace posible que ayudemos a tantos niños de la Argentina.
      </p>
    </div>


  <div class="row">
  <div class="col-md-4">
  	<figure class="card card-product">
  		<div class="img-wrap">
  			<img class= "img-thumbnail" src="img/mug-solidaridad.jpg">
  		</div>
  		<figcaption class="info-wrap">
  			<a class="title-agrade"> Taza </a>
  			<div class="action-wrap">
  				<a href="#" class="btn btn-primary btn-sm float-right"> Comprar </a>
  				<div class="price-wrap h5">
  					<span class="price-new"> $200 </span>
  				</div> <!-- price-wrap.// -->
  			</div> <!-- action-wrap -->
  		</figcaption>
  	</figure> <!-- card // -->
  </div> <!-- col // -->
  <div class="col-md-4">
  	<figure class="card card-product">
  		<div class="img-wrap"> <img class= "img-thumbnail" src="img/remera-solidaridad.jpg">
  		</div>
  		<figcaption class="info-wrap">
  			<a class="title-agrade"> Remera </a>
  			<div class="action-wrap">
  				<a href="#" class="btn btn-primary btn-sm float-right"> Comprar </a>
  				<div class="price-wrap h5">
  					<span class="price-new"> $600 </span>
  				</div> <!-- price-wrap.// -->
  			</div> <!-- action-wrap -->
  		</figcaption>
  	</figure> <!-- card // -->
  </div> <!-- col // -->
  <div class="col-md-4">
  	<figure class="card card-product">
  		<div class="img-wrap"> <img class= "img-thumbnail" src="img/bag-solidaridad.jpg">
  		</div>
  		<figcaption class="info-wrap">
  			<a class="title-agrade"> Bolsa de Tela </a>
  			<div class="action-wrap">
  				<a href="#" class="btn btn-primary btn-sm float-right"> Comprar </a>
  				<div class="price-wrap h5">
  					<span class="price-new"> $300 </span>
  				</div> <!-- price-wrap.// -->
  			</div> <!-- action-wrap -->
  		</figcaption>
  	</figure> <!-- card // -->
  </div> <!-- col // -->


  </div> <!-- row.// -->


  </section>

<?php
require_once("footer.php");
?>
