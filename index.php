<?php
        include 'includes/conection.php';
    ?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Empresa dedicada a la Construcción, Remodelación, mantenimineto y desarrollo de poryectos, casas y oficinas ademas de elaboracionde planos estructurales">
    <meta name="keywords" content="construcción, remodelación, mantenimineto, interiores">
    <title>Piedra Copro</title>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet"  href="css/style-cookie.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
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

    <section class="banner">

        <div class="slideshow">
            <ul class="slider">
            <?php
                $sql="SELECT * from banner_index";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    echo '<li>
                    <img src="'.$row['ruta_img'].'" alt="'.$row['alt'].'">
                    <section class="caption">
                        <h1>PIEDRA COPRO</h1>
                        <h2>CONSTRUCCIÓN, MANTENIMIENTO Y REMODELACIÓN</h2>
                    </section>
                </li>';
                }
            ?>
                
            </ul>

            <ol class="pagination">

            </ol>

            <div class="left">
                <span class="fa fa-chevron-left"></span>
            </div>

            <div class="right">
                <span class="fa fa-chevron-right"></span>
            </div>

        </div>

        </div>
        <div class="container-sa">
            <p class="texto-sa">PIEDRA COPRO S. A .S de C. V. Empresa dedicada a la construcción y desarrollo de proyectos.
            </p>


        </div>
    </section>

    <div class="portafolio">
        <?php
                    $sql="SELECT * from nosotros";
                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($result)){

                        echo '<p>'.$row['texto_nosotros'].'</p>';
                    }
        ?>
       <?php
            include 'includes/valores.php';
       ?>

    </div>


    <main class="contenedor-main">

        <h2>Nuestros Servicios</h2>
        <div class="servicios">

        <?php
                $sql="SELECT * from card_const";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){

                   echo ' <div class="'.$row['clase_color'].' responsive">
                        <div class="card-servicios" id="construccion">
                                <div class="card-servicios-img">
                                <img src="'.$row['ruta_img'].'" alt="'.$row['alt'].'">
                                </div>
                                <div class="card-servicios-texto">
                                <h3>'.$row['titulo'].'</h3>
                                <p>'.$row['descripcion'].'</p>
                                </div>
                                <a href="servicios#const" class="btn-servicios ">Ver Más</a>
                        </div>
                    </div>';
                }
            ?>
            
        </div>

    </main>

    <div class="por-que-elegir">
        <h2>¿Por qué elegirnos?</h2>
    </div>
    <section class="elegirnos">

        <div class="iconos-nosotros">

            <div class="iconos">
                <div class="icono animacion-arriba"><i class="fas fa-users"></i></div>
                <h3>¿Quiénes somos?</h3>
                <p>Somos un equipo interdisciplinario con especialidad y experiencia idónea para el trabajo en construcción y proyectos. </p>
                <a href="nosotros" class="btn ">Ver Más</a>
            </div>


            <div class="iconos">
                <div class="icono animacion-abajo"><i class="far fa-check-square"></i></div>
                <h3>¿Que servicio ofrecemos?</h3>
                <p>Tenemos por compromiso planear, controlar, dirigir y supervisar el proyecto desde un inicio y hasta el cumplimiento. </p>
                <a href="servicios" class="btn">Ver Más</a>
            </div>

            <div class="iconos">
                <div class="icono animacion-arriba"><i class="far fa-handshake"></i></div>
                <h3>Contáctanos</h3>
                <p>Lamanos y platicanos sobre tu proyecto, pide una cotizacion y estamos seguros de que tendremos algo para ti. </p>
                <a href="contacto" class="btn btn-quien">Ver Más</a>
            </div>


        </div>

    </section>


    <div class="container-ubicacion">
        <div class="texto-ubicacion">
            <h3>¡No importa tu ubucación!</h3>
            <p class="parrafo-ubicacion">Nos trasladamos a tus instalaciones, independientemente de su ubicación.</p>
            <span>Consultar condiciónes*</span>
        </div>

        <div class="mapa animacion-derecha">
            <img src="img/mapa.png" alt="imagen-mapa" id="animado">
        </div>

    </div>

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
    <script src="js/app.js"></script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>