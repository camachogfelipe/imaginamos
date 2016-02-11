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

</head>

<body>

<?php include ('header.php'); ?>
<?php include ('menu.php'); ?>

<div class="detallesWrapper">
	<div class="migasVolverBox">
    	<div class="migasWrapper">
        	<div class="migasLeft"></div>
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >Cuenta Simplificada Platamóvil</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Simplificada Platamóvil,</strong><br /> Fácil de abrir y de usar</div>
       </div>
       <div class="textosBox">
<span class="destacado">-	Esta cuenta sólo se abre a persona naturales.</span><br />
<span class="destacado">-	Sólo se requiere la información de su cédula y una breve información personal para abrir su cuenta.</span><br />
<span class="destacado">-	Se abre fácilmente a través de los Ejecutivos de Ventas o de la Línea Platamóvil #269.</span><br />
<span class="destacado">-	La puede marcar como exenta del impuesto GMF, hoy 4 X 1000.</span><br />
<span class="destacado">-	El saldo máximo que puede tener en la cuenta son 8 salarios mínimos mensuales (SMLMV) es decir, $4.533.600 (para el año 2012).</span><br />
<span class="destacado">-	El monto máximo que puede realizar en operaciones débito acumuladas al mes es de 2 salarios mínimos mensuales (SMLMV), es decir, $1.133.400 (para el año 2012).</span><br />
<span class="destacado">-	Sólo puede haber una cuenta por cliente, con un solo titular. </span><br /><br>
<span class="letraAzul">Para mayor información sobre las cuentas de ahorro de apertura simplificada (CATAS) consulte la Circular Básica Jurídica ya que se le aplican diferentes normas, le sugerimos revisar las siguientes: </span><br><br>
•	Título I, Capítulo Décimo Primero de la Circular Básica Jurídica (al cual se le hicieron varias modificaciones por parte de la Circular Externa 053 de 2009)<br><br>
•	Título II, Capítulo Cuarto, numeral 6 de la Circular Básica jurídica  (Adicionado por la Circular Externa 053 de 2009 y modificado por la Circular Externa 022 de 2010)<br><br>
•	Título III, Capítulo Noveno de la Circular Básica Jurídica relativa a servicios a través de corresponsales y riesgo operativo.<br><br>

<a href="http://www.superfinanciera.gov.co/Normativa/NormasyReglamentaciones/cir007.htm" class="link">Link a la Circular Básica Jurídica</a>

 </div>
    </div>
	
  <div class="mainContetBoxRight">
  
  <div class="imagenDetalles"><img src="imagenes/tabsComercio/contenido19.png" width="424" height="394"></div>
        <div class="descargarPdfBox">
        	<div class="titulo">Descargar PDF</div>
            <a class="descargar" href="PDF/Reglamento Simplificada Platamovil.pdf">Reglamento Simplificada Platamóvil.pdf<br /><span>284KB</span></a>
        </div>
        
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>
