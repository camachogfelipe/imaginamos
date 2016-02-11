<?php require_once('class/class_pintar.php'); 
$obj2 = new Pintar();
$result = $obj2->Pintarnovedadmodal($_GET['id']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>.: TECNOSALUD :.</title>
<meta name="viewport" content="width=1008, maximum-scale=2" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/tecnosalud.css" rel="stylesheet" />

</head>
<body class="body-modal">


	<div class="con-modal">
            <h3><?php echo utf8_encode($result[0]['novedad_title']) ?></h3>
        <h4><?php 
            $pizza = $result[0]['novedad_fecha'];
            $piece = explode("-",$pizza);
            echo $piece[2]."/".$piece[1]."/".$piece[0]; 
            
            ?> 
        </h4>
    <img src="cms/modules/novedades/files/big/<?php echo $result[0]['novedad_image']?>" width="360" height="250" alt="" />
    <div class="scroll-modal">
        <p><?php echo nl2br(utf8_encode($result[0]['novedad_texto']))?></p>
    	</div>
  </div>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
      $('.scroll-modal').jScrollPane();
    });
  </script>


</body>
</html>