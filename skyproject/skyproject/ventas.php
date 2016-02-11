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
        <script  type="text/javascript" src="js/validCampoFranz.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
        <script>
            $(function(){
                //Para escribir solo numeros    
                $('#celular').validCampoFranz('0123456789');    
            });
            $(document).ready(function(){
                $('.enviar').click(function(){
				
                  //  event.preventDefault(); 
                    var tc=parseFloat($("#tCred").val())
                    var ct=parseFloat('13.99');
                   // alert(tc+'>='+ct);
                    if (tc>=ct){
                        $.ajax({
                            url: "ajax_1.php",
                            type: "POST",
                            dataType: "json",
                            data: { nombrecliente: $("#nombre").val(),celularcliente: $("#celular").val(),idplan: $("#idplan").val()},
                            success: function( data ) {
                                if (data.respuesta == "ok") {
                                    alert("su solicitud será atendida en los próximos 3 min… ");
                                    window.location.reload();
                                }else if(data.respuesta == "empty"){
                                    alert("Los campos estan vacios");
                                }else{
                                    alert("El usuario no ha podido ser eliminado");
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown){
                                // Si se presento algun error, mostramos la descripcion
                                alert("Error\nAlgo ha salido mal. Por favor inténtalo de nuevo en unos minutos -> " + textStatus);
                            }
                        });

                        $("#nombre").val('');
                        $("#celular").val('');

                    }else{
                        alert("No tiene saldo porfavor recargue");
                    }


                        return false;
                    });
                
                
            });
            
            function creditos(){
    
                $.ajax({
                    url: 'ajax_4.php',
                    type:'POST',
                    dataType: 'json',
                    success: function(output_string){
                        $('#creditos label a').text(output_string);
                        //document.getElementById('table').innerHTML = '';
                    } // End of success function of ajax form
                }); // End of ajax call
            }
            
            function reload(){
    
                $.ajax({
                    url: 'ajax_2.php',
                    type:'POST',
                    dataType: 'json',
                    success: function(output_string){
                        $('#table').append(output_string);
                        //document.getElementById('table').innerHTML = '';
                    } // End of success function of ajax form
                }); // End of ajax call    

                         
                $.ajax({
                    url: 'ajax_3.php',
                    type:'POST',
                    dataType: 'json',
                    success: function(output_string){
                        $('#table1').append(output_string);
                        //document.getElementById('table').innerHTML = '';
                    } // End of success function of ajax form
                }); // End of ajax call    

            }
            function reload2(){
                document.getElementById('table').innerHTML = '';
            }           
            function reload3(){
                document.getElementById('table1').innerHTML = '';                
            }
        </script>
    </head>
    <body onload="setInterval('reload()',3500);setInterval('reload2()',3500);setInterval('reload3()',3500)">
        <?php include 'header.php'; ?>
        <div class="reportes2">
            <div class="con-reportes2">
                <!--<div class="contenedor-info2 nav-header">-->
                    <h2 id="creditos">Ventas</h2>
                    <table border="0">
                        <tr>
                            <td>
                                <table width="300px" border="0">
                                    <tr>
                                        <td><label>Nombre:</label></td>
                                        <td><input type="text" name="nombre" id="nombre"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Tel&#233;fono:</label></td>
                                        <td><input type="text" name="celular" id="celular"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Plan:</label></td>
                                        <td><select name='plan' id="idplan" style="width: 220px;">
                                                <option value="1">13.99</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="button"  value="Enviar" class='btn-primary enviar getdata' style="float:right;"/></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="5%">&nbsp;
                                
                            </td>
                            <td valign="top">
                                    <center><b>Solicitudes Atendidas</b></center>
                                <div id="table1" style="width:518px;height: 200px;border: 1px solid #ddd;overflow:auto;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td width="5%">&nbsp;
                                
                            </td>
                            <td>
                                <center><b>Solicitudes Pendientes</b></center>
                                <div id="table" style="width:518px;height: 200px;border: 1px solid #ddd;overflow:auto ; ">
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    
                <!--</div>-->
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
