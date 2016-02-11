<?php
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = (int) $_GET["id"];
    } else {

        $db->doQuery("UPDATE lineas_cat SET titulo ='" . GetData("titulo") . "' WHERE id=" . $id, 4);


        $val = 2;
    }
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM lineas_cat WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
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
<style type="text/css">
    #mensaje1{margin-left: 524px;margin-top: -85px;position: absolute;background: darkgray;padding: 11px;border-radius: 10px;color: white;font-size: 18px;
    }
</style>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            LINEAS DE NEGOCIO >> CATEGORIAS >> EDITANDO 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>
            <fieldset>
                <h3>Editando</h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulos" name="titulo" PlaceHolder="Agrega tu titulo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo  utf8_encode($oficina["titulo"]) ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 50 / <span class="titulos"></span></span>
                             <div id="mensaje1" >El campo titulo está vacio</div>
                        </div>
                    </div>          
                   
                    <div><a id="submitForm"  class="uibutton normal large">Guardar</a></div>
                </form>
            </fieldset>
            <p>&nbsp;</p>      

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
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Editado correctamente");\',400);</script>';
        }       
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulos').limit("50", ".titulos");
    $('#texto').limit("270", ".texto");
</script>