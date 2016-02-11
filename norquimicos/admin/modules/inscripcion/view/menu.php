<?php
if (isset($_GET["id_del"])) {

  if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

    $db->doQuery("DELETE FROM inscripcion WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
  }
}

if (isset($_GET["valu"])) {
  $valoractivo = $_GET["valu"];
  $idss = $_GET["idss"];
  if ($idss == "0") {
    $db->doQuery("UPDATE inscripcion SET bandera = '1' WHERE id=" . $valoractivo, 4);
  }
  if ($idss == "1") {
    $db->doQuery("UPDATE inscripcion SET bandera = '0' WHERE id=" . $valoractivo, 4);
  }
}
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar al usuario, si lo borra el usuario no volvera a recibir información de Norquímicos?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>

<!-- full width -->
<div class="widget">
  <div class="header"><span><span class="ico gray window"></span>HOME >> Inscripciones</span>
  </div><!-- End header -->
  <div class="content">

    <div class="formEl_b">
     
      <table class="display" >
        <thead>
          <tr>
            <th><span class="th_wrapp">Usuario Correo</span></th>
            <th><span class="th_wrapp">Activar / Desactivar</span></th>                      
            <th><span class="th_wrapp">Acciones</span></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $db->doQuery("SELECT * FROM inscripcion ORDER BY id DESC", SELECT_QUERY);
          $dataAll = $db->results;
          for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
            $data = $dataAll[$i];
            ?>
            <tr class="odd gradeX">
              
               <td class="center titulo" width="100px"><?php echo  $data["correo"]?></td>                 
               <?php if ($data["bandera"] == 0) { ?>                  
                  <td class="center titulo" width="100px"><!--index.php?seccion=cont&idant=13&id=16-->
                    <a class="uibutton icon edit" href="index.php?seccion=menu&valu=<?php echo  $data["id"] ?>&idss=<?php echo  $data["bandera"] ?>">Activo</a>


                  </td>

                <?php } else { ?>
                  <td class="center titulo" width="100px">
                    <a class="uibutton icon special edit" href="index.php?seccion=menu&valu=<?php echo  $data["id"] ?>&idss=<?php echo  $data["bandera"] ?>">No activo</a>

                  </td>
                <?php } ?>               
              
              <td class="center titulo" width="100px">
                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>

  </div>
</div>