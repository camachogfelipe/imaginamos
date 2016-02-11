<?php

$db->doQuery("SELECT idporta_conos FROM porta_conos where idproductos_conos='".$_REQUEST['idproductos_conos']."'  ORDER BY idporta_conos DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_conos'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idproductos_conos=!empty($_POST['idproductos_conos']) ? $_POST['idproductos_conos'] : null; 
$ref=!empty($_POST['ref']) ? $_POST['ref'] : null;
$longitud=!empty($_POST['longitud']) ? $_POST['longitud'] : null; 
$diametro=!empty($_POST['diametro']) ? $_POST['diametro'] : null; 
$tipo_boquilla=!empty($_POST['tipo_boquilla']) ? $_POST['tipo_boquilla'] : null; 
$valor=!empty($_POST['valor']) ? $_POST['valor'] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ( $_POST['ref'] == "" && $_POST['longitud'] == "" && $_POST['diametro'] == "" && $_POST['tipo_boquilla'] == "" && $_POST['valor'] == ""  ){
        $Erno = 2;
    }else{
	            
                    $sql="INSERT INTO porta_conos(
                         idproductos_conos,
                         ref,
                         longitud,
                         diametro,	
                         tipo_boquilla,
                         valor
                         ) VALUES (
                         '".$idproductos_conos."',
                         '".$ref."',
                         '".$longitud."',	
                         '".$diametro."',	
                         '".$tipo_boquilla."',
                         '".$valor."' )";
                 //  echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idporta_conos'] == "" && $_POST['ref'] == "" && $_POST['longitud'] == "" && $_POST['diametro'] == "" && $_POST['tipo_boquilla'] == "" && $_POST['valor'] == ""  ) {
            $Erno = 2;
     }else{
         $sql="UPDATE porta_conos SET 
             ref='".$ref."',
             longitud='".$longitud."',
             diametro='".$diametro."',	
             tipo_boquilla='".$tipo_boquilla."',
             valor='".$valor."' WHERE idporta_conos='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4);  
    }
}


if (empty($id)){
    $db->doQuery("SELECT * FROM porta_conos where idproductos_conos='".$_REQUEST['idproductos_conos']."' ORDER BY idporta_conos ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM idporta_conos WHERE idporta_conos=" . $id;
    $db->doQuery("SELECT * FROM porta_conos WHERE idporta_conos='" . $id."'", 1);
    $porta_conos = $db->results[0];
}

?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span>
</div><!-- End header -->
<div class="content">
    <?php if (!empty($_REQUEST['id'])){ ?>
    <a class="uibutton icon normal answer" href="index.php?seccion=porta_conos&idproductos_conos=<?php echo $_REQUEST['idproductos_conos'] ?>">Atras</a>
    <?php }else{ ?>
    <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atras</a>
     <?php } ?>
               
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Conos</h1></legend>
                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <input type="hidden" value="<?php echo $porta_conos["idporta_conos"] ?>" name="id" id="id">
                   <input type="hidden" value="<?php echo $_REQUEST['idproductos_conos']?>" name="idproductos_conos" id="idproductos_conos">
                   <input type="hidden" value="1" name="tipo" id="tipo">
                   
                    <div class="section">                                                                                                  
                        <label>REF</label>
						<div>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_conos["ref"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Longitud</label>
						<div>
                        <input type="text" name="longitud" id="longitud" class="medium" value="<?php echo $porta_conos["longitud"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="longitud"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diametro</label>
						<div>
                        <input type="text" name="diametro" id="diametro" class="medium" value="<?php echo $porta_conos["diametro"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="diametro"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Tipo de Boquilla</label>
						<div>
                        <input type="text" name="tipo_boquilla" id="tipo_boquilla" class="medium" value="<?php echo $porta_conos["tipo_boquilla"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="tipo_boquilla"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                    <label>Valor</label>
                    <div>
                    <input type="text" name="valor" id="valor" class="medium" value="<?php echo $porta_conos["valor"] ?>">
                    <span class="f_help">Limite de caracteres 10/<span class="valor"></span></span>
                    </div>
                    </div>
                    <br />
                    <div>
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=archivo&idproductos_conos=<?php echo $_REQUEST['idproductos_conos'] ?> " id="submitForm2"  class="uibutton large">Archivo Plano</a>
                    </div>
                </form>
            </fieldset>
        <?php// } else { 
            
            ?>
            <label></label><?php //} ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">REF</span></th>
                            <th><span class="th_wrapp">Longitud</span></th>
                            <th><span class="th_wrapp">Diametro</span></th>
                            <th><span class="th_wrapp">Tipo de Boquilla</span></th>
                            <th><span class="th_wrapp">Valor</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM porta_conos order by idporta_conos asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["ref"] ?></td>
                                <td><?php echo $img["longitud"] ?></td>
                                <td><?php echo $img["diametro"] ?></td>
                                <td><?php echo $img["tipo_boquilla"] ?></td>
                                <td><?php echo $img["valor"] ?></td>
                                <td class="center idporta_conos" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idporta_conos"] ?>" class="Delete uibutton special" tableToDelete="porta_conos" nameField="idporta_conos">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=porta_conos&idproductos_conos=<?php echo $_REQUEST['idproductos_conos'] ?>&id=<?= $img["idporta_conos"] ?>">Editar</a>
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
        } elseif ($valor == 6) {
            ?><script>showError('Ya existe este codigo',8000)</script>
            <?php
        }
    }
}
?>
 <script type="text/javascript">
            $(document).ready(function(){              
                 $("#submitForm2").click(function(){
                     $('#forminterno2').submit();
                });
            });
        </script>