<?php
if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    $row = 1;
    $tipo = $_FILES['archivo']['type']; 
    $tamanio = $_FILES['archivo']['size']; 
    $archivotmp = $_FILES['archivo']['tmp_name'];
    $idtaladrado=$_REQUEST['idtaladrado'];
    
    $tb=0; $tm=0;
    $handle = fopen($archivotmp, "r"); //Coloca el nombre de tu archivo .csv que contiene los datos
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { //Lee toda una linea completa, e ingresa los datos en el array 'data'
       // print_r($data);
        if ($row>1){
            $num = count($data); //Cuenta cuantos campos contiene la linea (el array 'data')
            $sql="select * from porta_taladrado where ";
            $cadena = "INSERT INTO porta_taladrado(
                         idtaladrado,
                         ref,
                         diam_corte,
                         long_corte,	
                         long_total,	
                         diam_espigo,
                         inserto,
                         rosca,
                         valor
                         ) VALUES ( ". $idtaladrado.','; //Cambia los valores 'CampoX' por el nombre de tus campos de tu tabla y col�cales los necesarios
            for ($c=0; $c < $num; $c++) { //Aqu� va colocando los campos en la cadena, si aun no es el �ltimo campo, le agrega la coma (,) para separar los datos
                if ($c==($num-1))
                      $cadena = $cadena."'".  $data[$c] . "'";
                else
                      $cadena = $cadena."'".$data[$c] . "',";
                
                $dato[$c]=$data[$c];
                
                
            }
            $sql.=" idporta_taladrado='".$idtaladrado."' and
                 ref='".$dato[0]."' and
                 diam_corte='".$dato[1]."' and
                 long_corte='".$dato[2]."' and	
                 long_total='".$dato[3]."' and	
                 diam_espigo='".$dato[4]."' and
                 inserto='".$dato[5]."' and
                 rosca='".$dato[6]."'  ";
           
            //echo $sql."<br>"; 
            
            $db->doQuery($sql, 1);
            $cant = $db->rows;     
            $cadena = $cadena.");"; //Termina de armar la cadena para poder ser ejecutada
            //echo $cadena."<br>";  //Muestra la cadena para ejecutarse
            
            if ($cant==0){
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
<div class="header"><span><span class="ico gray window"></span>Carga de Porta Herramientas - Taladrado</span>
</div><!-- End header -->
<div class="content">
    <a class="uibutton icon normal answer" href="index.php?seccion=porta_taladrado&idtaladrado=<?php echo $_REQUEST["idtaladrado"] ?>">Porta Herramienta</a>
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Taladrado</h1></legend>

                <form method="post" action="" name="forminterno3" id="forminterno3" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $porta_taladrado["idporta_taladrado"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Desacargar Plantilla</label>
                        <a href="plantilla_porta_taladrado.csv" target="_blank">Descargar</a>
                        
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
                        <a id="submitForm3"  class="uibutton large">Guardar</a>
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
            ?><script>showSuccess('Información ingresada',8000)</script>
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
 <script type="text/javascript">
            $(document).ready(function(){              
                 $("#submitForm3").click(function(){
                     $('#forminterno3').submit();
                });
            });
        </script>