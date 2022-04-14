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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>

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
        <div class="contenedor clearfix">

            <div class="logo">
                <img src="img/logo.svg" alt="Logo GdlWebCamp" </div> </div>
            <div class="menu-movil">
                <!-- Para hacer el menu de hamburguesa -->
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navegacion-principal">
                <a href="conferencias.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a href="#">Invitados</a>
                <a href="#">Reservaciones</a>
            </nav>

        </div>

    </div>

    <section class="seccion contenedor">
        <h2>Registro de Usuarios</h2>

        <form action="index.html" id="registro" class="registro" method="POST">

            <div id="datos-usuario" class="registro caja clearfix">

                <div class="campo">
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                </div>

                <div class="campo">
                    <label for="apellido">Apellido: </label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido">
                </div>

                <div class="campo">
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>

                <div id="error"></div>

            </div>

            <div id="paquetes" class="paquetes">
                <h3>Elige el número de paquetes</h3>

                <ul class="lista-precios clearfix">

                    <li>

                        <div class="tabla-precios">

                            <h3>Pase por Dia (Viernes)</h3>

                            <p class="numero">$30</p>

                            <ul>
                                <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
                                <li><i class="fa fa-check"></i> Todas las Conferencias</li>
                                <li><i class="fa fa-check"></i> Todos los Talleres</li>
                            </ul>

                            <div class="orden">
                                <label for="pase_dia">Boletos Deseados:</label>
                                <input type="number" min=0 id="pase_dia" size="3" placeholder="0">

                            </div>

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

                            <div class="orden">
                                <label for="pase_completo">Boletos Deseados:</label>
                                <input type="number" min=0 id="pase_completo" size="3" placeholder="0">

                            </div>

                        </div>

                    </li>

                    <li>

                        <div class="tabla-precios">

                            <h3>Pase por 2 Dias (Viernes y Sabado)</h3>

                            <p class="numero">$45</p>

                            <ul>
                                <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
                                <li><i class="fa fa-check"></i> Todas las Conferencias</li>
                                <li><i class="fa fa-check"></i> Todos los Talleres</li>
                            </ul>

                            <div class="orden">
                                <label for="pase_dosdias">Boletos Deseados:</label>
                                <input type="number" min=0 id="pase_dosdias" size="3" placeholder="0">

                            </div>

                        </div>

                    </li>

                </ul>

            </div>

            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>

                <div class="caja">

                    <div id="viernes" class="contenido-dia clearfix">
                        <h4>Viernes</h4>

                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro" id="taller_01" value="taller_01"><time>10:00</time>
                      Responsive Web Design</label>
                            <label><input type="checkbox" name="registro" id="taller_02" value="taller_02"><time>12:00</time>
                      Flexbox</label>
                            <label><input type="checkbox" name="registro" id="taller_03" value="taller_03"><time>14:00</time>
                      HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro" id="taller_04" value="taller_04"><time>17:00</time>
                      Drupal</label>
                            <label><input type="checkbox" name="registro" id="taller_05" value="taller_05"><time>19:00</time>
                      WordPress</label>
                        </div>

                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro" id="conf_01" value="conf_01"><time>10:00</time> Como
                      ser Freelancer</label>
                            <label><input type="checkbox" name="registro" id="conf_02" value="conf_02"><time>17:00</time>
                      Tecnologías del Futuro</label>
                            <label><input type="checkbox" name="registro" id="conf_03" value="conf_03"><time>19:00</time>
                      Seguridad en la Web</label>
                        </div>

                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro" id="sem_01" value="sem_01"><time>10:00</time> Diseño
                      UI y UX para móviles</label>
                        </div>

                    </div>
                    <!--#viernes-->

                    <div id="sabado" class="contenido-dia clearfix">
                        <h4>Sábado</h4>

                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro" id="taller_06" value="taller_06"><time>10:00</time>
                      AngularJS</label>
                            <label><input type="checkbox" name="registro" id="taller_07" value="taller_07"><time>12:00</time>
                      PHP y MySQL</label>
                            <label><input type="checkbox" name="registro" id="taller_08" value="taller_08"><time>14:00</time>
                      JavaScript Avanzado</label>
                            <label><input type="checkbox" name="registro" id="taller_09" value="taller_09"><time>17:00</time>
                      SEO en Google</label>
                            <label><input type="checkbox" name="registro" id="taller_10" value="taller_10"><time>19:00</time>
                      De Photoshop a HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro" id="taller_11" value="taller_11"><time>21:00</time>
                      PHP Medio y Avanzado</label>
                        </div>

                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro" id="conf_04" value="conf_04"><time>10:00</time> Como
                      crear una tienda online que venda millones en pocos días</label>
                            <label><input type="checkbox" name="registro" id="conf_05" value="conf_05"><time>17:00</time> Los
                      mejores lugares para encontrar trabajo</label>
                            <label><input type="checkbox" name="registro" id="conf_06" value="conf_06"><time>19:00</time>
                      Pasos para crear un negocio rentable</label>
                        </div>

                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro" id="sem_02" value="sem_02"><time>10:00</time>
                      Aprende a Programar en una mañana</label>
                            <label><input type="checkbox" name="registro" id="sem_03" value="sem_03"><time>17:00</time> Diseño
                      UI y UX para móviles</label>
                        </div>

                    </div>
                    <!--#sabado-->

                    <div id="domingo" class="contenido-dia clearfix">
                        <h4>Domingo</h4>

                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro" id="taller_12" value="taller_12"><time>10:00</time>
                      Laravel</label>
                            <label><input type="checkbox" name="registro" id="taller_13" value="taller_13"><time>12:00</time>
                      Crea tu propia API</label>
                            <label><input type="checkbox" name="registro" id="taller_14" value="taller_14"><time>14:00</time>
                      JavaScript y jQuery</label>
                            <label><input type="checkbox" name="registro" id="taller_15" value="taller_15"><time>17:00</time>
                      Creando Plantillas para WordPress</label>
                            <label><input type="checkbox" name="registro" id="taller_16" value="taller_16"><time>19:00</time>
                      Tiendas Virtuales en Magento</label>
                        </div>

                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro" id="conf_07" value="conf_07"><time>10:00</time> Como
                      hacer Marketing en línea</label>
                            <label><input type="checkbox" name="registro" id="conf_08" value="conf_08"><time>17:00</time> ¿Con
                      que lenguaje debo empezar?</label>
                            <label><input type="checkbox" name="registro" id="conf_09" value="conf_09"><time>19:00</time>
                      Frameworks y librerias Open Source</label>
                        </div>

                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro" id="sem_04" value="sem_04"><time>14:00</time>
                      Creando una App en Android en una tarde</label>
                            <label><input type="checkbox" name="registro" id="sem_05" value="sem_05"><time>17:00</time>
                      Creando una App en iOS en una tarde</label>
                        </div>

                    </div>
                    <!--#domingo-->

                </div>
                <!--.caja-->

            </div>
            <!--#eventos-->

            <div id="resumen" class="resumen">

                <h3>Pagos y Extras</h3>

                <div class="caja clearfix">

                    <div class="extras">

                        <div class="orden">

                            <label for="camisa_evento">Camisa del Evento 10$<small>(Promocion 7% Dto.)</small></label>
                            <input type="number" min=0 id="camisa-evento" size="3" placeholder="0">

                        </div>

                        <div class="orden">

                            <label for="etiquetas">Paquete de 10 etiquetas 2$<small>(HTML5, CSS, JavaScript, Chrome)</small></label>
                            <input type="number" min=0 id="etiquetas" size="3" placeholder="0">

                        </div>

                        <div class="orden">

                            <label for="regalo">Seleccione un Regalo</label>

                            <select id="regalo" required>

                                <option value>-- Seleccion un Regalo--</option>
                                <option value="ETI">Etiquetas</option>
                                <option value="PUL">Pulseras</option>
                                <option value="PLU">Plumas</option>

                            </select>

                        </div>

                        <input type="button" id="calcular" class="btn" value="Calcular">

                    </div>

                    <div class="total">
                        <p>Resumen:</p>

                        <div id="lista_productos">

                        </div>

                        <p>Total:</p>

                        <div id="suma-total">

                        </div>

                        <input type="submit" id="btn-registro" class="btn" value="Pagar">

                    </div>

                </div>


            </div>

        </form>

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
