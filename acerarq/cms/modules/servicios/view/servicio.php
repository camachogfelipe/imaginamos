<?php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $texto1 = $_POST["texto1"];
    $texto2 = $_POST["texto2"];
    if($texto1 == "" || $texto2 == ""){
        $Erno = 2;
    }else{
    $db->doQuery("UPDATE bolsa SET texto1='" . $texto1 . "',texto2='".$texto2."' WHERE idbolsa=" . $id, 4);

    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/servicio", "bolsa_" . $id, "298_248_bolsa_" . $id, 298, 248);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE bolsa SET imagen='" . $retorno["NameFile"] . "' WHERE idbolsa=" . $id, 4);
        $Erno = 1;
    } else {
        
    }
    $Erno = 1;
    }
}
$db->doQuery("SELECT * FROM bolsa WHERE idbolsa=1",1);
$data = $db->results[0];
?>
    <script type="text/javascript" src="../../../../assets/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
        
        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,code,|,forecolor", 
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
        
        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",
        
        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",
        
        // Style formats
        style_formats : [
            {title : 'Bold text', inline : 'b'},
            {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
            {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
            {title : 'Example 1', inline : 'span', classes : 'example1'},
            {title : 'Example 2', inline : 'span', classes : 'example2'},
            {title : 'Table styles'},
            {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],
        
        
        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });  
</script>
<div class="header">
    <span>
        <span class="ico gray window"></span>Contenido Servicio</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>
        <br/>
        <br/>
        <fieldset>
            <legend>Editando Contenido</legend>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $data["idbolsa"]; ?>" name="id" id="id">                 
                <div class="section">
                    <label>Descripcion</label>
                    <div>
                        <textarea name="texto1" id="texto1" class="large"><?php echo $data["texto1"]; ?></textarea>
                    </div>
                </div>
                <div class="section">
                    <label>Texto Inferior</label>
                    <div>
                        <textarea name="texto2" id="texto2" class="large"><?php echo $data["texto2"]; ?></textarea>
                    </div>
                </div>
                <div class="section">
                    <label>Imagen actual </label> <br /><br />
                    <div>
                        <img src="../../../../assets/img/servicio/<?php echo $data["imagen"] . "?" . rand(0, 9999999); ?>" width="150" />
                    </div>
                    <br />
                    <div>
                        <label>Subir nueva imagen (298px x 248px)</label><br />
                        <input type="file" name="img" id="img" />
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm" class="uibutton normal large">Guardar</a></div>

        </fieldset>
    </div>
</div>

<!--Fin del Contenido del Modulo-->
<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?><script>showError('Faltan datos ',3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada',8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos',8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>