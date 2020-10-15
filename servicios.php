<?php
     include 'includes/conection.php';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”description” content="Servicios de contruccion de infraestructura vial, drenajes instalaciones electricas y estructuras metalicas">
    <meta name="keywords" content="construcción, remodelación, mantenimineto, interiores">
    <title>Piedra Copro | Servicios</title>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet"  href="css/style-cookie.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <script src="https://kit.fontawesome.com/e954e6d43f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=527293593044&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20." class="float" target="_blank" contnent="noindex">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

</head>

<body>


    <?php
        include 'includes/header.php';
    ?>

    <section class="banner-servicios">
        <div id="text-nos" class="texto-nosotros">
            <h1>Nuestros Servicios</h1>
        </div>
    </section>

    <div id="const"></div>
    <main class="nuestros-servicios">

        <div class="contendor-serv">
            <div class="titulo-servicios">
                <h2>CONSTRUCCIÓN</h2>
            </div>
            <p><strong> Vivienda, oficinas, equipamiento e industria</strong></p>
            <p>En <span><strong>PIEDRA COPRO S.A.S de C.V. </strong></span> ofrecemos servicios integrales y soluciones en diseño arquitectónico y estructural. Encabezado por nuestro equipo de trabajo multidisciplinario en áreas especificas como: diseño,
                planeación, administración, construcción y supervisión:
            </p>


            <ul>

                <li>Infraestructura vial, terracerías,(pavimentación hidráulico, asfalto, banquetas, guarniciones, señalamiento horizontal vertical)</li>
                <li>Drenajes sanitarios, redes de agua potable, energía eléctrica</li>
                <li>Bardas perimetrales</li>
                <li>Instalación de media y baja tensión</li>
                <li>Estructuras metálicas</li>
                <li>Estructuras de acero y cimentaciones</li>
                <li>Construcción de vivienda, oficinas, industria entre otros.</li>
            </ul>
        </div>

        <?php
                $sql="SELECT * from obra_const";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
             echo '<div class="obras">
                         <H4>'.$row['titulo'].'</H4>
                    </div>
                
                        <div class="gallery-container">
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img2'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img2'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img3'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img3'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img4'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img4'].'" alt="'.$row['alt'].'"></a>
                            </div>
                        </div>';
                }
                ?>


        <div id="mant"></div>
        <div class="contendor-serv">
            <div class="titulo-servicios-mantenimiento">
                <h2>MANTENIMIENTO</h2>
            </div>
            <p><strong> Vivienda, oficinas, equipamiento e industria</strong></p>
            <p>En <span><strong>Piedra Copro</strong></span> Sabemos que es importante contar con instalaciones adecuadas para cualquier actividad en; edificaciones, oficinas corporativas, cubículos, vivienda, industria y espacios abiertos en condiciones
                físicas óptimas para que cumplan durante la vida útil su función especifica y evitar el deterioro progresivo, obligados a realizar grandes inversiones a corto o mediano plazo. </p>

            <ul>


                <li>Impermeabilización, pintura, albañilería</li>
                <li>Drenaje, alumbrado, hidráulico, pluvial</li>
                <li>Áreas verdes, patios, adoquín</li>
                <li>Malla ciclónica</li>
                <li>Vidrios y cancelería</li>
                <li>Luminarias</li>
            </ul>
        </div>

        <?php
                $sql="SELECT * from obra_mant";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
             echo '<div class="obras">
                         <H4>'.$row['titulo'].'</H4>
                    </div>
                
                        <div class="gallery-container">
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img2'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img2'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img3'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img3'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img4'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img4'].'" alt="'.$row['alt'].'"></a>
                            </div>
                        </div>';
                }
                ?>

        
        <div id="rem"></div>
        <div class="contendor-serv ">
            <div class="titulo-servicios-remodelacion ">
                <h2>REMODELACIÓN</h2>
            </div>
            <p><strong> Trabajos realizados en: oficinas, corporativos, residencias, villas, jardines, terrazas, edificación e
                industria.</strong></p>
            <p>En <span><strong>PIEDRA COPRO S.A.S de C.V. </strong></span>Te ayudamos a diseñar y construir una nueva apariencia estética, funcional y ambiental a la medida de sus necesidades que cubra todas las expectativas del proyecto.</p>

            <ul>


                <li>Muros de Tablaroca, Durock, plafón, cajillos con luz indirecta</li>
                <li>Pastas, canteras, recinto y cerámica</li>
                <li>Techos verdes y terrazas</li>
                <li>Diseño de interiores</li>
                <li>Celosías metálicas y barro</li>
                <li>Persianas, cristal templado, pisos laminados</li>
                <li>Puertas, alacenas</li>
                <li>Luminarias, arbotantes y spots</li>
                <li>Pergolas, decks, tapancos y estructuras.</li>
            </ul>
        </div>


        <?php
                $sql="SELECT * from obra_rem";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
             echo '<div class="obras">
                         <H4>'.$row['titulo'].'</H4>
                    </div>
                
                        <div class="gallery-container">
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img2'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img2'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img3'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img3'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img4'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img4'].'" alt="'.$row['alt'].'"></a>
                            </div>
                        </div>';
                }
                ?>


        
        <div id="otr"></div>
        <div class="contendor-serv ">
            <div class="titulo-servicios-otros ">
                <h2>OTROS SERVICIOS</h2>
            </div>
            <p><strong> Arquitectónico, estructural, instalaciones.</strong></p>
            <p>En <span><strong>Piedra Copro</strong></span> También realizamos servicios relacionados a proyectos que deriven de la obra; diseño de interiores, renders, planos, recorridos virtuales. Creados a partir de la idea generada por nuestros clientes.</p>

            <ul>

                <li>Elaboración de planos</li>
                <li>Diseño y presupuesto</li>
                <li>Proyectos arquitectónicos</li>
                <li>Estudios topográficos, cálculos estructurares, peritajes (D.R.O.), análisis de precios unitarios, avalúos inmobiliarios y asesoría inmobiliaria (compra venta y renta)</li>
                <li>Auditoria</li>
                <li>Supervisión</li>
                <li>Renders</li>
            </ul>
        </div>

        <?php
                $sql="SELECT * from obra_rel";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
             echo '<div class="obras">
                         <H4>'.$row['titulo'].'</H4>
                    </div>
                
                        <div class="gallery-container">
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img2'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img2'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img3'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img3'].'" alt="'.$row['alt'].'"></a>
                            </div>
                
                            <div class="gallery-card">
                                <a href="'.$row['ruta_img4'].'" data-lightbox="roadtrip"><img src="'.$row['ruta_img4'].'" alt="'.$row['alt'].'"></a>
                            </div>
                        </div>';
                }
                ?>

    </main>


    <?php
        include 'includes/form.php';
    ?>

    <?php
        include 'includes/footer.php';
    ?>

    <?php
        include 'includes/aviso-cookies.php';
    ?>       

        

    <script src="js/main-cookie.js"></script>           
    <script src="js/app.js "></script>
    <script src="js/lightbox-plus-jquery.min.js "></script>
    <script src="js/lightbox.min.js "></script>
    <script src="js/appp.js "></script>
</body>

</html>