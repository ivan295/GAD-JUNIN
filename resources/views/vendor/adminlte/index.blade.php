<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAD JUNÍN-Gobierno Autónomo Descentralizado Municipal del cantón Junín</title>
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estiloPrincipal.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/carousel.css') }}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-acale=1.0, minimun-scale=1.0">
    <link rel="icon" href="img/ico.ico">
    <script src="{{ url ('/js/responsiveslides.min.js') }}"></script>
    <script src="{{ url ('/js/responsiveslides.js') }}"></script>

    <script type="text/javascript">
       // $(function(){
  //$("#Modal").show();
 //});

        $(document).ready(function() {
            $("#Modal").modal("show")
        });

        //     $(window).on('load',function(){
        //     $('#Modal').modal('show');
        // });
    </script>    

</head>

<body>

   
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <header>
        <a href="index" id="logo"><img alt="logo" src="img/logo.png" width="200" height="95"></a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li class="nav-item"><a href="index" class="active">INICIO</a></li>
                <li class="nav-item" id="i-municipio"><a>SERVICIOS<i> &#9660;</i></a>
                    <ul id="submenu">
                        <li><a href="">CONSULTA DE PREDIOS</a></li>
                    </ul>
                </li>
                <li class="nav-item" id="i-municipio"><a>MUNICIPIO<i> &#9660;</i></a>
                    <ul id="submenu">
                        <li><a href="{{ url('/misionyvision') }}">MISIÓN Y VISIÓN</a></li>
                        <li><a href="">ORDENANZAS</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ url('/transparecia') }}">TRANSPARENCIA</a></li>
                <li class="nav-item"><a href="{{ url ('/contacto') }}">CONTACTO</a></li>
        </nav>
        <div class="clearfix"></div>
    </header>
    <br>
    <section>
        <div class="container-fluid">
            <?php $noticia = DB::table('noticias')->where('lugar', '=', '1')->where('estado', '=', 'Publicado')->first();
            if ($noticia != null) {
                $img = $noticia->imagen;
                $titulo1 = $noticia->titulo;
                $resumen1 = $noticia->resumen;
                $div1 = '<div class="blog-content">';
                $findiv1 = '</div>';
            } else {
                $img = 'sec1-.jpg';
                $titulo1 = "";
                $resumen1 = "";
                $div1 = '';
                $findiv1 = '';
            }
            ?>
            <div class="hero-area d-flex flex-wrap">
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
                    $img2 = 'sec2-.jpg';
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
                        $img3 = 'sec3-.jpg';
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
                            $img4 = 'sec4-.jpg';
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
    </section>
    <br>
    <div id="seccion2">
        <iframe id="video" src="https://www.youtube.com/embed/aYD5LMKT4Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div id="seccion">
            <div id="twitter">
                <a class="twitter-timeline" data-height="400" data-theme="dark" href="https://twitter.com/GADJunin?ref_src=twsrc%5Etfw">Tweets de GADJunin</a>
            </div>
            <div id="servi-online">
                <a href="http://consultas.municipiodejunin.gob.ec/" target="_blank"><img id="servicio" src="img\servicios.jpg" alt="Servicios online"></a>
                <a href="https://municipiodejunin.gob.ec/junin/index.php/2012-10-01-19-49-35/gaceta-oficial" target="_blank"><img src="img\gaceta.jpg" alt="Gaceta Municipal" id="gaceta"></a>
                <a href="https://mail.junin.gob.ec" target="_blank"><img id="mail" src="img\correo.jpg" alt="Correo Institucional"></a>
            </div>
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
                        <label>(593)5 370 21 80</label>
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
                    <a href="https://mail.junin.gob.ec">CORREO</a> |
                    <a href="">INFORMACION</a> |
                    <a href="">INFORMACION</a> |
                    <a class="social" href="{{ url('/login') }}" target="_blank"><i class="fa fa-user-circle"></i></a></li>
                </div>
            </div>
        </div>
    </footer>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="{{ url ('/js/jquery.min.js') }}"></script>
    <script src="{{ url ('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url ('/js/toggle.js') }}"></script>
    <script src="{{ url ('/js/bootstrap-hover.min.js') }}"></script>
    <script src="{{ url ('/js/jquery.js') }}"></script>
    <script src="{{ url ('/js/carousel.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="{{ url ('/js/responsiveslides.js') }}"></script>
    <script src="{{ url ('/js/jquery2.js') }}"></script>

    <script type="text/javascript">
       // $(function(){
  //$("#Modal").show();
 //});

        //$(document).ready(function() {
          //  $("#Modal").modal("show")
        //});

        //     $(window).on('load',function(){
        //     $('#Modal').modal('show');
        // });
    </script>
   



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