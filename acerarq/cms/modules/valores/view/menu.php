<?php
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id1"])) {
    $id1 = $_POST["id1"];
    $titulo = $_POST["titu"];    
    $texto = $_POST["texto"];    
    if ($titulo == '' || $texto == '') {
        $Erno = 2;
    } else {
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $texto = str_replace("'", "&#39;" , $texto);
        $texto = str_replace('"', "&quot;", $texto);
        $db->doQuery("UPDATE valores SET titulo='" . $titulo . "',texto='" .$texto. "' WHERE idvalores=" . $id1, 4);       
        $Erno = 1;
    }
}

?>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Valores</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>
            <?php 
            $db->doQuery("SELECT * FROM valores WHERE idvalores=1", 1);
            $info = $db->results[0];
            ?>
            <legend>Valor 1</legend>            
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idvalores"]; ?>" name="id1" id="id1">
                <div class="section">
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu1" class="medium" value="<?php echo $info["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 18/<span class="titu1"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto1" class="large"> <?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 190/<span class="texto1"></span></span>
                    </div>
                </div>
                <br><br>                  
                <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>

        </fieldset>
        <br><br>
        <fieldset>
            <?php 
            $db->doQuery("SELECT * FROM valores WHERE idvalores=2", 1);
            $info = $db->results[0];
            ?>
            <legend>Valor 2</legend>
            <form method="post" action="" name="forminterno" id="forminterno2" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idvalores"]; ?>" name="id1" id="id1">                
                <div class="section">
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu2" class="medium" value="<?php echo $info["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 18/<span class="titu2"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto2" class="large"> <?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 190/<span class="texto2"></span></span>
                    </div>
                </div>
                <br><br>                  
                <div><a id="submitForm" onclick="$('#forminterno2').submit();" class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>
        </fieldset>  
        <br/> <br/>
        <fieldset>
            <?php 
            $db->doQuery("SELECT * FROM valores WHERE idvalores=3", 1);
            $info = $db->results[0];
            ?>
            <legend>Valor 3</legend>
            
            <form method="post" action="" name="forminterno" id="forminterno3" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idvalores"]; ?>" name="id1" id="id1">
                <div class="section">
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu3" class="medium" value="<?php echo $info["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 18/<span class="titu3"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto3" class="large"> <?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 197/<span class="texto3"></span></span>
                    </div>
                </div>
                <br><br>                  
                <div><a id="submitForm" onclick="$('#forminterno3').submit();" class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>
        </fieldset>     
        <br/><br/>        
        <fieldset>
            <?php 
            $db->doQuery("SELECT * FROM valores WHERE idvalores=4", 1);
            $info = $db->results[0];
            ?>
            <legend>Valor 4</legend>
            
            <form method="post" action="" name="forminterno" id="forminterno4" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idvalores"]; ?>" name="id1" id="id1">
                <div class="section">
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu4" class="medium" value="<?php echo $info["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 18/<span class="titu4"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto4" class="large"> <?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 197/<span class="texto4"></span></span>
                    </div>
                </div>
                <br><br>                  
                <div><a id="submitForm" onclick="$('#forminterno4').submit();" class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>
        </fieldset>     
        <br/><br/>
        <fieldset>
            <?php 
            $db->doQuery("SELECT * FROM valores WHERE idvalores=5", 1);
            $info = $db->results[0];
            ?>
            <legend>Valor 5</legend>
            
            <form method="post" action="" name="forminterno" id="forminterno5" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idvalores"]; ?>" name="id1" id="id1">
                <div class="section">
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu5" class="medium" value="<?php echo $info["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 18/<span class="titu5"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto5" class="large"> <?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 197/<span class="texto5"></span></span>
                    </div>
                </div>
                <br><br>                  
                <div><a id="submitForm" onclick="$('#forminterno5').submit();" class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>
        </fieldset>     
        <br/><br/>
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