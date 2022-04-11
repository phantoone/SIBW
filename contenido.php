<!DOCTYPE html>
<html>

<!-- en la cabecera van las rutas a los archivos css y demas -->

<head>
    <link rel="stylesheet" href="static/css/portada.css">
    <link rel="stylesheet" href="static/css/contenido.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

    <?php include 'header.html'?>
</head>

<body>
    <!-- Cuerpo de la página -->
    <div class="cuerpo">
        <!-- Contenido de la página -->
        <content class="detallescontenido">
            <!--Nombre, marca, precio y fotos adicionales del producto-->
            <div class="nombreyfotos">
                <div class="marcayprecio">
                    <div class="masnomprod">
                        <text><b>Nendoroid Soraru Utaite</b></text>
                    </div>

                    <div class="marca">
                        <text>Marca: Good Smile Company </text>
                        <div class="precio">
                            <text>Precio: 52.90€</text>
                        </div>
                    </div>

                </div>

                <div class="masfotos">
                    <img class="fotodetalle" src="static/imagen/soraru4.png" />
                    <img class="fotodetalle" src="static/imagen/soraru3.png" />
                </div>
            </div>

            <!--Párrafo con más detalles sobre el producto-->
            <div class="caracteristicas">
                <text class="titulocaract">
                    <b>Características del producto</b><br />
                </text>
                <text class="cuerpocaract">
                    <b>Nombre del producto:</b> {{ product.title }}<br />
                    <b>Personaje:</b> {{ product.personaje }}<br />
                    <b>Licencia:</b> 
                        {% if product.licencia %}
                            {{ product.licencia }} 
                        % else %
                    <br />
                    <b>Línea del producto:</b> Nendoroid 1703<br />
                    <b>Fabricante:</b> Good Smile Company<br />
                    <b>Artistas:</b> Nendoron (Escultura), Shichibee (Escultura)<br />
                    <b>Especificaciones:</b> Pintada, articulada, sin escala y fabricada en PVC y ABS.<br />
                    <b>Medidas (aprox.):</b> 10 cms<br /><br />
                    Good Smile Company, dentro de su linea de figuras Nendoroid,
                    presenta la figura del popular músico Soraru. Se trata de una
                    figura de 10 cm de alto que viene con tres placas faciales
                    que incluyen una expresión estándar, una expresión dormida
                    y una expresión de ojos llorosos. Las piezas opcionales
                    incluyen un micrófono, una consola de juegos y una versión
                    estándar y con lágrimas en los ojos de Hanpen. Se incluye
                    también una base soporte para exposición.

                </text>
            </div>

            <!--Botones para imprimir y acceder a facebook, instagram y twitter-->
            <div class="botonesmedia">
                <div class="imprimir">
                    <a href="imprimir.html" class="icono">
                        <img class="socialmedia" src="static/imagen/imprimir.svg" />
                    </a>
                </div>

                <div class="social">
                    <a href="https://www.facebook.com/?stype=lo&jlou=AfegGdc-AF2KDs2OsOk6MtySG7lNWDNDvyoNVcyjjGYn5Fu9edldMefDUueWpcTTlo1XkwbKiEd8SQ_h-znM172VS9IHpa6Q_6L262ovPxWR7g&smuh=25403&lh=Ac_JpAE1ky57BMjCXBc"
                        class="icono">
                        <img class="socialmedia" src="static/imagen/facebook.svg" />
                    </a>
                    <a href="https://twitter.com/?logout=1647353328493" class="icono">
                        <img class="socialmedia" src="static/imagen/twitter.svg" />
                    </a>
                    <a href="https://www.instagram.com/" class="icono">
                        <img class="socialmedia" src="static/imagen/instagram.svg" />
                    </a>
                </div>
            </div>

            <!-- Práctica 2 : comentarios-->

            <div class="botoncomentarios">
                <button id="botoncomentarios" onclick="abrirComent()">
            </div>

            <div id="seccioncomentarios">
                <div id="comentarios" class="comentarios">
                    <div class="titulocomentario">
                        <text><b>Comentarios</b></text>
                    </div>
                    <div class="comentario">
                        <div class="autor">
                            <text>
                                Pepito Los Palotes
                            </text>
                            <text>
                                17/02/2021
                            </text>
                            <text>
                                14:37
                            </text>
                        </div>
                        <div class="cuerpocomentario">

                            <text>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam vitae commodo orci.
                                Praesent et ante et arcu viverra accumsan a
                                vel ex. Pellentesque ante justo, bibendum
                                in leo ut, mollis sagittis ante. Donec porta
                                nisl risus, sit amet faucibus augue ornare a.
                                Donec vitae urna elit. Etiam consequat, est ac
                                maximus faucibus, nibh augue pharetra urna, sed
                                semper sem nisl euismod eros. Quisque nec enim
                                sit amet purus cursus convallis. Sed consectetur
                                erat massa, a auctor nibh rhoncus non. Curabitur
                                scelerisque quis urna ac gravida. Praesent in
                                lorem id elit porttitor elementum. Donec bibendum
                                egestas ante vel iaculis. Vivamus mattis
                                turpis eu elit fermentum maximus. Donec a sem nec metus mollis tincidunt.</text>
                        </div>
                    </div>

                    <div class="comentario">
                        <div class="autor">
                            <text>
                                Fulanita Soria
                            </text>
                            <text>
                                22/03/2022
                            </text>
                            <text>
                                18:14
                            </text>
                        </div>
                        <div class="cuerpocomentario">

                            <text>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam vitae commodo orci.
                                Praesent et ante et arcu viverra accumsan a
                                vel ex. Pellentesque ante justo, bibendum
                                in leo ut, mollis sagittis ante. Donec porta
                                nisl risus, sit amet faucibus augue ornare a.
                                Donec vitae urna elit. Etiam consequat, est ac
                                maximus faucibus, nibh augue pharetra urna, sed
                                semper sem nisl euismod eros. Quisque nec enim
                                sit amet purus cursus convallis. Sed consectetur
                                erat massa, a auctor nibh rhoncus non. Curabitur
                                scelerisque quis urna ac gravida. Praesent in
                                lorem id elit porttitor elementum. Donec bibendum
                                egestas ante vel iaculis. Vivamus mattis
                                turpis eu elit fermentum maximus. Donec a sem nec metus mollis tincidunt.</text>
                        </div>
                    </div>
                </div>

                <!--Formulario para escribir un comentario-->
                <div class="formulariocoment">
                    <div>
                        <input type="text" size=50 id="nombre" name="nombre" placeholder="Nombre">
                        </input>
                    </div>
                    <div>
                        <input type="text" size=50 id="correo" name="correo" placeholder="Correo electrónico">
                        </input>
                    </div>
                    <div>
                        <textarea id="areaTexto" cols="12" rows='8' placeholder="Comentario"></textarea>
                    </div>
                    <button id="enviar">Enviar</button>
                </div>
            </div>

        </content>
        <!-- Elementos auxiliares -->
        <section class="auxiliar">
            <?php include 'auxiliar.html'?>
        </section>
    </div>
</body>

<footer>
    <!-- Pie de la página -->
    <div class="footer">
        <?php include 'footer.html'?>
    </div>
</footer>

</html>
<script src="static/js/comentarios.js"></script>