<?php
session_start();
ini_set('display_errors','On');

//Evita presentar contenidos sin el login debido
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

        <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="http://imaginamos.com" target="_blank" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

      </div> <!--// End inner -->
    </div> <!--// End content -->
  </body>
</html>