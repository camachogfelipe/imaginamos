function format(input) {
  var num = input.value.replace(/\./g, "");
  if (!isNaN(num)) {
    num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g, "$1");
    num = num.split("").reverse().join("").replace(/^[\.]/, "");
    input.value = num;
  } else {
    input.value = input.value.replace(/[^\d\.]*/g, "");
  }
}

function checkInput(ob) {
  var invalidChars = /^\s*\d+\s*$/
  if (invalidChars.test(ob.value)) {
    ob.value = ob.value.replace(invalidChars, "");
  }
}

function lettersOnly(evt) {
  evt = (evt) ? evt : event;
  var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
  if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
    alert("Enter letters only.");
    return false;
  }
  return true;
}
// I am not responsible of this code.
// They made me write it, against my will.
function ValidarCaptcha()
{
  //When I wrote this, only God and I understood what I was doing
  //Now, God only knows

  var val_recaptcha_response_field = $("#recaptcha_response_field").val();
  var val_recaptcha_challenge_field = $("#recaptcha_challenge_field").val();

  var myObject = {myFunct: "ValidarCaptcha", recaptcha_response_field: val_recaptcha_response_field, recaptcha_challenge_field: val_recaptcha_challenge_field};
  $.ajax({
    url: ajaxRutaAbs,
    type: "POST",
    data: myObject,
    dataType: "json",
    success: function(data)
    {
      if (data.message == "true")
      {
        eval(data.event);
      }

    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      // Si se presento algun error, mostramos la descripcion
      alert("Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> " + textStatus);
    }
  });
}

function validarPersona(contadorPersona)
{
  var retorno = true;
  var campos = "";
  var parametroJquery = ".requerido" + contadorPersona;
  var email_val = "";
  var email_val2 = "";
  var controlEmail = "";

  $(parametroJquery).each(function(index) {

    if ($(this).attr("name") == "txt_email")
    {
      if (!validar_email($(this).val())) {
        alert("Ingrese un e-mail valido");
        retorno = false;
        $(this).focus();
        return retorno;
      }
      else {
        email_val = $(this).val();
      }
    }

    if ($(this).attr("name") == "txt_email2")
    {
      if (!validar_email($(this).val())) {
        alert("Ingrese un e-mail valido 2");
        retorno = false;
        $(this).focus();
        return retorno;
      }
      else {
        email_val2 = $(this).val();
        if (email_val2 != email_val) {
          alert("Los E-mail ingresados no coinciden");
          retorno = false;
          $(this).focus();
          return retorno;
        }
      }
    }

    if ($(this).is('.val_num')) {
      if (!validar_numeros($(this).val())) {
        alert('Error\nDebe escribir un numero valido');
        $(this).focus();
        retorno = false;
        return false;
      }
    }

    if ($(this).is('.val_texto')) {
      if (!validar_texto($(this).val())) {
        alert('Error\nSolo se aceptan letras');
        $(this).focus();
        retorno = false;
        return false;
      }
    }

    if ($(this).is('.val_email')) {
      if (!validar_email($(this).val())) {
        alert('Error\nDebe escribir un email valido');
        $(this).focus();
        retorno = false;
        return false;
      }
    }

    if ($(this).val() == "")
    {
      campos += (campos != "" ? ", " : "") + $(this).attr("title");
      retorno = false;
    }

    if ($(this).attr("id") == "txt_passwd") {
      if ($(this).val() != $("#txt_passwd2").val()) {
        alert("La contrase�a y su confirmacion no son iguales");
        retorno = false;
        return false;
      }
    }
  });

  if (!retorno)
    alert("Favor diligenciar los campos: " + campos + "\n");

  return retorno;
}

function btnSiguiente(parametroSiguiente)
{

  if (parametroSiguiente == "1")
    if (!$("#id_empresa").val()) {
      
     var retorno = ValidarCaptcha();
    };

  var parametrosiguienteJquery = "a.siguiente_btn" + parametroSiguiente;

  if (validarPersona(parametroSiguiente) != false) {

    $(parametrosiguienteJquery).each(function() {

      $(".pasos_formularios").children("li").removeClass("activo_btformulario");
      var ver_tab = $(this).parent().next("fieldset").attr('id');
      $(".pasos_formularios").children('.' + ver_tab).addClass("activo_btformulario");

      $(this).parent().parent(".cont_formfluid").children("fieldset").css("display", "none");
      $(this).parent().next("fieldset").fadeIn(200);
      $('body, html').animate({scrollTop: 318}, '600')
    });

  }
  ;

}

$(document).ready(function() {



  $(".estudios-realizados-dv").each(function(i) {
    $(this).children("br").next("p").css("background-image", "none");
  });

//menu principal
  $("ul.menu li").hover(function() {
    margen_submenu = $(this).width();
    margen_submenu = margen_submenu / 2;
    $(this).children("ul").css({
      'margin-left': margen_submenu - ($(this).children("ul").width() / 2)

    });
    $(this).children("ul").stop(true).slideDown();
  });

  $("ul.menu li").mouseleave(function() {
    $(this).children("ul").css("display", "none")
  });



//MENU OFERTAS EMPLEO

  $(".campo_ofertaempleo").hover(function() {
    $(this).children().children("ul").stop(true).slideDown();
  });

  $(".campo_ofertaempleo").mouseleave(function() {
    $(this).children().children("ul").css("display", "none")
  });

  $(".campo_areasempleo").hover(function() {
    $(this).children().children("ul").stop(true).slideDown();
  });

  $(".campo_areasempleo").mouseleave(function() {
    $(this).children().children("ul").css("display", "none")
  });

  /******** Formulario registro usuario **************/

  // $("[class=datepicker]").datepicker({
  //   changeMonth: true,
  //   changeYear: true,
  //   yearRange: "-90:+0",
  //   dateFormat: 'yy-mm-dd'
  // });


  $(function() {
    
 //Array para dar formato en espa�ol
  $.datepicker.regional['es'] = 
  {
  closeText: 'Cerrar', 
  prevText: 'Previo', 
  nextText: 'Pr�ximo',
  
  monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
  'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
  monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
  'Jul','Ago','Sep','Oct','Nov','Dic'],
  monthStatus: 'Ver otro mes', yearStatus: 'Ver otro a�o',
  dayNames: ['Domingo','Lunes','Martes','Mi�rcoles','Jueves','Viernes','S�bado'],
  dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','S�b'],
  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
  dateFormat: 'dd/mm/yy', firstDay: 0, 
  initStatus: 'Selecciona la fecha', isRTL: false};
 $.datepicker.setDefaults($.datepicker.regional['es']);
 
 //miDate: fecha de comienzo D=d�as | M=mes | Y=a�o
 //maxDate: fecha tope D=d�as | M=mes | Y=a�o
    $( "[class=datepicker]" ).datepicker({ changeMonth: true,
    changeYear: true,
    yearRange: "-90:+0",
    dateFormat: 'yy-mm-dd' });
  });
 
 

  $(".cont_formfluid").children("fieldset").eq(0).css("display", "block");



  $("a.atras_btn").click(function() {

    $(".pasos_formularios").children("li").removeClass("activo_btformulario");
    var ver_tab = $(this).parent().prev("fieldset").attr('id');
    $(".pasos_formularios").children('.' + ver_tab).addClass("activo_btformulario");

    $(this).parent().parent(".cont_formfluid").children("fieldset").css("display", "none");
    $(this).parent().prev("fieldset").fadeIn(200);
    $('body, html').animate({scrollTop: 318}, '600');
  });


// contraseña 


  $(".cont_olvidaste").click(function(event) {
    event.preventDefault();
    $(this).children(".cont_enviaracorreo").stop(true).slideDown();
  });

  $(".cont_olvidaste").mouseleave(function() {
    $(this).children(".cont_enviaracorreo").stop(true).slideUp();
  });





  /********
   
   var numend;
   var numfield=0;
   var currfield;
   var nextfield;
   var newDiv;
   
   $("#next_btn").click(function(){
   numfield ++;
   numend = $("fieldset").length;
   newDiv = numend-1;
   //alert(numfield +"asdsd"+ newDiv);
   if (numfield < numend) {
   currfield=$("#info"+numfield);
   nextfield=$("#info"+(numfield+1));
   currfield.hide();
   nextfield.show();
   }
   if(numfield == newDiv){
   $(this).text("Registrarse");
   }
   else if(numfield >= numend){
   
   alert("Registro exitoso");
   }
   });
   
   **************/



  /******** END Formulario registro usuario **************/


});

// Funcion para elimnar elementos del DOM
function eliminarObjetoRecursivoDOM(referencia){
  $(referencia).remove();
}

// Funcion para recargar el DOM UI
function reloadUI(){
  $(".datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: "-90:+0",
    dateFormat: 'yy-mm-dd'
  });
  
  $(".eliminar_obj").hover(
    function() {
      var padre = $(this).parent(".contenedor_mas");
      padre.addClass("negrito");
    }, function() {
      var padre = $(this).parent(".contenedor_mas");
      padre.removeClass("negrito");
    }
  );
}

// Funcion para ocultar o mostrar
function validarCual(valor, referencia){
  if(valor==0){
    $("#idioma_cual_"+referencia).css("display", "block");
  }else{
    $("#idioma_cual_"+referencia).css("display", "none");
  }
}


//Titulos/
$(".titulo_contenido:even").children("h2").css("float", "right"); // impares