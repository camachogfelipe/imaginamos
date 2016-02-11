<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
  $id = $_POST["id"];

  if ($id == 0) {
    $id = 1;
  } else {
    //print_r(GetData("texto"));    exit;
    $db->doQuery("UPDATE bienvenidos SET 
                                        titulo ='" . GetData("titulo") . "', 
                                        subtitulo ='" . GetData("subtitulo") . "', 
                                        texto='" . GetData("texto") . "',                                       
                                        globo='" . GetData("globo") . "'                                       
                                        WHERE id=" . $id, 4);
    $retorno = ClassFile::UploadImagenFile("img", "../../../../../imagenes/destacados", "destacados_" . $id, "215_215_destacados_" . $id, 215, 215);
    if ($retorno["Status"] == "Uploader") {
      $db->doQuery("UPDATE bienvenidos SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
      $val = 2;
    } else {
      $val = 2;
    }
  }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM bienvenidos WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<!-- full width -->
<div class="widget">
  <div class="header">
    <span>
      <span class="ico gray window"></span>
      HOME >> BIENVENIDOS >> EDITANDO 
    </span>
  </div>
  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <h3><?php echo  ($id == 0) ? "" : "Editando Texto de bienvenida" ?></h3>
        <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">
          <div style="margin-top: 36px;">
            <label>T&iacute;tulo</label>
            <div>
              <input type="text" id="titulo" name="titulo" PlaceHolder="Agrega tu titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 11 / <span class="titulo"></span></span>
            </div>

          </div>
          <div style="margin-top: 36px;">
            <label>Subt&iacute;tulo</label>
            <div>
              <input type="text" id="subtitulo" name="subtitulo" PlaceHolder="Agrega tu subtitulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["subtitulo"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 39 / <span class="subtitulo"></span></span>
            </div>

          </div>
          <div style="margin-top: 36px;">
            <label>Texto</label>
            <div>
              <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" PlaceHolder="Agrega tu texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 510 / <span class="texto"></span></span>
            </div>
          </div>
          <p>&nbsp;</p>
           <div style="margin-top: 36px;">
            <label>Texto Globo</label>
            <div>
              <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" PlaceHolder="Agrega tu texto del globo" name="globo" id="globo" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["globo"]; ?></textarea>
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 190 / <span class="globo"></span></span>
            </div>
          </div>
          <p>&nbsp;</p>
          <div id="imagen" name="imagen">
            <div style="margin-top: 36px;">
              <label>Imagen</label>
              <div>
                <img style="margin-left: 200px; margin-top: -25px;" src="../../../../../imagenes/destacados/215_215_<?php echo  $oficina["img"] . "?" . rand(0, 9999999); ?>" />
              </div>
            </div>
            <p>&nbsp;</p>
            <div style="  margin-left: 200px; margin-top: -25px;">
              <label style="color:red;">Subir imagen (215px x 215px)</label>
              <div>
                <input  style=" margin-top: 13px;" type="file" name="img" id="img" />
              </div>
            </div>
          </div>          
        </form>        
      </fieldset>
      <p>&nbsp;</p>
      <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
    </div>
  </div>
  <!--Fin del Contenido del Modulo-->
</div>
<script>
  cambiar(<?php echo  $oficina["id_tipos"] ?>);
</script>
<?php
if (isset($val)) {
  $erno = $val;
  if (intval($erno)) {
    if ($erno == 1) {
      echo '<script>setTimeout(\'alert("Bienvenidos agregado correctamente");\',400);</script>';
    }
    if ($erno == 2) {
      echo '<script>setTimeout(\'alert("Bienvenidos editado correctamente");\',400);</script>';
    }
    if ($erno == 3) {
      echo '<script>setTimeout(\'alert("Agrega todos los campos ");\',400);</script>';
    }
  }
}
?>
<script type="text/javascript" language="javascript">
  $('#titulo').limit("11",".titulo");
  $('#subtitulo').limit("39",".subtitulo");
  $('#texto').limit("510",".texto");
  $('#globo').limit("190",".globo");
</script>