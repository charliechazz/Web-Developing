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
    <title>Amazon Iniciar sesión</title>
</head>
<body>
<div class="container"><br><img class="mx-auto d-block" src="logo2.png" width="160px" height="30px"></div>

    <div class="container p-3 mt-3 my-3"  style="width: 400px;">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title titulo">Iniciar sesión</h1>
                    <div class="w-30">
                        <form id="registro" method="POST" action="verificar.php" autocomplete="off">
                            <label class="form-label relleno2">Dirección de email o número de teléfono móvil</label>
                            <input class="form-control form-control-sm" type="text" id="telefono" name="telefono" required>

                            <label class="form-label relleno2">Contraseña</label>
                            <input class="form-control form-control-sm" type="password" id="contraseña1" name="contraseña1" required>
                            <br><small class="form-text text-dark relleno"><a href="Cambiar_Contraseña.php" class="enlaces2"><div class="d-flex justify-content-center">¿Olvidaste tu contraseña?</div></a></small>
                            <div class="container d-grid relleno"><br><button class="btn btn-md btn-primary">Iniciar Sesión</button></div>
                            
                            <br><small class="form-text text-dark relleno">Al continuar, aceptas las <a href="#" class="enlaces">Condiciones de uso</a> y el<a href="#" class="enlaces"> Aviso de privacidad</a> de Amazon.</small>
                        </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

<div class="d-flex justify-content-center"><small class="form-text text-muted relleno">¿Eres nuevo en Amazon?</small></div><br>
<div class="d-flex justify-content-center container d-grid relleno"><br><button class="btn btn-md btn-primary button"><a href="Registar_Nuevo_Usuario.php" class="enlaces3">Crear tu cuenta de Amazon</a></button></div><br>
<div class="d-flex justify-content-center"><small class="form-text text-muted relleno">Gestiona Tu Cuenta</small></div><br>
<div class="d-flex justify-content-center container d-grid relleno"><br><button class="btn btn-md btn-primary button"><a href="Eliminar_Usuario.php" class="enlaces3">Eliminar Cuenta</a></button></div><br>
<div class="d-flex justify-content-center container d-grid relleno"><br><button class="btn btn-md btn-primary button"><a href="CambiarPassword.php" class="enlaces3">Cambiar Contraseña</a></button></div><br>

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