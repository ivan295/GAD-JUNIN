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
</head>

<body>
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
                <li class="nav-item"><a href="">CONTACTO</a></li>
        </nav>
        <div class="clearfix"></div>
    </header>
    <br>
    <section id=contacto>
        <div id="texto">
            <p id="gad">GOBIERNO AUTÓNOMO DESCENTRALIZADO MUNICIPAL DEL CANTÓN JUNÍN.</p>
            <p id="contact">CONTACTOS:</p>
            <p id="correo1">alcaldia@junin.gob.ec</p>
            <p id="correo2">municipiodejunin@hotmail.com</p>
            <p id="numero">PBX: (593) (5) 370 21 80 </p>
        </div>
        <div id="img-p">
            <img id="panela"src="img/panela.jpg" alt="">
        </div>
    </section>


    <br>
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