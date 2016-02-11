<?php
if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    $row = 1;
    $tipo = $_FILES['archivo']['type']; 
    $tamanio = $_FILES['archivo']['size']; 
    $archivotmp = $_FILES['archivo']['tmp_name'];
    $tipo_inser=$_POST['idtipo_inserto'];
    $tb=0; $tm=0;
    $handle = fopen($archivotmp, "r"); //Coloca el nombre de tu archivo .csv que contiene los datos
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { //Lee toda una linea completa, e ingresa los datos en el array 'data'
       // print_r($data);
        if ($row>1){
            $num = count($data); //Cuenta cuantos campos contiene la linea (el array 'data')
            $sql="select * from producto_torneado where ";
            $cadena = "INSERT INTO producto_torneado(
                             idtipo_inserto,
                             idmateriales,
                             idgeometria,	
                             idangulo,	
                             idlongitud,
                             idespesor,
                             idradio,
                             idtipo_corte,
                             valor,
                             imagen) values("; //Cambia los valores 'CampoX' por el nombre de tus campos de tu tabla y colócales los necesarios
            for ($c=0; $c < $num; $c++) { //Aquí va colocando los campos en la cadena, si aun no es el último campo, le agrega la coma (,) para separar los datos
                if ($c==($num-1))
                      $cadena = $cadena."'".  $data[$c] . "'";
                else
                      $cadena = $cadena."'".$data[$c] . "',";
                
                $dato[$c]=$data[$c];
                
                
            }
            $sql.="idtipo_inserto='".$dato[0]."' and
                 idmateriales='".$dato[1]."' and
                 idgeometria='".$dato[2]."' and	
                 idangulo='".$dato[3]."' and	
                 idlongitud='".$dato[4]."' and
                 idespesor='".$dato[5]."' and
                 idradio='".$dato[6]."' and
                 idtipo_corte='".$dato[7]."' ";
           // echo $sql."<br>"; 
            $db->doQuery($sql, 1);
            $cant = $db->rows;     
            $cadena = $cadena.");"; //Termina de armar la cadena para poder ser ejecutada
            //echo $cadena."<br>";  //Muestra la cadena para ejecutarse
            if ($cat==0 and $tipo_inser==$dato[0]){
                $tb++;
                $db->doQuery($cadena, 2);   
            }else{
                $tm++;
                $data_no[]=$cadena;
            }
        }
        $row++;
    }

    fclose($handle);
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Carga de Portaherramientas</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Taladrado</h1></legend>

                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $producto_torneado["idproducto_torneado"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Desacargar Plantilla</label>
                        <a href="plantilla_porta_taladrado.csv" target="_blank">Descargar</a>
                        <br>   
                    </div>
                    <div class="section">                    
                        <label>Subir Archivo Plano (.csv)</label>
                        <div>
                            <input type="file" name="archivo" id="archivo" />
                            <input type="hidden" value="1" name="tipo" id="tipo">
                        </div>
                    </div> 
                    <div class="section">                    
                        <label>Resultado</label>
                        <div>
                            <?php
                             echo "Resgistros Satisfactorios:".$tb."<br>";
                             echo "Resgistros No subidos:".$tm."<br>";
                            ?>
                        </div>
                    </div> 
                    <br />
                    <div>
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
                    </div>
                </form>
            </fieldset>
        <?php// } else { 
            
            ?>
            <label></label><?php //} ?>
            <br/><br/><br/>
    </div>

</div>
<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?><script>showError('Faltan datos ',3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('InformaciÃ³n ingresada',8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos',8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        } elseif ($valor == 6) {
            ?><script>showError('Ya existe este codigo',8000)</script>
            <?php
        }
    }
}
?>