$("html, body").animate({ scrollTop: 0},0, "linear", function() {});
//$("#contenido").fadeIn(1000);
$(".icono").mouseover(function() { 
$(this).addClass("icono-inicio-hover"); 
}).mouseout(function() { 
$(this).removeClass("icono-inicio-hover"); 
});

$(".img-nosotros").mouseover(function() { 
$(this).addClass("img-nosotros-hover"); 
}).mouseout(function() { 
$(this).removeClass("img-nosotros-hover"); 
});

var pathname = window.location.pathname; // Returns path only
var url      = window.location.href; 

if(url=="http://easydancelatino.com/#/noticias/la-nueva-era-del-baile-ha-llegado" || url=="http://easydancelatino.com/#/noticias/manuales-de-procedimientos" || url=="http://easydancelatino.com/#/noticias/aprende-de-la-competencia" || url=="http://easydancelatino.com/#/noticias/rumbo-a-chile" || url=="http://easydancelatino.com/#/noticias/mira-lo-que-viene" || url=="http://easydancelatino.com/#/noticias/unir-al-gremio-es-la-meta" ){
  $(".n-vin").addClass("invisible");  

  $("#og_image").attr( "content", "img/noticias/mielite.png" );
 
}else{
  $("#og_image").attr( "content", "img/easydace-software.jpg" );
  $(".n-vin").removeClass("invisible"); 
}

if(url=="http://easydancelatino.com/#/preguntas-frecuentes"){
   $(".btn-regresar").addClass("visible-boton"); 
   $(".btn-regresar").removeClass("invisible-boton");    
}else{
  $(".btn-regresar").addClass("invisible-boton");     
  $(".btn-regresar").removeClass("visible-boton");
  }
  
  $(".nav a").click(function () {
    if ($(".navbar-collapse").hasClass("in")) {
        $('[data-toggle="collapse"]').click();
    }
});

$("#contenido").click(function () {
    if ($(".navbar-collapse").hasClass("in")) {
        $('[data-toggle="collapse"]').click();
    }
});

