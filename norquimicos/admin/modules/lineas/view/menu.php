<?php
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("DELETE FROM lineas_cat WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
    }
}
?>
<?php
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        // var_dump($_POST);exit;
        if (GetData("titulo") == "") {
            $val = 3;
        } else {
            //Primero creamos el campo en la bd
            $db->doQuery("INSERT INTO lineas_cat(id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();
            $db->doQuery("UPDATE lineas_cat SET titulo ='" . GetData("titulo") . "'WHERE id=" . $id, 4);
            $val = 1;
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar la categoria?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<style type="text/css">
    #mensaje1{margin-left: 524px;margin-top: -85px;position: absolute;background: darkgray;padding: 11px;border-radius: 10px;color: white;font-size: 18px;
    }
</style>
<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $('#mensaje1').hide();
       
        $('#submitForm').click(function(){
            var expresion = /^[a-zA-Z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-\.]+$/;
            var titulo = $('#titulos').val();
                  
            if(titulo == ""){
                $('#mensaje1').fadeIn();
                return false;
            }else{
                $('#mensaje1').fadeOut();
                $('#forminterno').submit();
            }      
      
        });
    });
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            LINEAS DE NEGOCIO
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <fieldset>
                <h3>Agregando</h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="0" name="id" id="id">
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulos" name="titulo" PlaceHolder="Agrega tu titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 50 / <span class="titulos"></span></span>
                             <div id="mensaje1" >El campo titulo está vacio</div>
                        </div>
                    </div>          
                    
                    <div><a id="submitForm" class="uibutton normal large">Guardar</a></div>
                </form>
            </fieldset>
            <p>&nbsp;</p>      

        </div>
        <fieldset>

            <br><br>      

            <table class="display" >
                <thead>
                    <tr>                        
                        <th><span class="th_wrapp">Titulo</span></th>                                            
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM lineas_cat ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                           <!-- <td class="center" width="100px">
                                <img src="../../../../imagenes/cursos/168_110_<?php echo  $data["img"] . "?" . rand(0, 9999999); ?>" height="150" />
                            </td>    -->      
                            <td class="center titulo" width="100px"><?php echo  $data["titulo"] ?></td>                 
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=subcat&id=<?php echo  $data["id"] ?>">Agregar productos</a><br>
                                <a class="uibutton icon edit" href="index.php?seccion=destacados&id=<?php echo  $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </fieldset>
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
            echo '<script>setTimeout(\'alert("Agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Destacado editado correctamente");\',400);</script>';
        }
        if ($erno == 3) {
            echo '<script>setTimeout(\'alert("");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulos').limit("50", ".titulos");
   
</script>