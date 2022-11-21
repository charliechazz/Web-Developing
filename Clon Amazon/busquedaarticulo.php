<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\carrusel.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>

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
        <br><br><br><br><br>
    </header>


   <br><br><br><br><br>
    <h1 class="Titulo"> Resultado de la Busqueda</h1>
    <?php
        include "config.php";
        if(isset($_GET["enviar"])){
            $busqueda = $_GET["busqueda"];
            $consulta = $conexion->query("SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'");?>
            <div class="containercard">
            <?php
            while($row=$consulta->fetch_array()){?>
           
                        <div class="card">
                                <?php
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                                    echo "<h4>".substr($row["nombre"],0,70)."</h4>";
                                    echo "$".$row["precio"]."<br>";
                                    echo substr($row["descripcion"],0,150);
                                ?>

                                <form action="modeloproducto.php" method="post">
                                    <input type="hidden" name="codigoproducto" value="<?=$row["ID"]?>">
                                    <input type="submit" value="Ver Producto" class="botonproduct">
                                </form>
            </div>
            <?php 
            }?>
            </div> 
            <?php 
        }
    ?>

    
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
