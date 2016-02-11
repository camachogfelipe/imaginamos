<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
  $id = $_POST["id"];
  if ($id == 0) {
    // var_dump($_POST);exit;
    if (GetData("titulo1") == "" || GetData("titulo2") == "" || GetData("titulo3") == "") {
      $val = 3;
    } else {
      //Primero creamos el campo en la bd
      $db->doQuery("INSERT INTO banner (id) VALUES (NULL)", INSERT_QUERY);
      $id = $db->getLastId();
      $db->doQuery("UPDATE banner SET 
                                    titulo1 ='" . GetData("titulo1") . "', 
                                    titulo2 ='" . GetData("titulo2") . "', 
                                    titulo3 ='" . GetData("titulo3") . "',                                                                                                                
                                    link ='" . GetData("link") . "'                                                                                                                
                                    WHERE id=" . $id, 4);
      //subimos la imagen 
      $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/banners", "banner_" . $id, "2000_600_banner_" . $id, 2000, 600);
      $retorno1 = ClassFile::UploadImagenFile("img1", "../../../../imagenes/banners", "banner1_" . $id, "350_350_banner1_" . $id, 350, 350);
      if ($retorno["Status"] == "Uploader") {
        //  echo $retorno["NameFile"];
        $db->doQuery("UPDATE banner SET img_fondo='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
        $val = 1;
      } else {
        //  echo $retorno["Error"];
        $val = 2;
      }
      if ($retorno1["Status"] == "Uploader") {
        //  echo $retorno["NameFile"];
        $db->doQuery("UPDATE banner SET img_transparente='" . $retorno1["NameFile"] . "' WHERE id=" . $id, 4);
        $val = 1;
      } else {
        //  echo $retorno["Error"];
        $val = 2;
      }
      // $id= $ids;
    }
  } else {
    $db->doQuery("UPDATE banner SET 
                                    titulo1 ='" . GetData("titulo1") . "', 
                                    titulo2 ='" . GetData("titulo2") . "', 
                                    titulo3 ='" . GetData("titulo3") . "',                                                                                                                
                                    link ='" . GetData("link") . "'                                                                                                                
                                    WHERE id=" . $id, 4);
    //subimos la imagen 
    $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/banners", "banner_" . $id, "2000_600_banner_" . $id, 2000, 600);
    $retorno1 = ClassFile::UploadImagenFile("img1", "../../../../imagenes/banners", "banner1_" . $id, "350_350_banner1_" . $id, 350, 350);
    if ($retorno["Status"] == "Uploader") {
      //  echo $retorno["NameFile"];
      $db->doQuery("UPDATE banner SET img_fondo='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
      $val = 2;
    } else {
      //  echo $retorno["Error"];
      $val = 2;
    }
    if ($retorno1["Status"] == "Uploader") {
        //  echo $retorno["NameFile"];
        $db->doQuery("UPDATE banner SET img_transparente='" . $retorno1["NameFile"] . "' WHERE id=" . $id, 4);
        $val = 2;
      } else {
        //  echo $retorno["Error"];
        $val = 2;
      }
  }
  // $ids = $id;
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM banner WHERE id=" . $id, 1);
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
      HOME >> BANNER >> <?php echo  ($id == 0) ? "AGREGANDO BANNER" : "EDITANDO BANNER" ?>
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <!--Inicio del contenido del modulo-->

      <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

      <fieldset>
        <h3><?php echo  ($id == 0) ? "AGREGANDO BANNER" : "EDITANDO BANNER" ?></h3>

        <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

          <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">

          <div style="margin-top: 36px;">
            <label>Primer T&iacute;tulo</label>
            <div>
              <input type="text" id="titulo1" name="titulo1" PlaceHolder="Agrega tu primer titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo1"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 12 / <span class="titulo1"></span></span>
            </div>

          </div>
          <div style="margin-top: 36px;">
            <label>Segundo T&iacute;tulo</label>
            <div>
              <input type="text" id="titulo2" name="titulo2" PlaceHolder="Agrega tu segundo titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo2"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 10 / <span class="titulo2"></span></span>
            </div>

          </div>
          <div style="margin-top: 36px;">
            <label>Tercer T&iacute;tulo</label>
            <div>
              <input type="text" id="titulo3" name="titulo3" PlaceHolder="Agrega tu tercer titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo3"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 8 / <span class="titulo3"></span></span>
            </div>

          </div>

          <div style="margin-left: 200px;margin-top: 44px;">
            <label style="position: absolute;margin-left: -201px;">Imagen de Fondo</label>
            <label style="color:red;">Subir imagen ( 2000px  x  600px )</label><br><br>
            <div>
              <input type="file" name="img" id="img" />
            </div>
          </div>
          <p>&nbsp;</p><p>&nbsp;</p>
          <div style="margin-left: 200px;">
            <label style="position: absolute;margin-left: -201px;">Imagen trasparente</label>
            <label style="color:red;">Subir imagen ( 350px  x  350px )</label><br><br>
            <div>
              <input type="file" name="img1" id="img1" />
            </div>
          </div>
          <div style="margin-top: 36px;">
            <label>link</label>
            <div>
              <input type="text" id="link" name="link" PlaceHolder="Agrega tu link" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["link"]; ?>" />

            </div>

          </div>
          <p>&nbsp;</p><p>&nbsp;</p>
          <p>&nbsp;</p><br><br>
          <?php if ($id > 0) { ?>
            <div>
              <label>Imagen de fondo actual <?php echo $oficina["img"] ?></label>
              <div>
                <br><br>
                <img src="../../../../imagenes/banners/2000_600_<?php echo $oficina["img_fondo"] . "?" . rand(0, 9999999); ?>" width="500" height="150" />
              </div>
            </div>
            <p>&nbsp;</p>
            <div style="position: absolute;margin-top: -232px;margin-left: 569px;">
              <label>Imagen transparente actual <?php echo $oficina["img"] ?></label>
              <div>
                <br><br>
                <img src="../../../../imagenes/banners/350_350_<?php echo $oficina["img_transparente"] . "?" . rand(0, 9999999); ?>" width="170" height="170" />
              </div>
            </div>
          <?php } ?>

        </form>
      </fieldset>
      <p>&nbsp;</p>


      <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
    </div>
  </div>


  <!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
  $('#titulo1').limit('12','.titulo1');
  $('#titulo2').limit('10','.titulo2');
  $('#titulo3').limit('8','.titulo3');  

</script>
<?php
if (isset($val)) {
  $erno = $val;
  if (intval($erno)) {
    if ($erno == 1) {
      echo '<script>setTimeout(\'alert("Banner agregado correctamente");\',400);</script>';
    }
    if ($erno == 2) {
      echo '<script>setTimeout(\'alert("Banner editado correctamente");\',400);</script>';
    }
    if ($erno == 3) {
      echo '<script>setTimeout(\'alert("Agrega todos los campos");\',400);</script>';
    }
  }
}
?>