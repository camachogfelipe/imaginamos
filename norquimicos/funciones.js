var ajaxRutaAbs = 'index.php?ajax';


//include_once("js/numberformat.js"); 
$(document).ready(function() {

    // Pierde el foco y cambia el contenido del texto en el formulario
    $(".class_frm .field_frm").blur(function() {
        if (trim($(this).attr("value")) == 0) {
            //$(this).attr("value", $(this).attr("title"));
            $(this).attr("value", "");
        }
    });

    // Cuando llega el foco al campo de texto
    $(".class_frm .field_frm").focus(function() {
        if ($(this).attr("value") == $(this).attr("title")) {
            $(this).attr("value", "");
        }
    });

    // Valiacion del formulario y envio de parametros ajax
    $(".submit_frm").click(function() {

        var formComplete = true;
        var formSubmit = false;
        var stringJSON = "";
        var idfrm = $(this).attr("frmid");
        $("." + idfrm + " .field_frm").each(function(index) {

            var valueTemp = $(this).attr("value") == undefined ? $(this).html() : $(this).attr("value");

            // Validamos si es tipo radio, de ser asi lo enviamos por post si se encuentra chequeado
            if ($(this).attr("type") == "radio") {
                if ($(this).is(':checked')) {
                    stringJSON += (stringJSON != "" ? ", " : "") + ($(this).attr("id") != "" ? $(this).attr("id") : 'def') + ':"' + escape(valueTemp) + '"';
                }
            } else if ($(this).attr("type") == "checkbox") {
                if ($(this).is(':checked')) {
                    stringJSON += (stringJSON != "" ? ", " : "") + ($(this).attr("id") != "" ? $(this).attr("id") : 'def') + ':"' + escape(valueTemp) + '"';
                }
            } else {
                stringJSON += (stringJSON != "" ? ", " : "") + ($(this).attr("id") != "" ? $(this).attr("id") : 'def') + ':"' + escape(valueTemp) + '"';
            }

            if ($(this).attr("id") == "myForm") {
                formSubmit = valueTemp;
            }

            if (valueTemp == "checkTerminos") {
                if ($('#checkTerminos').is(':checked') == false) {
                    alert('Error\nDebes aceptar los t�rminos y condiciones');
                    formComplete = false;
                    return false;
                }
            }

            if ($(this).attr("title")) {
                if (valueTemp == $(this).attr("title") || valueTemp == "") {
                    alert('Error\n' + $(this).attr("title"));
                    if ($(this).attr("id") != "") {
                        $("#" + $(this).attr("id")).focus();
                    }
                    formComplete = false;
                    return false;
                }
            }

            if ($(this).is('.val_email')) {
                if (!validar_email(valueTemp)) {
                    alert('Error\nDebes escribir un email valido');
                    if ($(this).attr("id") != "") {
                        $("#" + $(this).attr("id")).focus();
                    }
                    formComplete = false;
                    return false;
                }
            }

            if ($(this).is('.val_numero')) {
                if (!validar_numeros(valueTemp)) {
                    alert('Error\nDebes escribir un numero valido');
                    if ($(this).attr("id") != "") {
                        $("#" + $(this).attr("id")).focus();
                    }
                    formComplete = false;
                    return false;
                }
            }

        });

        // Si el formulario esta completo y es para hacer submit ejecutamos submit, en caso contrario si el formulario esta completo enviamos json y recibimos json ajax
        if (formSubmit && formComplete) {
            $("#" + formSubmit).submit();
        } else if (formComplete) {

            eval("var myObject = { " + stringJSON + " };");
            $.ajax({
                url: ajaxRutaAbs,
                type: "POST",
                data: myObject,
                dataType: "json",
                success: function(data) {
                    // Si el ajax respondio
                    if (data.title) {
                        alert(data.title + "\n" + data.message);
                    }
                    if (data.event != null) {
                        eval(data.event);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Si se presento algun error, mostramos la descripcion
                    alert("Error\nAlgo ha salido mal. Por favor int?ntalo de nuevo en unos minutos -> " + textStatus);
                }
            });

        }
    });

});

// Funcion para hacer consukltas AJAX dinamicamente
function GenericAjax(funcion, valorEnviado) {
    var myObject = {
        myFunct: funcion,
        valor: valorEnviado
    };
    $.ajax({
        url: ajaxRutaAbs,
        type: "POST",
        data: myObject,
        dataType: "json",
        success: function(data) {
            // Si el ajax respondio
            eval(data.event);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Si se presento algun error, mostramos la descripcion
            // alert( "Error\nAlgo ha salido mal. Por favor int�ntalo de nuevo en unos minutos -> "+textStatus);
        }
    });
}

// Funcion que me devuelve el numero de caracteres sin espacios de una cadena
function trim(cadena) {
    if (cadena == undefined) {
        return false;
    }
    var nuevacadena = "";
    nuevacadena = cadena.replace(/\ /g, "");
    return nuevacadena.length;
}

// Funcion para hacer redirect de link por js
function hacerRedirect(link) {
    //alert(link);
    window.location.href = link;
}
function validar_email(valor) {
    var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if (filter.test(valor)) {
        return true;
    }
    return false;
}

// Funcion para validar numeros
function validar_numeros(valor) {
    var filter = /^([0-9])*$/;
    if (filter.test(valor)) {
        return true;
    }
    return false;
}
// Funcion para hacer consukltas AJAX dinamicamente
function CiudadesJS(data) {
    var finals = data.ciudad;
    //alert(finals[0].Name);
    var html1 = '<select name="ciudades" class="validate[required]"  id="country2_id">';

    for (a = 0, b = data.count; a < b; a++) {
        html1 += '<option value="' + finals[a].nombre + '">' + finals[a].nombre + '</option>';
    }
    html1 += '</select><script>$("#country2_id").selectbox()</script>';
    $('.ciudades_cambio').empty().html(html1);

}


function BuscarJS(data) {
    var finals = data.productos;
    //alert(finals[0].Name);
    var html1 = '';

    for (a = 0, b = data.count; a < b; a++) {
        html1 += '<li class="ui-widget-content ui-corner-tr"><h4 class="ui-widget-header">' + finals[a].nombre + '</h4><h7><span id="rojo">Ref: ' + finals[a].referencia + '</span></h7><img src="imagenes/productos/202_138_' + finals[a].img + '" alt="' + finals[a].nombre + '" /><p>' + finals[a].texto + '</p><a href="link/to/trash/script/when/we/have/js/off" title="Cotizar" class="ui-icon ui-icon-trash">Cotizar</a> </li> ';
    }
    $('#gallery').empty().html(html1);
}
function FinalEliminar(datas) {
    var ej = datas;
//alert("Eliminado correctamente");
}
function LetrasJS(data) {
    var finals = data.productos;
    //alert(finals[0].Name);
    var html1 = '';

    for (a = 0, b = data.count; a < b; a++) {
        html1 += '<li class="ui-widget-content ui-corner-tr"><h4 class="ui-widget-header">' + finals[a].nombre + '</h4><h7><span id="rojo">Ref: ' + finals[a].referencia + '</span></h7><img src="imagenes/productos/202_138_' + finals[a].img + '" alt="' + finals[a].nombre + '" /><p>' + finals[a].texto + '</p><a href="link/to/trash/script/when/we/have/js/off" title="Cotizar" class="ui-icon ui-icon-trash">Cotizar</a> </li> ';
    }

    $('#gallery').empty().html(html1);

}

function sabcant(cantidad, precio, posicion) {
    if ($("#chk_iva" + posicion).is(':checked')) {
        //var iva = 0.16;
        var total = (parseInt(precio) * parseInt(cantidad));
        var ivatotal = parseInt(total) / 1.16;

        var iva = parseInt(total) - parseInt(ivatotal);
        var preciofin = parseInt(total) + parseInt(iva);
        //alert(preciofin);
        $('#' + posicion).html(preciofin);
        $('#valf' + posicion).val(preciofin);
        var count = $("#holas").val();
        var sum = 0;
        for (var k = 0; k < count; k++)
        {
            sub1 = $("#valf" + k).val();
            if ($("#valf" + k).val() == "a") {
                sub1 = 0;
            }
            sum = parseInt(sum) + parseInt(sub1);
        }
       

        $('#ct1' + posicion).empty().html("16%");

        $('#cantct1' + posicion).empty().html(cantidad);
        $('#ct3' + posicion).empty().html(precio);
        $('#precioct3' + posicion).empty().html(preciofin);
        $('#preciostotales').val(sum);
        $('#finalje').val(sum);

       //  alert(sum);
         var subtotal = sum * 1.16;
         var subtotal1 = sum / 1.16;
        var ivafinal =   subtotal-sum;
        var sumtt= sum + ivafinal;
       $('#campsfinals').empty().html((sum + ivafinal).toFixed(0));
        $('#subtotje').empty().html(sum);
        $('#ivaje').empty().html(ivafinal.toFixed(0));
        $('#subtenvio').val((sum + ivafinal).toFixed(0));
        $('#subtotal').val(sum);
        $('#ivaenvio').val(ivafinal.toFixed(0));
        $('#totaltotalenvio').val(sumtt);

    } else {
        if (precio == "Ingrese valor") {
            precio = 0;
        }
        var total = parseInt(cantidad) * parseInt(precio);
        $('#' + posicion).html(total);
        $('#valf' + posicion).val(total);
        var count = $("#holas").val();
        var sum = 0;
        for (var k = 0; k < count; k++)
        {
            sub1 = $("#valf" + k).val();
            if ($("#valf" + k).val() == "a") {
                sub1 = 0;
            }
            sum = parseInt(sum) + parseInt(sub1);
        }
     //   $('#campsfinals').empty().html(sum);
        $('#ct1' + posicion).empty().html("");
        $('#cantct1' + posicion).empty().html(cantidad);
        $('#ct3' + posicion).empty().html(precio);
        $('#precioct3' + posicion).empty().html(total);
        $('#preciostotales').val(sum);
        $('#finalje').val(sum);
        //  alert(sum);
         var subtotal = sum * 1.16;
         var subtotal1 = sum / 1.16;
        // var ivafinal =   subtotal-sum;
         var ivafinal =   0;
       $('#campsfinals').empty().html(sum);
        $('#subtotje').empty().html(sum);
        $('#ivaje').empty().html(ivafinal.toFixed(0));
        $('#subtenvio').val(sum);
        $('#subtotal').val(sum);
        $('#ivaenvio').val(ivafinal.toFixed(0));
        $('#totaltotalenvio').val(sum);

    }

}

function sabiva(posicion, cantidad, precio) {
    if (precio == "Ingrese valor") {
        precio = 0;
    }
    if (cantidad == "cantidad") {
        cantidad = 0;
    }
    if ($("#chk_iva" + posicion).is(':checked')) {
        //var iva = 0.16;
        var total = (parseInt(precio) * parseInt(cantidad)) * parseFloat('1.16') ;
        var totalsin=(parseInt(precio) * parseInt(cantidad));
       // var ivatotal = parseInt(total) / 1.16;
       // var ivatotal = parseInt(total) * 1.16;
       var ivatotal=total;
       // var iva = parseInt(total) - parseInt(ivatotal);
        var iva=ivatotal;
       // var preciofin = parseInt(total) + parseInt(iva);
        var preciofin=Math.round(iva);
        var preciosin=Math.round(totalsin);
        //alert(preciosin+'-->sin iva');
        $('#' + posicion).html(preciofin);
        $('#valf' + posicion).val(preciofin);
        var count = $("#holas").val();
        var sum = 0; var sumi=0;
        for (var k = 0; k < count; k++)
        {
            sub1 = $("#valf" + k).val();
            sub2 = $("#valf" + k).val();
            if ($("#valf" + k).val() == "a") {
                sub1 = 0;
            }
            sum = parseInt(sum) + parseInt(sub1);
        }
       // $('#campsfinals').empty().html(sum);
        $('#ct1' + posicion).empty().html("16%");
        $('#ct3' + posicion).empty().html(precio);
        $('#cantct1' + posicion).empty().html(cantidad);
        $('#precioct3' + posicion).empty().html(preciofin);
        $('#preciostotales').val(sum);
        $('#finalje').val(sum);
        //  alert(sum);
         // alert(sumi);
         var subtotal = sum * 1.16;
         //var subtotal1 = sum / 1.16;
         var subtotal1 = sum * 1.16;
        var ivafinal =   subtotal-sum;
        var sumi = Math.round(sum / 1.16);
        var sumiva=sum-sumi
        var sumtot=sumi+sumiva;
        
        var sumtt= sumi+sumiva;

        //alert(sumi)
        
      // $('#campsfinals').empty().html((sum + ivafinal).toFixed(0));
        $('#campsfinals').empty().html(sumtot);
        $('#subtotje').empty().html(sumi);
       // $('#ivaje').empty().html(ivafinal.toFixed(0));
        $('#ivaje').empty().html(sumiva);
        $('#subtenvio').val((sum + ivafinal).toFixed(0));
        $('#subtotal').val(sumi);
        $('#ivaenvio').val(sumiva);
        $('#totaltotalenvio').val(sumtt);
        //$('#totaltotalenvio').val((sumtot);


    } else {
        if (precio == "Ingrese valor") {
            precio = 0;
        }
        var total = parseInt(cantidad) * parseInt(precio);
        $('#' + posicion).html(total);
        $('#valf' + posicion).val(total);
        var count = $("#holas").val();
        var sum = 0;
        for (var k = 0; k < count; k++)
        {
            sub1 = $("#valf" + k).val();
            if ($("#valf" + k).val() == "a") {
                sub1 = 0;
            }
            sum = parseInt(sum) + parseInt(sub1);
        }
      //  $('#campsfinals').empty().html(sum);
        $('#ct1' + posicion).empty().html("");
        $('#ct3' + posicion).empty().html(precio);
        $('#cantct1' + posicion).empty().html(cantidad);
        $('#precioct3' + posicion).empty().html(total);
        $('#preciostotales').val(sum);
        $('#finalje').val(sum);

        //  alert(sum);
         var subtotal = sum * 1.16;
        // var subtotal=totalsin;
         var subtotal1 = sum / 1.16;
       // var ivafinal =   subtotal-sum;
        var ivafinal=0;
        var sumtt=sum + ivafinal;
       //lert('aca..    ')
       $('#campsfinals').empty().html(sum);
        $('#subtotje').val(sum);
        $('#ivaje').empty().html(ivafinal.toFixed(0));
        $('#subtenvio').val((sum + ivafinal).toFixed(0));
        $('#subtotal').val(sum);
        $('#ivaenvio').val(ivafinal.toFixed(0));
        $('#totaltotalenvio').val(sumtt);

    }
}

function cambiar3(band1) {

    $.post('index.php?seccion=cerrarsesion1', {
        bandera: band1
    }, function(cambioresultado) {
    });
}
function cambios(valor) {
    window.location = 'index.php?seccion=cotizar&le=' + valor + '';
}
function cambios1(valor) {
    window.location = 'index.php?seccion=cotizar&pal=' + valor + '';
}

$(function() {
    $("#mens1").hide();
    $('#btnmoreenviar').click(function() {
        var pais = $('.pais').val();
        if (pais == "noes") {
            $("#mens1").fadeIn();
            return false;
        } else {
            $("#mens1").fadeOut();
            $("#formenviar").validationEngine();
        }
    });

});

function condiciones() {
    var camp12 = $('#condicionesdeventa').val();
    $('#camp12').empty().html(camp12);
}
;
function dias(valor) {
    //var dias1 = $('#country_id').val();   
    $('#campo6').empty().html(valor);
}
;
function observaciones() {
    var camp11 = $('#campocomentario').val();
    $('#camp11').empty().html(camp11);

}
;




function Hacerpdf(ab, cd, ef, iduser, cant, condicionesdeventa, campocomentario, subenviototal1, ivatotal1, totaltotal1, asesorid) {
    var idf = "";
    var cantf = "";
    var valorunif = "";
    var ivaf = "";
    for (var a = 0; a < cant; a++) {

        var idv = $('#idsab' + a).val();
        var cantv = $('#canti' + a).val();
        var unita = $('#valsss' + a).val();
        var ivav = $('#chk_iva' + a).val();

        if (a + 1 == cant) {
            idf += idv;
            cantf += cantv;
            valorunif += unita;
            if ($("#chk_iva" + a).is(':checked')) {
                ivaf += "si";
            } else {
                ivaf += "no";
            }

        } else {
            idf += idv + "-";
            cantf += cantv + "-";
            valorunif += unita + "-";
            if ($("#chk_iva" + a).is(':checked')) {
                ivaf += "si" + "-";
            } else {
                ivaf += "no" + "-";
            }

        }


    }
  var tdatos = {
        dias:ab,
        validez:cd,
        condiciones:ef,
        asesor:asesorid,
        subenviototal1:subenviototal1,
        ivatotal1:ivatotal1,
        totaltotal1:totaltotal1,
        user:iduser,
        cond:condicionesdeventa,
        comnet:campocomentario,
        idf:idf,
        cantidadf:cantf,
        valoruf:valorunif,
        ivaf:ivaf        
    };
    
    $.ajax({
        url: "index.php?seccion=pdf2",
        type: "POST",
        data: tdatos,      
        success: function(data) {
           
               window.location.href='imagenes/pdfs/PDFUSER' +iduser+ '.pdf';
           
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Si se presento algun error, mostramos la descripcion
            // alert( "Error\nAlgo ha salido mal. Por favor int�ntalo de nuevo en unos minutos -> "+textStatus);
        }
    });
    
    
    
    
    
    //var url = "index.php?seccion=pdf1&dias=" + ab + "&validez=" + cd + "&condiciones=" + ef + "&asesor=" + asesorid + "&subenviototal1=" + subenviototal1 + "&ivatotal1=" + ivatotal1 + "&totaltotal1=" + totaltotal1 + "&user=" + iduser + "&cond=" + condicionesdeventa + "&comnet=" + campocomentario + "&idf=" + idf + "&cantidadf=" + cantf + "&valoruf=" + valorunif + "&ivaf=" + ivaf + "";
   // window.location.href = url;
    //  alert(idf +" cant "+ cantf +" preciou "+ valorunif+" iva "+ ivaf);
//    $.post('index.php?seccion=pdf1', {
//        ids: idf, 
//        cantidad: cantf,
//        valorunit: valorunif,
//        iva: ivaf
//    } , function(cambioresultado){          
//     
//        alert(cambioresultado);
//    });
}
;