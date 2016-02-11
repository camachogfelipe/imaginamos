<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        reload();
        });
        </script>
        <script>
                      
            function reload(){
                //alert('Hola')
                $.ajax({
                    url: 'ajax_6.php',
                    type:'POST',
                    dataType: 'json',
                    success: function(output_string){
                        $('#table').append(output_string);
                        //document.getElementById('table').innerHTML = '';
                    } // End of success function of ajax form
                }); // End of ajax call    
            }
            function reload2(){
               // document.getElementById('table').innerHTML = '';
            }           
        </script>
                <style type="text/css">
             .btn-proceso {color:#ffffff; padding:2px; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); font-size: 12px; text-align: center; width: 92px; 
                          margin: 0 auto; margin-left: 10px ; 
                          background-color: #da4f49; background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f); 
                          background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f)); 
                          background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f); 
                          background-image: -o-linear-gradient(top, #ee5f5b, #bd362f); 
                          background-image: linear-gradient(to bottom, #ee5f5b, #bd362f); 
                          background-repeat: repeat-x; 
                          border-color: #bd362f #bd362f #802420; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); 
                          filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0); filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);}
        </style>
    </head>
    <body onload="setInterval('reload()',60000)">
        <?php include 'header.php'; ?>
        <div class="reportes2">
            <div class="con-reportes2">
                <div class="contenedor-info2 nav-header">
                    <h2 id="creditos">Trafico de Solicitudes</h2>
                    <table border="0">
                        <tr>
                            <td>
                                <div id="table" style="width:1000px;height:350px;overflow-y:auto ;">
                                </div>
                            </td>
                        </tr>
                    </table>
                      <div class="btn-proceso"><a href="ajax_10.php">En proceso</a></div>

                    
                </div>
            </div>

        </div>
        <div class="con-footer">
                <div class="cloud"></div>
                <div class="copy-footer">
                <p>&copy; 2013 <strong>SKYPROJECT</strong> - Todos los derechos reservados - Prohibida su
                reproducción parcial o total.</p>
                </div>
                <div class="copy-footer-2"><div class="footer-ahorranito"></div></div>
                </div>
    </body>
</html>
