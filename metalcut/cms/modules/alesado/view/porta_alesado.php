<?php

$db->doQuery("SELECT idporta_alesado FROM porta_alesado  ORDER BY idporta_alesado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_alesado'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idalesado=!empty($_POST['idalesado']) ? $_POST['idalesado'] : null; 
$ref=!empty($_POST['ref']) ? $_POST['ref'] : null;
$fig=!empty($_POST['fig']) ? $_POST['fig'] : null;
$diam_ajugero=!empty($_POST['diam_ajugero']) ? $_POST['diam_ajugero'] : null; 
$diam_barra=!empty($_POST['diam_barra']) ? $_POST['diam_barra'] : null; 
$long_barra=!empty($_POST['long_barra']) ? $_POST['long_barra'] : null; 
$inserto=!empty($_POST['inserto']) ? $_POST['inserto'] : null; 
$valor=!empty($_POST['valor']) ? $_POST['valor'] : null;
$idgeometria = !empty($_POST['idgeometria']) ? $_POST['idgeometria'] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ( $_POST['ref'] == "" && $_POST['diam_ajugero'] == "" && $_POST['diam_barra'] == "" && $_POST['long_barra'] == "" && $_POST['inserto'] == "" && $_POST['valor'] == ""  ){
        $Erno = 2;
    }else{
	            
                    $sql="INSERT INTO porta_alesado(
                         idalesado,
                         ref,
												 figura,
                         diam_ajugero,
                         diam_barra,	
                         long_barra,
                         inserto,
                         valor,
						 idgeometria
                         ) VALUES (
                         '".$idalesado."',
                         '".$ref."',
												 '".$fig."',
                         '".$diam_ajugero."',	
                         '".$diam_barra."',	
                         '".$long_barra."',	
                         '".$inserto."',
                         '".$valor."',
						 '".$idgeometria."')";
                    //echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idporta_alesado'] == "" && $_POST['ref'] == "" && $_POST['fig'] == "" && $_POST['diam_ajugero'] == "" && $_POST['diam_barra'] == "" && $_POST['long_barra'] == "" && $_POST['inserto'] == "" && $_POST['valor'] == ""  ) {
            $Erno = 2;
     }else{
         $sql="UPDATE porta_alesado SET 
             ref='".$ref."',
						 figura='".$fig."',
             diam_ajugero='".$diam_ajugero."',
             diam_barra='".$diam_barra."',	
             long_barra='".$long_barra."',
             inserto='".$inserto."',
             valor='".$valor."', 
			 idgeometria='".$idgeometria."' WHERE idporta_alesado='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4); 
          $Erno = 1;
    }
}


if (empty($id)){
    $db->doQuery("SELECT * FROM porta_alesado ORDER BY idporta_alesado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM idporta_alesado WHERE idporta_alesado=" . $id;
    $db->doQuery("SELECT * FROM porta_alesado WHERE idporta_alesado='" . $id."'", 1);
    $porta_alesado = $db->results[0];
}

?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span>
</div><!-- End header -->
<div class="content">
    <?php if (!empty($_REQUEST['id'])){ ?>
    <a class="uibutton icon normal answer" href="index.php?seccion=porta_alesado">Atras</a>
    <?php }else{ ?>
    <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atras</a>
     <?php } ?>
               
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Alesado</h1></legend>
                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <input type="hidden" value="<?php echo $porta_alesado["idporta_alesado"] ?>" name="id" id="id">
                   <input type="hidden" value="<?php echo $_REQUEST['idalesado']?>" name="idalesado" id="idalesado">
                   <input type="hidden" value="1" name="tipo" id="tipo">
                   
                    <div class="section">                                                                                                  
                        <label>REF</label>
						<div>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_alesado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
						</div>
                     </div>
                     <div class="section">                                                                                                  
                        <label>FIGURA</label>
						<div>
                        <input type="text" name="fig" id="fig" class="medium" value="<?php echo $porta_alesado["figura"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diam. Min. Agujero</label>
						<div>
                        <input type="text" name="diam_ajugero" id="diam_ajugero" class="medium" value="<?php echo $porta_alesado["diam_ajugero"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="diam_ajugero"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Diam Barra</label>
						<div>
                        <input type="text" name="diam_barra" id="diam_barra" class="medium" value="<?php echo $porta_alesado["diam_barra"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="diam_barra"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Long Barra</label>
						<div>
                        <input type="text" name="long_barra" id="long_barra" class="medium" value="<?php echo $porta_alesado["long_barra"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="long_barra"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Inserto</label>
						<div>
                        <input type="text" name="inserto" id="inserto" class="medium" value="<?php echo $porta_alesado["inserto"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="inserto"></span></span>
						</div>
                     </div>
                   <div class="section">                                                                                                  
                    <label>Valor</label>
                    <div>
                    <input type="text" name="valor" id="valor" class="medium" value="<?php echo $porta_alesado["valor"] ?>">
                    <span class="f_help">Limite de caracteres 10/<span class="valor"></span></span>
                    </div>
                    </div>
                    <div class="section">
                    <label>Geometría</label>
                    <div>
                    <?php
					$sqlTI = "select idgeometria from geometria order by idgeometria asc";
					$db->doQuery($sqlTI, 1);
					$cTI = $db->rows;
					?>
                        <select id="idgeometria" name="idgeometria">
                        <?php if ($cTI == 1) { ?>
                                <option value="<?php echo $porta_alesado["idgeometria"] ?>"><?php echo $porta_alesado["idgeometria"] ?></option>
                            <?php } else { ?>
                                <option value="">-Seleccione-</option>
                                <?php
                                for ($i = 0; $i < $cTI; $i++) {
                                    $dTI = $db->results[$i];
                                    ?>
                                    <option value="<?php echo $dTI["idgeometria"] ?>"
                                    <?php
                                    if ($porta_alesado["idgeometria"] == $dTI["idgeometria"])
                                        echo "selected='selected'";
                                    ?> ><?php echo $dTI["idgeometria"] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                    <br />
                    <div>
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=archivo&idalesado=1" id="submitForm2"  class="uibutton large">Archivo Plano</a>
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
                            <th><span class="th_wrapp">Figura</span></th>
                            <th><span class="th_wrapp">Diam Min Agujero</span></th>
                            <th><span class="th_wrapp">Diam Barra</span></th>
                            <th><span class="th_wrapp">Long Barra</span></th>
                            <th><span class="th_wrapp">Inserto</span></th>   
                            <th><span class="th_wrapp">Valor</span></th>
                            <th><span class="th_wrapp">Geometria</span></th>   
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM porta_alesado order by idporta_alesado asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["ref"] ?></td>
                                <td><?php echo $img["figura"] ?></td>
                                <td><?php echo $img["diam_ajugero"] ?></td>
                                <td><?php echo $img["diam_barra"] ?></td>
                                <td><?php echo $img["long_barra"] ?></td>
                                <td><?php echo $img["inserto"] ?></td>
                                <td><?php echo $img["valor"] ?></td>
                                <td><?php echo $img["idgeometria"] ?></td>
                                <td class="center idporta_alesado" width="100px">
                                    <a id="<?php echo $img["idporta_alesado"] ?>" class="Delete uibutton special" tableToDelete="porta_alesado" nameField="idporta_alesado">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=porta_alesado&idalesado=<?php echo $_REQUEST['idalesado'] ?>&id=<?= $img["idporta_alesado"] ?>">Editar</a>
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