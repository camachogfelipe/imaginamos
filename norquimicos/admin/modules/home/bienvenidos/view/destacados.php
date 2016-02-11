<?php
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
  $id = $_POST["id"];

  if ($id == 0) {
    $id = $db->getLastId();
    $id = 1;
  } else {

    $db->doQuery("UPDATE generales SET 
                                        titulo ='" . GetData("titulo") . "', 
                                        texto='" . GetData("texto") . "'                                       
                                        WHERE id=" . $id, 4);

    $db->doQuery("SELECT * FROM generales WHERE id=" . $id, 1);
    $otro = $db->results[0];
    $retorno = ClassFile::UploadImagenFile("img", "../../../../../imagenes/destacados", "destacados_" . $id, "202_100_destacados_" . $id, 202, 100);
    if ($retorno["Status"] == "Uploader") {
      $db->doQuery("UPDATE generales SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
      $val = 2;
    } else {
      $val = 2;
    }
  }
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM generales WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
  function cambiar(valor){
    if(valor ==1){
      document.getElementById("imagen").style.display= "";
      document.getElementById("video").style.display= "none";
    }else if(valor ==2 || valor == 3){
      document.getElementById("video").style.display= "";
      document.getElementById("imagen").style.display= "none";
    }
  }
</script>
<!-- full width -->
<div class="widget">
  <div class="header">
    <span>
      <span class="ico gray window"></span>
      HOME >> DESTACADOS >> EDITANDO DESTACADO
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <!--Inicio del contenido del modulo-->

      <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

      <fieldset>
        <h3><?php echo  ($id == 0) ? "" : "Editando Destacados" ?></h3>

        <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

          <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">

          <div style="margin-top: 36px;">
            <label>T&iacute;tulo</label>
            <div>
              <input type="text" name="titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
            </div>

          </div>

          <div style="margin-top: 36px;">
            <label>Texto</label>
            <div>
              <textarea name="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
            </div>
          </div>

          <p>&nbsp;</p>
          <div id="imagen" name="imagen">
            <div style="margin-top: 36px;">

              <label>Imagen</label>
              <div>
                <img style="margin-left: 200px; margin-top: -25px;" src="../../../../../imagenes/destacados/202_100_<?php echo  $oficina["img"] . "?" . rand(0, 9999999); ?>" />
              </div>

            </div>
            <p>&nbsp;</p>
            <div style="  margin-left: 200px; margin-top: -25px;">
              <label>Subir imagen (280px x 150px)</label>
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
      echo '<script>setTimeout(\'alert("Destacado todos los campos ");\',400);</script>';
    }
  }
}
?>