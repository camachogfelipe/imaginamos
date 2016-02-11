<!DOCTYPE html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <title>PLATAMÓVIL</title>
      
    <meta name="keywords" content="Palabras clave" />
    <meta name="description" content="Texto empresarial o descripción">
    <meta name="author" content="Diseño web: imaginamos.com">
    <meta name="robots" content="all" />
    <meta name="date" content="2012" />
    
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />    
   <link href="css/idearama.css" rel="stylesheet" type="text/css">
     <!--menulateral-->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/botones.js"></script>
	<script type="text/javascript" src="js/menu-2.js"></script>
    
     <!--JQUERY-->
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"> </script>
    <!-- detalles -->
    <link href="css/detalles.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script> 
    <!--header -->
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/header.js"> </script> 
    <!--footer -->
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <!--menu -->
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/menu.js"> </script> 
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script> 

</head>

<body>

<?php include ('header.php'); ?>
<?php include ('menu.php'); ?>

<div class="detallesWrapper">
	<div class="migasVolverBox">
    	<div class="migasWrapper">
        	<div class="migasLeft"></div>
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Cómo terminar la cuenta Platamóvil?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft" style="width:100%;">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Cómo terminar la</strong><br /> cuenta Platamóvil?</div>
       </div>
       <div class="textosBox">Según como lo indica el reglamento de la cuenta, usted podrá terminar su cuenta Platamóvil en cualquier momento. Para dar por terminada su cuenta, siga estos pasos:<br /><br />

<span class="destacado"><strong>1.	</strong>Consulte el saldo de su cuenta.</span><br />

<span class="destacado"><strong>2.	</strong>Retire la totalidad del saldo a través de cualquiera de los medios que están a  su disposición (efectivo, cheque, transferencia). Si retira en efectivo, recuerde que debe dejar en la cuenta el costo de la transacción de retiro en efectivo; simplemente al saldo total réstele el valor de la comisión por retiro y el resultado será el valor total a retirar.</span><br />

<span class="destacado"><strong>3.	</strong>Consulte el saldo de nuevo y verifique que quedó en $0.</span><br />

<span class="destacado"><strong>4.	</strong>Comuníquese con la Línea Platamóvil #269 desde su celular, en Bogotá al 743 1810 o a nivel nacional al 01-8000-975-282. El Ejecutivo de la Línea Platamóvil realizará algunas preguntas para validar su identidad. Seguido de esto, dirigirá la llamada al área de Soporte Operativo de Mi plata S.A., quien le realizará nuevas preguntas de seguridad y luego procederá a terminar la cuenta, informándole sobre el resultado de la operación. </span><br />



 </div>
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
