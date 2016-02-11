<?php require_once("class/pintar.php");
require_once("class.validar.php");
$obj = new Pintar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Play Date</title>
<meta name="viewport" content="width=1024, maximum-scale=2">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<link href="css/playdate.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type='text/javascript' src='js/fullcalendar.js'></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
<script type='text/javascript'>


	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: '',
				center: 'title',
				right: 'prev,next '
			},
			editable: true,
			events: [
                                {
                                 title: 'All Day Event',
                                 start: new Date(y, m, 1)   
                                    
                                },
                                
				<?php 
                                 $result3 = $obj->Eventos();
                                 for ($l = 0; $l < count($result3); $l++) {
                                        
                                    $string = $result3[$l]['fecha_evento'];
                                    
                                ?>
                                {
                                     
                                     
					title: '<?php echo $result3[$l]['titulo_evento']; ?>',
					start: new Date(<?php echo $string[0].$string[1].$string[2].$string[3];?>,<?php echo $string[5].$string[6] ?> ,<?php echo $string[8].$string[9] ?>),
					
					url: '<?php echo $result3[$l]['url_evento']; ?>'
				},
                                <?php 
                                 }
                                ?>
                                
				
			]
                        
		});
                
		
	});

</script>
<script type="text/javascript" src="js/playdate.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
</head>

<body>
<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>
<div class="main">
  <div class="eventos-titulo">eventos</div>
  <div id='calendar'></div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
