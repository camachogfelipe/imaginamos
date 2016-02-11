<?php
session_start();
ini_set('display_errors','On');

include "../../../security/secure.php";
include "../../../core/class/db.class.php";
include "../../class/plGeneral.fnc.php";
include "../../class/PhpThumbFactory.class.php";
include "../../class/ClassFile.class.php";


//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$seccionInclude = "menu.php";

if( isset($_GET["seccion"])){
  $seccionInclude = $_GET["seccion"].".php";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CMS imaginamos.com - Todos los derechos reservados</title>
    <!-- Link shortcut icon-->
    <link rel="shortcut icon" type="image/ico" href="../images/favicon2.ico"/>
    <!--External Files-->
    <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
    <!--<link href="../css/content.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" type="text/css" href="../../../noty/css/jquery.noty.css"/>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
  </head>

  <body class="dashborad">
    <div id="alertMessage" class="error"></div>
    <!-- Header -->
    <div id="header">
      <div id="account_info">
        <?php include("../../../menu/administrator.php"); ?>
      </div>
    </div><!-- End Header -->
    <div id="shadowhead"></div>

    <div id="left_menu">
      <ul id="main_menu" class="main_menu">
        <?php include("../../../menu/index.php"); ?>
      </ul>
    </div>

    <div id="content">
      <div class="inner">
        <div class="topcolumn">
          <div class="logo"></div>
          <ul id="shortcut">
            <?php include("../../../menu/icons.php"); ?>
          </ul>
        </div>
        <div class="clear"></div>

        <!-- full width -->
        <div class="widget">
          <?php include $seccionInclude;?>
        </div><!-- End full width -->

        <!-- clear fix -->
        <div class="clear"></div>

        <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

      </div> <!--// End inner -->
    </div> <!--// End content -->
  </body>
</html>
<script type="text/javascript" language="javascript">
    $('#titu1').limit('18','.titu1');
    $('#titu2').limit('18','.titu2');
    $('#titu3').limit('18','.titu3');
    $('#titu4').limit('18','.titu4');
    $('#titu5').limit('18','.titu5');
    $('#texto1').limit('190','.texto1');
    $('#texto2').limit('190','.texto2');
    $('#texto3').limit('197','.texto3');
    $('#texto4').limit('197','.texto4');
    $('#texto5').limit('197','.texto5');
</script>