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
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
                $('.enviar').click(function(){
                $.ajax({
                url: "ajax_1.php",
                type: "POST",
                dataType: "json",
                data: { nombrecliente: $("#nombre").val(),celularcliente: $("#celular").val(),idplan: $("#idplan").val()},
                success: function( data ) {
                  if (data.respuesta == "ok") {
                        alert("Se ha enviado la solicitud");
                        //window.location.reload();
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
                    return false;
                });
                
                
            });
            
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

                         }
           function reload2(){
                document.getElementById('table').innerHTML = '';
           }              
        </script>
    </head>
    <body onload="setInterval('reload()',1000);setInterval('reload2()',5000);">
        <?php include 'header.php';?>
         <div class="reportes2">
            <div class="con-reportes2">
                <div class="contenedor-info2 nav-header">
                    <h2>Ventas</h2>
                    <div style="width: 480px;height: 250px;border: 1px solid #888;float: left;margin-right: 20px;margin-left: 100px;">
                        <div style="width: 100%;float: left;margin-top: 50px;">
                            <label style="margin-left: 50px;">Nombre:</label>
                            <input type="text" name="nombre" id="nombre"/></div>
                        <div style="width: 100%;float: left;">
                            <label style="margin-left: 50px;">Celular:
                            </label><input type="text" name="celular" id="celular"/>
                        </div>
                        <div style="width: 100%;float: left;"><label style="margin-left: 50px;">Plan:</label>
                            <select name='plan' id="idplan" style="width: 160px;">
                                <option value="seleccione">--Seleccione uno--</option>
                                <option value="1">Plan 10</option>
                                <option value="2">Plan 20</option>
                                <option value="3">Plan 50</option>
                                <option value="4">Plan 200</option>
                            </select>
                        </div>
                        <div style="width: 100%;float: left;margin-top: 20px;">
                            <input type="button"  value="Enviar" class='btn-primary enviar getdata' style="margin-left: 350px;"/>
                        </div>
                    </div> 
                        
                    
                    <div id="table" style="width: 350px;height: 250px;border: 1px solid #888;float: left;overflow:auto ;background-color: white;">
                        
                        
                       
                    </div>
                    </div>
                </div>
                
            </div>
    </body>
</html>
