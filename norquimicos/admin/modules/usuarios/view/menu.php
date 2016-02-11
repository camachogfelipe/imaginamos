<?php
if (isset($_GET["id_del"])) {

  if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

    $db->doQuery("DELETE FROM user WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
  }
}

if (isset($_GET["valu"])) {
  $valoractivo = $_GET["valu"];
  $idss = $_GET["idss"];
  if ($idss == "0") {
    $db->doQuery("UPDATE user SET bandera = '1' WHERE id=" . $valoractivo, 4);
  }
  if ($idss == "1") {
    $db->doQuery("UPDATE user SET bandera = '0' WHERE id=" . $valoractivo, 4);
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
<?php
$db->doQuery("SELECT * FROM user ORDER BY id DESC", SELECT_QUERY);
$dataAll = $db->results;
?>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>USUARIOS</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <?php if (count($dataAll) < 30) { ?>
                <a class="uibutton normal" href="index.php?seccion=user&id=0">Agregar </a>
                <?php
            }
            ?>


            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Nombres completos</span></th>
                        <th><span class="th_wrapp">Perfil usuario</span></th>
                        <th><span class="th_wrapp">Sector</span></th>
                        <th><span class="th_wrapp">Estado</span></th>            
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM user ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">                          
                            <td class="center titulo" width="100px"><?php echo  $data["nombre"] ?></td>                 
                            <td class="center titulo" width="100px"><?php echo  $data["usuario"] ?></td>   
                            <?php
                            if ($data["sector"] == "FBogotá") {
                                echo ' <td class="center titulo" width="100px">Fuera de Bogotá</td>    ';
                            } else {
                                echo ' <td class="center titulo" width="100px">Bogotá</td>    ';
                            }
                            ?>
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
                                <a class="uibutton icon edit" href="index.php?seccion=user&id=<?php echo  $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>

    </div>
</div>