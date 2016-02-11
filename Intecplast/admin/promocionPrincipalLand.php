<?php session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}
?>

<!doctype html>
<head>
  <title>.::Promociones</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Adición de Clases">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
<body>

	<script type="text/javascript" src="noty/js/jquery.noty.js"></script>

    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Promoción Destacada Correctamente!","layout":"center","type":"success","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>

</body>
</html>