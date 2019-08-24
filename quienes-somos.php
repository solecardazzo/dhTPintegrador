<?php
session_start();

if(isset($_SESSION["email"])){
  $pageTitle = "quienes-somos";
  require_once("header-login.php");
}else {
  $pageTitle = "dona";
  require_once("header.php");
}

?>

  <section class="agradecimientos">

    <div class="titulos-agradecimientos">
      <h2 class="title-agrade"> Quienes somos </h2>
      <p>
        Nosotros: Fundación Los Niños del Mañana.
      </p>
    </div>

    <div class="container-fluid col-lg-12">
      <p>
        La Fundación Los Niños del Mañana, se inicia en el año 2001, consiguiendo su personería jurídica en el año 2002.
        Está destinada a niños de 0 a 13 años de edad, que se encuentran en zonas inhóspitas e inaccesibles de la cordillera Argentina, con temperaturas en invierno de 30° bajo cero, fuertes vientos, sin agua potable, sin luz, sin viviendas dignas.
        <br>
        No se identifica con banderas políticas ni religiosas, pero sí espirituales, transmitiendo cariño, valores, sueños e ilusiones, sin más recursos que el ejemplo y la acción.
        </p>
        <p class="titulos-agradecimientos"> Actual Consejo de administración: </p>
        <ul>
          <li type="square"> Presidente: Raúl Abel Bagatello </li>
          <li type="square"> Vicepresidente: Juan José Costabella </li>
          <li type="square"> Secretario: Alberto Jesús Lapasini </li>
          <li type="square"> Tesorera: Gabriela Alejandra Furlani </li>
          <li type="square"> Prosecretaria: Lidia Susana Comini </li>
          <li type="square"> Protesorera: Vilma Susana Bagatello </li>
        </ul>
    </div>

  </section>

<?php
require_once("footer.php");
?>
