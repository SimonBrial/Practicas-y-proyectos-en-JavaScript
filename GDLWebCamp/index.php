<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/leaflet.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lightbox.css">


    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <header class="site-header">

        <div class="hero">

            <div class="contenido-header">

                <nav class="redes-sociales">

                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </nav>

                <div class="informacion-evento">

                    <p class="fecha"><i class="fas fa-calendar-alt"></i> 16-12 Dic</p>
                    <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Valencia, VZ</p>

                    <h1 class="nombre-sitio">GdlWebCamp</h1>

                    <p class="slogan">La mejor conferencia de <span>Diseño Web</span></p>

                </div>

            </div>

        </div>

    </header>

    <div class="barra">
        <div class="contenedor-barra clearfix">
            <div class="logo">
                <a href="/">
                    <img src="img/logo.svg" alt="Logo GDLWebCamp">
                </a>
            </div>

            <div class="menu-movil">
                <!-- Para hacer el menu de hamburguesa -->
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navegacion-principal">
                <a href="conferencias.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro.php">Reservaciones</a>
            </nav>

        </div>

    </div>

    <section class="contenedor seccion">

        <h2>La mejor conferencia de diseño web en español</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit ad autem dolorem vel perspiciatis animi ipsam excepturi eaque totam quibusdam voluptates voluptatum voluptatibus repellat architecto culpa, ratione sed placeat eos? repellat architecto culpa, ratione sed placeat eos?
        </p>

    </section>

    <section class="programa">

        <div class="contenedor-video">

            <video autoplay loop poster="bg-talleres.jpg">

                <source src="video/video.mp4" type="video/mp4" />
                <source src="video/video.webm" type="video/webm" />
                <source src="video/video.ogv" type="video/ogg" />

            </video>

        </div>

        <div class="contenido-programa">

            <div class="contenedor">

                <div class="programa-evento">

                    <h2>Programa del Evento</h2>

                    <nav class="menu-programa">

                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>

                    </nav>

                    <div id="talleres" class="info-cursos ocultar clearfix">

                        <div class="detalle-evento">

                            <h3>HTML5, CSS3 y JavaScript</h3>

                            <p><i class="far fa-clock"></i> 16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>

                        </div>

                        <div class="detalle-evento">

                            <h3>Responsive Web Design</h3>

                            <p><i class="far fa-clock"></i> 20:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>

                        </div>

                        <a href="#" class="btn float-right">Ver todos</a>

                    </div>

                    <div id="conferencias" class="info-cursos ocultar clearfix">

                        <div class="detalle-evento">

                            <h3>Como ser FreeLancer</h3>

                            <p><i class="far fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Simon Briceño</p>

                        </div>

                        <div class="detalle-evento">

                            <h3>Tecnologias del Futuro</h3>

                            <p><i class="far fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Susan Sanchéz</p>

                        </div>

                        <a href="#" class="btn float-right">Ver todos</a>

                    </div>

                    <div id="seminarios" class="info-cursos ocultar clearfix">

                        <div class="detalle-evento">

                            <h3>Diseño de UI/UX para Moviles</h3>

                            <p><i class="far fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fas fa-user"></i> Harold Garcia</p>

                        </div>

                        <div class="detalle-evento">

                            <h3>Aprende a programar en una Mañana</h3>

                            <p><i class="far fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fas fa-user"></i> Susana Rivera</p>

                        </div>

                        <a href="#" class="btn float-right">Ver todos</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="invitados contenedor seccion">

        <h2>Nuestros Invitados</h2>

        <ul class="lista-invitados clearfix">

            <li>
                <div class="invitado">

                    <img src="img/invitado1.jpg" alt="Invitado 1">

                    <p>Rafael Bautista</p>

                </div>
            </li>

            <li>
                <div class="invitado">

                    <img src="img/invitado2.jpg" alt="Invitado 2">

                    <p>Shari Herrera</p>

                </div>
            </li>

            <li>
                <div class="invitado">

                    <img src="img/invitado3.jpg" alt="Invitado 3">

                    <p>Gregorio Sanchez</p>

                </div>
            </li>

            <li>
                <div class="invitado">

                    <img src="img/invitado4.jpg" alt="Invitado 4">

                    <p>Susana Rivera</p>

                </div>
            </li>

            <li>
                <div class="invitado">

                    <img src="img/invitado5.jpg" alt="Invitado 5">

                    <p>Harold Garcia</p>

                </div>
            </li>

            <li>
                <div class="invitado">

                    <img src="img/invitado6.jpg" alt="Invitado 6">

                    <p>Susan Sanchez</p>

                </div>
            </li>

        </ul>

    </section>

    <div class="contador parallax">

        <div class="contenedor">

            <ul class="resumen-evento clearfix">

                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Dias</li>
                <li>
                    <p class="numero"></p>Conferencias</li>

            </ul>
        </div>

    </div>

    <section class="precios seccion">

        <h2>Precios</h2>

        <div class="contenedor">

            <ul class="lista-precios clearfix">

                <li>

                    <div class="tabla-precios">

                        <h3>Pase por Dia</h3>

                        <p class="numero">$30</p>

                        <ul>
                            <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
                            <li><i class="fa fa-check"></i> Todas las Conferencias</li>
                            <li><i class="fa fa-check"></i> Todos los Talleres</li>
                        </ul>

                        <a href="#" class="btn hollow">Comprar</a>

                    </div>

                </li>

                <li>

                    <div class="tabla-precios">

                        <h3>Todos los Dias</h3>

                        <p class="numero">$50</p>

                        <ul>
                            <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
                            <li><i class="fa fa-check"></i> Todas las Conferencias</li>
                            <li><i class="fa fa-check"></i> Todos los Talleres</li>
                        </ul>

                        <a href="#" class="btn">Comprar</a>

                    </div>

                </li>

                <li>

                    <div class="tabla-precios">

                        <h3>Pase por 2 Dias</h3>

                        <p class="numero">$45</p>

                        <ul>
                            <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
                            <li><i class="fa fa-check"></i> Todas las Conferencias</li>
                            <li><i class="fa fa-check"></i> Todos los Talleres</li>
                        </ul>

                        <a href="#" class="btn hollow">Comprar</a>

                    </div>

                </li>

            </ul>

        </div>

    </section>

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion">

        <h2>Testimoniales</h2>

        <div class="testimoniales contenedor clearfix">

            <div class="testimonial">

                <blockquote>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium repellendus vel quos hic magnam. Velit minima ut dolorem numquam quia neque fuga iusto maxime, odio sequi, corrupti excepturi inventore ipsam.</p>

                    <footer class="info-testimonial clearfix footer-testimoniales">

                        <img src="img/testimonial.jpg" alt="Imagen testimonial">

                        <cite>Simon Briceño <span>Diseñador en @Prisma</span></cite>

                    </footer>

                </blockquote>

            </div>

            <div class="testimonial">

                <blockquote>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium repellendus vel quos hic magnam. Velit minima ut dolorem numquam quia neque fuga iusto maxime, odio sequi, corrupti excepturi inventore ipsam.
                    </p>

                    <footer class="info-testimonial clearfix footer-testimoniales">

                        <img src="img/testimonial.jpg" alt="Imagen testimonial">

                        <cite>Simon Briceño <span>Diseñador en @Prisma</span></cite>

                    </footer>

                </blockquote>

            </div>

            <div class="testimonial">

                <blockquote>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium repellendus vel quos hic magnam. Velit minima ut dolorem numquam quia neque fuga iusto maxime, odio sequi, corrupti excepturi inventore ipsam.</p>

                    <footer class="info-testimonial clearfix footer-testimoniales">

                        <img src="img/testimonial.jpg" alt="Imagen testimonial">

                        <cite>Simon Briceño <span>Diseñador en @Prisma</span></cite>

                    </footer>

                </blockquote>

            </div>

        </div>

    </section>

    <div class="newsletter parallax">

        <div class="contenido contenedor">

            <p>Registrate al Newsletter:</p>

            <h3>GdlWebCamp</h3>

            <a href="#" class="boton transparente">Registro</a>
        </div>

    </div>

    <section class="seccion">

        <h2>Faltan</h2>

        <div class="cuenta-regresiva">

            <ul class="clearfix">

                <li>
                    <p id="dias" class="numero">0</p> Dias</li>
                <li>
                    <p id="horas" class="numero">0</p> Horas</li>
                <li>
                    <p id="minutos" class="numero">0</p> Minutos</li>
                <li>
                    <p id="segundos" class="numero">0</p> Segundos</li>

            </ul>

        </div>

    </section>

    <footer class="site-footer">

        <div class="contenedor clearfix">

            <div class="footer-informacion">

                <h3>Sobre <span>GdlWebCamp</span></h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem blanditiis quis fugit doloremque non nostrum, tempore ea eligendi, omnis magni sint ipsum voluptate suscipit facilis sequi excepturi deleniti eaque quos.</p>

            </div>

            <div class="ultimos-tweets">

                <h3>Últimos <span>tweets</span></h3>

                <ul>

                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quia quis nobis tenetur suscipit. Quo perspiciatis fugit repellat ipsum laudantium.</li>
                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quia quis nobis tenetur suscipit. Quo perspiciatis fugit repellat ipsum laudantium.</li>
                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quia quis nobis tenetur suscipit. Quo perspiciatis fugit repellat ipsum laudantium.</li>

                </ul>

            </div>

            <div class="menu">

                <h3>Redes <span>Sociales</span></h3>

                <nav class="redes-sociales">

                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </nav>

            </div>

        </div>

        <p class="copyright">
            Todos los Derechos Reservados GDLWEBCAMP 2020.
        </p>

    </footer>

    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>

    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/Script.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
