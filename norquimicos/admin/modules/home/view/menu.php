<?php
if (isset($_GET["id_del"])) {

  if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

    $db->doQuery("DELETE FROM banner WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
  }
}
?>
<?php
$db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el banner?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
  <div class="header"><span><span class="ico gray window"></span>HOME >> Banner</span>
  </div><!-- End header -->
  <div class="content">

    <div class="formEl_b">
      <?php if (count($dataAll) < 30) { ?>
        <a class="uibutton normal" href="index.php?seccion=banner&id=0">Agregar nuevo banner</a>
        <?php
      }
      ?>


      <table class="display" >
        <thead>
          <tr>
            <th><span class="th_wrapp">Imagen de fondo</span></th>
            <th><span class="th_wrapp">Imagen transparente</span></th>
            <th><span class="th_wrapp">Titulo Principal</span></th>            
            <th><span class="th_wrapp">Acciones</span></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
          $dataAll = $db->results;
          for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
            $data = $dataAll[$i];
            ?>
            <tr class="odd gradeX">
              <td class="center" width="100px">
                <img src="../../../../imagenes/banners/2000_600_<?php echo  $data["img_fondo"] . "?" . rand(0, 9999999); ?>" height="150" />
              </td> 
               <td class="center" width="100px">
                <img src="../../../../imagenes/banners/350_350_<?php echo  $data["img_transparente"] . "?" . rand(0, 9999999); ?>" height="150" />
              </td> 
               <td class="center titulo" width="100px"><?php echo  $data["titulo1"]?></td>                 
              
              <td class="center titulo" width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?php echo  $data["id"] ?>">Editar</a>
                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>

  </div>
</div>