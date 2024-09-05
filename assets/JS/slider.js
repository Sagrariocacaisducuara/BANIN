/*$(document).ready(function () {
    var slide = $('#caja');
    var siguiente = $('#btn_siguiente');
    var atras = $('#btn_atras');
    var interval;

    // Mueve la última imagen al principio
    $('#caja .section_caja:last').insertBefore('#caja .section_caja:first');
    slide.css('margin-left', '-100%');

    function moverD() {
        slide.animate({
            marginLeft: '-200%'
        }, 1000, function () {
            // Mueve la primera imagen al final
            $('#caja .section_caja:first').insertAfter('#caja .section_caja:last');
            // Reinicia la posición del carrusel
            slide.css('margin-left', '-100%');
        });
    }

    function moverI() {
        slide.animate({
            marginLeft: '0%'
        }, 1000, function () {
            // Mueve la última imagen al principio
            $('#caja .section_caja:last').insertBefore('#caja .section_caja:first');
            // Reinicia la posición del carrusel
            slide.css('margin-left', '-100%');
        });
    }

    function autoplay() {
        interval = setInterval(function () {
            moverD();
        }, 3000);
    }

    siguiente.on('click', function () {
        moverD();
        clearInterval(interval);
        autoplay();
    });

    atras.on('click', function () {
        moverI();
        clearInterval(interval);
        autoplay();
    });

    autoplay();
});
*/