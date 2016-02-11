<?php

echo "<pre>";print_r($_REQUEST);echo "</pre>";

$db->doQuery("SELECT idproducto_torneado FROM producto_torneado ORDER BY idproducto_torneado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idproducto_torneado'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idproducto_torneado=!empty($_POST['idproducto_torneado']) ? $_POST['idproducto_torneado'] : null; 
$idtipo_inserto=!empty($_POST['idtipo_inserto']) ? $_POST['idtipo_inserto'] : null;
$idmateriales=!empty($_POST['idmateriales']) ? $_POST['idmateriales'] : null; 
$idgeometria=!empty($_POST['idgeometria']) ? $_POST['idgeometria'] : null; 
$idangulo=!empty($_POST['idangulo']) ? $_POST['idangulo'] : null; 
$idlongitud=!empty($_POST['idlongitud']) ? $_POST['idlongitud'] : null; 
$idespesor=!empty($_POST['idespesor']) ? $_POST['idespesor'] : null; 
$idradio=!empty($_POST['idradio']) ? $_POST['idradio'] : null; 
$idtipo_corte=!empty($_POST['idtipo_corte']) ? $_POST['idtipo_corte'] : null;
$valor=!empty($_POST['valor']) ? $_POST['valor'] : null; 
$imagen=!empty($_POST['imagen']) ? $_POST['imagen'] : null;
//$=!empty($_POST['']) ? $_POST[''] : null;
if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/producto_torneado", "producto_torneado_" . $img, "960_392_producto_torneado_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/producto_torneado", "producto_torneado_" . $id, "960_392_producto_torneado_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;


if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ($_POST['idtipo_inserto'] == "" && $_POST['idmateriales'] == "" && $_POST['idgeometria'] == "" && $_POST['idangulo'] == "" && $_POST['idlongitud'] == "" && $_POST['idradio'] == "" && $_POST['idespeor']== "" && $_POST['idtipo_corte']== "" && $_POST['valor'] == "" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] != "") {
           $sql1="SELECT COUNT(*) AS total from producto_torneado 
               WHERE idtipo_inserto='".$idtipo_inserto."'
               and idmateriales='".$idmateriales."'	
               AND  idgeometria='".$idgeometria."'	
               AND idangulo='".$idangulo."'
               AND idlongitud='".$idlongitud."'
               AND idradio='".$idradio."'   
               AND idespesor='".$idespesor."' 
               AND idtipo_corte='".$idtipo_corte."' ";
            //echo $sql1;
            $db->doQuery($sql1, 1);
            $t = $db->results[0];
            $tt=$t['total'];
//            if ($tt==0){
                    $sql="INSERT INTO producto_torneado(
                         idtipo_inserto,
                         idmateriales,
                         idgeometria,	
                         idangulo,	
                         idlongitud,
                         idradio,
                         idespesor,
                         idtipo_corte,
                         valor,
                         imagen) VALUES (
                         '".$idtipo_inserto."',
                         '".$idmateriales."',	
                         '".$idgeometria."',	
                         '".$idangulo."',	
                         '".$idlongitud."',
                         '".$idradio."',   
                         '".$idespesor."', 
                         '".$idtipo_corte."',    
                         '".$valor."',
                         '".$retorno["NameFile"]."')";
                   // echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
//            }else{
//                $Erno = 6;
//            }
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if( $_POST['idtipo_inserto'] == "" && $_POST['idmateriales'] == "" && $_POST['idgeometria'] == "" && $_POST['idangulo'] == "" && $_POST['idlongitud'] == "" && $_POST['idradio'] == "" && $_POST['idespeor']== "" && $_POST['idtipo_corte']== "" && $_POST['valor'] == "") {
            $Erno = 2;
     }else{
         $sql="UPDATE producto_torneado SET valor='".$valor."' WHERE idproducto_torneado='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4);
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE producto_torneado SET imagen='" . $retorno["NameFile"] . "' WHERE idproducto_torneado='".$id."'";
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}


if (empty($id)){
    $db->doQuery("SELECT * FROM producto_torneado ORDER BY idproducto_torneado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM producto_torneado WHERE idproducto_torneado=" . $id;
    $db->doQuery("SELECT * FROM producto_torneado WHERE idproducto_torneado='" . $id."'", 1);
    $producto_torneado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Productos</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Torneado</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $producto_torneado["idproducto_torneado"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Tipo inserto</label>
                        <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idtipo_inserto='".$producto_torneado["idtipo_inserto"]."' "; }
                              $sqlTI="select * from tipo_inserto ".$wh." order by idtipo_inserto asc"; 
                              $db->doQuery($sqlTI, 1);
                              $cTI = $db->rows;                      
                        ?>
                        <select id="idtipo_inserto" name="idtipo_inserto">
                            <?php if ($cTI==1){ ?>
                                    <option value="<?php echo $producto_torneado["idtipo_inserto"] ?>"><?php echo $producto_torneado["idtipo_inserto"] ?></option>
                            <?php }else{ ?>
                                <option value="">-Seleccione-</option>
                                <?php 
                                   for ($i = 0; $i < $cTI; $i++) {
                                         $dTI = $db->results[$i];
                                          ?>
                                           <option value="<?php echo $dTI["idtipo_inserto"] ?>"
                                             <?php
                                             if($producto_torneado["idtipo_inserto"]==$dTI["idtipo_inserto"])
                                             echo "selected='selected'";
                                             ?> ><?php echo $dTI["idtipo_inserto"] ?></option>
                                          <?PHP
                                   }
                               }
                            ?>
                        </select>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Materiales</label>
                        <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idmateriales='".$producto_torneado["idmateriales"]."' "; 
                          }
                               $sqlM="select * from materiales ".$wh." order by idmateriales asc"; 
                              $db->doQuery($sqlM, 1);
                              $cM = $db->rows;                     
                        ?>
                        <select id="idmateriales" name="idmateriales">
                            <?php if ($cM==1){ ?>
                                    <option value="<?php echo $producto_torneado["idmateriales"] ?>"><?php echo $producto_torneado["idmateriales"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                             
                               for ($i = 0; $i < $cM; $i++) {
                                     $dM = $db->results[$i];
                                      ?>
                                       <option value="<?php echo $dM["idmateriales"] ?>"
                                         <?php
                                         if($producto_torneado["idmateriales"]==$dM["idmateriales"])
				         echo "selected='selected'";
                                         ?> ><?php echo $dM["idmateriales"] ?></option>
                                      <?PHP
                               }
                               }
                            ?>
                        </select>
                     </div> 
                    <div class="section">                                                                                                  
                        <label>Geometría</label>
                        <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idgeometria='".$producto_torneado["idgeometria"]."' "; }
                               $sqlG="select  * from geometria ".$wh." order by idgeometria asc"; 
                              $db->doQuery($sqlG, 1);
                              $cG = $db->rows;                    
                        ?>
                        <select id="idgeometria" name="idgeometria">
                            <?php if ($cG==1){ ?>
                                    <option value="<?php echo $producto_torneado["idgeometria"] ?>"><?php echo $producto_torneado["idgeometria"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                             
                               for ($i = 0; $i < $cG; $i++) {
                                     $dG = $db->results[$i];
                                      ?>
                                       <option value="<?php echo $dG["idgeometria"] ?>"
                                         <?php
                                         if($producto_torneado["idgeometria"]==$dG["idgeometria"])
				         echo "selected='selected'";
                                         ?> ><?php echo $dG["idgeometria"] ?></option>
                                      <?PHP
                               }
                               }
                            ?>
                        </select>
                     </div> 
                    <div class="section">                                                                                                  
                        <label>Ángulo</label>
                         <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idangulo='".$producto_torneado["idangulo"]."' "; }
                              $sqlA="select distinct idangulo from angulo ".$wh." order by idangulo asc"; 
                              $db->doQuery($sqlA, 1);
                              $cA = $db->rows;                     
                        ?>
                        <select id="idangulo" name="idangulo">
                            <?php if ($cA==1){ ?>
                                    <option value="<?php echo $producto_torneado["idangulo"] ?>"><?php echo $producto_torneado["idangulo"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                             
                               for ($i = 0; $i < $cA; $i++) {
                                     $dA = $db->results[$i];
                                   
                                      ?>
                                       <option value="<?php echo $dA["idangulo"] ?>"
                                         <?php
                                         if($producto_torneado["idangulo"]==$dA["idangulo"])
				         echo "selected='selected'";
                                         ?> ><?php echo $dA["idangulo"] ?></option>
                                      <?PHP  
                               }
                               }
                            ?>
                        </select>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Longitud</label>
                        <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idlongitud='".$producto_torneado["idlongitud"]."' "; }
                              $sqlL="select distinct idlongitud from longitud ".$wh." order by idlongitud asc"; 
                              $db->doQuery($sqlL, 1);
                              $cL = $db->rows;                    
                        ?>
                        <select id="idlongitud" name="idlongitud">
                            <?php if ($cL==1){ ?>
                                    <option value="<?php echo $producto_torneado["idlongitud"] ?>"><?php echo $producto_torneado["idlongitud"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                              
                               for ($i = 0; $i < $cL; $i++) {
                                     $dL = $db->results[$i];
                                      ?>
                                       <option value="<?php echo $dL["idlongitud"] ?>"
                                         <?php
                                         if($producto_torneado["idlongitud"]==$dL["idlongitud"])
				         echo "selected='selected'";
                                         ?> ><?php echo $dL["idlongitud"] ?></option>
                                      <?PHP
                               }
                              }
                            ?>
                        </select>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Espesor</label>
                        <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idespesor='".$producto_torneado["idespesor"]."' "; }
                              $sqlE="select distinct idespesor from espesor ".$wh." order by idespesor asc"; 
                              $db->doQuery($sqlE, 1);
                              $cE = $db->rows;                  
                        ?>
                        <select id="idespesor" name="idespesor">
                            <?php if ($cE==1){ ?>
                                    <option value="<?php echo $producto_torneado["idespesor"] ?>"><?php echo $producto_torneado["idespesor"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                              
                               for ($i = 0; $i < $cE; $i++) {
                                     $dE = $db->results[$i];
                                       ?>
                                       <option value="<?php echo $dE["idespesor"] ?>"
                                         <?php
                                         if($producto_torneado["idespesor"]==$dE["idespesor"])
				         echo "selected='selected'";
                                         ?> ><?php echo $dE["idespesor"] ?></option>
                                      <?PHP
                                }
                               }
                            ?>
                        </select>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Radio</label>
                          <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idradio='".$producto_torneado["idradio"]."' "; }
                              $sqlR="select distinct idradio from radio ".$wh." order by idradio asc"; 
                              $db->doQuery($sqlR, 1);
                              $cR = $db->rows;                  
                         ?>
                        <select id="idradio" name="idradio">
                          <?php if ($cR==1){ ?>
                                    <option value="<?php echo $producto_torneado["idradio"] ?>"><?php echo $producto_torneado["idradio"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                               for ($i = 0; $i < $cR; $i++) {
                                     $dR = $db->results[$i];
                                      
                                      ?>
                                       <option value="<?php echo $dR["idradio"] ?>"
                                         <?php
                                         if($producto_torneado["idradio"]==$dR["idradio"])
				         echo "selected='selected'";
                                         ?> ><?php echo $dR["idradio"] ?></option>
                                      <?PHP
                               }
                               }
                            ?>
                        </select>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Tipo de Corte</label>
                         <?php
                          if (!empty($_REQUEST['id'])){ 
                              $wh="where idtipo_corte='".$producto_torneado["idtipo_corte"]."' "; }
                              $sqlTC="select * from tipo_corte ".$wh." order by idtipo_corte asc"; 
                              $db->doQuery($sqlTC, 1);
                              $cTC = $db->rows;                
                        ?>
                        <select id="idtipo_corte" name="idtipo_corte">
                            <?php if ($cTC==1){ ?>
                                    <option value="<?php echo $producto_torneado["idtipo_corte"] ?>"><?php echo $producto_torneado["idtipo_corte"] ?></option>
                            <?php }else{ ?>
                            <option value="">-Seleccione-</option>
                            <?php 
                              
                               for ($i = 0; $i < $cTC; $i++) {
                                     $dTC = $db->results[$i];
                                      ?>
                                       <option value="<?php echo $dTC["idtipo_corte"] ?>"
                                         <?php
                                         if($producto_torneado["idtipo_corte"]==$dTC["idtipo_corte"])
				         echo "selected='selected'";?> ><?php echo $dTC["idtipo_corte"] ?></option>
                                      <?PHP
                               }
                              }
                            ?>
                        </select>
                     </div>
                    <div class="section">                                                                                                  
                        <label>Valor</label>
                        <div>
                            <input type="text" name="valor" id="valor" class="medium" value="<?php echo $producto_torneado["valor"] ?>">
                            <span class="f_help">Limite de caracteres 9/<span class="valor"></span></span>
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($producto_torneado["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/producto_torneado/<?php echo $producto_torneado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
                       <?php }?>                      
                        <label>Subir nueva imagen (196px x 246px) (.png, .jpg)</label>
                        <div>
                            <input type="file" name="img" id="img" />
                            <input type="hidden" value="1" name="tipo" id="tipo">
                        </div>
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
                            <th><span class="th_wrapp">Tipo de Inserto</span></th>
                            <th><span class="th_wrapp">Material</span></th>
                            <th><span class="th_wrapp">Geometria</span></th>
                            <th><span class="th_wrapp">Angulo</span></th>
                            <th><span class="th_wrapp">Longitud</span></th>
                            <th><span class="th_wrapp">Espesor</span></th>
                            <th><span class="th_wrapp">Radio</span></th>
                            <th><span class="th_wrapp">Tipo de Corte</span></th>
                            <th><span class="th_wrapp">Valor</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM producto_torneado order by idproducto_torneado asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["idtipo_inserto"] ?></td>
                                <td><?php echo $img["idmateriales"] ?></td>
                                <td><?php echo $img["idgeometria"] ?></td>
                                <td><?php echo $img["idangulo"] ?></td>
                                <td><?php echo $img["idlongitud"] ?></td>
                                <td><?php echo $img["idespesor"] ?></td>
                                <td><?php echo $img["idradio"] ?></td>
                                <td><?php echo $img["idtipo_corte"] ?></td>
                                <td><?php echo $img["valor"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/producto_torneado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center idproducto_torneado" width="100px">
                                    <a id="<?php echo $img["idproducto_torneado"] ?>" class="Delete uibutton special" tableToDelete="producto_torneado" nameField="idproducto_torneado">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idproducto_torneado"] ?>">Editar</a>
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