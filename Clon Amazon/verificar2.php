<?php
    $telefono = $_POST['telefono'];
    
    session_start();
    $_SESSION['telefono']=$telefono;

    include ('conexion.php');
    
    $consulta = "SELECT*FROM usuarios WHERE telefono = '$telefono'";

    $resultado = mysqli_query($mysqli, $consulta);

    $filas = mysqli_num_rows($resultado);


    if($filas){
        header("location: CambiarPassword.php");
    } else {
        ?> 
        <?php
        include ("Cambiar_Contraseña.php");
        echo '<script language="javascript">alert("ERROR EN LA AUTENTIFICACIÓN");</script>';
        ?>
        <?php   
    }
    mysqli_free_result($resultado);
    mysqli_close($mysqli);

