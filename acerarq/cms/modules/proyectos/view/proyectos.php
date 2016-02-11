<?php
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["image"])) {
   $titulo = $_POST["titulo"];
    $proyecto = $_POST["proyecto"];
    $lugar = $_POST["lugar"];
    $mes1 = $_POST["mes1"];
    $ano1 = $_POST["ano1"];
    $mes2 = $_POST["mes2"];
    $ano2 = $_POST["ano2"];
    $uso = $_POST["uso"];
    $area = $_POST["area"];
    $actividades = $_POST["actividades"];
    $cliente = $_POST["cliente"];
    //if ($titulo == '' || $proyecto == '' || $lugar == '' || $mes1 == '' || $ano1 == '' || $mes2 == '' || $ano2 == '' || $uso == '' || $area == '' || $actividades == '' || $cliente == '') {
    
    if ($titulo == '' || $proyecto == '') {
        $Erno = 2;
    } else {
        $titulo = str_replace("'", "&#39;" , $titulo); 
        $titulo = str_replace('"', "&quot;", $titulo);
        $proyecto = str_replace("'", "&#39;" , $proyecto);
        $proyecto = str_replace('"', "&quot;", $proyecto);
        $lugar = str_replace("'", "&#39;" , $lugar);
        $lugar = str_replace('"', "&quot;", $lugar);
        $uso = str_replace("'", "&#39;" , $uso);
        $uso = str_replace('"', "&quot;", $uso);
        $actividades = str_replace("'", "&#39;" , $actividades);
        $actividades = str_replace('"', "&quot;", $actividades);
        $cliente = str_replace("'", "&#39;" , $cliente);
        $cliente = str_replace('"', "&quot;", $cliente);
    $db->doQuery("UPDATE proyectos SET titulo='".$titulo."',proyecto='".$proyecto."',lugar='".$lugar."',uso='".$uso."',area='".$area."',actividades='".$actividades."',cliente='".$cliente."',ano_ini='".$ano1."',mes_ini='".$mes1."',ano_fin='".$ano2."',mes_fin='".$mes2."' WHERE idproyectos=".$id, 4);   
    $Erno = 1;
    }
}
$query = "SELECT * FROM mes ORDER BY idmes ASC";
$db->doQuery($query, SELECT_QUERY);
$mes = $db->results;
$cant = count($mes);
$data = "SELECT * FROM ano ORDER BY ano ASC";
$db->doQuery($data, SELECT_QUERY);
$ano = $db->results;
$num = count($ano);
$db->doQuery("SELECT * FROM proyectos WHERE idproyectos=" . $id, 1);
$data = $db->results[0];
?>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Proyectos</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->

        <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

        <fieldset>
<legend>Nuevo Proyecto</legend>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="1" name="image" id="image">                        
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titulo" id="titu" class="medium" value="<?php echo $data["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 15/<span class="titu"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Proyecto</label>
                    <div>
                        <input type="text" name="proyecto" id="proyecto" class="medium" value="<?php echo $data["proyecto"] ?>">
                        <span class="f_help">Limite de caracteres 70/<span class="proyecto"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Lugar</label>
                    <div>
                        <input type="text" name="lugar" id="lugar" class="medium" value="<?php echo $data["lugar"] ?>">
                        <span class="f_help">Limite de caracteres 80/<span class="lugar"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Mes Inicio</label>
                    <div>
                        <select name="mes1" id="mes1">
                            <option value="">Seleccione</option>
                            <?php for ($i = 0; $i < $cant; $i++) { 
                                 if($data["mes_ini"] == $mes[$i]["idmes"]){?>
                                <option selected value="<?php echo $mes[$i]["idmes"] ?>"><?php echo $mes[$i]["nombre"] ?></option>
                                 <?php }else{ ?>
                                <option value="<?php echo $mes[$i]["idmes"] ?>"><?php echo $mes[$i]["nombre"] ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="section">
                    <label>Año Inicio</label>
                    <div>
                        <select name="ano1" id="ano1">
                            <option value="">Seleccione</option>
                            <?php for ($i = 0; $i < $num; $i++) {
                                if($data["ano_ini"] == $ano[$i]["idano"]){ ?>
                                <option selected value="<?php echo $ano[$i]["idano"] ?>"><?php echo $ano[$i]["ano"] ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $ano[$i]["idano"] ?>"><?php echo $ano[$i]["ano"] ?></option>
                            <?php } }?>
                        </select>
                    </div>
                </div>
                <div class="section">
                    <label>Mes Fin</label>
                    <div>
                        <select name="mes2" id="mes2">
                            <option value="">Seleccione</option>
                            <?php for ($i = 0; $i < $cant; $i++) { 
                                 if($data["mes_fin"] == $mes[$i]["idmes"]){?>
                                <option selected value="<?php echo $mes[$i]["idmes"] ?>"><?php echo $mes[$i]["nombre"] ?></option>
                                 <?php }else{ ?>
                                <option value="<?php echo $mes[$i]["idmes"] ?>"><?php echo $mes[$i]["nombre"] ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="section">
                    <label>Año Fin</label>
                    <div>
                        <select name="ano2" id="ano2">
                            <option value="">Seleccione</option>
                            <?php for ($i = 0; $i < $num; $i++) {
                                if($data["ano_fin"] == $ano[$i]["idano"]){ ?>
                                <option selected value="<?php echo $ano[$i]["idano"] ?>"><?php echo $ano[$i]["ano"] ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $ano[$i]["idano"] ?>"><?php echo $ano[$i]["ano"] ?></option>
                            <?php } }?>
                        </select>
                    </div>
                </div>
                <div class="section">
                    <label>Uso</label>
                    <div>
                        <input type="text" name="uso" id="uso" class="medium" value="<?php echo $data["uso"] ?>">
                        <span class="f_help">Limite de caracteres 25/<span class="uso"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Area</label>
                    <div>
                        <input type="text" name="area" id="area" class="medium" value="<?php echo $data["area"] ?>">
                        <span class="f_help">Limite de caracteres 8/<span class="area"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Actividades</label>
                    <div>
                        <textarea name="actividades" id="actividades" class="large"><?php echo $data["actividades"] ?></textarea>
                        <span class="f_help">Limite de caracteres 300/<span class="actividades"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Cliente</label>
                    <div>
                        <input type="text" name="cliente" id="cliente" class="medium" value="<?php echo $data["cliente"] ?>">
                        <span class="f_help">Limite de caracteres 50/<span class="cliente"></span></span>
                    </div>
                </div>
                <br><br>
                <br>
                <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
            </form>
            <p>&nbsp;</p>
        </fieldset>
        <p>&nbsp;</p>     

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