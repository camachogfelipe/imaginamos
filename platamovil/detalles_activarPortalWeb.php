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
        	<div class="migasCenter"><a class="migaslink" href=<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?> id="seccion"><?php echo  ucwords(selecionOrigen()) ; ?></a><span class="arrow"></span><a class="migaslinkS" >¿Cómo activar el Portal Web Platamóvil?</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>
    
    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>¿Cómo activar el</strong><br /> Portal Web Platamóvil?</div>
       </div>
       <div class="textosBox">
       <span class="letraAzul">En el Portal Web Platamóvil http://www.platamovil.co puede conocer toda la información sobre la cuenta Platamóvil, los canales de atención y servicio, y también podrá realizar operaciones de consulta y administración de su cuenta, como consultas de saldo y de extractos.</span><br /><br />


<span class="destacado">Cuando se cree su cuenta de ahorros Platamóvil, recibirá de manera automática un correo electrónico en la dirección electrónica que registró al momento de la vinculación.</span><br />
<span class="destacado">En ese correo recibirá todas las instrucciones para acceder por primera vez al portal, en ese momento el sistema le solicitará que cambie la clave y registre su clave personal con la que en adelante accederá al portal.</span> <br />
<span class="destacado">Si el proceso de registro de la nueva clave es satisfactorio, el sistema le pedirá que seleccione una imagen de seguridad, con la cuál usted autorizará algunas operaciones.</span><br />
Recuerde que su clave es personal y con ella accederá al portal web transaccional para realizar consultas y solicitar su dinero a través de cheque o transferencia, por favor siga estas recomendaciones de seguridad: <br /><br />
- Cuando acceda al Portal WEB Transaccional Platamóvil, no lo haga desde computadores públicos ni conectado a redes públicas.<br /><br />
- Cree una clave difícil de identificar y cámbiela frecuentemente, evite usar números relacionados con su fecha de nacimiento o documento de identidad.<br /><br />
- Memorice la clave, no la escriba, ni la guarde en ningún lugar. <br /><br />
- No permita que terceros conozcan o vean su clave al digitarla en el computador.<br /><br />
- Ignore los mensajes que lleguen a su correo electrónico, en los que le soliciten su información personal, su clave o le pidan descargar aplicaciones en el computador.

 </div>
    </div>
	
  
</div>

<?php include ('footer.php'); ?>

</body>
</html>
