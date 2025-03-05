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
    <title>INVENTARIO JARDINERIA</title>
    <title>INVENTARIOS</title>
  <!--PAQUETE DE LA PAGINA DE BOOTSTRAPS ES UN ENLACE A UN ARCHIVO CSS DE BOOTSTRAP QUE SE CARGA DESDE UN CND (Content Delivery Network) Y DARLE EL FORMATO A LA LOS CUADROS DE TEXTO-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--SCRIP PARA PODER ELEGIR CUALQUIER ICONO DE EL KIT QUE TENEMOS EN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/d8f04e9fe9.js" crossorigin="anonymous"></script>
    <!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_inv.css">
</head>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("input[type='text']").forEach(input => {
      input.addEventListener("input", function () {
        this.value = this.value.toUpperCase();
      });
    });
  });
</script>

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
        <li><a href="servicios.php">Servicios</a></li>
        <li><a class="active" href="inventarios.php">Limpieza</a></li>
        <li><a href="inventarios2.php">Jardineria</a></li>
        <li>
            <a href="php/cerrar_sesion.php" class="btn btn-danger" style="color: white; padding: 5px 10px; text-align: center;">
                Cerrar Sesión
            </a>
        </li>
      </ul>
    </nav>

  <!--ESTILO DE TITULO PRINCIPAL DE INVENTARIOS-->
<h3 class="text-center" style="font-size: 2.0rem; color:rgb(0, 0, 0); background-color:rgb(158, 222, 176); padding: 10px; border-radius: 5px; border: 1px solid rgb(255,255,255); margin-top: 100px;">INGRESO DE PRODUCTOS</h3>
<!--DIV DEL CONTENEDOR DEL APARTADO DEL REGISTRO DE LOS PRODUCTOS CON UNA CLASE QUE CONTIENE UN EFECTO FLUIDO EN LAS FILAS-->


<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    
    <!-- Formulario de ingreso de productos (7 columnas) -->
    <div class="col-md-7 p-3">
      <form method="POST">
        <h3 class="text-center" style="font-size: 2.0rem; color:rgb(0, 0, 0); background-color:rgb(158, 222, 176); padding: 10px; border-radius: 5px; border: 1px solid rgb(255,255,255);">LIMPIEZA</h3>
        
        <?php
          include "controlador/eliminar_producto.php";
          include "php_inv/conexion.php";
          include "controlador/registro_productos.php";
        ?>
        
        <div class="mb-3">
          <label class="form-label">Nombre del Producto</label>
          <input type="text" class="form-control" placeholder="Nombre" name="nom_producto">
        </div>

        <div class="mb-3">
          <label class="form-label">Marca</label>
          <input type="text" class="form-control" placeholder="Marca" name="marca">
        </div>

        <div class="mb-3">
          <label class="form-label">Peso</label>
          <input type="text" class="form-control" placeholder="Peso" name="peso">
        </div>

        <div class="mb-3">
          <label class="form-label">Color</label>
          <input type="text" class="form-control" placeholder="Color" name="color">
        </div>

        <div class="mb-3">
          <label class="form-label">Tamaño</label>
          <input type="text" class="form-control" placeholder="Tamaño" name="tamaño">
        </div>

        <div class="mb-3">
          <label class="form-label">Cantidad</label>
          <input type="text" class="form-control" placeholder="Cantidad" name="cantidad">
        </div>

        <div class="mb-3">
          <label class="form-label">Código de Barras</label>
          <input type="text" class="form-control" placeholder="Código" name="codigo_barras">
        </div>

        <div class="mb-3">
          <label class="form-label">Vendedor</label>
          <input type="text" class="form-control" placeholder="Vendedor" name="vendedor">
        </div>

        <div class="mb-3">
          <label class="form-label">Comprador</label>
          <input type="text" class="form-control" placeholder="Comprador" name="comprador">
        </div>

        <div class="mb-3">
          <label class="form-label">Fecha</label>
          <input type="date" class="form-control" placeholder="Fecha" name="fecha">
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-6 text-center">
            <button type="submit" class="btn btn-verde-clarito" name="btnregistrar" value="ok">REGISTRAR</button>
          </div>
        </div>
      </form>
    </div>

    <?php
    //CODIGO PARA MANDAR A LLAMAR LA CARPETA DE CONEXION CON LA BASE DE DATOS, Y LA VARIABLE $SQL HACIENDO UN SELECT LLAMANDO LA TABLE LLAMADA INVENTARIOS
    include "php_inv/conexion.php";
    $sql=$conexion->query(" select * from inventario ");
    ?>

    <!-- Contenedor de botones y formularios de acción (5 columnas) -->
    <div class="col-md-5 p-3">
      
      <!-- Botón para generar reporte -->
      <div class="mb-5 text-center">
        <a href="php_inv/generar_reporte.php" class="btn btn-verde-clarito">GENERAR REPORTE</a>
      </div>

      <!-- Formulario para modificar producto -->
      <form action="controlador/modificar_producto.php" method="GET">
        <div class="mb-2">
          <label for="id" class="form-label">ID del Producto a Modificar</label>
          <input type="text" class="form-control" placeholder="Ingrese ID" name="id" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-warning">MODIFICAR PRODUCTO</button>
        </div>
      </form>

      <!-- Formulario para eliminar producto -->
      <form action="controlador/eliminar_producto.php" method="GET" class="mt-3">
        <div class="mb-2">
          <label for="id" class="form-label">ID del Producto a Eliminar</label>
          <input type="text" class="form-control" placeholder="Ingrese ID" name="id" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-danger">ELIMINAR PRODUCTO</button>
        </div>
      </form>

      <!-- Formulario para buscar producto -->
      <form method="POST" class="mt-5">
        <h3 class="text-center">BUSCAR PRODUCTO</h3>
        <div class="mb-2">
          <label class="form-label">Nombre del Producto</label>
          <input type="text" class="form-control" placeholder="Ingrese nombre del producto" name="buscar_producto" required>
        </div>
        <div class="mb-2 text-center">
          <button type="submit" class="btn btn-secondary" name="btnbuscar">BUSCAR</button>
        </div>
      </form>

      <?php
        include "php_inv/conexion.php";
        if(isset($_POST['btnbuscar'])) {
          $producto = $_POST['buscar_producto'];
          $sql = $conexion->prepare("SELECT COUNT(*) as cantidad FROM inventario WHERE nom_producto = ?");
          $sql->bind_param("s", $producto);
          $sql->execute();
          $resultado = $sql->get_result();
          $fila = $resultado->fetch_assoc();
          echo "<h4 class='text-center'>Productos disponibles: " . $fila['cantidad'] . "</h4>";
        }
      ?>
    </div>
  </div>
</div>
</body>
</html>