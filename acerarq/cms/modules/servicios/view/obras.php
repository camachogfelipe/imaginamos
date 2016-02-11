<?php
$cat = (int)$_GET["cat"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titu"];
    $texto = $_POST["texto"];
    if($titulo == "" || $texto == "" ){
        $Erno = 2;
    }else{
     $text = strip_tags($texto);
    $text = strlen($text);
    if ($text > 150) {
            $Erno = 4;
        } else {
            $titulo = str_replace("'", "&#39;" , $titulo);
            $titulo = str_replace('"', "&quot;", $titulo);
            $texto = str_replace("'", "&#39;" , $texto);
            $texto = str_replace('"', "&quot;", $texto);
            $db->doQuery("UPDATE obras SET titulo='" . $titulo . "',texto='" . $texto . "' WHERE idobras=" . $id, 4);
            $Erno = 1;
        }
    }
}
$info="SELECT * FROM obras WHERE idcategoria_obras=". $cat;
$db->doQuery($info, SELECT_QUERY);
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
        theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,code,|,forecolor", 
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
        <span class="ico gray window"></span>Detalle </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>
        <fieldset>
            <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $data["idobras"]; ?>" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu2" class="medium" value="<?php echo $data["titulo"]; ?>">
                        <span class="f_help">Limite de caracteres 20/<span class="titu2"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"><?php echo $data["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 100 </span>
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm2" onclick="$('#forminterno2').submit();" class="uibutton normal large">Guardar</a></div>

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
            ?><script>showError('Max. 100 caracteres en el texto Descriptivo',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>