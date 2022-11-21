<?php
    $telefono = $_POST['telefono'];
    $contraseña1 = $_POST['contraseña1'];

    session_start();
    $_SESSION['telefono']=$telefono;

    include ('conexion.php');

    //$mysqli = new mysqli("localhost", "root", "", "usuario_amazon");

    $consulta = "SELECT*FROM usuarios WHERE telefono = '$telefono' and contraseña1 = '$contraseña1'";

    $resultado = mysqli_query($mysqli, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location: Inicio_Amazon.php");
    } else {
        ?> 
        <?php
        include ("Iniciar_Sesion_Usuario.php");
        ?>
        <h1>ERROR EN LA AUTENTIFICACIÓN</h1>
        <?php   
    }
    mysqli_free_result($resultado);
    mysqli_close($mysqli);



