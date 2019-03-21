<?php
    session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <title>Abrace Sua Causa s2</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link href="../Newsletter/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Newsletter/css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/efetuarcadastro.css"/>         
   
<body>   
<div class="container-fluid">
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


	<section>
        
    	 <div class="formulario">  

            <form action="../inserecartao.php" method="post" id="validate">                  
                <label>Todos os campos deste formulario são obrigatórios</label>
                <br>
                <br>
                <br>
                <label>Nome completo</label>
                <input name="nome" type="text" class="g">

                <label>Número do cartão</label>
                <input name="numerocartao" type="text" class="g" id="numerocartao">

                <label>vencimento</label>
                <input name="vencimento" type="text" class="p" id="vencimento">

                <label>Codigo de segurança</label>
                <input name="cvv" type="text" class="p" id="cvv">

                <label>CPF</label>
                <input name="cpf" type="text" class="p" id="cpf">

                
                <input type="submit" value="Doar">

            </form>

            
    	</div><!--/formulario-->
                
    </section>      
	<footer class="tm-footer">
        <p class="text-xs-center">Copyright &copy; 2018 Nosso Projeto | Design: UnderFlow20</a></p>
    </footer>
        
        <!-- load JS files -->
        
        <script src="../js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="../js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="../js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
         <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
         <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../js/jquery.zebra-datepicker.js"></script>
        
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
        <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
         <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
         <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../js/jquery.zebra-datepicker.js"></script>

        </script>     
		</body>
</html>