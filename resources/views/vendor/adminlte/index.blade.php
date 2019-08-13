<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAD JUNÍN-Gobierno Autónomo Descentralizado Municipal del cantón Junín</title>
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/carousel.css" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" type="text/css" rel="stylesheet">

</head>

<body>
    <?php
    date_default_timezone_set('America/Guayaquil'); ?>
    <div class="container" id="fecha">
        <span class="fa fa-clock-o" aria-hidden="true"><small><?= date(' d/m/Y  g:i a ') ?></small></span>
        <!-- <audio controls="" preload="none" src="http://ec.radiosenlaweb.com/1270am-radiojunin"></audio> -->
    </div>
    <div class="social-bar">
        <a href="" class="icon icon-facebook" target="_blank"></a>
        <a href="" class="icon icon-twitter" target="_blank"></a>
        <a href="" class="icon icon-instagram" target="_blank"></a>
        <a href="" class="icon icon-youtube" target="_blank"></a>
    </div>
    <div class="container-fluid">
        <header>
            <a href="#" id="logo">logo</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li class="nav-item"><a href="#" class="active"><i class="fa fa-home"></i> INICIO</a></li>
                    <li class="nav-item"><a href="#"><i class="fa fa-bank"></i> MUNICIPIO <i class="fa  fa-sort-down"></i></a>
                        <ul id="submenu">
                            <li><a href="">MISIÓN Y VISIÓN</a></li>
                            <li><a href="">ORDENANZAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#"><i class="fa fa-balance-scale"></i> TRANSPARENCIA</a></li>
                    <li class="nav-item"><a href="#"><i class="fa fa-paper-plane-o"></i> CONTACTO</a></li>
            </nav>
            <div class="clearfix"></div>
        </header>
    </div>
    <br>
    <section>
        <div class="container-fluid">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php $cnt = 0; ?>
                    <?php $noticia = DB::table('noticias')->get(); ?>
                    @foreach ($noticia as $not)
                    <div class="carousel-item <?php if ($cnt == 0) {
                                                    echo 'active';
                                                } ?>">

                        <div><img class="d-block w-50 active img-responsive" src="imgNoticias/{{ $not->imagen}}" alt="Imagen de Noticia">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>
                                {{$not->titulo}}
                            </h5>
                            <p>
                                {{$not->resumen}}
                            </p>
                        </div>
                    </div>
                    <?php $cnt++; ?>
                    @endforeach

                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <br>
    <!--footer-->
    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="logo">
                    <img src="img\item.jpg" alt="logo">
                </div>
                <div class="frase">
                    <p>"LA INNOVACIÓN ES LA QUE DISTINGUE
                        A UN LÍDER, DE LOS DEMÁS"</p>
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
                    @ 2019 Copyright GAD Municipal del Cantón Junín
                </div>
                <div class="informacion">
                    <a href="">INFORMACION</a> |
                    <a href="">INFORMACION</a> |
                    <a href="">INFORMACION</a>
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