/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).on("ready",function(){
	$("#ir").on("click", function(){
		$("html,body").animate({ scrollTop : $("#notas").offset().top  }, 800 );
	});
        $("#ir-notas-amigos").on("click", function(){
		$("html,body").animate({ scrollTop : $("#notas-amigos").offset().top  }, 800 );
	});
         $("#ir-crear-nota").on("click", function(){
		$("html,body").animate({ scrollTop : $("#crear-nota").offset().top  }, 800 );
	});
         $('#Actualizar').click(function() {
            // Recargo la página
            location.reload();
        });
        var altura=$(window).height();
        $(window).on('scroll',function (){
            if($(window).scrollTop()>altura){
                $('.menu').addClass('menu-fixed');
            }else {
                $('.menu').removeClass('menu-fixed');
            }
        });
        var alturas=$(window).height();
        $('.contenedor-navs').css({ height: alturas,"max-height":"100%","min-height":"100%"});
        
    $(window).on("resize", function (){
        var alturas=$(window).height();
             $('.contenedor-navs').css({ height: alturas,"max-height":"100%","min-height":"100%"});
        });
});