<?php
$id = (int) $_REQUEST["id"];
$id_galeria=$_REQUEST['idgaleria'];
$db->doQuery("SELECT  MAX(idgaleria_imagenes) as total FROM galeria_imagenes  ", 1);
$banner = $db->results;
//print_r($banner);
$img = $banner[0]["total"] + 1;
//echo "xxxHola-->".$img;
// Validamos si hizo post y desea subir una imagen
if ($id==0) {
   // echo "aca2..";
        $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/galeria_img", "banner_" . $img, "520_392_banner_" . $img, 520, 392);
        if ($retorno["Status"] == "Uploader") {
            $db->doQuery("INSERT INTO galeria_imagenes(idgaleria, imagen) VALUES ('".$id_galeria."','" . $retorno["NameFile"] . "')", 2);
            //echo "INSERT INTO galeria_imagenes(idgaleria, imagen) VALUES ('".$id_galeria."'," . $retorno["NameFile"] . "')";
            $Erno = 1;
        } else {
            //$Erno = 3;
        }
       // echo "INSERT INTO galeria(id_collage, id_imagen, titulo,descripcion,imagen) VALUES ('".$id_collage."','".$id_imagen."','" . $titulo . "','" . $subtitulo . "','" . $retorno["NameFile"] . "')";
}else{
   // echo "aca..";
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/galeria_img", "banner_" . $id, "520_392_banner_" . $id, 520, 392);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE galeria_imagenes SET imagen='" . $retorno["NameFile"] . "' WHERE idgaleria_imagenes=" . $id, 4);
        $Erno = 1;
    } else {
        
    }
    $Erno = 1;
}

$db->doQuery("SELECT * FROM galeria_imagenes WHERE  idgaleria_imagenes='".$id."' ", 1);
$banner = $db->results[0];
// Consultamos la img actual del banner

?>
    <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                               
                $("#submitForm").click(function(){
                    
                    var archivo = $("#img").val(); 
                    if(archivo != ''){
                        if( !archivo.match(/.(PNG)|(JPG)|(png)|(jpg)$/) ){
                             showError('Ext. archivo invalida',8000);
                        return false;
                        }
                     }
                        $('#forminterno').submit();
                        
               
                });
            });
        </script>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Galer&#237;a</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->

        <a class="uibutton icon normal answer" href="index.php">Galer&#237;a</a>

        <fieldset>
<legend>Collage</legend>
           <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?= $banner["idgaleria_imagenes"] ?>" name="id" id="id">
                <input type="hidden" value="<?= $id_galeria; ?>" name="idgaleria" id="idgaleria">
                <div class="section">
                    <label>Imagen actual</label> <br /><br />
                    <div>
                        <?php
                            if (!empty($banner["imagen"])){
                        ?>
                        <img src="../../../../assets/img/galeria_img/<?php echo $banner["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        <?php
                            }
                        ?>
                    </div>
                    <br />
                    <div>
                        <label>Subir nueva imagen (520px x 392px)(.png, .jpg)</label><br />
                        <input type="file" name="img" id="img" />
                    </div>
                </div>
                <br />
                <p>&nbsp;</p>
                <?php
                $db->doQuery("SELECT  COUNT(idgaleria) as total FROM galeria_imagenes where idgaleria='".$id_galeria."'  ", 1);
                    // echo "SELECT  count(idgaleria) as total FROM galeria_imagenes where idgaleria='".$id_galeria."'  ";
                     $gal = $db->results;
                     $imgTT = $gal[0]["total"];
                    // echo 'img-->'.$imgTT ;
                     //if ($imgTT<5 and $id==0){
                     ?>
                        <div><a id="submitForm"  class="uibutton normal large">Guardar</a></div>
                 <?php
                     //}else if ($id!=0){
                     ?>
                        <!--<div><a id="submitForm"  class="uibutton normal large">Guardar</a></div>-->
                     <?php
                     //}
                     ?>
            </form>
            <p>&nbsp;</p>
        </fieldset>
        <p>&nbsp;</p>     
        <fieldset>
            <table class="display" >
            <thead>
                <tr>
                    <th><span class="th_wrapp">N</span></th>
                    <th><span class="th_wrapp">Imagen</span></th>
                    <th><span class="th_wrapp">Aciones</span></th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $j=0;
                    $data="SELECT * FROM galeria_imagenes WHERE  idgaleria='".$id_galeria."' ";
                    //echo $data;
                    $db->doQuery($data, SELECT_QUERY);
                    $data2 = $db->results;
                    $fil = $db->rows;
                  //  echo "SELECT * FROM galeria_imagenes WHERE  idgaleria='".$id_galeria."' <br>";
                  //  print_r($data2);
                    
                  //  echo '<br>-->'.$fil;
                    for($i = 0 ; $i < $fil ; $i++){ 
                        $j++;
                        $data2 = $db->results[$i]; ?>
                    <tr class="odd gradeX">
                        <td class="center" width="70px"><?php echo $j ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/galeria_img/<?php echo $data2["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center" width="100px">
                                    <a class="uibutton"   href="index.php?seccion=galeria_img&idgaleria=<?php echo $id_galeria ?>&id=<?php echo $data2["idgaleria_imagenes"] ?>">Editar</a>
                                    <a id="<?php echo $data2["idgaleria_imagenes"] ?>" class="Delete uibutton special" tableToDelete="galeria_imagenes" nameField="idgaleria_imagenes">Eliminar</a>
                                </td>  
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
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