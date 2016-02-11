<?php

$db->doQuery("SELECT idporta_sujecion FROM porta_sujecion where idproductos_sujecion='".$_REQUEST['idproductos_sujecion']."'  ORDER BY idporta_sujecion DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_sujecion'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idproductos_sujecion=!empty($_POST['idproductos_sujecion']) ? $_POST['idproductos_sujecion'] : null; 
$ref=!empty($_POST['ref']) ? $_POST['ref'] : null;
$rango_sujecion=!empty($_POST['rango_sujecion']) ? $_POST['rango_sujecion'] : null;
$valor=!empty($_POST['valor']) ? $_POST['valor'] : null; 

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ( $_POST['ref'] == "" && $_POST['rango_sujecion'] == "" && $_POST['valor'] == ""   ){
        $Erno = 2;
    }else{
	            
                    $sql="INSERT INTO porta_sujecion(
                         idproductos_sujecion,
                         ref,
                         rango_sujecion,
                         valor
                         ) VALUES (
                         '".$idproductos_sujecion."',
                         '".$ref."',
                         '".$rango_sujecion."',
                          '".$valor."')";
                 //  echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idporta_sujecion'] == "" && $_POST['ref'] == "" && $_POST['rango_sujecion'] == "" && $_POST['valor'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE porta_sujecion SET 
             ref='".$ref."',
             rango_sujecion='".$rango_sujecion."',
             valor='".$valor."' WHERE idporta_sujecion='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4);  
    }
}


if (empty($id)){
    $db->doQuery("SELECT * FROM porta_sujecion where idproductos_sujecion='".$_REQUEST['idproductos_sujecion']."' ORDER BY idporta_sujecion ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM idporta_sujecion WHERE idporta_sujecion=" . $id;
    $db->doQuery("SELECT * FROM porta_sujecion WHERE idporta_sujecion='" . $id."'", 1);
    $porta_sujecion = $db->results[0];
}

?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span>
</div><!-- End header -->
<div class="content">
    <?php if (!empty($_REQUEST['id'])){ ?>
    <a class="uibutton icon normal answer" href="index.php?seccion=porta_sujecion&idproductos_sujecion=<?php echo $_REQUEST['idproductos_sujecion'] ?>">Atras</a>
    <?php }else{ ?>
    <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atras</a>
     <?php } ?>
               
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Sujecion</h1></legend>
                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <input type="hidden" value="<?php echo $porta_sujecion["idporta_sujecion"] ?>" name="id" id="id">
                   <input type="hidden" value="<?php echo $_REQUEST['idproductos_sujecion']?>" name="idproductos_sujecion" id="idproductos_sujecion">
                   <input type="hidden" value="1" name="tipo" id="tipo">
                   
                    <div class="section">                                                                                                  
                        <label>REF</label>
						<div>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_sujecion["ref"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Rango de sujeci&#243;n</label>
						<div>
                        <input type="text" name="rango_sujecion" id="rango_sujecion" class="medium" value="<?php echo $porta_sujecion["rango_sujecion"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="rango_sujecion"></span></span>
						</div>
                     </div>
                    <div class="section">                                                                                                  
                    <label>Valor</label>
                    <div>
                    <input type="text" name="valor" id="valor" class="medium" value="<?php echo $porta_sujecion["valor"] ?>">
                    <span class="f_help">Limite de caracteres 10/<span class="valor"></span></span>
                    </div>
                    </div>
                    <br />
                    <div>
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=archivo&idproductos_sujecion=<?php echo $_REQUEST['idproductos_sujecion'] ?> " id="submitForm2"  class="uibutton large">Archivo Plano</a>
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
                            <th><span class="th_wrapp">Rango de Sujecion</span></th>
                            <th><span class="th_wrapp">Valor</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM porta_sujecion where idproductos_sujecion='".$_REQUEST['idproductos_sujecion']."' order by idporta_sujecion asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["ref"] ?></td>
                                <td><?php echo $img["rango_sujecion"] ?></td>
                                <td><?php echo $img["valor"] ?></td>
                                <td class="center idporta_sujecion" width="100px">
                                    <a id="<?php echo $img["idporta_sujecion"] ?>" class="Delete uibutton special" tableToDelete="porta_sujecion" nameField="idporta_sujecion">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=porta_sujecion&idproductos_sujecion=<?php echo $_REQUEST['idproductos_sujecion'] ?>&id=<?= $img["idporta_sujecion"] ?>">Editar</a>
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