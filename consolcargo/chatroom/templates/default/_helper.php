<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    	<html>
        <head>
        <title>-- Chat ConsolCargo --</title>
        <!--[if IE 9]>
        	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
        <![endif]-->
        <!--[if lt IE 9]>
        	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
        <![endif]-->
        <meta name="viewport" content="width=device-width, target-densityDpi=device-dpi, initial-scale=1, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="icon" type="image/x-icon" href="<?php echo  $CONFIG['chatroomUrl'] ?>assets/favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo  $CONFIG['chatroomUrl'] ?>assets/favicon.ico">
        <link type="text/css" rel="stylesheet" href="<?php echo  $CONFIG['chatroomUrl'] ?>assets/assets/css/consolcargo.css">
        <link type="text/css" rel="stylesheet" href="templates/<?php echo $CONFIG['template'];?>/style.css">
        <style type="text/css">
.main {
	width: 90%;
	margin: 0 auto;
	margin-top: 5%;
}

.loginContainer
{
	margin: 0 0 0 0; 
	padding: 20px 10px 0px 10px; 
	border: 0px solid #84B2DE;
	height: 530px;
	width: 800px;
	margin: 0 auto;
}

.loginLeft
{
	margin: 10px 0 0 0; 
	padding: 2px 2px 2px 2px; 
	height: 380px !important;
	height: 428px;
	width: 528px;
	text-align: left;
	display: inline;
	float: left;
}

.loginRight
{
	margin: 10px 0 0 0; 
	padding: 2px 2px 2px 2px; 
	margin-bottom: 20px; 
	border: 0px solid #84B2DE;
	height: 530px;
	width: 260px;
	text-align: center;
	display: inline;
	float: right;
}

.loginSubmit
{
	height: 24px;
	width: 140px;
	color: #FFFFFF;
	cursor: pointer;
	font-weight: bold;
	background-image: url('templates/<?php echo $CONFIG['template'];?>/images/loginbutton.gif');
	background-repeat: no-repeat;
}

.loginInput
{
	height: 14px;
	width: 140px;
	border: 1px solid #CCCCCC;
	
	-moz-border-radius: 5px;
	border-radius: 5px;	
}

.loginSelect
{
	height: 20px;
	width: 140px;
	border: 1px solid #CCCCCC;
	
	-moz-border-radius: 5px;
	border-radius: 5px;		
}

.loginUserTable
{
	text-align: left; 
	color: #000000;
	width: 100%;	
}

.loginUserTableHeader
{ 
	padding: 2px 2px 2px 14px; 
	background: #033566;
	font-weight: bold;
	font-size: 13px;
	height: 20px;
	color: #FFFFFF;
	font-family: 'Pt-B';
	font-size: 1.8em;
	line-height: 1;
	padding: 0.2em 0.8em;	
}

.loginUserLatestNews
{
	color: #000000;
	min-height: 100px;
	text-align: justify;
}

.copyright
{
	padding-top:50px;
	text-align: center;
	color: #999999;
	font-size: 12px;
}

.copyright A:link {text-decoration: none; color: #84B2DE;}
.copyright A:visited {text-decoration: none; color: #84B2DE;}
.copyright A:active {text-decoration: none; color: #84B2DE;}
.copyright A:hover {text-decoration: underline; color: #84B2DE;}

.link A:link {text-decoration: none; color: #999999;}
.link A:visited {text-decoration: none; color: #999999;}
.link A:active {text-decoration: none; color: #999999;}
.link A:hover {text-decoration: underline; color: #999999;}

</style>
<title>-- Chat ConsolCargo --</title>
</head>
<body id="body" class="body">
<div class="main">
<img src='<?php echo  $CONFIG['chatroomUrl'] ?>assets/assets/img/header-logo.png' />
<p>&nbsp;</p><h1 class="loginUserTableHeader">Bienvenido a ConsolCargo.</h1>
<div class="loginUserLatestNews">¿No ha encontrado lo que busca? Consolcargo S.A.S tiene un equipo humano a su disposición, el cual puede contactar mediante nuestro chat o también puede consultarnos mediante nuestro formulario de contacto, haciendo click <a  onclick="link()" href="#" id="link">aquí</a>.<br><br>Nuestro horario de atención es de 8 a.m. a 12:30 a.m. y 1:30 p.m. a 5:30 p.m.</div>
<h3>Gracias por visitarnos...!<h3>
<script type="text/javascript">
    function link (){
        // parent.window.location = "#contacto";
        window.opener.location = "../secciones/contacto";
        window.close();
        return false;
    }
</script>
</body>
</html>
          

