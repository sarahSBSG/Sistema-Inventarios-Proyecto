<?php
    //PARA DARLE ACCESO A LA CONEXION QUE SE HIZO EN CONEXION_BE.PHP
    include 'conexion_be.php';
    //VARIABLES PARA GUARDARLAS CON EL METODO POST Y NO SE ESCRIBA LEYENDA LARGA EN URL
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    //VARIABLE PARA ENCRIPTADO DE LA CONTRASEÑA CON LA FUNCION HASH 
    $clave = hash('sha512', $clave);
    
    //VARIABLE PARA INSERTAR VALORES A LA TABLA DE DATOS CON SU RESPECTIVA VARIABLE Y NAME DETERMINADO EN APARTADO REGISTRAR DEL INDEX
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";
    
        //VARIABLE VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BASE DE DATOS DEL ARCHIVO CONEXION_BE.PHP
        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

        //SI ENCUENTRA UNA FILA EN LA VARIABLE VERIFICAR_CORREO ENVIARA UN MENSAJE DE ERROR Y REGRESE A PAGINA DE INICIO Y TERMINA EL SCRIPT CON UN EXIT PARA NO LEER DEMAS CODIGO
        if(mysqli_num_rows($verificar_usuario) > 0){
            echo '
                <script>
                    alert("ESTE USUARIO YA ESTA REGISTRADO, INTENTE CON OTRO DIFERENTE");
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }

        //VARIABLE VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS DEL ARCHIVO CONEXION_BE.PHP
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

        //SI ENCUENTRA UNA FILA EN LA VARIABLE VERIFICAR_CORREO ENVIARA UN MENSAJE DE ERROR Y REGRESE A PAGINA DE INICIO Y TERMINA EL SCRIPT CON UN EXIT PARA NO LEER DEMAS CODIGO
        if(mysqli_num_rows($verificar_correo) > 0){
            echo '
                <script>
                    alert("ESTE CORREO YA ESTA REGISTRADO, INTENTE CON ORTO DIFERENTE");
                    window.location = "../index.php";
                </script>
            ';
            exit();
        }

        //VERIFICAR SI LOS CAMPOS SI ESTAN VACIOS
        if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($clave)) {
            //SI ALGUN CAMPO ESTA VACIO, MOSTRAR MENSAJE DE ERROR Y TERMINA EL SCRIPT CON UN EXIT PARA NO LEER DEMAS CODIGO
            echo '
                <script>
                    alert("FALTA DE DATOS O ESTAN INCORRECTOS, PORFAVOR VERIFIQUE LOS DATOS INGRESADOS");
                    //REDIRIGE AL FORMULARIO DE INICIO
                    window.location = "../index.php"; 
                </script>
            ';
            exit(); //TERMINA LA EJECUCION DEL SCRIPT CADA QUE SE COLOCA EL EXIT Y NO SE EJECUTA EL DEMAS CODIGO
        } else {
            //SI TODOS LOS CAMPOS TIENEN DATOS, REALIZAR LA CONSULTA PARA VALIDAR SI EL REGISTRO YA EXISTE 
            $validar_registro = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo='$nombre_completo' AND correo='$correo' AND usuario='$usuario' AND clave='$clave'");
        
            //SI EL REGISTRO SI EXISTE, REDIRIGE A LA PAGINA DE INICIO Y TERMINA EL SCRIPT CON UN EXIT PARA NO LEER DEMAS CODIGO
            if (mysqli_num_rows($validar_registro) > 0) {
                header("Location: ../index.php");
                exit();
            } else {
                //SI EL REGISTRO NO EXISTE, INSERTAR LOS DATOS EN LA BASE DE DATOS 
                $insertar = mysqli_query($conexion, "INSERT INTO usuarios (nombre_completo, correo, usuario, clave) VALUES ('$nombre_completo', '$correo', '$usuario', '$clave')");
        
                if ($insertar) {
                    //SI LA INSERCION ES EXITOSA, REDIRIGE A LAGINA DE INICIO Y MUESTRA MENSAJE DE EXITO
                    echo '
                        <script>
                            alert("USUARIO REGISTRADO EXITOSAMENTE");
                            //REDIRIGE AL FORMULARIO DE INICIO
                            window.location = "../index.php"; 
                        </script>
                    ';
                //SI LA INSERCION FALLA MANDA MENSAJE DE ERROR Y TERMINA EL SCRIPT CON UN EXIT PARA NO LEER DEMAS CODIGO
                } else {

                    echo '
                        <script>
                            alert("ERROR AL REGISTRAR LOS DATOS, NENTE NUEVAMENTE");
                            //REDIRIGE AL FORMULARIO DE INICIO
                            window.location = "../index.php"; 
                        </script>
                    ';
                }
                exit();
            }
        }
?>