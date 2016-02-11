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
    if ( $_POST['ref'] == "" && $_POST['diam_corte'] == "" && $_POST['long_corte'] == "" && $_POST['long_total'] == "" && $_POST['diam_espigo'] == "" && $_POST['inserto'] == ""  ){
        $Erno = 2;
    }else{
                    $sql="INSERT INTO porta_taladrado(
                        idtaladrado
                         ref,
                         diam_corte,
                         long_corte,	
                         long_total,	
                         diam_espigo,
                         inserto,
                         rosca
                         ) VALUES (
                         '".$idtaladrado."',
                         '".$ref."',
                         '".$diam_corte."',	
                         '".$long_corte."',	
                         '".$long_total."',	
                         '".$diam_espigo."',
                         '".$inserto."',   
                         '".$rosca."')";
                    echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idporta_taladrado'] == "" && $_POST['ref'] == "" && $_POST['diam_corte'] == "" && $_POST['long_corte'] == "" && $_POST['long_total'] == "" && $_POST['diam_espigo'] == "" && $_POST['inserto'] == "" ) {
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
     <a class="uibutton icon normal answer" href="index.php?seccion=porta_taladrado&idtaladrado=<?php echo $_REQUEST["idtaladrado"] ?>">Porta Herramientas</a>
               
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Taladrado</h1></legend>
                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <input type="hidden" value="<?php echo $porta_taladrado["idporta_taladrado"] ?>" name="id" id="id">
                   <input type="hidden" value="<?php echo $_REQUEST['idtaladrado']?>" name="idtaladrado" id="idtaladrado">
                   <input type="hidden" value="1" name="tipo" id="tipo">
                   
                    <div class="section">                                                                                                  
                        <label>REF</label>
						<div>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_taladrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diam Corte</label>
						<div>
                        <input type="text" name="diam_corte" id="diam_corte" class="medium" value="<?php echo $porta_taladrado["diam_corte"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="diam_corte"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Long Corte</label>
						<div>
                        <input type="text" name="long_corte" id="long_corte" class="medium" value="<?php echo $porta_taladrado["long_corte"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="long_corte"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Long Total</label>
						<div>
                        <input type="text" name="long_total" id="long_total" class="medium" value="<?php echo $porta_taladrado["long_total"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="long_total"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diam Espigo</label>
						<div>
                        <input type="text" name="diam_espigo" id="diam_espigo" class="medium" value="<?php echo $porta_taladrado["diam_espigo"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="diam_espigo"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Rosca</label>
						<div>
                        <input type="text" name="rosca" id="rosca" class="medium" value="<?php echo $porta_taladrado["rosca"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="rosca"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Inserto</label>
						<div>
                        <input type="text" name="inserto" id="inserto" class="medium" value="<?php echo $porta_taladrado["inserto"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="inserto"></span></span>
						</div>
                     </div>
                    <br />
                    <div>
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=archivo&idtaladrado=<?php echo $_REQUEST["idtaladrado"] ?>" id="submitForm2"  class="uibutton large">Archivo Plano</a>
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
                                    <a class="uibutton icon edit" href="index.php?seccion=porta_taladrado&idtaladrado=<?php echo $_REQUEST['idtaladrado'] ?>&id=<?= $img["idporta_taladrado"] ?>">Editar</a>
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