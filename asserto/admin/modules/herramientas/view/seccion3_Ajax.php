<?php

$id = $_POST["id"];

if ($id == 1) {
    ?>
    <div class="section ">
        <label> Validar URL<small>Texto adicional</small></label>   
        <div> 
            <input type="text" class="validate[required,custom[url]]  large" name="link" id="url_required" value="http://">
        </div>
    </div>

    <?php
} else if ($id == 2) {
    ?>

    <div class="section ">
        <label> Validar URL<small>Texto adicional</small></label>   
        <div> 
            <select name="link" class="small" style="display: block;width: 150px;height: 32px;line-height: 32px;font-size: 11px;color: #797979;padding: 8px 0px 8px 10px;border:1px solid #ddd;">
                <option value="index.php?base&seccion=index">Home</option>
                <option value="index.php?seccion=empresa">Quienes Somos</option>
                <option value="index.php?seccion=sabemos">Que sabemos hacer</option>
                <option value="index.php?seccion=herramientas">Herramientas utiles</option>
                <option value="index.php?seccion=ayuda">Como lo podemos ayudar</option>
                <option value="index.php?seccion=contacto">Contacto</option>
            </select>
        </div>
    </div>



    <?php
}
?>
