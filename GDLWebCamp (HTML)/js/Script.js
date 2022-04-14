(function() {
    "use strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {

        var map = L.map('mapa').setView([10.277129, -68.017838], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([10.277129, -68.017838]).addTo(map)
            .bindPopup('GLDWebCamp 2020.<br> Boletos ya disponibles.')
            .openPopup()
            .bindTooltip('Te esperamos')
            .openTooltip();

        // Campos Datos de Usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        // Campos Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        // Botones y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var lista_Productos = document.getElementById('lista_productos');
        var suma = document.getElementById('suma-total');

        // Extras
        var camisas = document.getElementById('camisa-evento');
        var etiquetas = document.getElementById('etiquetas');

        if (document.getElementById('calcular')) {

            calcular.addEventListener('click', calcularMonto);

            pase_dia.addEventListener('blur', mostrarDias);
            pase_dosdias.addEventListener('blur', mostrarDias);
            pase_completo.addEventListener('blur', mostrarDias);

            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarEmail);

            function validarCampos() {
                if (this.value == '') {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = 'Este campo es Obligatorio';
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                } else {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc';
                }
            }

            function validarEmail() {
                if (this.value.indexOf('@') > -1) {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc';
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = 'El valor del campo introducido no pertenece al de un Email';
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                }
            }

            function calcularMonto(e) {
                e.preventDefault();

                if (regalo.value === '') {
                    alert("Debes de elegir un regalo");
                    regalo.focus;
                } else {

                    var boletosDia = parseInt(pase_dia.value, 10) || 0,
                        boletos2Dia = parseInt(pase_dosdias.value, 10) || 0,
                        boletosCompleto = parseInt(pase_completo.value, 10) || 0,
                        cantCamisas = parseInt(camisas.value, 10) || 0,
                        cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                    var totalPagar = (boletosDia * 30) + (boletos2Dia * 45) + (boletosCompleto * 50) + ((cantCamisas * 10) * 0.93) + (cantEtiquetas * 2);

                    var listadoProductos = [];

                    if (boletosDia >= 1) {
                        listadoProductos.push(boletosDia + ' Pases por dia');
                    }

                    if (boletos2Dia >= 1) {
                        listadoProductos.push(boletos2Dia + ' Pases por 2 dias');
                    }

                    if (boletosCompleto >= 1) {
                        listadoProductos.push(boletosCompleto + ' Pases completos');
                    }

                    if (cantCamisas >= 1) {
                        listadoProductos.push(cantCamisas + ' Camisas');
                    }

                    if (cantEtiquetas >= 1) {
                        listadoProductos.push(cantEtiquetas + ' Etiquetas');
                    }

                    lista_Productos.style.display = "block";
                    lista_Productos.innerHTML = '';
                    for (var i = 0; i < listadoProductos.length; i++) {
                        lista_Productos.innerHTML += listadoProductos[i] + '</br>';
                    }

                    suma.innerHTML = "$ " + totalPagar.toFixed(2);

                }

            }

            function mostrarDias() {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dia = parseInt(pase_dosdias.value, 10) || 0,
                    boletosCompleto = parseInt(pase_completo.value, 10) || 0;

                var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                }

                if (boletos2Dia > 0) {
                    diasElegidos.push('viernes', 'sabado');
                }

                if (boletosCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                }

                for (var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }

            }
        }

    }); // DOM CONTENT LOADED

})();

$(function() {
    // Lettering
    $('.nombre-sitio').lettering();

    // Menu Fijo
    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    })

    // Menu Responsive
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    })

    // Programa de Conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;

    });

    // Animaciones para los numeros
    var resumenLista = $('.resumen-evento');

    if (resumenLista.length > 0) {
        $('.resumen-evento').waypoint(function() {
            $('.resumen-evento li:nth-child(1) p').animateNumber({
                number: 6
            }, 2000);
            $('.resumen-evento li:nth-child(2) p').animateNumber({
                number: 15
            }, 2000);
            $('.resumen-evento li:nth-child(3) p').animateNumber({
                number: 3
            }, 2000);
            $('.resumen-evento li:nth-child(4) p').animateNumber({
                number: 9
            }, 2000);

        }, {
            offset: '60%'
        })

    }

    // Cuenta regresiva
    $('.cuenta-regresiva').countdown('2020/12/16 09:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    })

});
