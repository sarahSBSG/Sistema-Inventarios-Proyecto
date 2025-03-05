<?php
    //INICIALIZAR LAS SESIONES
    session_start();
    //CONDICION PARA DETERMINAR SI EXISTE EL USUARIO Y SINO MANDAR UN MENSAJE DE ERROR
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("PORFAVOR, DEBES INICIAR SESION");
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!--ETIQUETAS BASICAS PARA EL INICIO DE PAGINA WEB-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--NOMBRE DE COMO APARECERA LA PAGINA WEB-->
    <title>INICIO</title>
  <!--PAQUETE DE LA PAGINA DE BOOTSTRAPS ES UN ENLACE A UN ARCHIVO CSS DE BOOTSTRAP QUE SE CARGA DESDE UN CND (Content Delivery Network) Y DARLE EL FORMATO A LA LOS CUADROS DE TEXTO-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--SCRIP PARA PODER ELEGIR CUALQUIER ICONO DE EL KIT QUE TENEMOS EN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/d8f04e9fe9.js" crossorigin="anonymous"></script>
    <!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_barra.css">
    <link rel="stylesheet" href="formats/css/estilos_inicio.css">
</head>
<!--CUERPO DE LA PAGINA-->
<body>
    <nav>
      <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
        </label>
      <a href="#" class="enlace">
        <img src="formats/images/green.png" alt="" class="logo">
      </a>
      <ul>
        <li><a class="active" href="inicio.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="inventarios.php">Limpieza</a></li>
        <li><a href="inventarios2.php">Jardineria</a></li>
        <li>
            <a href="php/cerrar_sesion.php" class="btn btn-danger" style="color: white; padding: 5px 10px; text-align: center;">
                Cerrar Sesión
            </a>
        </li>
      </ul>
    </nav>

  <div class="container">

    <div class="card">
      <figure>
        <img src="formats/images/1.png">
      </figure>
      <div class="contenido">
        <h3>MANTENIMIENTO</h3>
        <div style="text-align: center;">
          <i class="fa-solid fa-toolbox"></i>
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <i class="fa-solid fa-toolbox"></i>
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <i class="fa-solid fa-toolbox"></i>
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <i class="fa-solid fa-toolbox"></i>
          <i class="fa-solid fa-screwdriver-wrench"></i>
        </div>
        <p>Mantener su inmueble en perfectas condiciones es nuestra prioridad, así como prevenir fallas y asegurar la conservación de sus instalaciones, con el propósito de reducir costos a largo plazo, por ello, ponemos a su disposición una amplia línea de servicios para llevar a cabo mantenimientos preventivos, correctivos y trabajos especializados.</p>
        <a href="#">Leer mas...</a>
      </div>
    </div>

    <div class="card">
      <figure>
        <img src="formats/images/2.png">
      </figure>
      <div class="contenido">
        <h3>LIMPIEZA</h3>
        <div style="text-align: center;">
          <i class="fa-solid fa-broom"></i>
          <i class="fa-solid fa-bucket"></i>
          <i class="fa-solid fa-broom"></i>
          <i class="fa-solid fa-bucket"></i>
          <i class="fa-solid fa-broom"></i>
          <i class="fa-solid fa-bucket"></i>
          <i class="fa-solid fa-broom"></i>
          <i class="fa-solid fa-bucket"></i>
        </div>
        <p>División dedicada al servicio profesional y especializado en Limpieza Integral, el cual incorpora todas las labores necesarias para la conservación, higiene y desinfección de instalaciones.</p>
        <a href="#">Leer mas...</a>
      </div>
    </div>

    <div class="card">
      <figure>
        <img src="formats/images/3.png">
      </figure>
      <div class="contenido">
        <h3>JARDINERIA</h3>
        <div style="text-align: center;">
          <i class="fa-solid fa-faucet-drip"></i>
          <i class="fa-solid fa-recycle"></i>
          <i class="fa-solid fa-faucet-drip"></i>
          <i class="fa-solid fa-recycle"></i>
          <i class="fa-solid fa-faucet-drip"></i>
          <i class="fa-solid fa-recycle"></i>
          <i class="fa-solid fa-faucet-drip"></i>
          <i class="fa-solid fa-recycle"></i>
        </div>
        <p>Contamos con una amplia gama de servicios para mantener, conservar y restaurar sus áreas verdes, de este modo, podemos garantizar la salud y armonía de estos espacios destinados a realzar la belleza de su inmueble.</p>
        <a href="#">Leer mas...</a>
      </div>
    </div>

  </div>

<div class="info">
  <h3>MANTENIMIENTO</h3>
  <p>El mantenimiento es un sistema que consta de varios elementos en forma de instalaciones (máquina), reemplazo de componentes o repuestos (material), costos de mantenimiento (dinero), planificación de actividades de mantenimiento (métodos) y ejecución de mantenimiento (hombre).</p>
  <p>Tiene como objetivo reducir o incluso evitar daños en los equipos al garantizar un nivel de confiabilidad y disponibilidad y minimizar los costos de mantenimiento.</p>
  <p>- Mantenimiento planificado</p>
  <p>- Mantenimiento no planificado</p>
  <p>El concepto suele emplearse con referencia a los procedimientos preventivos y de reparación que se llevan a cabo en edificios y máquinas para que estén en condiciones de seguir en funcionamiento. El mantenimiento implica la preservación y la restauración de los elementos.
    Se denomina mantenimiento preventivo a aquel que se orienta a conservar las instalaciones y los mecanismos. Para esto se realizan revisiones en equipos que se encuentran en funcionamiento. La finalidad del mantenimiento preventivo es minimizar el riesgo de fallos: esto se puede lograr reemplazando piezas que se encuentran gastadas, por ejemplo.
  </p>
  <img src="formats/images/4.png">
  <img src="formats/images/5.png">
  <img src="formats/images/6.png">
</div>

<div class="info2">
  <h3>LIMPIEZA</h3>
  <p>Cuando hablamos de limpieza, nos referimos usualmente al acto de limpiar, o sea, de eliminar la suciedad y los residuos que haya en un ambiente, una superficie o un objeto cualquiera. Al mismo tiempo, nos podemos referir al grado de pulcritud que tenga dicho espacio, ambiente u objeto.</p>
  <p>Normalmente, la limpieza involucra el uso de agua y de alguna sustancia limpiadora, o bien de la acción mecánica de algún objeto (como una piedra, o un cepillo) sobre la superficie de aquello que se desea limpiar.</p>
  <p>- Limpieza manual, la que se lleva a cabo con la fuerza de las manos, empleando cepillos, paños o cualquier otro instrumento sobre la superficie que deseamos limpiar. Es lo que hacemos, por ejemplo, al lavarnos los dientes.</p>
  <p>- Limpieza por remojo, en la que sumergimos aquello que deseamos limpiar en un recipiente lleno de agua y/o detergentes, y lo dejamos allí dentro durante un rato. Luego el objeto se extrae, se exprime y se observa qué tanto se haya limpiado. En caso de ser necesario, se lo sumerge un rato más. Es lo que hacen las lavadoras de ropa, en distintos ciclos.</p>
  <p>- Limpieza por aspersión, que consiste en el uso de maquinarias capaces de succionar lo sucio y la materia sobrante, como aspiradoras, o bien de emitir chorros de aire o agua a grandes presiones, como las pistolas hidráulicas. Así es como limpian los automóviles en los autolavados, o como limpiamos nuestras alfombras con aspiradoras.</p>
  <p>- Limpieza con espuma, en la que se utilizan detergentes o solventes químicos orgánicos que al aplicarse sobre la superficie producen mucha espuma. Esta última captura la mugre y los microorganismos y luego se la puede retirar mecánicamente, dejando limpia la superficie. Este es, de hecho, el principio con el que actúa el jabón.</p>
  <img src="formats/images/7.png">
  <img src="formats/images/8.png">
  <img src="formats/images/9.png">
</div>

<div class="info3">
  <h3>JARDINERIA</h3>
  <p>La jardinería, es una palabra que se utiliza para poder referirse a la técnica que implica el poder cultivar, cuidar y proteger a los jardines</p>
  <p>La jardinería en sí es bastante importante por distintas razones. Es un medio ideal para lograr mantener un buen estado de salud tanto del suelo como de la fauna que habita en un determinado jardín pero además es una ciencia y una actividad que puede traer grandes beneficios a las personas que la practican. La jardinería es un medio también por el cual se puede ayudar a reducir el impacto del medio ambiente y de darle protección a los diferentes tipos de plantas que en él se coloquen.</p>
  <h3>RIESGOS</h3>
  <p>La jardinería puede tener algunos riesgos, los cuales en realidad no son muy comunes.</p>
  <p>Un aspecto importante es el uso de químicos y de pesticidas, éstos, cuando no son autorizados o cuando no se saben utilizar, podrían ocasionar graves riesgos que incluyen intoxicaciones. En este aspecto es muy importante tener en cuenta las recomendaciones que dan los expertos. Además, el mal uso de las tijeras u otras herramientas de corte podrían provocar heridas de consideración en el cuerpo.</p>
  <img src="formats/images/10.png">
  <img src="formats/images/11.png">
  <img src="formats/images/12.png">
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    const infoSections = document.querySelectorAll(".info, .info2, .info3");

    cards.forEach((card, index) => {
      const button = card.querySelector("a");
      button.addEventListener("click", (e) => {
        e.preventDefault();

        // Ocultar todas las secciones de información
        infoSections.forEach(section => section.classList.remove("active"));

        // Mostrar la sección correspondiente al índice de la tarjeta
        infoSections[index].classList.add("active");
      });
    });
  });
</script>

</body>
</html>