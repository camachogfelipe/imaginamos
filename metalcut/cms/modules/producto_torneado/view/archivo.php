<?php
if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    $row = 1;
    $tipo = $_FILES['archivo']['type']; 
    $tamanio = $_FILES['archivo']['size']; 
    $archivotmp = $_FILES['archivo']['tmp_name'];
    $tipo_inser=$_POST['idtipo_inserto'];
    $tb=0; $tm=0; $cant=0;
    $handle = fopen($archivotmp, "r"); //Coloca el nombre de tu archivo .csv que contiene los datos
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { //Lee toda una linea completa, e ingresa los datos en el array 'data'
       // print_r($data);
        if ($row>1){
            $num = count($data); //Cuenta cuantos campos contiene la linea (el array 'data')
            $sql="select * from producto_torneado where ";
            $cadena = "INSERT INTO producto_torneado(
                             idtipo_inserto,
                             idmateriales,
                             idgeometria,	
                             idangulo,	
                             idlongitud,
                             idespesor,
                             idradio,
                             idtipo_corte,
                             valor,
                             imagen) values("; //Cambia los valores 'CampoX' por el nombre de tus campos de tu tabla y colócales los necesarios
            for ($c=0; $c < $num; $c++) { //Aquí va colocando los campos en la cadena, si aun no es el último campo, le agrega la coma (,) para separar los datos
                if ($c==($num-1))
                      $cadena = $cadena."'".  $data[$c] . "'";
                else
                      $cadena = $cadena."'".$data[$c] . "',";
                
                $dato[$c]=$data[$c];
                
                
            }
            $sql.="idtipo_inserto='".$dato[0]."' and
                 idmateriales='".$dato[1]."' and
                 idgeometria='".$dato[2]."' and	
                 idangulo='".$dato[3]."' and	
                 idlongitud='".$dato[4]."' and
                 idespesor='".$dato[5]."' and
                 idradio='".$dato[6]."' and
                 idtipo_corte='".$dato[7]."' ";
           // echo $sql."<br>"; 
            $db->doQuery($sql, 1);
            $cant = $db->rows;     
            $cadena = $cadena.");"; //Termina de armar la cadena para poder ser ejecutada
            //echo $cadena."<br>";  //Muestra la cadena para ejecutarse
            if ($cant==0 and $tipo_inser==$dato[0]){
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

/*
$db->doQuery("SELECT idproducto_torneado FROM producto_torneado  ORDER BY idproducto_torneado DESC Limit 1", 1);
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
           $sql1="select count(*) as total from producto_torneado 
               where idtipo_inserto='".$idtipo_inserto."'
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
            if ($tt==0){
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
            }else{
                $Erno = 6;
            }
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
 * 
 * /
 */
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Carga de Productos</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Torneado</h1></legend>

                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $producto_torneado["idproducto_torneado"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Desacargar Plantilla</label>
                        <a href="plantilla_productos_torneado.csv" target="_blank">Descargar</a>
                        <br>
                        Recuerde subir por ftp las imagenes a la siguiente ruta assets/img/producto_torneado
                    </div>
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
                                <option value="">-Seleccione-</option>
                                <?php 
                                   for ($i = 0; $i < $cTI; $i++) {
                                         $dTI = $db->results[$i];
                                          ?>
                                           <option value="<?php echo $dTI["idtipo_inserto"] ?>"
                                             <?php
                                             if($producto_torneado["idtipo_inserto"]==$dTI["idtipo_inserto"])
                                             echo "selected='selected'";
                                             ?> ><?php echo $dTI["imagen"] ?></option>
                                          <?PHP
                                   }
                               
                            ?>
                        </select>
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
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
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