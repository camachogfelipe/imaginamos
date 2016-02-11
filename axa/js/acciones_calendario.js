/* Jose Montenegro */

$(document).ready(function () {




var dateselected;
var n;
var d = "15"
var m;
var y;
	
			$(function(){

				// Datepicker
				$('#datepicker_salida').datepicker({
   					showOn: 'both',
   					buttonImage: 'calendar.png',
   					buttonImageOnly: true,
   					changeYear: false,
   					numberOfMonths: 3,

   					onSelect: function(textoFecha, inst){
					
						if($("#activa1").is(":checked")){
							$("#activa2").css("display","block");
							$("#calendario_salida").hide("slow");
							$("#calendario_llegada").show("slow");
							$("#activa2").attr("checked","checked");;
							$("#activa1").removeAttr("checked");
	
		
							}
						else{
							$("#calendario_salida").show("slow");
							$("#calendario_llegada").hide("slow");
						}	
						
						//document.getElementById('fecha_salida').value = textoFecha;
						//console.log(textoFecha);
						n=textoFecha.split("/");
						d=n[0];
						m=n[1];
						y=n[2];
						
						$('#fecha_salida').val(textoFecha);
						$('#hddfecha_salida').val(textoFecha);
						
						
						$('#datepicker_llegada').datepicker({
   					showOn: 'both',
   					buttonImage: 'calendar.png',
   					buttonImageOnly: true,
   					changeYear: false,
   					numberOfMonths: 3,
					defaultDate: new Date(y,m-1,d),
   					onSelect: function(textoFecha, objDatepicker){
						//console.log(objDatepicker);
						$('#fecha_llegada').val(textoFecha);
						$('#hddfecha_llegada').val(textoFecha);
      					$("#mensaje").html("<p>Has seleccionado: " + textoFecha + "</p>");
  				 	}
					
					
					}); 
						dateselected = textoFecha;//Date.parse(textoFecha);
						//console.log(dateselected);

      			$("#mensaje").html("<p>Has seleccionado: " + textoFecha + "</p>");
  				 	}
					}); 

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
			

			$(function(){

				// Datepicker
				/*$('#datepicker_llegada').datepicker({
   					showOn: 'both',
   					buttonImage: 'calendar.png',
   					buttonImageOnly: true,
   					changeYear: false,
   					numberOfMonths: 3,
					defaultDate: new Date(y,m,d),
					beforeShow: function(){
						alert(d+"//"+m+"//"+y);
					},
   					onSelect: function(textoFecha, objDatepicker){
						console.log(objDatepicker);
						document.getElementById('fecha_llegada').value = textoFecha;
						document.getElementById('hddfecha_llegada').value = textoFecha;
      					$("#mensaje").html("<p>Has seleccionado: " + textoFecha + "</p>");
  				 	}
					
					
					}); */

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});


			
			
/* Check Clendario1 */

$("div#datepicker_salida").children("div.ui-datepicker-inline").children("div.ui-datepicker-group").children("table.ui-datepicker-calendar").children("tbody").children("tr").children ("td").children("a.ui-state-default").click(function(e){
	e.preventDefault();
});

//$("div#datepicker_salida").children("div.ui-datepicker-inline").children("div.ui-datepicker-group").children("table.ui-datepicker-calendar").children("tbody").children("tr").children ("td").children("a.ui-state-default").click(function(e){
//		e.preventDefault();
//	if($("#activa1").is(":checked")){
//		$("#calendario_salida").hide("slow");
//		$("#calendario_llegada").show("slow");
//		$("#activa2").attr("checked","checked");;
//		$("#activa1").removeAttr("checked");
//	
//		
//	}
//	else{
//		$("#calendario_salida").show("slow");
//		$("#calendario_llegada").hide("slow");
//	}
//
//});



$("#activa1").attr("checked","checked");;

$("#activa1").click(function(){
	if($(this).is(":checked")){
		$("#calendario_salida").show("slow");
		$("#calendario_llegada").hide("slow");
		$("#activa2").removeAttr("checked");
		
	}
	else{
		$("#calendario_salida").hide("slow");
		$("#calendario_llegada").show("slow");
		$("#activa1").removeAttr("checked");
	}
});



/* Check Calendario2 */


$("#activa2").click(function(){
	if($(this).is(":checked")){
		$("#calendario_llegada").show("slow");
		$("#calendario_salida").hide("slow");
		$("#activa1").removeAttr("checked");
		//console.log('aaa');
	}
	else{
		$("#calendario_llegada").hide("slow");
		$("#calendario_salida").show("slow");
		$("#activa2").removeAttr("checked");
	}
});







});

/* Jose Montenegro */