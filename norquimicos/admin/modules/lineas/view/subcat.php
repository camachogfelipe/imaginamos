<?php
$id = (int) $_GET["id"];
if (isset($_GET["id_del"])) {
  if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
    $db->doQuery("DELETE FROM lineas_img_principal WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
  }
}

$db->doQuery("SELECT * FROM lineas_cat WHERE id=".$id, SELECT_QUERY);
$dataAll = $db->results[0];
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el producto?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
  <div class="header"><span><span class="ico gray window"></span>LINEAS DE NEGOCIO >> CATEGORIAS >> PRODUCTOS >> EDITANDO</span>
  </div><!-- End header -->
  <div class="content">

      <div class="formEl_b">   
          <H3> <?php echo $dataAll["titulo"] ?></H3>
         <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>
        <a class="uibutton normal" href="index.php?seccion=imgs&band=<?php echo $id?>&id=0">Agregar</a>
      <table class="display" >
        <thead>
          <tr>
            <th><span class="th_wrapp">Imagen de producto</span></th>                   
            <th><span class="th_wrapp">Marcas de producto</span></th>                   
            <th><span class="th_wrapp">Acciones</span></th>
          </tr>
        </thead>
        <tbody>
          <?php
         $db->doQuery("SELECT * FROM lineas_img_principal WHERE id_lineas_cat=".$id." ORDER BY id DESC", SELECT_QUERY);
          $dataAll = $db->results;
          for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
            $data = $dataAll[$i];
            ?>
            <tr class="odd gradeX">
              <td class="center" width="100px">
                <img src="../../../../imagenes/productos_cat/780_528_<?php echo  $data["img"] . "?" . rand(0, 9999999); ?>" height="150" />
              </td>
                <td class="center titulo" width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=fin&band=<?php echo $id?>&id=<?php echo  $data["id"] ?>">Agregar</a><br>                  
              </td>
              <td class="center titulo" width="100px">
                
                  <a class="uibutton icon edit" href="index.php?seccion=imgs&band=<?php echo $id?>&id=<?php echo  $data["id"] ?>">Editar</a>
                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=subcat&id=<?php echo $id?>&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>

  </div>
</div>