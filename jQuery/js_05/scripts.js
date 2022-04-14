// Agregando o quitando

$(function() {
    'use strict';

    jQuery('div.logo img').addClass('activo');

    jQuery('.navegacion').show();

    jQuery('main article').addClass('activo');

    jQuery('.navegacion ul li a').on('click', function(e) {
        e.preventDefault();
        jQuery('.navegacion ul li a').removeClass('activo');
        $(this).addClass('activo');

    });

});