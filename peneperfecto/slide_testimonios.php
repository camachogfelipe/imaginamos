<?
    include_once './php/clases.php';
    
    $comentarioDAO = new comentarioDAO();
    $comentarios = $comentarioDAO->gets(1);
    $total = $comentarioDAO->total(1);
    
    $ventaDAO = new ventaDAO();
    
    $p = 0;
    if(isset($_GET['p']))
        $p= $_GET['p'];
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Easy Slider jQuery Plugin Demo</title>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />    

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){	

			$("#slider").easySlider({

				auto: true, 

				continuous: true,

				numeric: true

			});

		});	

	</script>

	

<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />	

	

<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
</head>

<body>



<div id="container">







  <div id="content">

	

		<div id="slider" style="height:auto !important;">

			<ul>				
                            <? for ($p = 0; $p < ($total/4); $p++) { ?>
                            <li>  
                                <? for ($i = $p*4; $i < (($p*4)+4) && isset ($comentarios[$i]); $i++) {
                                    $comentario = $comentarios[$i];
                                    $venta = $ventaDAO->getById($comentario->getventa());
                                ?>
                              <div id="bar_moddestacados">
                                  <div id="fechadest"><?=$comentario->getfecha() ?></div>
                                  <div id="nombre_dest"><?=$venta->getnombre().' '.$venta->getapellido() ?> </div>
                              </div>
                                <div id="text_moddestacados"><?=$comentario->getcomentario() ?></div>
                                <?
                                }
                                ?>
                            </li>
                            <? } ?>
   <!--                         
				<li>
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				</li>

				<li>
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				</li>

				<li>
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				</li>

				<li>
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				
				
				
				 <div id="bar_moddestacados">
		  <div id="fechadest">22/12/2011</div>
		  
		  <div id="nombre_dest">Mateo Escobar </div>
		  
		  
		  </div>
		  <div id="text_moddestacados">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit luctus eros, ac fermentum purus facilisis at. Quisque erat nunc, pulvinar sit amet elementum vel, suscipit congue magna. Donec nibh ligula, pretium mollis tempor a, placerat porta nulla.   Aenean et nisi et sapien rutrum gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi varius magna vitae sem adipiscing vel dignissim ipsum lobortis.  </div>
				
				
				
				
				
				
				
				
				</li>			
-->
			</ul>

		</div>

			



	

</div>

<div id="envcajabtvertodos">
 <div id="cajabtvertodos"><a href="comentarios.php">&nbsp;</a></div>
</div>

</div>







</body>

</html>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">

</script>

<script type="text/javascript">

_uacct = "UA-783567-1";

urchinTracker();

</script>