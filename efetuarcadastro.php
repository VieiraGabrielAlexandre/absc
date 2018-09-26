
    session_start();
?>
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
    <link rel="stylesheet" type="text/css" href="css/efetuarcadastro.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>
			      <body>
        <div class="container-fluid">

            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Abrace Sua Causa s2</h1>                        
                </div>                    
            </section>
				<form id="legenda" method="POST" action="inserircadastro.php">
                    <div id="login">
					<h2>Efetuar Cadastro</h2>					
					<label>Nome</label>
					<br>
					<input type="text" name="nome" placeholder="" required autofocus>
					<br>
					<label>Email</label>
	                <br>
					<input type="email" name="email" placeholder="">
					<br>
					<label>Senha</label>
					<br>
					<input type="password" name="senha" placeholder="">
					<input type="hidden" name="classcliente" value="3">
					<input type="hidden" name="situacao" value="1"><br>
					
					
					<div id="login2">
					<label>Data do cadastro</label>
                    <input  type="text" name="dataatual" value="<?php echo date('Y-m-d h:m:s');?>" />
					</div>
                    <br>				
					<button type="submit">Efetuar Cadastro</button>
					<br>
					<label><a id="l1" href="cadastrarinstituicao.php">Pessoa Juridica</a></label>
					</div>
					
                </form>
                
                
                
                
                

                
            </div>      
            </div>                         
        </div>
		<footer class="tm-footer">
                        <p class="text-xs-center">Copyright &copy; 2018 Nosso Projeto | Design: UnderFlow20</a></p>
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