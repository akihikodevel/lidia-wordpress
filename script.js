$ = jQuery.noConflict();
$(document).ready(function(){
    //console.log('Hola Wordpress');


    // Ajustar cajas segun el tamaño de imagen, seccion6:81
    AjustarCajas();
});

function AjustarCajas() {
    var imagenes = $('.imagen-caja');
    //console.log(imagenes);
    if(imagenes.length > 0) {
        var altura = imagenes[0].height;
        $(imagenes).each(function(i, elemento){
            $(elemento).css({'height': altura + 'px'})
        });
    }
}
