<!DOCTYPE html>
<html>

<!-- en la cabecera van las rutas a los archivos css y demas -->

<head>
    <link rel="stylesheet" href="static/css/portada.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

    <?php include 'header.html'?>
</head>

<body>

    

    <!-- Cuerpo de la página -->
    <div class="cuerpo">

        <!-- Contenido de la página -->
        <content class="contenido">

                <div class="producto">
                    <img class="imgprod" src="static/imagen/soraru.webp" />
                    <a class="nombreprod" href="contenido.php">
                        Nendoroid Soraru Utaite
                    </a>
                </div>
                
                <div class="producto">
                    <img class="imgprod" src="static/imagen/venti.webp" />
                    <a class="nombreprod" href="contenido.php">
                        Nendoroid Venti Genshin Impact
                    </a>
                </div>
                <div class="producto">
                    <img class="imgprod" src="static/imagen/9s.webp" />
                    <a class="nombreprod" href="contenido.php">
                        
                        Nendoroid 9S Nier:Automata
                    </a>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/sona.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Sona League of Legends </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/noe.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Noe Vanitas no Carte </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/wuxian.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Wuxian The Legend of Hei </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/shiranui.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Shiranui Okami </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/vil.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Vil Twisted Wonderland </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/otakemaru.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Otakemaru Onmyoji </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/aether.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Aether Gneshin Impact </text>
                    </div>
                </div>

                <div class="producto">
                    <img class="imgprod" src="static/imagen/kakyoin.webp" />

                    <div class="nombreprod">
                        <text> Nendoroid Kakyoin Jojos's Bizarre Adventure </text>
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
       <?php include 'footer.html' ?>
    </div>
</footer>

</html>