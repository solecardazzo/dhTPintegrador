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

      <div class="card col-sm-6" style="width: 18rem;">
        <img src="img/hockey-mendoza.jpg" class="card-img-top" alt="Hockey en Mendoza">
        <div class="card-body">
          <h5 class="card-title">Hockey en Mendoza</h5>
          <p class="card-text"> En Mendoza, la Liga Provincial de Hockey de Godoy Cruz organiza el torneo Liga 11. Este certamen tiene la particularidad de jugarse una vez por año y con 11 jugadoras por equipo, pero la otra característica es la de ayudar a quienes más lo necesitan. Así es como mamis y ex jugadoras federadas participan de esta actividad deportiva y solidaria.</p>
        </div>
      </div>

      <div class="card col-sm-6" style="width: 18rem;">
        <img src="img/te-solidario.jpg" class="card-img-top" alt="Té Solidario">
        <div class="card-body">
          <h5 class="card-title">Té Solidario</h5>
          <p class="card-text">En la ciudad de Villa María, el pasado domingo 27 de julio, se realizó un té solidario a beneficio de la fundación, organizado por voluntarios.El té se realizó por la tarde, donde asistieron 90 personas que contaron con mesa dulce, obsequios, show en vivo y bingo.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card col-sm-6" style="width: 18rem;">
        <img src="img/oftalmologos.jpg" class="card-img-top" alt="Oftalmólogos">
        <div class="card-body">
          <h5 class="card-title">Visita de Oftalmólogos</h5>
          <p class="card-text">Queremos agradecer la valiosa colaboración de la Dra. Sabrina Lara y su solidario equipo de colaboradores Y colegas de la Universidad Nacional de Villa María y la Universidad Atlántida Argentina, que lograron atender a 130 personas, entre ellos, los niños del comedor de Chancaní, perteneciente a la Fundación los niños del mañana.</p>
        </div>
      </div>

      <div class="card col-sm-6" style="width: 18rem;">
        <img src="img/torta-del-cuore.jpg" class="card-img-top" alt="Torta del Cuore">
        <div class="card-body">
          <h5 class="card-title">Torta del Cuore</h5>
          <p class="card-text">Como cada fin de año, los voluntarios de nuestra fundación en Italia hacen un evento llamado Torta del Cuore.Consiste en armar una torta gigante de 5000 porciones, en las cuales todas las pastelerías de la zona, trabajan en conjunto para armarla. Luego se invita a varios colegios y personas, para que se acerquen a éste evento solidario, pasar un lindo día y así ayudar a los niños necesitados de la Argentina.</p>
        </div>
      </div>

  </div>

  </section>




<?php
require_once("footer.php");
?>
