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
                <li>
                    <img src="img/banner2.jpeg" alt="">
                    <section class="caption">
                        <h1>PIEDRA COPRO</h1>
                        <h2>CONSTRUCCIÓN, MANTENIMIENTO Y REMODELACIÓN</h2>
                    </section>
                </li>
                <li>
                    <img src="img/banner4.jpeg" alt="">
                    <section class="caption">
                        <h1>PIEDRA COPRO</h1>
                        <h2>CONSTRUCCIÓN, MANTENIMIENTO Y REMODELACIÓN</h2>
                    </section>
                </li>
                <li>
                    <img src="img/construccion3.jpeg" alt="">
                    <section class="caption">
                        <h1>PIEDRA COPRO</h1>
                        <h2>CONSTRUCCIÓN, MANTENIMIENTO Y REMODELACIÓN</h2>
                    </section>
                </li>
                <li>
                    <img src="img/banner6.jpeg" alt="">
                    <section class="caption">
                        <h1>PIEDRA COPRO</h1>
                        <h2>CONSTRUCCIÓN, MANTENIMIENTO Y REMODELACIÓN</h2>
                    </section>
                </li>
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
        <p>La preparación, experiencia y ética del equipo de trabajo permite generar confianza hacia los clientes buscando satisfacer sus necesidades para el cumplimiento en cada proyecto de remodelación, mantenimiento y construcción.</p>

       <?php
            include 'includes/valores.php';
       ?>

    </div>


    <main class="contenedor-main">

        <h2>Nuestros Servicios</h2>
        <div class="servicios">

            <div class="card-servicios dos card-const" id="construccion">
                <img src="img/construccion3.jpeg" alt="foto-de-constuccion">
                <h3>CONSTRUCCIÓN</h3>
                <p> En campos de arquitectura e Ingeniería para el desarrollo de edificaciones e infraestructuras...</p>
                <a href="servicios#const" class="btn-servicios btnconst">Ver Más</a>
            </div>

            <div class="card-servicios dos card-mant" id="mantenimiento">
                <img src="img/mantenimietno1.jpeg" alt="foto-de-mantenimietno">
                <h3>MANTENIMIENTO</h3>
                <p>Se Realizan trabajos de conservación y preventivos: Impermeabilización, pintura, pisos, hidroneneumáticos, pluvial, y más..</p>
                <a href="servicios#mant" class="btn-servicios btn-man">Ver Más</a>
            </div>

            <div class="card-servicios dos card-rem" id="remodelacion">
                <img src="img/remodelacion1.jpeg" alt="foto-de-remodelacion">
                <h3>REMODELACIÓN</h3>
                <p>Realizamos trabajos en plafón, pastas, acabados, techos verdes y terrazas, diseño de interiores, celosias metálicas, persianas, cristal templado y más...
                </p>
                <a href="servicios#rem" class="btn-servicios btn-rem">Ver Más</a>
            </div>



            <div class="card-servicios dos card-rel">
                <img src="img/plano.jpg" alt="foto-de-plano">
                <h3>RELACIONADOS</h3>
                <p>Proyectos que deriven de la obra; diseño de interiores, renders, planos, recorridos virtuales. Creados a partir de la idea generada por nuestros clientes.</p>
                <a href="servicios#otr" class="btn-servicios btn-man">Ver Más</a>
            </div>

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


    <script src="js/app.js"></script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>