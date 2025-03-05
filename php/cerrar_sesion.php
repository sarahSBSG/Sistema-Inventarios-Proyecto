<!--INICIO DE CODIGO PHP-->
<?php
    //INICIALIZAR LA SESION
    session_start();
    //DESTRUYE LA SESION
    session_destroy();
    //ENVIA NUEVAMENTE A LA UBICACION INDEX.PHP
    header("location: ../index.php");
    
?>