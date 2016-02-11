<?php
if(!isset($_SESSION['id'])) :
	echo "<script>alert('Acceso no autorizado');</script>";
	header('Location: index.php');
else: 
?>
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
<style type="text/css">.sw-tx {margin-top:20px;} .con-login {display:none;}</style>

</head>
<body>

 	<div id="loader"><div id="progress"></div></div>
 
  <?php include("header.php"); ?>

  <div class="interna">
    <div class="con-interna">
    	<div class="mg-interna">
        <h1 class="blue sw-tx sw-tx-2">
        	Bienvenido, usuario...
        	<a class="logout-bt" href="index.php?seccion=salir">Salir</a>
          <a class="modals-act cambio-bt" href="#modal-cam">Cambiar contraseña</a>  
        </h1>
        <div class="con-escribe con-comments-ov">
        	<div class="escribe">
          	<h1 class="blue sw-tx">Archivos adjuntos</h1>
            <div class="con-archivos">
              <div class="scroll-wrap">
                <ul class="list-docs">
                	<?php
									require_once("admin/core/class/db.class.php");
									require_once("admin/modules/class/ClassFile.class.php");
									$archivos = DbHandler::GetAll("SELECT * FROM archivos WHERE id_usuario='".$_SESSION['id']."' ORDER BY id DESC");
									$comentarios = DbHandler::GetAll("SELECT	comentarios.*, titular.nombre AS usuario, 
																														admin.nombre AS administrador 
																										FROM		comentarios 
																										INNER JOIN usuarios AS titular ON titular.id=comentarios.id_usuario 
																										INNER JOIN usuarios AS admin ON admin.id=comentarios.id_usuario 
																										WHERE id_usuario='".$_SESSION['id']."' OR parent='".$_SESSION['id']."' 
																										ORDER BY comentarios.fecha DESC");
									if(!empty($archivos)) :
										foreach($archivos as $archivo) :
									?>
                  <!--Archivo-->
                  <li>
                    <a href="files/<?= $archivo['nombre'] ?>" target="_blank">
                      <span class="icon-3"></span>
                      <h1><?= $archivo['nombre'] ?></h1>
                    </a>
                  </li>
                  <?php
										endforeach;
									endif;
									?>
                </ul>
              </div>
            </div>
          </div>
          <div class="form-bg"></div>
        </div>
        <div class="con-comments con-comments-ov">
        	<div class="comments">
            <div class="scroll-wrap">
              <ul class="lista-com">
              	<?php
                if(!empty($comentarios)) :
									foreach($comentarios as $comentario) :
								?>
              	<!--Post-->
              	<li>
                	<div class="post">
                		<h1><?= formatdate($comentario['fecha']) ?></h1>
                  	<h2><?php
											if($comentario['parent'] != 0) echo $comentario['administrador'];
											else echo $comentario['usuario'];
										?>:</h2>
                  	<p><?= nl2br($comentario['comentario']) ?></p>
                  </div>
                </li>
                <?php
									endforeach;
	              endif;
								?>
              </ul>
            </div>
          </div>
          <div class="form-bg"></div>
        </div>
        <div class="con-escribe con-comments-ov">
        	<div class="escribe">
          	<h1 class="blue sw-tx">Dejar un mensaje</h1>
            <form action="index.php?seccion=comentar" enctype="multipart/form-data" class="user-form" method="post">
            	<div class="campo-user"><textarea name="comentario" placeholder="Escribe aquí tu mensaje..."></textarea></div>
              <div class="campo-user">
              	<input type="file" name="file" value="Adjuntar">
                <input class="submit" type="submit" value="Enviar">
              </div>
            </form>
          </div>
          <div class="form-bg"></div>
        </div>
    	</div>
    </div>
  </div>

	<?php include("footer.php"); ?>

</body>
</html>
<?php endif; ?>
<?php
function formatdate($fecha) {
	$fecha = explode("-", $fecha);
	switch($fecha[1]) :
		case '01' : $fecha[1] = "Ene"; break;
		case '02' : $fecha[1] = "Feb"; break;
		case '03' : $fecha[1] = "Mar"; break;
		case '04' : $fecha[1] = "Abr"; break;
		case '05' : $fecha[1] = "May"; break;
		case '06' : $fecha[1] = "Jun"; break;
		case '07' : $fecha[1] = "Jul"; break;
		case '08' : $fecha[1] = "Ago"; break;
		case '09' : $fecha[1] = "Sep"; break;
		case '10' : $fecha[1] = "Oct"; break;
		case '11' : $fecha[1] = "Nov"; break;
		case '12' : $fecha[1] = "Dic"; break;
	endswitch;
	return $fecha[2]."/".$fecha[1]."/".$fecha[0];
}
?>