<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = 1;
    } else {
         $texto = str_replace("'", '&#39;', GetData("texto"));
        $exclusiva = str_replace("'", '&#34;', GetData("clientes"));
        $registro = str_replace("'", '&#39;', GetData("registro"));
        $condiciones = str_replace("'", '&#34;', GetData("inferior"));
        
        //print_r(GetData("texto"));    exit;
        $db->doQuery("UPDATE parrafo_zs SET                         
                    texto='" . $texto . "' ,                  
                    exclusiva='" . $exclusiva . "' ,                  
                    registro='" . $registro . "' ,                  
                    condiciones='" .$condiciones . "'                   
                    WHERE id=" . $id, 4);

        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM parrafo_zs WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
    $(function() {
        $('#forminterno').validationEngine();
    });
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            ZONA SEGURA
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">

            <fieldset>

                <h3><?php echo ($id == 0) ? "" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">

                    <p>&nbsp;</p>                              
                    <div style="margin-top: 36px;">
                        <label>Texto de bienvenida</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 491 / <span class="texto"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p>      
                    <div style="margin-top: 36px;">
                        <label>Texto clientes</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="clientes" id="clientes" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["exclusiva"]; ?></textarea>
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 139 / <span class="clientes"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p>      
                    <div style="margin-top: 36px;">
                        <label>Texto inferior</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="inferior" id="inferior" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["condiciones"]; ?></textarea>
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 350 / <span class="inferior"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p>      
                    <div style="margin-top: 36px;">
                        <label>Texto secci&oacute;n registro</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto registro" name="registro" id="inferior" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["registro"]; ?></textarea>
                           
                        </div>
                    </div>
                    <p>&nbsp;</p>      

                </form>        
            </fieldset>
            <p>&nbsp;</p>
            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
        </div>
    </div>
    <!--Fin del Contenido del Modulo-->
</div>
<script>
    cambiar(<?php echo $oficina["id_tipos"] ?>);
</script>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Textos agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Textos editados correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#texto').limit("491", ".clientes");
    $('#clientes').limit("139", ".clientes");
    
</script>