<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Teste </title>

        <!-- Bootstrap core CSS -->
        <link href="Newsletter/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="Newsletter/css/3-col-portfolio.css" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Abrace sua Causa s2</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="../cliente.php">Inicio
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="campanha.php">Campanhas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link contato" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item tm-nav-item">
                      <a class="nav-link contato" href="sair.php">Sair</a>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>	
            
        <?php
            session_start();
            echo "Razão Social: ". $_SESSION['usuarioNome'];    
        ?>
        <br>                                  


        <div align="center">
            <h1>Este sera uma Organização</h1>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="noticia1.html"><img class="card-img-top" src="img/noticia1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                <a href="noticia1.html">Aqui será uma campanha</a>
                                </h4>
                                <p class="card-text">Descrição...</p>
                            </div>
                    </div>
                </div>
        
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="noticia1.html"><img class="card-img-top" src="img/noticia1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="noticia1.html">Aqui será uma campanha</a>
                            </h4>
                            <p class="card-text">Descrição...</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="noticia1.html"><img class="card-img-top" src="img/noticia1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="noticia1.html">Aqui será uma campanha</a>
                            </h4>
                            <p class="card-text">Descrição...</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            
        <footer class="py-5 bg-dark">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
          </div>
          <!-- /.container -->
        </footer>

   
        <!-- load JS files -->
        
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <!-- Templatemo scripts -->
        <script>  
        /* Google map
        ------------------------------------------------*/
        var map = '';
        var center;
        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(37.769725, -122.462154),
                scrollwheel: false
            };
        
            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);
            google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
            });
        
            google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
            });
        }
        function calculateCenter() {
            center = map.getCenter();
        }
        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        } 
        function setNavbar() {
            if ($(document).scrollTop() > 160) {
                $('.tm-sidebar').addClass('sticky');
            } else {
                $('.tm-sidebar').removeClass('sticky');
            }
        }                   
    
        $(document).ready(function(){
            
            // Single page nav
            $('.tm-main-nav').singlePageNav({
                'currentClass' : "active",
                offset : 20
            });
            // Detect window scroll and change navbar
            setNavbar();
            
            $(window).scroll(function() {
              setNavbar();
            });
            // Magnific pop up
            $('.tm-gallery').magnificPopup({
              delegate: 'a', // child items selector, by clicking on it popup will open
              type: 'image',
              gallery: {enabled:true}
              // other options
            });
            // Google Map
            loadGoogleMap();            
        });
    
        </script>             

    </body>
</html>