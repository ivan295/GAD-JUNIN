<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAD JUNÍN-Gobierno Autónomo Descentralizado Municipal del cantón Junín</title>
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/estiloPrincipal.css" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-acale=1.0, minimun-scale=1.0">
    <link rel="icon" href="img/ico.ico">

</head>

<body>
    <header>
        <a href="index" id="logo"><img alt="logo" src="img/logo.png" width="200" height="98"></a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li class="nav-item"><a href="index" class="active">INICIO</a></li>
                <li class="nav-item"><a href="">MUNICIPIO<i> &#9660;</i></a>
                    <ul id="submenu">
                        <li><a href="">MISIÓN Y VISIÓN</a></li>
                        <li><a href="">ORDENANZAS</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">TRANSPARENCIA</a></li>
                <li class="nav-item"><a href="">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <br>
    <section id=trans>
        <div id="transparencia">
            <div class="container-trans">
                <h1>Transparencia GAD Junín</h1>
                <div id="imagen-trans">
                    <img id="imgtrans" src="img\img-transparencia.jpg" alt="">
                </div>
                <br>
                <p id="texto"><strong>Art. 7.-</strong>Difusión de la Información Pública.- Por la transparencia en la gestión administrativa que están obligadas a observar todas las instituciones del Estado que conforman el sector público en los términos del artículo 225 de la Constitución de la República y demás entes señalados en el artículo 1 de la presente Ley, difundirán a través de un
                    portal de información o página web, así como de
                    los medios necesarios a disposición del público,
                    implementados en la misma institución,
                    la siguiente información mínima actualizada, que para efectos de esta Ley, se la considera de naturaleza obligatoria:</p>

                <div class="tab">
                    <button class="tablinks" onclick="openCity(event,'2019')" id="defaultOpen">2019</button>
                </div>
                <!--2019-->
                <div id="2019" class="tabcontent">
                    <a class="mes" id="enero">
                        <p id="letra">&#x2b;Enero</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Enero')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-enero">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>



                    <a class="mes" id="febrero">
                        <p>&#x2b;Febrero</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Febrero')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-febrero">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>




                    <a class="mes" id="marzo">
                        <p>&#x2b;Marzo</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Marzo')  //mes 3 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-marzo">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>




                    <a class="mes" id="abril">
                        <p>&#x2b;Abril</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Abril')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-abril">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>




                    <a class="mes" id="mayo">
                        <p>&#x2b;Mayo</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Mayo')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-mayo">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>




                    <a class="mes" id="junio">
                        <p>&#x2b;Junio</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Junio')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-junio">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>



                    <a class="mes" id="julio">
                        <p>&#x2b;Julio</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Julio')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-julio">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>



                    <a class="mes" id="agosto">
                        <p>&#x2b;Agosto</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Agosto')  //mes 1 del año 2019
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-agosto">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>



                    <a class="mes" id="septiembre">
                        <p>&#x2b;Septiembre</p>
                    </a>
                    <?php
                    $var = DB::table('lotaip')
                        ->join('lotaipmes', 'lotaipmes.id', '=', 'lotaip.id_mes')
                        ->join('lotaipanio', 'lotaipanio.id', '=', 'lotaipmes.id_anio')
                        ->select('lotaip.*', 'lotaipmes.descripcion as m')
                        ->where('lotaipmes.descripcion', '=', 'Septiembre')  
                        ->where('lotaipanio.descripcion', '=', '2019')
                        ->get();
                    ?>
                    <ul class="item" id="item-septiembre">
                        @foreach($var as $l)
                        <li><a href="{{$l->url}}" target="_blank">{{$l->titulo}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
        <div id="correo">
            <div id="buzon">
                <strong><p id="titulo-trans">Solicitud Receptada por medio digital</p></strong>
                <p id="articulo">
                    El GAD de Junín pone a disposición de los mandantes, una 
                    cuenta de correo institucional para atender solicitudes
                    de información pública de manera digital, de acuerdo al artículo
                    5 de la Resolución Nº 046-DPE-CGAJ-2019 de la Defensoría del Pueblo.
                </p>
                <strong><p id="correo-trans"> transparencia@junin.gob.ec</p></strong>
            </div>

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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/toggle.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/item_mes.js"></script>

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
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("active", "");
            }
            //$(#cityName).css('display','block');
            //$(#cityName).style.display = "block";
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>