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
    <title>SERVICIOS</title>
  <!--PAQUETE DE LA PAGINA DE BOOTSTRAPS ES UN ENLACE A UN ARCHIVO CSS DE BOOTSTRAP QUE SE CARGA DESDE UN CND (Content Delivery Network) Y DARLE EL FORMATO A LA LOS CUADROS DE TEXTO-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--SCRIP PARA PODER ELEGIR CUALQUIER ICONO DE EL KIT QUE TENEMOS EN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/d8f04e9fe9.js" crossorigin="anonymous"></script>
    <!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_barra.css">
    <link rel="stylesheet" href="formats/css/estilos_servicios.css">
</head>
<!--CUERPO DE LA PAGINA-->
<body>
    <!-- SCRIPT QUE LLAMA LA FUNCION ELIMINAR Y PREGUNTA ANTES SI SE LIMINA UN PRODUCTO -->  
  <script>
    function eliminar(){
      var respuesta=confirm("¿ESTAS SEGURO QUE QUIERES ELIMINAR ESTE PRODUCTO?");
      return respuesta
    }
  </script>

    <nav>
      <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
        </label>
      <a href="#" class="enlace">
        <img src="formats/images/green.png" alt="" class="logo">
      </a>
      <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a class="active" href="servicios.php">Servicios</a></li>
        <li><a href="inventarios.php">Limpieza</a></li>
        <li><a href="inventarios2.php">Jardineria</a></li>
        <li>
            <a href="php/cerrar_sesion.php" class="btn btn-danger" style="color: white; padding: 5px 10px; text-align: center;">
                Cerrar Sesión
            </a>
        </li>
      </ul>
    </nav>

<div class="contenedor">
  
  <div class="cuadro">
    <h2>VENTAJAS COMPETITIVAS</h2>
    <p>- SERVICIO INTEGRALA todo tipo de inmuebles como Corporativos, Residenciales, Oficinas, Centros Comerciales, etc.</p>
    <p>- ATENCIÓN INMEDIATAA Reportes y Emergencias, asi como suministro de Materiales y Refacciones.</p>
    <p>- INFORMES DE TRABAJO Reportes estadísticos y fotograficos, detallados de labores mensuales, así como Elaboración de Programa de Actividades para control y revisión de la ejecución de las labores que se realizan en el servicio.</p>
    <p>- PERSONAL CAPACITADO Para atender todo tipo de necesidades y con amplia experiencía en el séctor.</p>
    <p>- EVALUACION Y DETECCIÓN DE NECESIDADES Asesoramiento personalizado e implantación de Servicio a la Medida.</p>
    <p>- POLIZAS DE RESPONSABILIDAD CIVIL</p>
  </div>

</div>

</body>
</html>