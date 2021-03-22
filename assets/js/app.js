var $jq = jQuery.noConflict()

$jq(document).ready(function () {

    //Galeria procesos
    $jq('.galeria-procesos').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<span class="priv_arrow"><i class="fas fa-angle-left"></i></span>',
        nextArrow: '<span class="next_arrow"><i class="fas fa-angle-right"></i></span>'
    });

    //Galeria dos columnas
    $jq('.carusel-imagenes').on('init', function (event, slick) {
        var $items = slick.$dots.find('li')
        $items.addClass('dot-custom')
        $items.find('button').remove()
    })

    $jq('.carusel-imagenes').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: false,
        nextArrow: false
    });
})

//Contacto Formulario
const formularioContacto = document.querySelector('#formularioContacto')

$(document).ready(function(){
    
    //Se crea el evento del formulario
    $(".formulario-contacto").bind("submit", function(){
        
        //Se crea la peticion a AJAX
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(respuesta){ //Si el mensaje se retorna correcto
                if(JSON.parse(respuesta) === "enviado"){
                    mostrarNotificacion('Tu mensaje se ha enviado exitosamente, nos pondremos en contacto contigo a la brevedad.', 'correcto')
                }else if(JSON.parse(respuesta) === "error"){
                    mostrarNotificacion('Ops, algo salio mal al mandar el mensaje', 'error')
                }
            },
            error: function(respuesta){ //Si el mensaje se retorna incorrecto
                if(JSON.parse(respuesta) === "error"){
                    mostrarNotificacion('Ops, algo salio mal al mandar el mensaje', 'error')
                }
            }
        })
        return false
    })
})

//Notificaciones en pantalla
function mostrarNotificacion(mensaje, clase){
    const notificacion = document.createElement('div') //Se crea la notificacion
    notificacion.classList.add(clase, 'notificacion', 'sombra') //Se le agregan las clases
    notificacion.textContent = mensaje //Se le agrega el contenido

    //Formulario
    formularioContacto.insertBefore(notificacion, document.querySelector('form div'))

    //ocultar y mostrar la notifiacion
    setTimeout(() => {
        notificacion.classList.add('aparece'); //Se agrega la clase 'visible' al div

        setTimeout(() => {
            notificacion.classList.remove('aparece');

            setTimeout(() => {
                notificacion.remove(); //Se borra el div
            }, 500);

        }, 3000);
    }, 100);

    //Resetear el formulario
    document.querySelector('#formularioContacto').reset()
}