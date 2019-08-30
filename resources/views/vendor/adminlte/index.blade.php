<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAD JUNÍN-Gobierno Autónomo Descentralizado Municipal del cantón Junín</title>
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/estiloPrincipal.css" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" type="text/css" rel="stylesheet">
</head>

<body>
    <!-- <?php
            date_default_timezone_set('America/Guayaquil'); ?>
     <div class="container">
        <div class="container-fecha">
            <span class="glyphicon glyphicon-time" aria-hidden="true"><small><?= date(' d/m/Y  g:i a ') ?></small></span>
        </div>
        <audio controls="" preload="none" src="http://ec.radiosenlaweb.com/1270am-radiojunin"></audio>
        <div class="nav-social">
            <a href="" target="_blank" class="fa fa-facebook" title="Facebook"></a>
            <a href="" target="_blank" class="fa fa-twitter" title="Twitter"></a>
            <a href="" target="_blank" class="fa fa-instagram" title="Instagram"></a>
            <a href="" target="_blank" class="fa fa-youtube" title="Youtube"></a>
        </div>
    </div>  -->

    <header>
        <a href="" id="logo"><img alt="logo" src="img/logo.png" class="imagen"></a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li class="nav-item"><a href="" class="active">INICIO</a></li>
                <li class="nav-item"><a href="">MUNICIPIO<i> &#9660;</i></a>
                    <ul id="submenu">
                        <li><a href="">MISIÓN Y VISIÓN</a></li>
                        <li><a href="">ORDENANZAS</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="">TRANSPARENCIA</a></li>
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
        } else {
            $img = 'item.jpg';
            $titulo1 = "";
            $resumen1 = "";
        }
        ?>
        <div class="hero-area d-flex flex-wrap">
            <div class="hero-single-section">
                <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms" style="background-image:url(imgNoticias/<?php echo $img ?>); ">
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-contenido1">
                                <h5><?php echo $titulo1 ?></h5>
                                <p><?php echo $resumen1 ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $noticia2 = DB::table('noticias')->where('lugar', '=', 2)->where('estado', '=', 'Publicado')->first();
            if ($noticia2 != null) {
                $img2 = $noticia2->imagen;
                $titulo2 = $noticia2->titulo;
                $resumen2 = $noticia2->resumen;
            } else {
                $img2 = 'item.jpg';
                $titulo2 = "";
                $resumen2 = "";
            }
            ?>
            <div class="hero-single-section">
                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(imgNoticias/<?php echo $img2 ?>);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post white">
                            <div class="blog-content">
                                <a href="#" class="post-contenido2">
                                    <h5><?php echo $titulo2 ?></h5>
                                    <p><?php echo $resumen2 ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $noticia3 = DB::table('noticias')->where('lugar', '=', 3)->where('estado', '=', 'Publicado')->first();
                if ($noticia3 != null) {
                    $img3 = $noticia3->imagen;
                    $titulo3 = $noticia3->titulo;
                    $resumen3 = $noticia3->resumen;
                } else {
                    $img3 = 'item.jpg';
                    $titulo3 = "";
                    $resumen3 = "";
                }
                ?>
                    <div class="hero-second-section d-flex flex-wrap">
                        <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="100ms" style="background-image: url(imgNoticias/<?php echo $img3 ?>);">
                            <div class="welcome-post-content">
                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="#" class="post-contenido3">
                                            <h5><?php echo $titulo3 ?></h5>
                                            <p><?php echo $resumen3 ?>
                                                <p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $noticia4 = DB::table('noticias')->where('lugar', '=', 4)->where('estado', '=', 'Publicado')->first();
                        if ($noticia4 != null) {
                            $img4 = $noticia4->imagen;
                            $titulo4 = $noticia4->titulo;
                            $resumen4 = $noticia4->resumen;
                        } else {
                            $img4 = 'item.jpg';
                            $titulo4 = "";
                            $resumen4 = "";
                        }
                        ?>
                        <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(imgNoticias/<?php echo $img4 ?>);">
                            <div class="welcome-post-content">
                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="#" class="post-contenido4">
                                            <h5><?php echo $titulo4 ?></h5>
                                            <p><?php echo $resumen4 ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <aside id="block">
                <p>jagsdhasdgahdgashd</p>
            </aside>

        </div>
        <br>
        <!--footer-->
        <footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <div class="logo">
                        <img src="img\item.jpg" alt="logo">
                    </div>
                    <div class="frase">
                        <p>"JUNÍN LO HACEMOS TODOS"</p>
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
                <div class="container-footer">
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
                        <a href="">INTRANET</a> |
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