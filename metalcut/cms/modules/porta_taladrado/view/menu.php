<?php

$db->doQuery("SELECT idporta_taladrado FROM porta_taladrado  ORDER BY idporta_taladrado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_taladrado'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idtaladrado=!empty($_POST['idtaladrado']) ? $_POST['idtaladrado'] : null; 
$ref=!empty($_POST['ref']) ? $_POST['ref'] : null;
$diam_corte=!empty($_POST['diam_corte']) ? $_POST['diam_corte'] : null; 
$long_corte=!empty($_POST['long_corte']) ? $_POST['long_corte'] : null; 
$long_total=!empty($_POST['long_total']) ? $_POST['long_total'] : null; 
$diam_espigo=!empty($_POST['diam_espigo']) ? $_POST['diam_espigo'] : null; 
$rosca=!empty($_POST['rosca']) ? $_POST['rosca'] : null; 
$inserto=!empty($_POST['inserto']) ? $_POST['inserto'] : null; 

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ($_POST['idporta_taladrado'] == "" && $_POST['ref'] == "" && $_POST['diam_corte'] == "" && $_POST['long_corte'] == "" && $_POST['long_total'] == "" && $_POST['diam_espigo'] == "" && $_POST['inserto'] == ""  ){
        $Erno = 2;
    }else{
                    $sql="INSERT INTO porta_taladrado(
                         ref,
                         diam_corte,
                         long_corte,	
                         long_total,	
                         diam_espigo,
                         inserto,
                         rosca
                         ) VALUES (
                         '".$ref."',
                         '".$diam_corte."',	
                         '".$long_corte."',	
                         '".$long_total."',	
                         '".$diam_espigo."',
                         '".$inserto."',   
                         '".$rosca."')";
                   // echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idtaladrado'] == "" && $_POST['ref'] == "" && $_POST['diam_corte'] == "" && $_POST['long_corte'] == "" && $_POST['long_total'] == "" && $_POST['diam_espigo'] == "" && $_POST['inserto'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE porta_taladrado SET 
             ref='".$ref."',
             diam_corte='".$diam_corte."',
             long_corte='".$long_corte."',	
             long_total='".$long_total."',	
             diam_espigo='".$diam_espigo."',
             inserto='".$inserto."',
             rosca='".$rosca."' WHERE idporta_taladrado='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4); 
    }
}


if (empty($id)){
    $db->doQuery("SELECT * FROM porta_taladrado ORDER BY idporta_taladrado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM idporta_taladrado WHERE idporta_taladrado=" . $id;
    $db->doQuery("SELECT * FROM porta_taladrado WHERE idporta_taladrado='" . $id."'", 1);
    $porta_taladrado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Taladrado</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $porta_taladrado["idporta_taladrado"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>REF</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diam Corte</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Long Corte</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Long Total</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diam Espigo</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Rosca</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Inserto</label>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                     </div>
                    <br />
                    <div>
                        <a id="submitForm"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=archivo" id="submitForm2"  class="uibutton large">Archivo Plano</a>
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
                            <th><span class="th_wrapp">Diam Corte</span></th>
                            <th><span class="th_wrapp">Long Corte</span></th>
                            <th><span class="th_wrapp">Long Total</span></th>
                            <th><span class="th_wrapp">Diam Espigo</span></th>
                            <th><span class="th_wrapp">Rosca</span></th>
                            <th><span class="th_wrapp">Inseto</span></th>   
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM porta_taladrado order by idporta_taladrado asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["ref"] ?></td>
                                <td><?php echo $img["diam_corte"] ?></td>
                                <td><?php echo $img["long_corte"] ?></td>
                                <td><?php echo $img["long_total"] ?></td>
                                <td><?php echo $img["diam_espigo"] ?></td>
                                <td><?php echo $img["rosca"] ?></td>
                                <td><?php echo $img["inserto"] ?></td>
                                <td class="center idporta_taladrado" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idporta_taladrado"] ?>" class="Delete uibutton special" tableToDelete="porta_taladrado" nameField="idporta_taladrado">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idporta_taladrado"] ?>">Editar</a>
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