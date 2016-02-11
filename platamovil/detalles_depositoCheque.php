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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >Depósito en Cheque</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Depósito</strong><br /> en Cheque</div>
       </div>
       <div class="textosBox"><span class="letraAzul">Puede realizar un depósito de cheque en su cuenta Platamóvil así:</span><br />
<br />

Si su cuenta es Simplificada, acérquese a la sede principal de Mi Plata S.A. ubicada en Bogotá en la dirección Calle 93 # 11A – 11; allí podrá efectuar el depósito y entregar el cheque diligenciando el comprobante de depósito.<br /><br />
Si su cuenta es Típica realice el depósito así:<br /><br />
<span class="destacado"><strong>1.	</strong>Acérquese a cualquier sucursal del Banco recaudador de Mi Plata S.A. y realice un depósito en cheque en la cuenta corriente que se describe a continuación:<br /><br />
<strong>Banco:	</strong>	Bancolombia<br />
<strong>Titular:</strong>		Mi Plata S.A. Compañía de Financiamiento<br />
<strong>Nit:</strong>		900202428-0<br />
<strong>Cuenta #:</strong>	4081757292<br />
<strong>Convenio #:</strong>	42285<br />
<strong>Referencia #:</strong>	Escriba su número celular con el que identifica su cuenta Platamóvil.</span><br />

<span class="destacado"><strong>2.	</strong>Valide y conserve la información del comprobante del depósito del cheque que le entrega la Entidad.</span><br />

<span class="destacado"><strong>3.	</strong>El depósito se abonará en su cuenta en un periodo máximo de cuatro días hábiles. Luego de este periodo, consulte los movimientos de su cuenta y compruebe que el depósito se realizó correctamente.</span><br />


Para conocer la tarifa de esta transacción, consulte: <br /><br />
<a href=<?php echo selecionOrigen() . '.php?v=' . selecionOrigen() . '&t1=3&t2=1'; ?> class="link">Operaciones, Límites y tarifas</a><br />

Siga estas recomendaciones de seguridad cada vez que realice un depósito en cheque:<br /><br />
- Realice el depósito solo en las sucursales del Banco recaudador.<br />
- Siga las recomendaciones de seguridad que le informa el Banco en el cuál realiza el depósito.

 </div>
    </div>
	
</div>

<?php include ('footer.php'); ?>

</body>
</html>
