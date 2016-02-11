<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signum Consulting</title>
<base href="<?php echo base_url().'assets/' ?>"></base>
<link href="css/signum.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<link href="css/slides.css" rel="stylesheet" type="text/css" />
<?php include "meta.php" ?>
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script>
	$(function(){
		$('#slides').slides({
 		    pagination: false,
			preload: true,
			generateNextPrev: true
		});
		
		$('#slides_b').slides({
			effect: 'fade',
 		    pagination: false,
			preload: true,
			generateNextPrev: true
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){

     $(window).resize(function(){
          $('#slides').css({
               position:'absolute',
			   width: $(window).width(),
			   
          });
          

	});

// Ejecutamos la función
$(window).resize();

});

</script>

<script type="text/javascript">
    function valEmail(email){
                  re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
                  if(!re.exec(email))    {
                     return false;
                  }else{
                     return true;
                  }
               }
$(document).ready(function(){
	$("#submit").click(function(e){
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var comment = $("#comment").val();
		if(name=="" || email=="" || comment==""){
			alert("Hay campos sin llenar en el formulario");
                }     
                else if(!valEmail(email)){     
                     alert("Digite un email valido, e.g xxxxx@xxxx.xxx");
		}else{
			$.ajax({
				type	: "POST",
				data	: "name="+name+"&email="+email+"&comment="+comment,
				url		: "<?php echo base_url().'site/send' ?>",
				success : function(msg){
					if(msg=="1"){
						$("#actionZone").show("fast");
                                                $("#name").val('');
                                                $("#email").val('');
                                                $("#comment").val('');
					}else{
						alert("Hubo un error inesperado ");
					}
				}
			});
		}
	});
});
</script>

<style type="text/css">
#b6 {
	color:#718f99;
	border-bottom:solid 4px #718f99;
}
body {
	overflow-x:hidden;
}
</style>
</head>

<body>
<?php include "header.php" ?>

<div class="b1000" style="padding-top:30px;">



 	<div class="col_left_2">
    	<h2>Comunícate con nosotros </h2>
        <hr style="margin-bottom:30px;" />

        <div class="text_b">
	<form action="contactenos.php" class="form" method="post">
            
            <div class="label">Nombre:</div>
            
            <input name="name" type="text" id="name" />
            <div class="label">E-Mail:</div>
            <input name="email" type="text" id="email" />
            
            <div class="label">Mensaje:</div>
            <textarea name="comment" id="comment" style="width:460px;" ></textarea>
            <div><small>* Todos los campos son obligatorios.</small></div><br />
            <div class="clear"></div>
            <input type="submit"  id="submit" name="Submit" value="Enviar" />
                <div id="actionZone" style="display:none">Mensaje enviado exitosamente.</div>
        
            </form>
        </div>
    </div>
    
    <div class="col_right_2" style="padding-top:0px; width:450px;">
    	<h2>Información de contacto:</h2>
       <hr style="margin-bottom:30px;" />
        <ul class="info">
        	<li><span>Tel:</span>(57) (1) 530 08 36</li>
        	<li><span>Mail:</span> info@signumconsulting.com.co</li>
        	<li><span>Dirección:</span> Cra 8 N° 80 - 54 Oficinas 304 -305 Bogotá - Colombia </li>
        </ul>
        
        <h2>Redes sociales</h2>
        <hr style="margin-bottom:30px;" />
		<div class="redes">
        	<a href="http://www.linkedin.com/pub/signum-consulting/64/8a8/7b3" title="Linkedin" target="_blank" ><img src="img/046.png" align="left" /></a>
        	<a href="https://twitter.com/info_signum" title="Twitter" target="_blank" ><img src="img/047.png" align="left" /></a>
        </div>
    </div>
    
    <div class="clear"></div>
		
    
    <div class="clear"></div>

</div>


<div class="clear"></div>
<?php include "footer.php" ?>
</body>
</html>