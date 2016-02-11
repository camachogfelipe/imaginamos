$(document).ready( function()
{
  // Pierde el foco y cambia el contenido del texto en el formulario
  $(".class_frm .field_frm").blur(function (){
    if( trim ( $(this).attr("value") ) == 0 ){
      $(this).attr("value", $(this).attr("title"));
      //$(this).attr("value", "");
    }
  });

  // Cuando llega el foco al campo de texto
  $(".class_frm .field_frm").focus(function (){
    if( $(this).attr("value")  == $(this).attr("title") ){
      $(this).attr("value", "");
    }
  });

  // Valiacion del formulario y envio de parametros ajax
  $(".submit_frm").click(function (){
    // Si tratamos con tynimce, volcamos la info al textarea
    //if (tinyMCE) tinyMCE.triggerSave();
    var formComplete = true;
    var formSubmit = false;
    var stringJSON = "";
    var idfrm = $(this).attr("frmid");
    $("."+idfrm+" .field_frm").each(function (index){

      var valueTemp = $(this).attr("value")==undefined ? $(this).html() : $(this).attr("value");

      // Validamos si es tipo radio, de ser asi lo enviamos por post si se encuentra chequeado
      if( $(this).attr("type")=="radio" ){
        if( $(this).is(':checked') ){
          stringJSON += (stringJSON!="" ? ", " : "") + ($(this).attr("id")!="" ? $(this).attr("id") : 'def') + ':"' + escape(valueTemp) + '"';
        }
      }else if( $(this).attr("type")=="checkbox" ){
        if( $(this).is(':checked') ){
          stringJSON += (stringJSON!="" ? ", " : "") + $(this).attr("id")+':'+valueTemp;
        }
      }else{
        stringJSON += (stringJSON!="" ? ", " : "") + ($(this).attr("id")!="" ? $(this).attr("id") : 'def') + ':"' + escape(valueTemp) + '"';
      }

      if( $(this).attr("id")=="myForm" ){
        formSubmit = valueTemp;
      }

      if( $(this).attr("title") ){
        if( valueTemp == $(this).attr("title") || valueTemp == "" ){
          alert( 'Error\n' + $(this).attr("title") );
          if( $(this).attr("id")!="" ){
            $("#"+$(this).attr("id")).focus();
          }
          formComplete = false;
          return false;
        }
      }
    });

    // Si el formulario esta completo y es para hacer submit ejecutamos submit, en caso contrario si el formulario esta completo enviamos json y recibimos json ajax
    if(formSubmit && formComplete){
      $("#"+formSubmit).submit();
    }else if(formComplete){

      eval("var myObject = { " + stringJSON + " };");
      $.ajax({
        url: ajaxRutaAbs,
        type: "POST",
        data: myObject,
        dataType: "json",
        success: function( data ) {
          // Si el ajax respondio
          if( data.event!=null ){
            //alert( "aaa "+decodeURIComponent( data.event ) );
            eval ( data.event );
          }else{
            alert( data.title+"\n"+data.message);
          }
        },
        error: function (jqXHR, textStatus, errorThrown){
          // Si se presento algun error, mostramos la descripcion
          alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
        }
      });
    }
  });

  $("#add_exp").click(function (){

    var id_contenedor = $(this).prev().children(".contenedor_mas:last").attr("id");
    var str=id_contenedor;
    var n=str.split( "expe_opc_" );

    var myObject = {myFunct:"AddExperiencia", next:n[1]};

    $.ajax({
      url: ajaxRutaAbs,
      type: "POST",
      data: myObject,
      dataType: "json",
      success: function( data ) {
        // Si el ajax respondio
        $("#secc_exp").append( data.html );
      },
      error: function (jqXHR, textStatus, errorThrown){
        // Si se presento algun error, mostramos la descripcion
        alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
      }
    });
  });

  $("#add_edf").click(function (){

    var id_contenedor = $(this).prev().children(".contenedor_mas:last").attr("id");
    var str=id_contenedor;
    var n=str.split( "edf_opc_" );

    var myObject = {myFunct:"AddEduformal", next:n[1]};

    $.ajax({
      url: ajaxRutaAbs,
      type: "POST",
      data: myObject,
      dataType: "json",
      success: function( data ) {
        // Si el ajax respondio
        $("#secc_edf").append( data.html );
      },
      error: function (jqXHR, textStatus, errorThrown){
        // Si se presento algun error, mostramos la descripcion
        alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
      }
    });
  });

  $("#add_ednf").click(function (){
    var id_contenedor = $(this).prev().children(".contenedor_mas:last").attr("id");
    var str=id_contenedor;
    var n=str.split( "ednf_opc_" );

    var myObject = {myFunct:"AddEdunoformal", next:n[1]};
    $.ajax({
      url: ajaxRutaAbs,
      type: "POST",
      data: myObject,
      dataType: "json",
      success: function( data ) {
        // Si el ajax respondio
        $("#secc_ednf").append( data.html );
      },
      error: function (jqXHR, textStatus, errorThrown){
        // Si se presento algun error, mostramos la descripcion
        alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
      }
    });
  });

  $("#add_idm").click(function (){
    var myObject = {myFunct:"AddIdioma"};
    $.ajax({
      url: ajaxRutaAbs,
      type: "POST",
      data: myObject,
      dataType: "json",
      success: function( data ) {
        // Si el ajax respondio
        $("#secc_idm").append( data.html );
      },
      error: function (jqXHR, textStatus, errorThrown){
        // Si se presento algun error, mostramos la descripcion
        alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
      }
    });
  });

  $("#add_inf").click(function (){
    var myObject = {myFunct:"AddInfor"};
    $.ajax({
      url: ajaxRutaAbs,
      type: "POST",
      data: myObject,
      dataType: "json",
      success: function( data ) {
        // Si el ajax respondio
        $("#secc_inf").append( data.html );
      },
      error: function (jqXHR, textStatus, errorThrown){
        // Si se presento algun error, mostramos la descripcion
        alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
      }
    });
  });

  $("#enviar_usuario").click(function (){
    if (true == validar()) {
      $("#registro_usuario").submit();
    }else{
      return false;
    }
  });

  $("#enviar_empresa").click(function (){
    if (true == validar()) {
      $("#registro_empresaaa").submit();
    }else{
      return false;
    }
  });

  $("#enviar_oferta").click(function (){
    if (true == validar()) {
      $("#registro_oferta").submit();
    }else{
      return false;
    }
  });

  $("#enviar").click(function (){
    if (true == validar()) {
      $("#registro").submit();
    }else{
      return false;
    }
  });

  $("#enviar_misdatos").click(function (){
    if (true == validar()) {
      $("#frm-zonasegura").submit();
    }else{
      return false;
    }
  });

  $("#term_option1" ).click(function (){
    $('#acp_terminos').val( '1' );
  });

  $("#term_option2" ).click(function (){
    $('#acp_terminos').val( '' );
  });

  $("#atra_emp_a" ).click(function (){
    $('#if_si').css( "display", "block" );
    $('#if_no').css( "display", "none" );
  });
  
  $("#atra_emp_b" ).click(function (){
    $('#if_si').css( "display", "none" );
    $('#if_no').css( "display", "block" );
  });
  
  $("#con_empl_a" ).click(function (){
    $('#if_si').css( "display", "block" );
    $('#if_no').css( "display", "none" );
    $('#if_si2').css( "display", "none" );
    $('#if_no2').css( "display", "none" );
  });
  
  $("#con_empl_b" ).click(function (){
    $('#if_si').css( "display", "none" );
    $('#if_no').css( "display", "block" );
    $('#if_si2').css( "display", "none" );
    $('#if_no2').css( "display", "none" );
  });
  
  $("#trav_emar_a" ).click(function (){
    $('#if_si2').css( "display", "block" );
    $('#if_no2').css( "display", "none" );
  });
  
  $("#trav_emar_b" ).click(function (){
    $('#if_si2').css( "display", "none" );
    $('#if_no2').css( "display", "block" );
  });
});

// Funcion para hacer consukltas AJAX dinamicamente
function GenericAjax( funcion, valorEnviado ){
  var myObject = {myFunct:funcion, valor:valorEnviado};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      eval ( data.event );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

// Funcion que me devuelve el numero de caracteres sin espacios de una cadena
function trim(cadena){
  if(cadena==undefined){
    return false;
  }
  var nuevacadena="";
  nuevacadena=cadena.replace(/\ /g,"");
  return nuevacadena.length;
}

// Funcion para hacer redirect de link por js
function hacerRedirect(link){
  //alert(link);
  window.location.href = link;
}

function validar_email(valor){
  var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
  if(filter.test(valor)){return true;}
  return false;
}

function validar()
{
  var retorno = true;
  var campos = "";

  $(".requerido").each(function (index){
    if( $(this).attr("value")=="" )
    {
      campos += (campos!="" ? ", " : "")+$(this).attr("title");
      retorno = false;
    }
  });

  if( !retorno )
    alert( "Favor diligenciar los campos: "+campos+"\n" );

  return retorno;
}


function terminos(condicion)
{
  if( condicion == 1 )
    $('#acp_terminos').val( '1' );
  else
    $('#acp_terminos').val( '' );
}

function showFinaliza( div_show )
{
  $( '#'+div_show ).css( "display", "block" );
}

function hideFinaliza( div_hide )
{
  $( '#'+div_hide ).css( "display", "none" );
}

function RecargarCiudades( target, valor )
{
  var myObject = {myFunct:"RecargarCiudades", valor:valor.value };
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      var html = '<option value="">Seleccione</option>';
      for( i=0; i<data.count; i++){
        html += '<option value="'+data.datos[i].id+'">'+data.datos[i].txt_nombre+'</option>';
      }
      $("#"+target).html( html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function RecargarProfesion( target, valor )
{
  var myObject = {myFunct:"RecargarProfesion", valor:valor.value };
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      var html = '<option value="">Seleccione</option>';
      for( i=0; i<data.count; i++){
        html += '<option value="'+data.datos[i].id+'">'+data.datos[i].txt_nombre+'</option>';
      }
      $("#"+target).html( html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

// Funcion para retornar los servicios asociados a un proveedor para la reserva actual
function DetalleConsejo( valorEnviado )
{
  var myObject = {myFunct:"DetalleConsejo", id:valorEnviado};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      $("#detalle_conse").html( data.html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function VotarEncuesta()
{
  var myObject = {myFunct:"Votar", id_pregunta:$("#id_pregunta").val(), id_opcion:$('input[name=id_opcion]:checked').attr('value')};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( datos )
    {
      $('#detalle_conse').highcharts({
        chart:
        {
          type: 'column',
          margin: [ 50, 50, 100, 80]
        },
        title: {
          text: 'Resultado encuesta'
        },
        xAxis: {
          categories: datos.categories,
          labels: {
            rotation: -45,
            align: 'right',
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Numero de votos'
          }
        },
        legend: {
          enabled: false
        },
        tooltip: {
          formatter: function() {
            return '<b>'+ this.x +'</b><br/>'+
            'Votos: '+ Highcharts.numberFormat(this.y, 1);
          }
        },
        series: [{
          name: 'Votos',
          data: datos.data,
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            x: 4,
            y: 10,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        }]
      });
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

// Funcion para retornar los servicios asociados a un proveedor para la reserva actual
function EstadoOferta( id, valor )
{
  var myObject = {myFunct:"EstadoOferta", id:id, valor:valor.value};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      alert( data.title+"\n"+data.message );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function segEmpresa( valorEnviado )
{
  var myObject = {myFunct:"SegEmpresa", id:valorEnviado};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      $("#detalle_oferta").html( data.html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function BorrarOferta( id )
{
    var myObject = {myFunct:"BorrarOferta", id:id};
    $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      if( data.event!=null ){
        alert( data.title+"\n"+data.message );
        window.location.href=data.event;
        //eval ( data.event );
      }else{
         alert( data.title+"\n"+data.message);
      }
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function DetalleOfertaH( valorEnviado )
{
  var myObject = {myFunct:"DetalleOfertaH", id:valorEnviado};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      $("#detalle_oferta").html( data.html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function AplicaOferta( valorEnviado )
{
  var myObject = {myFunct:"AplicaOferta", id:valorEnviado};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      $("#aplicacion-exitosa").html( data.html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function AyudaHV( valorEnviado )
{
  var myObject = {myFunct:"AyudaHV", id:valorEnviado};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      $("#detalle_oferta").html( data.html );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function RecorUsuario()
{
  var myObject = {myFunct:"RecorUsuario", email:$('#env_usuario').val()};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      alert( 'Se ha enviado un e-mail con los datos' );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function RecorClave()
{
  var myObject = {myFunct:"RecorClave", nickname:$('#env_contrasena').val()};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      // Si el ajax respondio
      alert( 'Se ha enviado un e-mail con la nueva clave' );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
}

function ElimUsuario( id, idRegistrado )
{
  if ( confirm( '¿Está seguro de eliminar este usuario?') )
  {
    var myObject = {myFunct:"ElimUsuario", id:id, id_registrado:idRegistrado };
    $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      eval ( data.event );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
    return true;
  }
  return false;
}

function ElimEmpresa( id )
{
  if ( confirm( '¿Está seguro de eliminar esta empresa?') )
  {
    var myObject = {myFunct:"ElimEmpresa", id:id };
    $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function( data ) {
      eval ( data.event );
    },
    error: function (jqXHR, textStatus, errorThrown){
      // Si se presento algun error, mostramos la descripcion
      alert( "Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> "+textStatus);
    }
  });
    return true;
  }
  return false;
}