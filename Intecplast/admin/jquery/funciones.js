function initMenu() {
  $('#menu ul').hide();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
	  
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
		$(".active").removeClass("active");   
        $(this).addClass("active");
		/*$(".icono2").removeClass("icono2");*/
        return false;
        }
		
		//$("#icono").addClass("icono2");
		
		
		/*var toLoad = $(this).attr('href')+' #content';
		$('#content').hide('fast',loadContent);
		$('#load').remove();
		$('#marco_sup').append('<div id="load"></div>');
		$('#load').fadeIn('normal');
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-4);
		function loadContent() {
			$('#content').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$('#content').show('normal',hideLoader());
		}
		function hideLoader() {
			$('#load').fadeOut('normal');
			//$('#dialogCargador').dialog('close');
		}
		return false;*/
		
		/*var toLoad = $(this).attr('href')+' #content';
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-4);
		$("#content").load(toLoad,'',showNewContent());
		function showNewContent() {
			$('#content').show('normal');
		}*/
		//return false;
		
      }
    );
  }



// VALIDACION DE FORMS

//VARIABLES DE LOS CAMPOS
var cssFoc = {'color' : '#244A89', 'border' : '1px solid #2FACFF', 'padding-top' : '5px', 'padding-right' : '0', 'padding-bottom' : '2px',	'padding-left' : '4px', 'font-family' : 'Verdana, Arial, Helvetica, sans-serif', 'font-size' : '11px', 'background-color' : '#F0F4F8', 'background-image' : 'url(imagenes/form/fondo2.png)' };
		  
		  var cssBlu = {'color' : '#666666', 'border' : '1px solid #AAAAAA', 'padding-top' : '5px', 'padding-right' : '0', 'padding-bottom' : '2px',	'padding-left' : '4px', 'font-family' : 'Verdana, Arial, Helvetica, sans-serif', 'font-size' : '11px', 'background-color' : '#FFFFFF', 'background-image' : 'url(imagenes/form/fondo1.png)' };
		  //$('input.text-input').css({backgroundColor:"#F4F4F4"});
		  
		$(function valida_form1() {
		  $('#campo_vacio').hide();
		  $('input.text-input').focus(function(){
			$(this).css(cssFoc);
		  });
		  $('input.text-input').blur(function(){
			$(this).css(cssBlu);
		  });
		
		  function cambioPass(){
			$('#campo_vacio').hide();
				
			  	var user = $("input#user").val();
				if (user == "") {
			      $("input#user").focus();
			      $('#dialog_campo_vacio').dialog('open');
			      return false;
			    }
				var pass1 = $("input#pass1").val();
				if (pass1 == "") {
			      $("input#pass1").focus();
			      $('#dialog_campo_vacio').dialog('open');
			      //$("input#pass1").focus();
			      return false;
			    }
				var pass2 = $("input#pass2").val();
				if (pass2 == "") {
				  $("input#pass2").focus();
				  $('#dialog_campo_vacio').dialog('open');
				  return false;
				}
				if (pass1 != pass2) {
				  $("input#pass2").focus();
				  $('#dialog_contrasena_igual').dialog('open');
				  return false;
				}
				
				var dataString = 'user='+ user + '&pass1=' + pass1 + '&pass2=' + pass2;
				//alert (dataString);return false;
				
			$.ajax({
			  type: "POST",
			  url: "cambio_pass.php",
			  data: dataString,
			  success: function() {
				$('#dialog_campo_actualizado').dialog('open');
			  }
			 });
			return false;
			};
		/*});
		runOnLoad(function(){
		  $("input#user").select().focus();
		});*/
		
		//MODIFICAR LOGO
		function cambioLogo(){
			$('#campo_vacio').hide();
				
			  	var user = $("input#logo").val();
				if (user == "") {
			      $("input#logo").focus();
			      $('#dialog_campo_vacio').dialog('open');
			      return false;
			    }
				
		};
		});//
		
//FIN VALIDACION DE FORMS


//INICIACION DOCUMENT
$(document).ready(function() {
		
		//CARGANDO
		//$("#marco1").ajaxStart(function() { $(this).addClass("cargando"); });
		//$("#dialog_cargando").ajaxStop(function() { $("#marco1").removeClass("cargando"); $(this).dialog('close'); });
		
		//MENU
		initMenu();
		$("#content_menu").load('menu.php');
		
		var hash = window.location.hash.substr(1);
		var href = $('#menu li a').each(function(){
			var href = $(this).attr('href');
			if(hash==href.substr(0,href.length-4)){
			var toLoad = hash+'.php #content';
			$('#content').load(toLoad)
			}											
		});	
		
		// VENTANAS MODALES Y ALERTAS
		$("#dialog_campo_vacio").dialog({
			autoOpen: false,
			bgiframe: true,
			modal: true,
			resizable: false,
			//width:200,
			//height:100,
			buttons: {
				Volver: function() {
					$(this).dialog('close');
				}
			}
		});
		
		$("#dialog_contrasena_igual").dialog({
			autoOpen: false,
			bgiframe: true,
			modal: true,
			resizable: false,
			//width:200,
			//height:100,
			buttons: {
				Volver: function() {
					$(this).dialog('close');
				}
			}
		});
		
		$("#dialog_campo_actualizado").dialog({
			autoOpen: false,
			bgiframe: true,
			modal: true,
			resizable: false,
			buttons: {
				OK: function() {
					$(this).dialog('close');
					location.reload(true);
				}
			}
		});
		
		$("#dialog_cargando").dialog({
			autoOpen: true,
			bgiframe: false,
			modal: false,
			resizable: false,
			draggable: false,
			height:70,
			width:150,
			title: false,
			titlebar: false,
			dialogClass: 'ui-widget-overlay'
		});
		
		
});