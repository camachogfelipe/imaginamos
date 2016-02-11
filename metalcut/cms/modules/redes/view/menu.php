<?php

$db->doQuery("SELECT idredes FROM redes  ORDER BY idredes DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idredes"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$facebook=!empty($_POST['facebook']) ? $_POST['facebook'] : null; 
$twitter=!empty($_POST['twitter']) ? $_POST['twitter'] : null; 

$facebook = str_replace("'", "&#39;" , $facebook);
$facebook = str_replace('"', "&quot;", $facebook);
$twitter = str_replace("'", "&#39;" , $twitter);
$twitter = str_replace('"', "&quot;", $twitter);


if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    //echo $_POST['facebook'] .'ok';
    if($_POST['facebook'] == "" && $_POST['twitter']=="" ){
        $Erno = 2;
    }else{
           $sql="INSERT INTO redes(facebook,twitter) VALUES ('".$facebook."','".$twitter."')";
           //echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['facebook'] == "" && $_POST['twitter']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE redes SET facebook='" . $facebook . "', twitter='".$twitter."' WHERE idredes=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
      }
}

if (empty($id)){
    $sql="SELECT * FROM redes ORDER BY idredes ASC";
    //echo $sql.'ca..';
    $db->doQuery($sql, 1);
    
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM redes WHERE idredes=" . $id;
    $db->doQuery("SELECT * FROM redes WHERE idredes=" . $id, 1);
    $redes = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Redes</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Nuevo Redes</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $redes["idredes"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Facebook</label>
                        <div>
                            <input type="text" name="facebook" id="facebook" class="medium" value="<?php echo $redes["facebook"] ?>">
                            <!--<span class="f_help">Limite de caracteres 12/<span class="facebook"></span></span>-->
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Twitter</label>
                        <div>
                            <input type="text" name="twitter" id="twitter" class="medium" value="<?php echo $redes["twitter"] ?>">
                            <!-- <span class="f_help">Limite de caracteres 12/<span class="twitter"></span></span>-->
                        </div>
                    </div>
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <br />
                    <div><a id="submitForm"  class="uibutton large">Guardar</a></div>
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
                            <th><span class="th_wrapp">Facebook</span></th>
                            <th><span class="th_wrapp">Twitter</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["facebook"] ?></td>
                                <td><?php echo $img["twitter"] ?></td>
                                <td class="center facebook" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idredes"] ?>" class="Delete uibutton special" tableToDelete="redes" nameField="idredes">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idredes"] ?>">Editar</a>
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