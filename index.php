<!DOCTYPE html>
<html lang="es" ng-app='MyApp' ng-controller="easyController" >
<head>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Dance!</title>
    <meta name="description" content="Easy dance, es la aplicación para academias de baile Online que realiza el trabajo organizativo, informativo y de estadísticas en tiempo real." />
    <link rel="shortcut icon" type="image/x-icon" href="img/easy-dance.ico"/>
    <meta id="og_title" property="og:title" content="SOFTWARE EXCLUSIVO PARA ACADEMIAS DE BAILE | Easy Dance!" />
    <meta id="og_description" property="og:description" content="Easy dance, es la aplicación para academias de baile Online que realiza el trabajo organizativo, informativo y de estadísticas en tiempo real" />    
    <meta id="og_image" property="og:image" content="img/easydace-software.jpg" />
    <!--<link rel="author" href="humans.txt" />-->	
    <base href="/pagina_easydancelatino/" >
    <!--<base href="/easy-web/" >-->
    <!--<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="css/fontawesome/font-awesome.min.css" rel="stylesheet">-->
    <!--<link href="css/angular-load/loading-bar.min.css" rel="stylesheet">-->
    <link href="css/main/todo.css" rel="stylesheet"> 
    <link href="css/nuevo/new-style.css" rel="stylesheet"> 
    <!--<link href="css/main/main.min.css" rel="stylesheet">-->    
    <!--<link rel="stylesheet" href="css/bootstrap-sweetalert/sweet-alert.css">-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--<script src="js/vendor/jquery/jquery-1.11.3.min.js"></script>
    <script src="js/vendor/angular/angular.min.js"></script>
    <script src="js/vendor/angular_lib/angular-animate.min.js"></script> 
    <script src="js/vendor/angular_lib/angular-touch.min.js"></script>
    <script src="js/vendor/angular_lib/angular-route.min.js"></script> 
    <script src="js/vendor/angular_load/loading-bar.min.js"></script>
    <script src="js/vendor/angular_validate/jquery.validate.min.js"></script>
    <script src="js/vendor/angular_validate/angular-validate.min.js"></script>-->
    
    <!--<script src="js/concat.js"></script>-->
    
    <!--<script src="js/vendor/angular_ui_bootstrap/ui-bootstrap-0.13.4.min.js"></script><!-->    
    
    <!--<script  src="js/app/main.js"></script>    
    <script  src="js/app/controller/maincontroller.js"></script>
    <script  src="js/vendor/angular_ui_bootstrap/ui-bootstrap-tpls-0.13.4.min.js"></script>
    <script  src="js/app/router/mainrouter.js"></script>     
    <script  src="js/app/directive/maindirective.js"></script>    
    <script async src="js/function/function.js"></script>-->
    
</head>
<body>
    <nav class="navbar navbar-inverse navbar-negro navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button style="visibility: {{visibleterminos}};" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#/" ng-click="url()">            
            <img alt="Easy Dance" class="padding-top-5" title="Easy Dance" src="img/logo.png" width="105">
            </a>
        </div>
        <div style="visibility: {{visibleterminos}};" id="navbar" class="navbar-collapse collapse">
          <ul  class="nav navbar-nav">
            <li><a href="#/caracteristicas" ng-class="getClass('/caracteristicas')"  >Caracteristicas</a></li>
            <li><a href="#/tarifas" ng-class="getClass('/tarifas')" >Tarifas</a></li>
            <li><a href="#/nosotros" ng-class="getClass('/nosotros')" >Sobre Nosotros</a></li>
            <li><a href="#/embajadores" ng-class="getClass('/embajadores')" >Embajadores</a></li>
            <li><a href="#/noticias" ng-class="getClass('/noticias')" >Noticias</a></li>
            
          </ul>
		  
		  <ul class="nav navbar-nav navbar-right menu-r">
		    <li class="menu-r">
				<form class="navbar-right padding-5" role="search">
					<a href="#/ponte-en-accion/prueba-gratis" class="btn btn-violeta ">Prueba gratis</a>
				</form>
			</li>
			<li><a href="http://app.easydancelatino.com" target="_blank">&nbsp;&nbsp;Ingresar</a></li>			
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <!---->
    <a href="#" class="scroll-top pi-active"><i class="tam-1-2 fa fa-chevron-up"></i></a>
    <!--<div class="container">
    <div class="row">                
        <div class="col-lg-12">-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="#/" class="invisible-boton btn-regresar btn btn-warning btn-lg active text-uppercase margin-top-70">Volver a la página</a>
            </div>
        </div>
    </div>
    <div ng-view></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="#/" class="invisible-boton btn-regresar btn btn-warning btn-lg active text-uppercase margin-top-20 margin-bottom-20">Volver a la página</a>
            </div>
        </div>
    </div>
    
        <!--</div>                
    </div>
    </div>-->
    <footer class="fondo-grey-darken-4 padding-top-bottom-50">
        <div class="container">
          <div class="row">
               <h1 class="text-hide">Easy Dance</h1>	
              <h2 class="text-hide" >SOFTWARE EXCLUSIVO PARA ACADEMIAS DE BAILE</h2>
    	      <h2 class="text-hide" >UNA FORMA BRILLANTE DE GERENCIARLE</h2>
              <div class="col-md-4 padding-top-5">
                  <ul class="list-unstyled">
                      
                      <li><h4><a href="#/preguntas-frecuentes"  >Preguntas frecuentes</a></h4></li>
                      
                  </ul>
                  <h3 class="margin-top-100">Síguenos a través de</h3>
                  <div class="padding-top-bottom-20">
                    <a href="https://www.facebook.com/Easydancelatino/" target="_blank" >
                    <img src="img/Facebook.png" alt="Facebook Easy Dance Latino" class="img-circle img-45">
                    </a>
                    <a href="https://plus.google.com/u/0/104687135628887176910" target="_blank" >
                    <img src="img/GooglePlus.png" alt="Google+ Easy Dance Latino" class="img-circle img-45">
                    </a>
	            <a href="https://twitter.com/EasyDanceLatino" target="_blank" >
	            <img src="img/Twitter.png" alt="Twitter Easy Dance Latino" class="img-circle img-45">
	            </a>
                    <a href="https://www.instagram.com/easydancelatino/" target="_blank" >
                    <img src="img/Instagram.png" alt="Instagram Easy Dance Latino" class="img-circle img-45">
                    </a>
                    <a href="https://www.youtube.com/channel/UCuFGXYye7PXVhPJGXjsw7-w" target="_blank" >
                    <img src="img/Youtube.png" alt="Youtube Easy Dance Latino" class="img-circle img-45">
                    </a>
                  </div>
              </div> 
              <div class="col-md-4 padding-top-5">
                  <h3>Contáctanos</h3>
                  <p>Venezuela , Maracaibo</p>
                  <p>Centro comercial Salto Ángel en la avenida 3 Y – entre la calle 78 y 79</p>
                  
                  <!--<p class="padding-top-60">0261-9350461 / 0414-6215928</p>-->
				  <p>&nbsp;</p>
                  <p><a href="mailto:info@easydancelatino.com" target="_top">info@easydancelatino.com</a></p>
                  
                  
              </div> 
              <div class="col-md-4 padding-top-5">
                  <h3 class="n-vin" >Comparte</h3>
                  <ul class="globalfooter-links padding-top-bottom-10 n-vin" style="visibility: {{activenoticias}};">
                      <li><a href="https://twitter.com/intent/tweet?url=http://www.easydancelatino.com&text=UNA FORMA BRILLANTE DE GERENCIAR%20por%20@easydancelatino" target="_blank" class="button _small _share _twitter js-share hvr-glow" data-share="twitter"><span class="icon fa fa-twitter _before"></span><span class="text-c">Tweet</span></a></li>
		      <li><a href="http://www.linkedin.com/shareArticle?url=http://www.easydancelatino.com" target="_blank" class="button _small _share _linkedin js-share hvr-glow" data-share="linkedin"><span class="icon fa fa-linkedin  _before"></span>Comparte</a></li>
		      <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.easydancelatino.com" target="_blank" class="button _small _share _facebook js-share hvr-glow" data-share="facebook"><span class="icon fa fa-facebook _before"></span>Comparte</a></li>
		      <li><a href="https://plus.google.com/share?url=http://www.easydancelatino.com" target="_blank" class="button _small _share _googleplus js-share hvr-glow" data-share="gplus"><span class="icon fa fa-google-plus _before"></span>Comparte</a></li>
				  </ul>
                  
                  <!--<p class="padding-top-10 n-vin">Subscríbete a nuestro blog y mantente al día </p>
                  <form class="n-vin">
                      <div class="form-group">
                        <label for="InputEmail">Correo</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                      </div>  
                      <div class="form-group">
                          <button type="submit" class="btn btn-violeta btn-1em">Subscríbete</button>
                      </div>
                  </form>-->
				  <!-- Begin MailChimp Signup Form -->
<!-- Begin MailChimp Signup Form -->

</div>

<!--End mc_embed_signup-->
</div>



<!--End mc_embed_signup-->
              </div> 
          </div>
        </div> 
    </footer>    
    <!--<footer class="fondo-grey-darken-4 padding-top-bottom-50">
        <div class="container">
          <div class="row"> 
              <div class="col-md-8">
                  <h3>Contáctanos</h3>
                  <p>Venezuela , Maracaibo</p>
                  <p>Calle 77, 5 de julio con avenida 8 Santa Rita</p>
                  <p>info@easydance.com</p>
                  <p>0261-9350461, 0414-6215928</p>
              </div>
              <div class="col-md-4">
                  <img src="img/Facebook.png" class="img-circle">
                  <img src="img/Twitter.png" class="img-circle">
                  <img src="img/Instagram.png" class="img-circle">
                  <img src="img/Vimeo.png" class="img-circle">
              </div>
              <div class="col-md-12">
                 <hr> 
              </div>
              <div class="col-md-12">
                 © Copyright 2015 Easy Dance. Todos los derechos reservados. 
              </div>
          </div>

        </div>
      </footer>-->
    
    <script src="js/concat.js"></script>    

    <script  src="js/app/main.js"></script>    
    <script  src="js/app/controller/maincontroller.js"></script>
    <script  src="js/vendor/angular_ui_bootstrap/ui-bootstrap-tpls-0.13.4.min.js"></script>
    <script  src="js/app/router/mainrouter.js"></script>     
    <script  src="js/app/directive/maindirective.js"></script>    
    
    <script  src="js/concat_fin.js"></script>
    <!--<script async src="js/function/function.js"></script>    
    <script src="js/vendor/bootstrap/bootstrap.min.js"></script>    
    <script src="js/function/default.js"></script>-->
    <!--<script src="js/vendor/bootstrap-sweetalert/sweet-alert.js"></script>-->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-64095340-2', 'auto');
	  ga('send', 'pageview');
	
    </script>
</body>
</html>