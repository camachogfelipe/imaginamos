<?php
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id1"])) {
    $id1 = $_POST["id1"];
    $descripcion = $_POST["descripcion"];
    $texto = $_POST["texto"];
    
    $descripcion = str_replace("'", "&#39;" , $descripcion);
    $descripcion = str_replace('"', "&quot;", $descripcion);
    $text2 = strip_tags($texto);
    $text2 = strlen($text2); 
    if ($descripcion == '' || $texto == '') {
        $Erno = 2;
    } else {
        if($text2 > 400){
            $Erno = 4 ;
        }else{
        $db->doQuery("UPDATE quienes_des SET descripcion='" . $descripcion . "',texto='".$texto."' WHERE idquienes_des=" . $id1, 4);
      
        $Erno = 1;
    }
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/quienes", "quienes_" . $id1, "412_155_quienes_" . $id1, 412, 155);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE quienes_des SET imagen='" . $retorno["NameFile"] . "' WHERE idquienes_des=" . $id1, 4);
        $Erno = 1;
    }
}
}

$db->doQuery("SELECT * FROM quienes_des WHERE idquienes_des=1", 1);
$info = $db->results[0];
          

?>

<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Quienes Somos</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        
        <fieldset>                        
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idquienes_des"]; ?>" name="id1" id="id1">
                <div class="section">
                    <label>Quienes Somos</label>
                    <div>
                        <textarea name="descripcion" id="descripcion" class="large"><?php echo $info["descripcion"] ?></textarea>
                        <span class="f_help">Limite de caracteres 1500<span class="descripcion"></span></span>
                    </div>
                </div><br/>
                <div class="section">
                    <legend>Mision y Vision </legend> <br/>
                    <label>Texto Descriptivo </label>
                    <div>
                        <textarea name="texto" id="texto" class="large"><?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 213</span>
                    </div>
                </div>  
                 <div class="section">
                    <label>Imagen actual </label> <br /><br />
                    <div>
                        <img src="../../../../assets/img/quienes/<?php echo $info["imagen"] . "?" . rand(0, 9999999); ?>" width="150" />
                    </div>
                    <br />
                    <div>
                      <label>Subir nueva imagen (412px x 155px) (.jpg - .png)</label><br />
                        <input type="file" name="img" id="img" />
                    </div>
                </div>                              
                <br><br>                  
                <div><a id="submitForm"  class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>

        </fieldset>
        <br><br>
        <p>&nbsp;</p>
    </div>
</div>

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
            ?><script>showError('Limite de caracteres excedido',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>