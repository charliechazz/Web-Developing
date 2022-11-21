<?php

include ('conexion.php');

    $telefono = $mysqli->real_escape_string($_POST[ 'telefono' ]);
    $contraseña1 = $mysqli->real_escape_string($_POST[ 'contraseña1' ]);
    $contraseña2 = $mysqli->real_escape_string($_POST[ 'contraseña2' ]);
    
    //$mysqli = new mysqli("localhost", "root", "", "usuario_amazon");

    $sql = "UPDATE usuarios SET contraseña1='$contraseña1',contraseña2='$contraseña2' WHERE telefono = '$telefono'";
    
    if(mysqli_query($mysqli, $sql)){

        echo '<script language="javascript">alert("REGISTRO ACTUALIZADO");</script>';
        header("index.php");

    } else {

        echo "ERROR: No se ejecuto $sql. " . mysqli_error($mysqli);
        include ("Cambiar_Contraseña.php");
    }

    mysqli_close($mysqli);
?>


<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\carrusel.css">
    <script src="https://kit.fontawesome.com/6fbb7479bd.js" crossorigin="anonymous"></script>
</head>

<body>
<a name="arriba"></a>
    <header>
        <nav class="navbarprincipal">
        <a href="index.php"><img align="left" class="logoprincipal" src="imagenes\logo.png"></a>
        <ul>
                    <li>
                        <form action="busquedaart.php" method="GET">
                            <input class="barrabusqueda" type="text" name="busqueda">
                            <button class="btnenviar" style="width:35px; height:35px" type="submit" name="enviar" value="Buscar"><img src="imagenes\lupa.png"></button>
                        </form>
                    </li>
                    <li>
                        <a href="Iniciar_Sesion_Usuario.php"><img align="left" class="logoprincipal" src="imagenes\usuario.png">Hola, Identificate</a>
                        
                    </li>
            </ul>
        </nav>
    </header>

    <br><br><br><br>

    <div class="slide">
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" 
			 	     name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
					<img src="imagenes\carrusel1.jpg">
				</div>
				<input class="slide-open" type="radio" id="slide-2" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="imagenes\carrusel2.jpg">
				</div>

				<input class="slide-open" type="radio" id="slide-3" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="imagenes\carrusel3.jpg">
				</div>
				<label for="slide-3" class="slide-control prev control-1">‹</label>
				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>
				<label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
				<label for="slide-1" class="slide-control next control-3">›</label>
				<ol class="slide-indicador">
					<li>
						<label for="slide-1" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-2" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-3" class="slide-circulo">•</label>
					</li>
				</ol>
			</div>
		</div>
    <br>

    <h2 align="center">Cambios Realizados</h2>
    
    <footer class="pie-pagina">
        <a href="#arriba"><div class="grupo-1">
            <small>Inicio de la Página</small>
        </div></a>

        <div class="grupo-2">
            <div class="box">
                <h3>Conocenos</h3>
                <li>
                    <ul><a href="https://www.amazon.jobs/es">Trabajar en Amazon</a></ul>
                    <ul><a href="https://www.amazon.com.mx/gp/feature.html?docId=1001359011&ref_=footer_gw_m_b_corporate">Información corporativa</a></ul>
                    <ul><a href="https://press.aboutamazon.com/">Departamento de prensa</a></ul>
                    <ul><a href="https://www.amazon.science/">Amazon Science</a></ul>
                </li>
            </div>
            <div class="box">
                <h3>Gana dinero con nosotros</h3>
                <li>
                    <ul><a href="https://vender.amazon.com.mx/?ld=AZMXSOA-footer&ref_=footer_sell">Vender en Amazon</a></ul>
                    <ul><a href="https://vender.amazon.com.mx/handmade?ld=AZMXHND-footer&ref_=footer_sell">Vender en Amazon Handmade</a></ul>
                    <ul><a href="https://kdp.amazon.com/">Publica tu libro en Kindle</a></ul>
                    <ul><a href="https://afiliados.amazon.com.mx/?ref_=footer_affliate">Programa de afiliados</a></ul>
                    <ul><a href="https://advertising.amazon.com.mx/?ref=footer_advtsing_mx">Anuncia tus productos</a></ul>
                </li>
            </div>
            <div class="box">
                <h3>Podemos ayudarte</h3>
                    <li>
                        <ul><a href="https://www.amazon.com.mx/gp/help/customer/display.html?nodeId=GDFU3JS5AL6SYHRD&ref_=footer_covid">Amazon y COVID-19</a></ul>
                        <ul><a href="https://www.amazon.com.mx/gp/css/returns/homepage.html?ref_=footer_hy_f_4">Devolver o reemplazar productos</a></ul>
                        <ul><a href="https://www.amazon.com.mx/hz/mycd/myx?ref_=footer_myk">Gestionar contenido y dispositivos</a></ul>
                        <ul><a href="https://www.amazon.com.mx/gp/help/customer/display.html?nodeId=508510&ref_=footer_gw_m_b_he">Ayuda</a></ul>
                    </li>
            </div>
            <div class="box">
                <h3>Método de pago</h3>
                    <li>
                        <ul><a href="https://www.amazon.com.mx/tc?ref_=footer_pay_tc">Tarjeta de crédito y débito</a></ul>
                        <ul><a href="https://www.amazon.com.mx/tr?ref_=footer_pay_gc">Tarjeta de regalo</a></ul>
                        <ul><a href="https://www.amazon.com.mx/msi?ref_=footer_pay_ins">Meses sin intereses</a></ul>
                        <ul><a href="https://www.amazon.com.mx/gp/browse.html?node=17277672011&ref_=footer_amazoncash">Amazon Cash</a></ul>
                        <ul><a href="https://www.amazon.com.mx/AmazonRecargable?ref_=footer_amazonrecargable">Amazon Recargable</a></ul>
                    </li>
            </div>
        </div>

        <div class="line"></div>
        <br>
        <div align="center"><a href="#arriba"><image src="imagenes\logosc.png" height="30px"></image></a></div>
        <br>

        <div align="center" class="grupo-3">
                <h5>
                    <a href="https://www.amazon.com.au/ref=footer_au">Australia |</a>
                    <a href="https://www.amazon.de/ref=footer_de"> Alemania |</a>
                    <a href="https://www.amazon.com.br/ref=footer_br"> Brasil |</a>
                    <a href="https://www.amazon.ca/ref=footer_ca"> Canadá |</a>
                    <a href="https://www.amazon.cn/ref=footer_cn"> China |</a>
                    <a href="https://www.amazon.es/ref=footer_es"> España |</a>
                    <a href="https://www.amazon.com/ref=footer_us"> Estados Unidos |</a>
                    <a href="https://www.amazon.fr/ref=footer_fr"> Francia |</a>
                    <a href="https://www.amazon.in/ref=footer_in"> India |</a>
                    <a href="https://www.amazon.it/ref=footer_it"> Italia |</a>
                    <a href="https://www.amazon.co.jp/ref=footer_jp"> Japón |</a>
                    <a href="https://www.amazon.nl/ref=footer_nl"> Países/Regiones Bajos |</a>
                    <a href="https://www.amazon.co.uk/ref=footer_uk"> Reino Unido |</a>
                    <a href="https://www.amazon.sg/ref=footer_sg"> Singapur |</a>
                    <a href="https://www.amazon.com.tr/ref=footer_tr"> Turquía </a>
                    <br>
                </h5>
        </div>
        <h5 align="center">Y también: <a href="https://aws.amazon.com/es/what-is-cloud-computing/?sc_channel=EL&sc_campaign=MX_amazonfooter">Amazon Web Services</a></h5>

        <br>
        <div class="grupo-4">
            <small>
                <a href="https://www.amazon.com.mx/gp/help/customer/display.html?nodeId=508088&ref_=footer_cou">Condiciones de uso |</a>
                <a href="https://www.amazon.com.mx/gp/help/customer/display.html?nodeId=508088&ref_=footer_cou">Aviso de privacidad </a>
                <a> © 1996-2022, Amazon.com, Inc. o sus afiliados</a>
            </small>
        </div>

    </footer>
</body>
</html>

