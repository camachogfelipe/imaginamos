(function($) {

    /* Inicialización en español para la extensión 'UI date picker' para jQuery. */
    /* Traducido por Vester (xvester@gmail.com). */
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3C;Ant',
        nextText: 'Sig&#x3E;',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
        'Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);

    /* Spanish translation for the jQuery Timepicker Addon */
    /* Written by Ianaré Sévi */

    $.timepicker.regional['es'] = {
        timeOnlyTitle: 'Elegir una hora',
        timeText: 'Hora',
        hourText: 'Horas',
        minuteText: 'Minutos',
        secondText: 'Segundos',
        millisecText: 'Milisegundos',
        timezoneText: 'Huso horario',
        currentText: 'Ahora',
        closeText: 'Aceptar',
        timeFormat: 'hh:mm',
        amNames: ['a.m.', 'AM', 'A'],
        pmNames: ['p.m.', 'PM', 'P'],
        ampm: false,
        isRTL: false
    };
    $.timepicker.setDefaults($.timepicker.regional['es']);
})(jQuery);