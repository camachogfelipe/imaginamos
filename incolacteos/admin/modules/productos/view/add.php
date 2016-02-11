<?php
if (!isset($_GET["id"]) && !isset($_GET["ids"])) {
    echo "<script>window.location.href='index.php?seccion=menu'</script>";
    exit;
} else {
    $db->doQuery("SELECT * FROM productos WHERE id=" . $_GET["id"], SELECT_QUERY);
    $mas1 = $db->results;
    if (count($mas1) == 0) {
        echo "<script>window.location.href='index.php?seccion=menu'</script>";
        exit;
    }
}
$idc = $_GET["id"];
$id = $_GET["ids"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {       
            $db->doQuery("INSERT INTO subproductos (id,id_productos) VALUES (NULL,$idc)", INSERT_QUERY);
            $id = $db->getLastId();
            $tittulo = str_replace("'", '&#39;', GetData("titulo"));
            $tittulo = str_replace('"', '&#34;', $tittulo);
            $texto = str_replace("'", '&#39;', GetData("texto"));
            $texto = str_replace('"', '&#34;', $texto);
            $db->doQuery("UPDATE subproductos SET             
                    titulo='" . $tittulo . "',                             
                    texto='" . $texto . "'                                                               
                    WHERE id=" . $id, 4);
            $val = 1;
       $db->doQuery("INSERT INTO subproductos_detalles (id,id_subproducto) VALUES (NULL,$id)", INSERT_QUERY);
    } else {
        $tittulo = str_replace("'", '&#39;', GetData("titulo"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $db->doQuery("UPDATE subproductos SET             
                    titulo='" . $tittulo . "',                             
                    texto='" . $texto . "'                                                               
                    WHERE id=" . $id, 4);
        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM subproductos WHERE id=" . $id, 1);
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
            PRODUCTOS CALIFORNIA >> SUBPRODUCTOS
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">

            <fieldset>
                <a class="uibutton confirm" href="index.php?seccion=subproductos&id=<?php echo $idc?>">Atr&aacute;s</a><br><br>
                <h3><?php echo ($id == 0) ? "Agregando subproducto para \" " . utf8_encode($mas1[0]["titulo"]) . " \"" : "Editando subproducto para \" " . utf8_encode($mas1[0]["titulo"]) . " \"" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo1" name="titulo" class="large validate[required]" data-validation-placeholder="" PlaceHolder="Agregar título" style=" margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                        <span class="f_help" style="margin-left: 200px;"> Sin límite de caracteres</span></div>
                    </div>                   
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea id="texto"  class="large validate[required]" data-validation-placeholder=""  style="resize: none;height: 100px;margin-left: 200px;" placeholder="Agregar texto" name="texto"><?php echo $oficina["texto"]; ?></textarea>                                                     
                            <span class="f_help" style="margin-left: 200px;"> Limite de caracteres 78 / <span class="texto"></span></span>
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
<?php
if (isset($val)) {
    if (intval($val)) {
        if ($val == 7) {
            ?><script>showError('Formato imagen (PNG - JPG)',3000);</script>
            <?php
        } elseif ($val == 1) {
            ?><script>showSuccess('Agregado correctamente',8000)</script>
            <?php
        } elseif ($val == 2) {
            ?><script>showSuccess('Editado correctamente',8000)</script>
            <?php
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    //$('#titulo1').limit("21", ".titulo1");
    $('#texto').limit("78", ".texto");   
</script>