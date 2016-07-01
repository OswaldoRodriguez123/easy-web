MyApp.controller('easyController', function($scope,$location,$cacheFactory,$modal,$http,$routeParams) {
    $scope.visibleterminos="";
    $scope.og_image="";
    $scope.visiblebutton="none";
    $scope.titulo = 'Easy Dance';  
    $scope.visible= "block";
	
	$scope.activecaracteristica=""; 
	$scope.activetarifa="";
	$scope.activenosotros="";
	$scope.activeembajadores="";
	$scope.activenoticias="";
  $scope.paises =[];
  $scope.estados=[];

if($location.path()=="/noticias/mira-lo-que-viene"){
  $scope.og_image="img/noticias/mielite.png";
}else{
  $scope.og_image="img/easydace-software.jpg";
}

    /*if($location.url()=="/politicas-de-privacidad"){
       console.log("politicas"); 
       $scope.visibleterminos="hidden"; 
    }else{
      console.log("otra");  
      $scope.visibleterminos="visible";
    }*/
	/*console.log($location.path());
			if($location.path()=="/noticias/la-nueva-era-del-baile-ha-llegado"){
				$scope.activenoticias="hidden";
			}else{
				$scope.activenoticias="visible";
			}*/
	
	$scope.getClass = function (path) {
	  if ($location.path().substr(0, path.length) === path) {
		return 'active';		
	  } else {
		return '';		
	  }
	}
	
	   
    $scope.politica = function () {
        $scope.visibleterminos="hidden";
        $scope.visiblebutton="block";
    };
    
    $scope.acuerdo = function () {
        $scope.visibleterminos="hidden";
        $scope.visiblebutton="block";
    };
	
	$scope.preguntas = function () {
        $scope.visibleterminos="hidden";
        $scope.visiblebutton="block";
    };
    
    $scope.url = function () {
        $scope.visibleterminos="visible";
        $scope.visiblebutton="none";
    };
	
	$scope.pruebagratis = function (){
		$location.path("ponte-en-accion/prueba-gratis");
	};
	
	
    
    $scope.dynamicPopover = {
    content: 'Hello, World!',
    templateUrl: 'myPopoverTemplate.html',
    title: 'Title'
  };
  
  	$scope.openModal = function (size) 
	{
	    var modalInstance = $modal.open({
		    templateUrl: 'myModalContent.html',
		    controller: 'modalController',
		    size: size,
		    resolve: {
		    	Items: function() //scope del modal
		        {
		          	return "Hola que asé";
		        }
		    }
	    });
	}
  
  /*$scope.token="";
  var token;
  var status;
  $scope.registro = {agregar:'agregarInteresado'};  
  $scope.valido=true;
  //console.log($scope);
  $scope.guardar = function() {
	 if($scope.formRegistro.$valid)
    {
  		     
      
       
        $scope.vregistro=false;
        $scope.vacademia=true;
        //console.log('enviado');
     
	  }
    
  };*/

  
  /*$.post("http://localhost/easy-dance/script/interesado.php", { pais : 'paises'},
             function(response){              
             $scope.paises = response;              
  });

  $scope.buscaEstado = function() {
    $scope.estados =[];   
    $.post("http://localhost/easy-dance/script/interesado.php", { pais : 'estados', id: $scope.academia.pais },
             function(response){               
             $scope.estados = response;              
    }); */


     /*$http.get('http://localhost/easy-dance/system/public/interesado/estados/'+$scope.academia.pais).success(function(res){
          
          $scope.estados = res;
          if($scope.estados.length > 0) {
            $scope.academia.estado = $scope.estados[1];
          }
         
     });
    
   }*/
  
        
  
  
});
MyApp.controller('politicasController', function($scope,$location) {
    $scope.titulo = 'Easy Dance';  
    $scope.visible= "block";
    $scope.visibleterminos="hidden";
    $scope.dynamicPopover = {
    content: 'Hello, World!',
    templateUrl: 'myPopoverTemplate.html',
    title: 'Title'
  };
});
MyApp.controller('confirmacionController', function($scope,$location,$http,$window,$routeParams,$timeout,$window) {
     $scope.correo_id = typeof($routeParams.correo) == "undefined" ? '0' : $routeParams.correo;
     try {
     $scope.correo_id = atob($scope.correo_id);
     } catch(e){
     $scope.correo_id = "";
     }
	 console.log($scope.correo_id);
     if($scope.correo_id=='0'){
     	$location.url('/no_confirmado');
     }else{
	   console.log('entre');
        $.post("http://easydancelatino.com/script/interesado.php", { confirmar: 'confirmar', correo : $scope.correo_id},
             function(response){   
				console.log(response);
				if(response.mensaje=='confirmado'){
					$timeout(function() {
  					$scope.confirmado=true;
  					$scope.sinconfirmar=false;
					 });
          window.setTimeout(function(){
            $window.location.href="http://app.easydancelatino.com/";
          }, 5000)
				}else{
				$timeout(function() {
  					$scope.confirmado=false;
					$scope.sinconfirmar=true;
					 });
					

				}
       });
     }	
});

MyApp.controller('academiaController', function($scope,$location,$http,$window, $timeout) {
  
  $scope.token="";
  var token;
  var status;
  $scope.proceso="";
  $scope.registro = {agregar:'agregarInteresado'};  
  $scope.valido=true;
//formAcademia.estado.disabled = true;
  //console.log($scope);
  $scope.guardar = function() {
   if($scope.formRegistro.$valid)
    {     
      $scope.vregistro=false;
      $scope.vacademia=true;
      $scope.vcorrecto=false;
      $scope.vduplicado=false;
      $scope.enviado=true;
      $scope.procesando=false;
      $window.scrollTo(0, 0);
        
      //console.log('enviado');       
    }
    if($scope.formAcademia.$valid){
       $scope.enviado=false;
       $scope.procesando=true;
       $.post("http://easydancelatino.com/script/interesado.php", { data : $scope.registro},
             function(response){
             //console.log(response);
             var status=response.estado;  
             $scope.proceso=response.estado;
             
             console.log($scope.proceso+" - "+status); 
$timeout(function() {
            if($scope.proceso=="duplicado"){
       $scope.vregistro=false;
       $scope.vacademia=false;
       $scope.vcorrecto=false;
       $scope.vduplicado=true;
       $window.scrollTo(0, 0);
      }else{
       $scope.vregistro=false;
       $scope.vacademia=false;
       $scope.vcorrecto=true;
       $scope.vduplicado=false;
       $window.scrollTo(0, 0);
      }
         });

      });
      //console.log($scope.proceso+" - "+status);

      /*if($scope.proceso=='duplicado'){
       $scope.vregistro=false;
       $scope.vacademia=false;
       $scope.vcorrecto=false;
       $scope.vduplicado=true;
       $window.scrollTo(0, 0);
      }else if($scope.proceso=='bien'){
       $scope.vregistro=false;
       $scope.vacademia=false;
       $scope.vcorrecto=true;
       $scope.vduplicado=false;
       $window.scrollTo(0, 0);
      }*/

       
      /*console.log($scope.registro);*/
     
      
      //$location.url('/ponte-en-accion/registro-correcto'); 
        
    }
    
  };
  
  $.post("http://easydancelatino.com/script/interesado.php", { pais : 'paises'},
             function(response){
               
             $timeout(function(){
               $scope.paises = response;              
             })              
  });

  $scope.buscaEstado = function() {
    $scope.estados =[]; 
    //formAcademia.estado.disabled = true;
    $.post("http://easydancelatino.com/script/interesado.php", { pais : 'estados', id: $scope.registro.pais },
             function(response){
               
             $timeout(function(){ 
             $scope.estados = response;   
             //formAcademia.estado.disabled = false;           
           });             
    });    
   }
  

  /*$scope.academia={ agregar: 'agregarAcademia', token: $("#token").val()  } 
       $http.get('http://localhost/easy-dance/system/public/interesado/paises').success(function(respuesta){
      $scope.paises = respuesta;
   });
   $scope.buscaEstado = function() {
    $scope.estados =[];    
     $http.get('http://localhost/easy-dance/system/public/interesado/estados/'+$scope.academia.pais).success(function(res){
          $scope.estados = res;
          if($scope.estados.length > 0) {
            $scope.academia.estado = $scope.estados[1];
          }        
     });
     
    $scope.guardarAcademia = function() {
   if($scope.formRegistro.$valid)
    {
      console.log($scope.academia);
      $.post("http://localhost/easy-dance/system/public/interesado/academia", { data : $scope.academia},
             function(response){
               
             
      });
      $("form")[0].reset();
      $location.url('/ponte-en-accion/registro-correcto'); 
    }
   
  };*/  
});

MyApp.controller('modalController', function($scope,$location,$modalInstance) {
    $scope.cancel = function () 
    {
    	$modalInstance.dismiss('cancel');
    };
});