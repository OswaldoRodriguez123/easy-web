/*MyApp.run(function($rootScope, $templateCache) {
   $rootScope.$on('$viewContentLoaded', function() {
      $templateCache.removeAll();
   });
});*/
MyApp.run(['$rootScope',function($rootScope,$window) {
  $rootScope.nombre="";
  //$rootScope.activenoticias="visible";
  /*console.log($location.path());
  if($location.path()=="/noticias/la-nueva-era-del-baile-ha-llegado"){
	$scope.activenoticias="hidden";
  }else{
	$scope.activenoticias="visible";
  }*/
}]);
MyApp.config(function($routeProvider, $locationProvider) {
    $routeProvider
    .when('/', {
        templateUrl : 'view/inicio/inicio.php',
        controller : 'easyController'
    })
    .when('/caracteristicas', {
        templateUrl : 'view/caracteristicas/caracteristicas.php',
        controller : 'easyController'
    })
    .when('/caracteristicas/personalizar', {
        templateUrl : 'view/caracteristicas/personalizar.php',
        controller : 'easyController'
    })
    .when('/caracteristicas/visitantes', {
        templateUrl : 'view/caracteristicas/visitantes.php',
        controller : 'easyController'
    })
    .when('/caracteristicas/ventajas', {
        templateUrl : 'view/caracteristicas/ventajas.php',
        controller : 'easyController'
    })
    .when('/caracteristicas/asistencia', {
        templateUrl : 'view/caracteristicas/asistencias.php',
        controller : 'easyController'
    })
    .when('/caracteristicas/general', {
        templateUrl : 'view/caracteristicas/general.php',
        controller : 'easyController'
    })    
    .when('/tarifas', {
        templateUrl : 'view/tarifas/tarifas.php',
        controller : 'easyController'
    })
    .when('/embajadores', {
        templateUrl : 'view/embajadores/embajadores.php',
        controller : 'easyController'
    })
    .when('/nosotros', {
        templateUrl : 'view/nosotros/nosotros.php',
        controller : 'easyController'
    })
    .when('/noticias', {
        templateUrl : 'view/noticias/noticias.php',
        controller : 'easyController'
    })
    .when('/noticias/la-nueva-era-del-baile-ha-llegado', {
        templateUrl : 'view/noticias/noticia_completa.php',
        controller : 'easyController'
    })
    .when('/noticias/aprende-de-la-competencia', {
        templateUrl : 'view/noticias/noticia_completa_competencia.php',
        controller : 'easyController'
    })
    .when('/noticias/manuales-de-procedimientos', {
        templateUrl : 'view/noticias/noticia_completa_procedimiento.php',
        controller : 'easyController'
    })
	.when('/noticias/unir-al-gremio-es-la-meta', {
        templateUrl : 'view/noticias/noticia_completa_unir_gremio.php',
        controller : 'easyController'
    })
	.when('/noticias/rumbo-a-chile', {
        templateUrl : 'view/noticias/noticia_completa_rumbo_chile.php',
        controller : 'easyController'
    })
	.when('/noticias/mira-lo-que-viene', {
        templateUrl : 'view/noticias/noticia_completa_mira.php',
        controller : 'easyController'
    })
	
    /*
    .when('/noticia', {
        templateUrl : 'view/noticias/noticias_01.php',
        controller : 'noticiaController'
    })
	.when('/noticia/:slug', {
        templateUrl : 'view/noticias/noticia_completa_02.php',
        controller : 'detalleNoticiaController'
    })*/
    .when('/postularse', {
        templateUrl : 'view/accion/login.php',
        controller : 'easyController'
    })
    /*.when('/politicas-de-privacidad', {
        templateUrl : 'view/politicas/politicas.php',
        controller : 'easyController'
    })*/
	.when('/preguntas-frecuentes', {
        templateUrl : 'view/preguntas-frecuentes/preguntas-frecuentes.php',
        controller : 'easyController'
    })	
    /*.when('/acuerdos-de-servicios', {
        templateUrl : 'view/acuerdos/acuerdos.php',
        controller : 'easyController'
    })*/
    .when('/ponte-en-accion', {
        templateUrl : 'view/accion/login.php',
        controller : 'easyController'
    })
    .when('/ponte-en-accion/login', {
        templateUrl : 'view/accion/login.php',
        controller : 'easyController'
    })
    .when('/ponte-en-accion/prueba-gratis', {
        templateUrl : 'view/accion/prueba.php',
        controller : 'easyController'
    })
	.when('/ponte-en-accion/interesado', {
        templateUrl : 'view/accion/interesado.php',
        controller : 'easyController'
    })
	.when('/confirmacion/:correo', {
        templateUrl : 'view/accion/registro-datos.php',
        controller : 'confirmacionController'
    })	
    .when('/ponte-en-accion/registro', {
        templateUrl : 'view/accion/registro.php',
        controller : 'academiaController'
    })
	.when('/ponte-en-accion/academia', {
        templateUrl : 'view/accion/academia.php',
        controller : 'academiaController'
    })
	.when('/confirmar/:correo', {
        templateUrl : 'view/accion/registro-datos.php',
        controller : 'confirmacionController'
    })
    .otherwise({
        redirectTo: '/'
    });
    //$locationProvider.html5Mode(true);
});

/*.run(function($rootScope,$location,$scope) {
    $rootScope.$on('$routeChangeSuccess', function () {
        console.log($location.path());
		if($location.path()=="/noticias/la-nueva-era-del-baile-ha-llegado"){
			$scope.activenoticias="hidden";
		}else{
			$scope.activenoticias="visible";
		}
    })
});
*/
