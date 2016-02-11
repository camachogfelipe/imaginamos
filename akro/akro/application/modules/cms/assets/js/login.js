	  $(document).ready(function () {	  
			onfocus();
			$(".on_off_checkbox").iphoneStyle();
			$('.tip a ').tipsy({gravity: 'sw'});
			$('#login').show().animate({   opacity: 1 }, 2000);
			$('.logo').show().animate({   opacity: 1,top: '30%'}, 800,function(){			
				$('.logo').show().delay(1200).animate({   opacity: 1,top: '0%' }, 300,function(){
					$('.formLogin').animate({   opacity: 1,left: '0' }, 300);
					$('.userbox').animate({ opacity: 0 }, 200).hide();
				 });		
			})	
		});	

	    $('.userload').click(function(e){
			$('.formLogin').animate({   opacity: 1,left: '0' }, 300);			    
			  $('.userbox').animate({ opacity: 0 }, 200,function(){
				  $('.userbox').hide();				
			   });
	    });

/******************************/
/*   LOGIN BEGIN   */
/******************************/

	$('#but_login').click(function(e){				
		  if(document.formLogin.username.value == "" || document.formLogin.password.value == "")
		  {
			  showError("Ingrese usuario / clave");
			  $('.inner').jrumble({ x: 4,y: 0,rotation: 0 });	
			  $('.inner').trigger('startRumble');
			  setTimeout('$(".inner").trigger("stopRumble")',500);
			  setTimeout('hideTop()',5000);
			  return false;
		  }		
		 hideTop();
		 loading('Validando',1);		
		 setTimeout( "unloading()", 2000 );
		 setTimeout( "Login()", 2500 );
	});	
																 
function Login(){
	
	$.post("js/session.php",
		{
			username: document.formLogin.username.value,
			password: document.formLogin.password.value
			
		},loginPHP);
	
	function loginPHP(data){ var sessionLogin = data;		
		
		if(sessionLogin == 1)
		  {
			  	$("#login").animate({opacity: 1,top:'49%'}, 200,function(){
					 $('.userbox').show().animate({opacity:1}, 500);
						$("#login").animate({opacity: 0,top:'60%'}, 500,function(){
							$(this).fadeOut(200,function(){
							  $(".text_success").slideDown();
							  $("#successLogin").animate({opacity: 1,height: "200px"},500);   			     
							});							  
						 })	
				 })	
				
				setTimeout( "window.location.href='dashboard.php'", 3000 );
				
		  }else{			 
			 
			  showError("Datos inválidos, intente nuevamente");
			  $('.inner').jrumble({ x: 4,y: 0,rotation: 0 });	
			  $('.inner').trigger('startRumble');
			  setTimeout('$(".inner").trigger("stopRumble")',500);
			  setTimeout('hideTop()',5000);
			  return false;
			  
			  }
		
		}
}

/******************************/
/* END LOGIN */
/******************************/

/******************************/
/*   RECOVERY BEGIN   */
/******************************/

	$('#but_forgot').click(function(e){				
		  if(document.formLogin.emailRecovery.value == "")
		  {
			  showError("Ingrese un email");
			  $('.inner').jrumble({ x: 4,y: 0,rotation: 0 });	
			  $('.inner').trigger('startRumble');
			  setTimeout('$(".inner").trigger("stopRumble")',500);
			  setTimeout('hideTop()',5000);
			  return false;
		  }		
		 hideTop();
		 loading('Validando',1);		
		 setTimeout( "unloading()", 2000 );
		 setTimeout( "Recovery()", 2500 );
	});	
																 
function Recovery(){
	
	$.post("js/recovery.php", {emailRecipient: document.formLogin.emailRecovery.value},recoveryPHP);
	
	function recoveryPHP(data){ var sessionRecovery = data;
		
		if(sessionRecovery == 1)
		  {
			  	$("#login").animate({opacity: 1,top:'49%'}, 200,function(){
					 $('.userbox').show().animate({opacity:1}, 500);
						$("#login").animate({opacity: 0,top:'60%'}, 500,function(){
							$(this).fadeOut(200,function(){
							  $(".text_success").slideDown();
							  $("#successLogin").animate({opacity: 1,height: "200px"},500);   			     
							});							  
						 })	
				 })	
				
				showSuccess("Hemos enviado un email a "+document.formLogin.emailRecovery.value+", consúltelo y siga las instrucciones...");
				
		  }else{			 
			 
			  showError("El email que ingresa no está autorizado o no está bien escrito... verifique");
			  $('.inner').jrumble({ x: 4,y: 0,rotation: 0 });	
			  $('.inner').trigger('startRumble');
			  setTimeout('$(".inner").trigger("stopRumble")',500);
			  setTimeout('hideTop()',5000);
			  return false;
			  
			  }
		
		}
}

/******************************/
/* END RECOVERY */
/******************************/
	
$('#alertMessage').click(function(){
	hideTop();
});

function showError(str){
	$('#alertMessage').addClass('error').html(str).stop(true,true).show().animate({ opacity: 1,right: '0'}, 500);	
	
}

function showSuccess(str){
	$('#alertMessage').removeClass('error').html(str).stop(true,true).show().animate({ opacity: 1,right: '0'}, 500);	
}

function onfocus(){
				if($(window).width()>480) {					  
						$('.tip input').tipsy({ trigger: 'focus', gravity: 'w' ,live: true});
				}else{
					  $('.tip input').tipsy("hide");
				}
}

function hideTop(){
	$('#alertMessage').animate({ opacity: 0,right: '-20'}, 500,function(){ $(this).hide(); });	
}	

function loading(name,overlay) {  
	  $('body').append('<div id="overlay"></div><div id="preloader">'+name+'..</div>');
			  if(overlay==1){
				$('#overlay').css('opacity',0.1).fadeIn(function(){  $('#preloader').fadeIn();	});
				return  false;
		 }
	  $('#preloader').fadeIn();	  
 }
 
 function unloading() {  
		$('#preloader').fadeOut('fast',function(){ $('#overlay').fadeOut(); });
 }