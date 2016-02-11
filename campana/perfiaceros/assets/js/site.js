/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
	jQuery( ".con-tip" ).hover(function() {
		jQuery(this).children(".con-tool").fadeIn().delay(1800).fadeOut();
	}, function() {
		jQuery(this).children(".con-tool").fadeOut();
	});
	
	jQuery('.cont_scroll').jScrollPane({verticalDragMaxHeight: 22, horizontalDragMaxWidth: 21, showArrows: false, autoReinitialise: true});
	
	jQuery("#formulario").validationEngine({
		prettySelect : true, useSuffix: "_chzn",
		ajaxFormValidation: true,
		ajaxFormValidationMethod: 'post',
		onAjaxFormComplete: ajaxValidationCallback
	});

	jQuery(".formulario_vacante").each(function(index, element) {
    jQuery(this).validationEngine({
			prettySelect : true, useSuffix: "_chzn"
		});
  });
	
	if(jQuery(".formulario_vacante").size()>0){jQuery(".formulario_vacante").validationEngine({prettySelect : true, useSuffix: "_chzn"});};
	if(jQuery(".sel-item").size()>0){jQuery(".sel-item").chosen({allow_single_deselect : true});};
	
	//jQuery(".formulario_vacante").validationEngine();
	
	jQuery('.slider_documentos').bxSlider({
		minSlides: 1,
		maxSlides: 4,
		slideWidth: 400,
		slideMargin: 10
	});
	
	jQuery('.slidermenulineas').bxSlider({
		minSlides: 1,
		maxSlides: 8,
		slideWidth: 200,
		slideMargin: 10
	});
	
	//jQuery(".select_dd").msDropDown().data("dd");
	
	jQuery('.slidervideos').bxSlider({
  	 minSlides: 1,
  	 maxSlides: 3,
  	 slideWidth: 298,
  	 slideMargin: 10
	});
	
	jQuery(".bx-pager").each(function() {
    cantidad = jQuery(this).children(".bx-pager-item").size();
    console.log(cantidad);

    if (cantidad <= 1) {
      console.log("Funciona");
      jQuery(this).css("display", "none")
    }

  });
	
	jQuery(".hoja_vida").on("change", this, function() {
		var id = this.id;
		campo = jQuery("#"+id+" option:selected").val();
		if(campo == "doc") {
			jQuery(".file_doc").fadeIn();
			jQuery(".file_vid").fadeOut();
		}
		else if(campo == "vid") {
			jQuery(".file_doc").fadeOut();
			jQuery(".file_vid").fadeIn();
		}
		else if(campo == "doc_vid") {
			jQuery(".file_doc").fadeIn();
			jQuery(".file_vid").fadeIn();
		}
		else if(campo == "") {
			jQuery(".file_doc").fadeOut();
			jQuery(".file_vid").fadeOut();
		}
	});
	
	jQuery("#file1, #file2").on("change", this, function() {
		comprueba_extension(this.id);
	});
	
	jQuery('#btmenu_responsivo').sidr({
		name: 'sidr-left',
		side: 'left'
	});
	
	jQuery('#btmenu_responsivoperfil').sidr({
		name: 'sidr-right',
		side: 'right'
	});
});

function verificaArchivos(form) {
	if(jQuery("#"+form.id+" #file1").val() == "" && jQuery("#"+form.id+" #file2").val() == "") {
		event.preventDefault();
		alert("Debe subir al menos un archivo de su CV.");
		return false;
	}
	else return true;
	return false;
}

function beforeCall(form, options){
	if (window.console) 
		console.log("Validando el formulario");
	return true;
}
	
// Called once the server replies to the ajax form validation request
function ajaxValidationCallback(status, form, json, options){
	if (window.console) 
		console.log(status);
	
	if (status === true) {
		jQuery.ajax({
			url  :   jQuery("#formulario").attr("action"),
			type :   'POST',
			data :   jQuery("#formulario").serialize(),
			success:function(data){
				if(data.save == true) {
					alert('Se enviaron los datos, pronto le estaremos respondiendo.');
				}
				else alert("Hubo un error de envío. Por favor intentelo más tarde.");
			}
		});
	}
	return false;
}

function comprueba_extension(field, rules, i, options) {
	var archivo = jQuery("#"+field).val();
	if(field == "file1") extensiones_permitidas = new Array(".doc", ".docx", ".pdf", ".jpg", ".png");
	if(field == "file2") extensiones_permitidas = new Array(".wmv", ".mp4", ".ogv", ".mov");
	mierror = "";
	if (!archivo) {
		//Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario
		if(field == "file1") { var campo = "Documento o imagen"; mierror = "No has seleccionado ningún archivo de "+campo; }
		if(field == "file2") { var campo = "Video"; mierror = "No has seleccionado ningún archivo de "+campo; }
	} else {
		//recupero la extensión de este nombre de archivo
		extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
		//alert (extension);
		//compruebo si la extensión está entre las permitidas
		permitida = false;
		for (var i = 0; i < extensiones_permitidas.length; i++) {
			if (extensiones_permitidas[i] == extension) {
				permitida = true;
				break;
			}
		}
		if (!permitida) {
			if(field == "file1") { var campo = "Documento o imagen"; jQuery(".pre1").html(""); }
			if(field == "file2") { var campo = "Video"; jQuery(".pre2").html(""); }
			jQuery("#"+field).val("");
			mierror = "Comprueba la extensión de los archivos a subir en el campo de " + campo + ".\nSólo se pueden subir archivos con extensiones: " + extensiones_permitidas.join();
		}
	}
	//si estoy aqui es que no se ha podido submitir
	if(mierror != "") {
		alert(mierror);
		return mierror;
	}
	return true;
}