<?php
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
    if ($titulo == '' || $proyecto == '' || $lugar == '' || $mes1 == '' || $ano1 == '' || $mes2 == '' || $ano2 == '' || $uso == '' || $area == '' || $actividades == '' || $cliente == '') {
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
    
    $db->doQuery("INSERT INTO proyectos(titulo,proyecto,lugar,uso,area,actividades,cliente,ano_ini,mes_ini,ano_fin,mes_fin) VALUES 
        ('" . $titulo . "','" . $proyecto . "','" . $lugar . "','" . $uso . "','" . $area . "','" . $actividades . "','" . $cliente . "','" . $ano1 . "','" . $mes1 . "','" .$ano2. "','" .$mes2. "')", 2);
    $Erno = 1;
        
    }
}
$query = "SELECT * FROM mes ORDER BY idmes ASC";
$db->doQuery($query, SELECT_QUERY);
$mes = $db->results;
$cant = count($mes);
$data = "SELECT * FROM ano ORDER BY idano ASC";
$db->doQuery($data, SELECT_QUERY);
$ano = $db->results;
$num = count($ano);
?>
<!-- full width -->
    <script type="text/javascript" language="javascript" src="../../../../assets/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../../../assets/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){ 
               jQuery("select[name='collage']").change(function(){displayCollage();});           
    });
    
    function displayCollage(){
       // alert('hola');
          var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";           
        var optionValue = jQuery("select[name='collage']").val();
       // alert(optionValue);
        jQuery("#collageAjax")
            .html(ajaxLoader)
            .load('generacollage.php', {id: optionValue, opt:'sin_ind', status: 1}, function(response){					
            if(response) {
                jQuery("#collageAjax").css('display', '');                       
            } else {                    
                jQuery("#collageAjax").css('display', 'none'); 
            }
        });     
    }
    
    $(document).ready(function(){$(".mq").click(function(){$(".mq-act").removeClass("mq-act"); $(this).addClass("mq-act");});});
   </script>
  	<style type="text/css">
    	.mq-seccion {margin:40px 20px;}
      .mq {background-color:#eee; color:#333; float:left; font:20px "Lucida Sans Unicode", "Lucida Grande", sans-serif; font-style:italic; -webkit-transition:all 0.2s ease-in-out; -moz-transition:all 0.2s ease-in-out; -ms-transition:all 0.2s ease-in-out; -o-transition:all 0.2s ease-in-out; transition:all 0.2s ease-in-out; -webkit-box-shadow: inset 0px 0px 0px 2px #ddd; -moz-box-shadow: inset 0px 0px 0px 2px #ddd; -ms-box-shadow: inset 0px 0px 0px 2px #ddd; -o-box-shadow: inset 0px 0px 0px 2px #ddd; box-shadow: inset 0px 0px 0px 2px #ddd;}
			.mq:hover {background-color:#bbb;}
			.mq-act {background-color:#aaa; color:#fff;}
      /*Esquema secciónes*/
      .mq-seccion {width:420px; height:320px; background-color:#eee;}
			.mq-1 {width:420px; height:320px;} .mq-2 {width:420px; height:240px;} .mq-3 {width:420px; height:160px;} .mq-4 {width:420px; height:80px;} .mq-5 {width:315px; height:320px;} .mq-6 {width:315px; height:240px;} .mq-7 {width:315px; height:160px;} .mq-8 {width:315px; height:80px;} .mq-9 {width:210px; height:320px;} .mq-10 {width:210px; height:240px;} .mq-11 {width:210px; height:160px;} .mq-12 {width:210px; height:80px;} .mq-13 {width:105px; height:320px;} .mq-14 {width:105px; height:240px;} .mq-15 {width:105px; height:160px;} .mq-16 {width:105px; height:80px;}
    </style>
<div class="header">
    <span>
        <span class="ico gray window"></span>Galer&#237;a</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>
            <legend>Collage</legend>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="1" name="image" id="image">                        
                <div class="section">                                                                                                  
                    <label>Escoga el Collage a editar</label>
                    <div>
                        <select name="collage" id="collage">
                            <option value="">Seleccione</option>
                            <option value="1">Collage 1</option>
                            <option value="2">Collage 2</option>
                            <option value="3">Collage 3</option>
                            <option value="4">Collage 4</option>
                            <option value="5">Collage 5</option>
                            <option value="6">Collage 6</option>
                            <option value="7">Collage 7</option>
                            <option value="8">Collage 8</option>
                            <option value="9">Collage 9</option>
                            <option value="10">Collage 10</option>
                            <option value="11">Collage 11</option>
                            <option value="12">Collage 12</option>
                            
                        </select>
                    </div>
                </div>
                <br><br>
                <div id="collageAjax">
                    
                </div>
                    
                <br>
               <!-- <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>-->
            </form>
            <p>&nbsp;</p>
        </fieldset>
        <br/><br/><br/>
       <!-- <fieldset>
            <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><div class="th_wrapp">Titulo</div></th>
                            <th><div class="th_wrapp">Proyecto</div></th>
                            <th><div class="th_wrapp">Acciones</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = "SELECT * FROM proyectos ORDER BY idproyectos ASC";
                        $db->doQuery($data, SELECT_QUERY);
                        $dataAll = $db->results;
                        for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                            $data = $dataAll[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td class="center">
                                    <?php echo $data["titulo"]; ?> 
                                </td>
                                <td class="center">
                                    <?php echo $data["proyecto"]; ?> 
                                </td>
                                <td class="center titulo" width="100px">
                                    <a class="uibutton"   href="index.php?seccion=proyectos&id=<?php echo $data["idproyectos"] ?>">Editar</a>
                                    <a id="<?php echo $data["idproyectos"] ?>" class="Delete uibutton special" tableToDelete="proyectos" nameField="idproyectos">Eliminar</a>
                                </td> 
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </fieldset>-->
        <p>&nbsp;</p>
    </div>
</div>
<!--Fin del Contenido del Modulo-->

<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?><script>showError('Faltan datos ', 3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('InformaciÃ³n ingresada', 8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos', 8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado', 8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen', 8000)</script>
            <?php
        }
    }
}
?>
