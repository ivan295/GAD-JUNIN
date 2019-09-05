<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAD JUNÍN-Gobierno Autónomo Descentralizado Municipal del cantón Junín</title>
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/estiloPrincipal.css" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-acale=1.0, minimun-scale=1.0"> 
</head>

<body>
        <header>
            <a href="#" id="logo"><img alt="logo" src="img/logo.png" width="170" height="40"></a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li class="nav-item"><a href="" class="active">INICIO</a></li>
                    <li class="nav-item"><a>MUNICIPIO<i> &#9660;</i></a>
                        <ul id="submenu">
                            <li><a href="">MISIÓN Y VISIÓN</a></li>
                            <li><a href="">ORDENANZAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ url('/transparecia') }}">TRANSPARENCIA</a></li>
                    <li class="nav-item"><a href="">CONTACTO</a></li>
            </nav>
            <div class="clearfix"></div>
        </header>
        <br>
        <div class="container-fluid">
            <?php $noticia = DB::table('noticias')->where('lugar', '=', '1')->where('estado', '=', 'Publicado')->first();
            if ($noticia != null) {
                $img = $noticia->imagen;
                $titulo1 = $noticia->titulo;
                $resumen1 = $noticia->resumen;
                $div1 = '<div class="blog-content">';
                $findiv1 = '</div>';
            } else {
                $img = 'logo.jpg';
                $titulo1 = "";
                $resumen1 = "";
                $div1 = '';
                $findiv1 = '';
            }
            ?>
            <div class="hero-area d-flex flex-wrap" >
                <div class="hero-single-section">
                    <div class="bg-img item1" style="background-image:url(imgNoticias/<?php echo $img ?>); ">
                        <div class="single-blog-post white">
                            <?php echo $div1 ?>
                            <a href="#" class="post-contenido1">
                                <h5><?php echo $titulo1 ?></h5>
                                <p><?php echo $resumen1 ?></p>
                            </a>
                            <?php echo $findiv1 ?>
                        </div>
                    </div>
                </div>
                <?php $noticia2 = DB::table('noticias')->where('lugar', '=', 2)->where('estado', '=', 'Publicado')->first();
                if ($noticia2 != null) {
                    $img2 = $noticia2->imagen;
                    $titulo2 = $noticia2->titulo;
                    $resumen2 = $noticia2->resumen;
                    $div2 = '<div class="blog-content">';
                    $findiv2 = '</div>';
                } else {
                    $img2 = 'logo.jpg';
                    $titulo2 = "";
                    $resumen2 = "";
                    $div2 = '';
                    $findiv2 = '';
                }
                ?>
                <div class="hero-single-section">
                    <!-- Single Welcome Post -->
                    <div class="bg-img item2" style="background-image: url(imgNoticias/<?php echo $img2 ?>);">
                        <!-- Content -->
                        <div class="welcome-post-content">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <?php echo $div2 ?> <a href="" class="post-contenido2">
                                    <h5><?php echo $titulo2 ?></h5>
                                    <p><?php echo $resumen2 ?></p>
                                </a>
                                <?php echo $findiv2 ?>
                            </div>
                        </div>
                    </div>
                    <?php $noticia3 = DB::table('noticias')->where('lugar', '=', 3)->where('estado', '=', 'Publicado')->first();
                    if ($noticia3 != null) {
                        $img3 = $noticia3->imagen;
                        $titulo3 = $noticia3->titulo;
                        $resumen3 = $noticia3->resumen;
                        $div3 = '<div class="blog-content">';
                        $findiv3 = '</div>';
                    } else {
                        $img3 = 'logo.jpg';
                        $titulo3 = "";
                        $resumen3 = "";
                        $div3 = '';
                        $findiv3 = '';
                    }
                    ?>
                    <div class="hero-second-section d-flex">
                        <div class="bg-img item3" style="background-image: url(imgNoticias/<?php echo $img3 ?>);">
                            <div class="welcome-post-content">
                                <div class="single-blog-post white">
                                    <?php echo $div3 ?> <a href="#" class="post-contenido3">
                                        <h5><?php echo $titulo3 ?></h5>
                                        <p><?php echo $resumen3 ?>
                                            <p>
                                    </a>
                                    <?php echo $findiv3 ?>
                                </div>
                            </div>
                        </div>
                        <?php $noticia4 = DB::table('noticias')->where('lugar', '=', 4)->where('estado', '=', 'Publicado')->first();
                        if ($noticia4 != null) {
                            $img4 = $noticia4->imagen;
                            $titulo4 = $noticia4->titulo;
                            $resumen4 = $noticia4->resumen;
                            $div4 = '<div class="blog-content">';
                            $findiv4 = '</div>';
                        } else {
                            $img4 = 'logo.jpg';
                            $titulo4 = "";
                            $resumen4 = "";
                            $div4 = '';
                            $findiv4 = '';
                        }
                        ?>
                        <div class="bg-img item4" style="background-image: url(imgNoticias/<?php echo $img4 ?>);">
                            <div class="welcome-post-content">
                                <div class="single-blog-post white">
                                    <?php echo $div4 ?> <a href="#" class="post-contenido4">
                                        <h5><?php echo $titulo4 ?></h5>
                                        <p><?php echo $resumen4 ?></p>
                                    </a>
                                    <?php echo $findiv4 ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="seccion2">
            <div id="block">
                <iframe id="video" src="https://www.youtube.com/embed/K3wLBUByj-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div id="servi-online">
                <img id="servicio"src="img\servicios.jpg" alt="Servicios online" >
                <a href="https://municipiodejunin.gob.ec/junin/index.php/2012-10-01-19-49-35/gaceta-oficial"><img src="img\gaceta.jpg" alt="Servicios online" id="gaceta"></a>

            </div>

        </div>
        <!--footer-->
        <footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <div class="ubicacion">
                        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.297232596411!2d-80.20837068572702!3d-0.9260218355992927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902b98df02756cf1%3A0x8b2608916018c884!2sMUNICIPIO%20DE%20JUNIN!5e0!3m2!1ses!2sec!4v1567179885370!5m2!1ses!2sec" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="contacto">
                        <h1>CONTACTOS</h1>
                        <div class="direccion">
                            <img src="img\house.jpg" alt="house">
                            <label>AV. Eloy Alfaro y Calle Coronel García</label>
                        </div>
                        <div class="telefono">
                            <img src="img\phone.jpg" alt="phone">
                            <label>(593)5 268 99 18</label>
                        </div>
                        <div class="mail">
                            <img src="img\email.png" alt="email">
                            <label>alcaldia@municipiodejunin.gob.ec</label>
                        </div>
                    </div>
                </div>
                <div class="containfooter">
                    <div class="copyright">
                        &copy; 2019 Copyright GAD Municipal del Cantón Junín
                    </div>
                    <div class="social">
                        <a href="" target="_blank" class="fa fa-facebook" title="Facebook"></a>
                        <a href="" target="_blank" class="fa fa-twitter" title="Twitter"></a>
                        <a href="" target="_blank" class="fa fa-instagram" title="Instagram"></a>
                        <a href="" target="_blank" class="fa fa-youtube" title="Youtube"></a>
                    </div>
                    <div class="informacion">
                        <a href="">INFORMACION</a> |
                        <a href="">INFORMACION</a> |
                        <a href="">INFORMACION</a> |
                        <a class="social" href="{{ url('/login') }}" target="_blank"><i class="fa fa-user-circle"></i></a></li>
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/toggle.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown").on("hide.bs.dropdown", function() {
                $(".btn").html('Dropdown <span class="caret"></span>');
            });
            $(".dropdown").on("show.bs.dropdown", function() {
                $(".btn").html('Dropdown <span class="caret caret-up"></span>');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('.menu-toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
        })
    </script>
</body>

</html>