<?php
$id = (int) $_POST["id"];
$id_collage=$_REQUEST['collage'];
$id_imagen=$_REQUEST['imagen'];
// Consultamos la img actual del banner

$db->doQuery("SELECT  MAX(idgaleria) as total FROM galeria  ", 1);
$banner1 = $db->results;
$img = $banner1[0]["total"] + 1;
//echo "Hola-->".$banner1[0]["total"];
// Validamos si hizo post y desea subir una imagen
if (empty($id)) {
    //echo "aca2..";
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["descripcion"];
    if($titulo == "" || $subtitulo == ""){
        //$Erno = 2;
    }else{
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $subtitulo = str_replace("'", "&#39;" , $subtitulo);
        $subtitulo = str_replace('"', "&quot;", $subtitulo);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/galeria_c", "banner_" . $img, "520_392_banner_" . $img, 520, 392);
        if ($retorno["Status"] == "Uploader") {
            $db->doQuery("INSERT INTO galeria(id_collage, id_imagen, titulo,descripcion,imagen) VALUES ('".$id_collage."','".$id_imagen."','" . $titulo . "','" . $subtitulo . "','" . $retorno["NameFile"]. "')", 2);
            $Erno = 1;
        } else {
            $Erno = 3;
        }
       // echo "INSERT INTO galeria(id_collage, id_imagen, titulo,descripcion,imagen) VALUES ('".$id_collage."','".$id_imagen."','" . $titulo . "','" . $subtitulo . "','" . $retorno["NameFile"] . "')";
    }
}else{
    //echo "aca..";
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["descripcion"];
    if($titulo == "" || $subtitulo == ""){
        //$Erno = 2;
    }else{
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $subtitulo = str_replace("'", "&#39;" , $subtitulo);
        $subtitulo = str_replace('"', "&quot;", $subtitulo);
//        echo "UPDATE galeria SET titulo='" . $titulo . "',descripcion='" . $subtitulo . "' WHERE idgaleria=" . $id;
       $db->doQuery("UPDATE galeria SET titulo='" . $titulo . "',descripcion='" . $subtitulo . "' WHERE idgaleria=" . $id, 4);
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/galeria_c", "banner_" . $id, "520_392_banner_" . $id, 520, 392);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE galeria SET titulo='".$titulo."', descripcion='".$subtitulo."',  imagen='" . $retorno["NameFile"]. "' WHERE idgaleria=" . $id, 4);
        $Erno = 1;
    } else {
        
    }
    //echo "UPDATE galeria SET titulo='".$titulo."', descripcion='".$subtitulo."',  imagen='" . $retorno["NameFile"]. "' WHERE idgaleria=" . $id;
    $Erno = 1;
    
    
    }
}
$db->doQuery("SELECT * FROM galeria WHERE id_collage='".$id_collage."' and id_imagen='".$id_imagen."' ", 1);
$banner = $db->results[0];


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
        <span class="ico gray window"></span>Collage <?php echo $id_collage;  ?> Imagen <?php echo $id_imagen; ?></span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->

        <a class="uibutton icon normal answer" href="index.php">Galer&#237;a</a>

        <fieldset>
<legend>Collage</legend>
           <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?= $banner["idgaleria"] ?>" name="id" id="id">
                <input type="hidden" value="<?= $id_collage; ?>" name="id_collage" id="id_collage">
                <input type="hidden" value="<?= $id_imagen; ?>" name="id_imagen" id="id_imagen">
                
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titulo" id="titu" class="medium" value="<?php echo $banner["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 35/<span class="titu"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Descripcion</label>
                    <div>
                        <input type="text" name="descripcion" id="descripcion" class="medium" value="<?php echo $banner["descripcion"] ?>">
                        <span class="f_help">Limite de caracteres 50/<span class="subtitu"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Imagen actual</label> <br /><br />
                    <div>
                        <img src="../../../../assets/img/galeria_c/<?php echo $banner["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                    </div>
                    <br />
                    <div>
                        <label>Subir nueva imagen (520px x 392px)(.png,.jpg)</label><br />
                        <input type="file" name="img" id="img" />
                    </div>
                </div>
                <br />
                <p>&nbsp;</p>
                
                 <div>
                     <?php
                     $db->doQuery("SELECT  COUNT(idgaleria) as total FROM galeria_imagenes where idgaleria='".$id_imagen."'  ", 1);
                     //echo "SELECT  count(idgaleria) as total FROM galeria_imagenes where idgaleria='".$id_imagen."'  ";
                     $gal = $db->results;
                     $imgTT = $gal[0]["total"];
                    // echo 'img-->'.$imgTT ;
                     //if ($imgTT<5){
                    ?>
                     <a id="submitForm"  class="uibutton normal large">Guardar</a>
                     <a href="index.php?seccion=galeria_img&idgaleria=<?php echo $banner["idgaleria"] ?>" id="bbton"  class="uibutton normal large">Imagenes Galeria</a></div>
                     <?php
                     //}
                     ?>
           </form>
            <p>&nbsp;</p>
        </fieldset>
        <p>&nbsp;</p>     
    </div>
</div>
<script type="text/javascript" language="javascript">
    $('#titu').limit('35','.titu');
    $('#subtitu').limit('50','.subtitu');
</script>
<!--Fin del Contenido del Modulo-->
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