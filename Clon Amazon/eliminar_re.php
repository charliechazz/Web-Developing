<?php
    $mysqli = new mysqli("localhost", "root", "", "usuario_amazon");

    $telefono = $mysqli->real_escape_string($_POST[ 'telefono' ]);
    $contraseña1 = $mysqli->real_escape_string($_POST[ 'contraseña1' ]);
    $contraseña2 = $mysqli->real_escape_string($_POST[ 'contraseña2' ]);

    if($contraseña1!=$contraseña2){
        echo '<script language="javascript">alert("La contraseña es diferente");</script>';
    }

    
    $sql = "DELETE FROM `usuarios` WHERE `telefono`=$telefono";

    if(mysqli_query($mysqli,$sql)){
        echo '<script language="javascript">alert("Registro exitoso");</script>';
        include 'Iniciar_Sesion_Usuario.php';
    }

?>
