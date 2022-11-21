<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title >Registro de Amazon</title>
</head>
<body>
<div class="container"><br><img class="mx-auto d-block" src="logo2.png" width="160px" height="30px"></div>

    <div class="container p-3 mt-3 my-3"  style="width: 400px;">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title titulo">Ayuda con la contraseña</h1>
                    <div class="w-30">
                        <form id="registro" method="POST" action="cambiar.php" autocomplete="off">
                            
                            <br><label class="form-label relleno">Escriba su número de celular</label>
                            <input class="form-control form-control-sm" type="text" id="telefono" name="telefono" required>
                        
                            <br><label class="form-label relleno">Escriba su nueva contraseña</label>
                            <input class="form-control form-control-sm" type="password" id="contraseña1" name="contraseña1" required>

                            <br><label class="form-label relleno">Escriba su nueva contraseña otra vez</label>
                            <input class="form-control form-control-sm" type="password" id="contraseña2" name="contraseña2" required>
                            
                            <div class="container d-grid relleno"><br><button class="btn btn-md btn-primary" type="submit" name="enviar" value="Buscar"><a href="Iniciar_Sesion_Usuario.php" class="enlaces3">Continuar</button></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="border-1 border-top"></div>

    <div class="container p-3 mt-3 relleno">
        <div class="d-flex justify-content-center">
            <div><small><a href="https://www.amazon.com.mx/gp/help/customer/display.html/ref=ap_desktop_footer_cou?ie=UTF8&nodeId=508088" class="enlaces">Condiciones de uso</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</small></div>
            <div><small><a href="https://www.amazon.com.mx/gp/help/customer/display.html/ref=ap_desktop_footer_privacy_notice?ie=UTF8&nodeId=468496"  class="enlaces">Aviso de Privacidad</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</small></div>
            <div><small><a href="https://www.amazon.com.mx/help"  class="enlaces">Ayuda</a></small></div>
        </div>
        <div class="d-flex justify-content-center">
            <div><small><br>© 1996-2022, Amazon.com, Inc. o sus afiliados</small></div>
        </div>
    </div> <br><br><br>
</footer>

</html>