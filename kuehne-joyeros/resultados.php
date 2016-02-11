
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <title>KUEHNE - JOYEROS</title>
    
    <meta name="author" content="Gustavo Vera Gomez" />
    <meta name="Copyright" content="" />
    
    <meta name="DC.title" content=" " />
    <meta name="DC.subject" content=" " />
    <meta name="DC.creator" content="" />
    
    <link href="styles/all.css" rel="stylesheet" type="text/css" />
    <link href="styles/reset.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
    
    
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript" src="scripts/jquery.sudoSlider.js"></script>	
		

		
  </head>

  <?php include('header.php'); ?>
  
<body>

<div id="loader"><div id="progress"></div></div>
<div class="container">
  
<?php if($_GET['buscar'] != ""){ ?>
	<div class="home"><?php selectProductoBusqueda($_GET['buscar']); ?></div>
<?php } ?> 

<?php if($_REQUEST['desde'] != "" && $_REQUEST['hasta'] != ""){ ?>
    <div class="home"><?php selectProductoFiltro($_REQUEST['desde'],$_REQUEST['hasta']); ?></div>
 <?php } ?> 
 
<?php include('footer.php'); ?>

</div>	


</body>
</html>
