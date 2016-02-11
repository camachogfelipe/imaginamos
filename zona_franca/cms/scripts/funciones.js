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
            alert( data.title+"\n"+data.message );
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

// Funcion para hacer redirect despues de alert por js
function alertRedirect(msg, link) {
    alert(msg);
    parent.location.href = link;
}

// Funcion para hacer redirect de link por js
function confirmRedirect(link, texto, vuelo) {

    if (confirm(texto)) {
        //parent.location.href = link;

        window.location.href = link;
        return true;
    }
    return false;
}

function validar_email(valor){
  var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
  if(filter.test(valor)){return true;}
  return false;
}