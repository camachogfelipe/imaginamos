<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
  $id = $_POST["id"];
  if ($id == 0) {
    // var_dump($_POST);exit;
    if (GetData("nombre") == "" || GetData("referencia") == "" || GetData("presentacion") == "" || GetData("texto") == "") {
      $val = 3;
    } else {
      //Primero creamos el campo en la bd
      $db->doQuery("INSERT INTO productos (id) VALUES (NULL)", INSERT_QUERY);
      $id = $db->getLastId();
      $db->doQuery("UPDATE productos SET 
                                    nombre ='" . GetData("nombre") . "', 
                                    referencia ='" . GetData("referencia") . "', 
                                    presentacion ='" . GetData("presentacion") . "', 
                                    texto ='" . GetData("texto") . "'                                                                                                                                                    
                                    WHERE id=" . $id, 4);
      //subimos la imagen 
      $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/productos", "productos_" . $id, "productos_" . $id, 202, 138);
   
      if ($retorno["Status"] == "Uploader") {
        //  echo $retorno["NameFile"];
        $db->doQuery("UPDATE productos SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
        $val = 1;
      } else {
        //  echo $retorno["Error"];
        $val = 3;
      }
      
      // $id= $ids;
    }
  } else {
  $db->doQuery("UPDATE productos SET 
                                    nombre ='" . GetData("nombre") . "', 
                                    referencia ='" . GetData("referencia") . "', 
                                     presentacion ='" . GetData("presentacion") . "', 
                                    texto ='" . GetData("texto") . "'                                                                                                                                                    
                                    WHERE id=" . $id, 4);
      //subimos la imagen 
      $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/productos", "productos_" . $id, "productos_" . $id, 202, 138);
   
      if ($retorno["Status"] == "Uploader") {
        //  echo $retorno["NameFile"];
        $db->doQuery("UPDATE productos SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
        $val = 2;
      } else {
        //  echo $retorno["Error"];
        $val = 2;
      }
  }
  // $ids = $id;
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM productos WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<!-- full width -->
<div class="widget">
  <div class="header">
    <span>
      <span class="ico gray window"></span>
      HOME >> BANNER >> <?php echo  ($id == 0) ? "AGREGANDO " : "EDITANDO " ?>
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <!--Inicio del contenido del modulo-->

      <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

      <fieldset>
        <h3><?php echo  ($id == 0) ? "AGREGANDO productos" : "EDITANDO productos" ?></h3>

        <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

          <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">

          <div style="margin-top: 36px;">
            <label>Nombre producto</label>
            <div>
              <input type="text" id="titulo1" name="nombre" PlaceHolder="Agregar nombre de producto" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["nombre"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 25 / <span class="titulo1"></span></span>
            </div>

          </div>
          <div style="margin-top: 36px;">
            <label>Referencia</label>
            <div>
              <input type="text" id="titulo2" name="referencia" PlaceHolder="Agregar referencia de producto" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["referencia"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 12 / <span class="titulo2"></span></span>
            </div>

          </div>
           <div style="margin-top: 36px;">
            <label>Presentacion</label>
            <div>
              <input type="text" id="presentacion" name="presentacion" PlaceHolder="Agregar presentacion de producto" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["presentacion"]; ?>" />
              <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 12 / <span class="presentacion"></span></span>
            </div>

          </div>
           <div style="margin-top: 36px;">
            <label>Texto</label>
            <div>
              <textarea name="texto" id="texto" PlaceHolder="Agregar texto de producto" style="width: 431px;height: 200px;margin-top: -25px;margin-left: 200px;resize: none;"><?php echo $oficina["texto"]; ?></textarea>
              <span class="f_help" style="margin-left: 200px;"> Limite de caracteres 900 / <span class="texto"></span></span>
            </div>
          </div>

          <div style="margin-left: 200px;margin-top: 44px;">
            <label style="position: absolute;margin-left: -201px;">Imagen producto</label>
            <label style="color:red;">Subir imagen ( 202px  x  138px )</label><br><br>
            <div>
              <input type="file" name="img" id="img" />
            </div>
          </div>
                 
          <?php if ($id > 0) { ?>
            <div >
              <label>Imagen de producto actual </label>
              <div style="margin-left: 200px;">
                <br><br>
                <img src="../../../../imagenes/productos/<?php echo $oficina["img"]  ?>" width="202" height="138" />
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
  $('#titulo1').limit('25','.titulo1');
  $('#titulo2').limit('12','.titulo2');
  $('#presentacion').limit('12','.presentacion');
  $('#texto').limit('900','.texto');  

</script>
<?php
if (isset($val)) {
  $erno = $val;
  if (intval($erno)) {
    if ($erno == 1) {
      echo '<script>setTimeout(\'alert("Agregado correctamente");\',400);</script>';
    }
    if ($erno == 2) {
      echo '<script>setTimeout(\'alert("Editado correctamente");\',400);</script>';
    }
    if ($erno == 3) {
      echo '<script>setTimeout(\'alert("Agrega todos los campos");\',400);</script>';
    }
  }
}
?>