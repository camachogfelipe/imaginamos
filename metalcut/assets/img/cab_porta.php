<?php
$modulo='accesorios'; 
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null; 
$db->doQuery("SELECT idportafolio_cab FROM portafolio_cab where nivel='".$nivel."'   ORDER BY idportafolio_cab DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idportafolio_cab"] + 1;

$ncolum=!empty($_REQUEST['ncolum']) ? $_REQUEST['ncolum'] : null;
$idportafolio=!empty($_REQUEST['idportafilio']) ? $_REQUEST['idportafilio'] : null;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$col1=!empty($_POST['col1']) ? $_POST['col1'] : null; 
$col2=!empty($_POST['col2']) ? $_POST['col2'] : null; 
$col3=!empty($_POST['col3']) ? $_POST['col3'] : null; 
$col4=!empty($_POST['col4']) ? $_POST['col4'] : null; 
$col5=!empty($_POST['col5']) ? $_POST['col5'] : null; 
$col6=!empty($_POST['col6']) ? $_POST['col6'] : null; 
$col7=!empty($_POST['col7']) ? $_POST['col7'] : null; 
$col8=!empty($_POST['col8']) ? $_POST['col8'] : null; 
$col9=!empty($_POST['col9']) ? $_POST['col9'] : null; 
$col10=!empty($_POST['col10']) ? $_POST['col10'] : null; 

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_cab", "portafolio_cab_" . $img, "960_392_portafolio_cab_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_cab", "portafolio_cab_" . $id, "960_392_portafolio_cab_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo']) ){
    if($_POST['col1'] == ""  && $_POST['nivel']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
          $sql="INSERT INTO portafolio_cab(nivel,idportafolio,col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,imagen) 
               VALUES ('".$nivel."','".$idportafolio."','".$col1."','".$col2."','".$col3."','".$col4."',
                '".$col5."','".$col6."','".$col7."','".$col8."','".$col9."','".$col10."','" . $retorno["NameFile"] . "')";
           //echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo']) ){
    if($_POST['col1'] == ""  && $_POST['nivel']=="" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE portafolio_cab SET nivel='" . $nivel . "',  idportafolio='".$idportafolio."', 
               col='".$col1."', col='".$col2."', col='".$col3."', col='".$col4."', col='".$col5."',
               col='".$col6."', col='".$col7."', col='".$col8."', col='".$col9."', col='".$col10."' WHERE idportafolio_cab=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE portafolio_cab SET imagen='" . $retorno["NameFile"] . "' WHERE idportafolio_cab=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM portafolio_cab where nivel='".$nivel."'   ORDER BY idportafolio_cab ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM portafolio_cab WHERE idportafolio_cab=" . $id;
    $db->doQuery("SELECT * FROM portafolio_cab WHERE nivel='".$nivel."'   and idportafolio_cab=" . $id, 1);
   // echo "SELECT * FROM portafolio_cab WHERE modulo='".$modulo."' and nivel='".$nivel."'   and idportafolio_cab=" . $id;
    $portafolio_cab = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Columnas Portaherramientas</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Otros</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $portafolio_cab["idportafolio_cab"] ?>" name="id" id="id">
                    <input type="hidden" value="<?php echo $modulo ?>" name="modulo" id="modulo">
                    <input type="hidden" value="<?php echo $nivel ?>" name="nivel" id="nivel">
                    <input type="hidden" value="<?php echo $ncolum ?>" name="ncolum" id="ncolum">
                    <div class="section" id="sec1">                                                                                                  
                        <label>Nombre Columna 1</label>
                        <div>
                            <input type="text" name="col1" id="col1" class="medium" value="<?php echo $portafolio_cab["col1"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col1"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec2">                                                                                                  
                        <label>Nombre Columna 2</label>
                        <div>
                            <input type="text" name="col2" id="col2" class="medium" value="<?php echo $portafolio_cab["col2"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col2"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec3">                                                                                                  
                        <label>Nombre Columna 3</label>
                        <div>
                            <input type="text" name="col3" id="col3" class="medium" value="<?php echo $portafolio_cab["col3"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="nivel3"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec4">                                                                                                  
                        <label>Nombre Columna 4</label>
                        <div>
                            <input type="text" name="col4" id="col4" class="medium" value="<?php echo $portafolio_cab["col4"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col4"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec5">                                                                                                  
                        <label>Nombre Columna 5</label>
                        <div>
                            <input type="text" name="col5" id="col5" class="medium" value="<?php echo $portafolio_cab["col5"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col5"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec6">                                                                                                  
                        <label>Nombre Columna 6</label>
                        <div>
                            <input type="text" name="col6" id="col6" class="medium" value="<?php echo $portafolio_cab["col6"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col6"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec7">                                                                                                  
                        <label>Nombre Columna 7</label>
                        <div>
                            <input type="text" name="col7" id="col7" class="medium" value="<?php echo $portafolio_cab["col7"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col7"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec8">                                                                                                  
                        <label>Nombre Columna 8</label>
                        <div>
                            <input type="text" name="col8" id="col8" class="medium" value="<?php echo $portafolio_cab["col8"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col8"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec9">                                                                                                  
                        <label>Nombre Columna 9</label>
                        <div>
                            <input type="text" name="col9" id="col9" class="medium" value="<?php echo $portafolio_cab["col9"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col9"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec10">                                                                                                  
                        <label>Nombre Columna 10</label>
                        <div>
                            <input type="text" name="col10" id="col10" class="medium" value="<?php echo $portafolio_cab["col10"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col10"></span></span>
                        </div>
                    </div>

                    <div class="section">
                       <?php if (!empty($portafolio_cab["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/portafolio_cab/<?php echo $portafolio_cab["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
                       <?php }?>                      
                        <label>Subir nueva imagen (196px x 246px) (.png, .jpg)</label>
                        <div>
                            <input type="file" name="img" id="img" />
                            
                        </div>
                    </div> 
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <br />
                    <div>
                        <a id="submitForm"  class="uibutton large">Guardar</a>
                    </div>
                </form>
            </fieldset>
        <?php } else { 
            
            ?>
            <label></label><?php } ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">N Columnas</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Nivel</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            //print_r($img);
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $ncolum ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/portafolio_cab/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                 <td><?php echo $img["nivel"] ?></td>
                                <td class="center idcol1" width="100px">
                                    <?php //if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idportafolio_cab"] ?>" class="Delete uibutton special" tableToDelete="portafolio_cab" nameField="idportafolio_cab">Eliminar</a> 
                                    <?php //} ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=cab_porta&id=<?= $img["idportafolio_cab"] ?>&nivel=<?php echo $nivel ?>$idportafolio=<?php echo $idportafilio ?>&ncolum=<?php echo $ncolum ?>">Editar</a>
                                    <a class="uibutton icon edit" href="index.php?seccion=porta_portafolio_cab&idportafolio_cab=<?= $img["idportafolio_cab"] ?>&nivel=<?= $img["nivel"] ?>&ncolum=<?php echo $ncolum ?>">Crear Portaherramienta</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
            </div>
            <?php
                }
            ?>
         </fieldset>
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
        }
    }
}
?>
<script>
    $(document).ready(function() {
     var n= parseInt($("#ncolum").val());
     var y=n+1
    // alert(n+'--'+y)
     for (i=1;i<=n;i++){
         jQuery("#sec"+i).css('display', ''); 
     }
     for (i=y;i<=10;i++){
         jQuery("#sec"+i).css('display', 'none'); 
     }
 });
</script>