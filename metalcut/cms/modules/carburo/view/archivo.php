<?php
if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    $idportafolio_carburado_cab=$_REQUEST['idportafolio_carburado_cab'];
    //$ncolum=$_GET['ncolum'];
    $ncolum=!empty($_REQUEST['ncolum']) ? $_REQUEST['ncolum'] : null;
    $nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null;
   // echo "--------";
    $row = 1;
    $tipo = $_FILES['archivo']['type']; 
    $tamanio = $_FILES['archivo']['size']; 
    $archivotmp = $_FILES['archivo']['tmp_name'];
    
    
    $tb=0; $tm=0;
    $handle = fopen($archivotmp, "r"); //Coloca el nombre de tu archivo .csv que contiene los datos
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { //Lee toda una linea completa, e ingresa los datos en el array 'data'
       // print_r($data);
        if ($row>1){
            $num = count($data); //Cuenta cuantos campos contiene la linea (el array 'data')
            $sql="select * from porta_portafolio_carburado_cab where ";
            $cadena = "INSERT INTO porta_portafolio_carburado_cab(
                         idportafolio_carburado_cab,
                         col1,
                         col2,
                         col3,
                         col4,
                         col5,
                         col6,
                         col7,
                         col8,
                         col9,
                         col10,
                         valor
                         ) VALUES ( ". $idportafolio_carburado_cab.','; //Cambia los valores 'CampoX' por el nombre de tus campos de tu tabla y colócales los necesarios
           // if ($num<10) $num=19;
            for ($c=0; $c <= 10; $c++) { //Aquí va colocando los campos en la cadena, si aun no es el último campo, le agrega la coma (,) para separar los datos
                if ($c==10){
                      $cadena = $cadena."'".  $data[$num-1] . "'";
                }else{
                     if ($c==($num-1)) {
                        $cadena = $cadena."'',"; 
                     }else{
                        $cadena = $cadena."'".$data[$c] . "',";
                     }
                }
                $dato[$c]=$data[$c];
            }
            
            $sql.="col1='".$dato[0]."' and
                col2='".$dato[1]."' and
                col3='".$dato[2]."' and
                col4='".$dato[3]."' and
                col5='".$dato[4]."' and
                col6='".$dato[5]."' and
                col7='".$dato[6]."' and
                col8='".$dato[7]."' and
                col9='".$dato[8]."' and
                col10='".$dato[9]."' 
                   ";
           
           // echo $sql."<br>"; 
            
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
<div class="header"><span><span class="ico gray window"></span>Carga de Porta Herramientas</span>
</div><!-- End header -->
<div class="content">
    <!--<a class="uibutton icon normal answer" href="index.php?seccion=porta_portafolio_carburado_cab&idportafolio_carburado_cab=<?= $idportafolio_carburado_cab ?>&nivel=<?= $nivel ?>&ncolum=<?php echo $ncolum ?>">Porta Herramienta</a>-->
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>PortaHerramientas</h1></legend>
                <?php //echo $ncolum.'--->'; ?>
                <form method="post" action="" name="forminterno3" id="forminterno3" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $porta_portafolio_carburado_cab["idporta_portafolio_carburado_cab"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Recuerde Crear la plantilla de acuerdo al numero de columnas (.cvs) </label>
                       <!-- <a href="plantilla_porta_portafolio_carburado_cab_<?php echo $ncolum ?>.csv" target="_blank">Descargar</a>-->
                        
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
 <script type="text/javascript">
            $(document).ready(function(){              
                 $("#submitForm3").click(function(){
                     $('#forminterno3').submit();
                });
            });
        </script>