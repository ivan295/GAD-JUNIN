<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAD JUNÍN-Gobierno Autónomo Descentralizado Municipal del cantón Junín</title>
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/estiloPrincipal.css" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-acale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="css/easy-responsive-tabs.css">
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
                <li class="nav-item"><a href="{{ url('/transparecia') }}">TRANSPARENCIA</a></li>
                <li class="nav-item"><a href="">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <br>
    <div class="container-trans">
        <h1>Ley Orgánica de Transparencia y Acceso a la Información Pública.</h1>
        <p><strong>Art. 7.-</strong>Difusión de la Información Pública.- Por la transparencia en la gestión administrativa que están obligadas a observar todas las instituciones del Estado que conforman el sector público en los términos del artículo 225 de la Constitución de la República y demás entes señalados en el artículo 1 de la presente Ley, difundirán a través de un portal de información o página web, así como de los medios necesarios a disposición del público, implementados en la misma institución, la siguiente información mínima actualizada, que para efectos de esta Ley, se la considera de naturaleza obligatoria:</p>

        
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Responsive Tab-1</li>
                    <li>Responsive Tab-2</li>
                    <li>Responsive Tab-3</li>
                </ul>
                <div class="resp-tabs-container">
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
                    </div>
                    <div>
                        <p>This tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit. Vestibulum nibh urna, Vestibulum nibh urna,it.</p>
                    </div>
                    <div>
                        <p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
                    </div>
                </div>
            </div>
            <br/>
        



    </div>
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
                    <a href="">INTRANET</a> |
                    <a href="">INFORMACION</a> |
                    <a href="">INFORMACION</a> |
                    <a class="social" href="{{ url('/login') }}" target="_blank"><i class="fa fa-user-circle"></i></a></li>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {

            //When page loads...
            $(".tab_content").hide(); //Hide all content
            $("ul.tabs li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content

            //On Click Event
            $("ul.tabs li").click(function() {

                $("ul.tabs li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".tab_content").hide(); //Hide all tab content

                var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to
                identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active ID content
                return false;
            });
        });
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
    </script>
    <script type="text/javascript" src="js/easy-responsive-tabs.js"></script>
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


    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
</body>

</html>