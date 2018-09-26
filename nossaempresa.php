<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abrace Sua Causa s2</title>
<!--
Pipeline
http://www.templatemo.com/tm-496-pipeline
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">   <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">           <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                 <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                              <!-- Templatemo style -->
	<link rel="stylesheet" href="css/index.css"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

      <body>
        <div class="container-fluid">
			
            <section id="welcome2" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Abrace Sua Causa</h1>                        
                </div>                    
            </section>

            <div class="tm-body">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="#welcome" class="tm-nav-item-link tm-button">
                                <i class="fa fa-smile-o tm-nav-fa"></i>Bem-Vindo</a>
                            </li>
                            <li class="tm-nav-item"><a href="#Campanhas" class="tm-nav-item-link tm-button">
                                <i class="fa fa-image tm-nav-fa"></i>Campanhas</a>
                            </li>
                            <li class="tm-nav-item"><a href="#Cadastrese" class="tm-nav-item-link tm-button">
                                <i class="fa fa-sitemap tm-nav-fa"></i>Cadastre-se</a>
                            </li>
							<li class="tm-nav-item"><a href="#TenhoCadastro" class="tm-nav-item-link tm-button">
                                <i class="fa fa-sitemap tm-nav-fa"></i>Tenho Cadastro</a>
                            </li>
                            <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link tm-button">
                                <i class="fa fa-envelope-o tm-nav-fa"></i>Contate-nos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="tm-main-content">
				
				<h1>Missão</h1>
				<p>Nossa empresa existe para dar maior comodidade para aqueles que desejam fazer a diferença na vida de milhares de pessoas. Com total transparêcia temos como objetivo intermediar doações para todas as instituições filantropicas que estiverem filiadas a nós.</p>
				<h1>Visão</h1>
				<p>Podemos vislumbrar grandes evoluções com base em projetos de ONGs desenvolvidos para acabar com crises mundiais. Isso é inteiramente fundamental para que independente de raça, cor ou genero possamos alcançar a utopia desejada por todos nós.</p>
				<h1>Valores</h1>
				<p>O abrace sua causa é uma plataforma social online que conecta pessoas á oportunidades de voluntariado em causas sociais.
O nosso proposito e mobilizar pessoas, articular soluções e recursos para impulsionar transformações e fortalecer laços em prol do fortalecimento de causas ainda não conhecidas.

</p>
                

                    <footer class="tm-footer">
                        <p class="text-xs-center">Copyright &copy; 2018 Nosso Projeto | Design: UnderFlow20</a></p>
                    </footer>

                </div>
            </div>             
        </div>
        
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