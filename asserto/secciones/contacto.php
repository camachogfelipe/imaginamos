<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.: ASSERTO :.</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="palabras clave" lang="es" />
<meta name="Description" content="texto empresarial" lang="es" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=960, maximum-scale=2" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<link rel="stylesheet" type="text/css" href="assets/css/asserto.css" />

</head>
<body>

 	<div id="loader"><div id="progress"></div></div>
 
  <?php include("header.php"); ?>
  <?php $imagen = DbHandler::GetAll("SELECT * FROM imagen_contactenos")?>

  <div class="interna">
    <div class="con-interna">
    	<div class="mg-interna">
      
      	<div class="con-main-img-contact">
        	<div class="main-img-contact"><img src="admin/modules/contactenos/imagenes/<?php echo $imagen[0]["imagen"];?>" alt=""></div>
          <div class="over-main-img-contact"></div>
          <div class="tx-main-img-contact">Contáctenos</div>
        </div>

        <div style="width:600px; height:260px; padding:0; float:right; margin:20px 0;">
        
        	<form id="form-contact" action="secciones/mail.php" method="post">
            <fieldset>
            	<input name ="nombre" placeholder="Nombre..." type="text" class="campo-con1 validate[required]">
              <input name="ciudad" placeholder="Ciudad..." type="text" class="campo-con2 validate[required]">
            </fieldset>
            <fieldset>
            	<input name="correo" placeholder="Correo electrónico..." type="text" class="campo-con3 validate[required, custom[email]]">
            </fieldset>
            <fieldset>
            	<textarea name ="comentario" placeholder="Comentario..." class="validate[required]"></textarea>
            	<input name ="telefono" placeholder="Teléfono..." type="text" class="campo-con4 validate[required, custom[phone]]">
              <input name="empresa" placeholder="Empresa..." type="text" class="campo-con5">
            </fieldset>
            <fieldset>
              <input type="submit" value="Enviar" class="submit">
            </fieldset>
          </form>
        	
        </div>
        

    	</div>
    </div>
  </div>

	<?php include("footer.php"); ?>

</body>
</html>