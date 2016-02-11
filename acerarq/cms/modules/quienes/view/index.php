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
    <script type="text/javascript">
    $(document).ready(function(){
        
        $("#submitForm").click(function(){
            
            var archivo = $("#img").val();
            if(archivo != ''){
                if( !archivo.match(/.(jpg)|(JPG)|(PNG)|(png)$/) ){
                    showError('Ext. archivo invalida',8000);
                    return false;
                }
            }
            $('#forminterno').submit();
            
            
        });
    });
</script>

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
    $('#descripcion').limit('1500','.descripcion');
    $('#slogan').limit('139','.slogan');
</script>
<script type="text/javascript" src="../../../../assets/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "exact",
        elements :"texto",
        theme : "advanced",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
        
        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,code,|,forecolor|,bullist,numlist,", 
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
        
        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",
        
        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",
        
        // Style formats
        style_formats : [
            {title : 'Bold text', inline : 'b'},
            {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
            {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
            {title : 'Example 1', inline : 'span', classes : 'example1'},
            {title : 'Example 2', inline : 'span', classes : 'example2'},
            {title : 'Table styles'},
            {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],
        
        
        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });  
</script>