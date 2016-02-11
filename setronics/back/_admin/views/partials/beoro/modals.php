<!-- Delete logic model -->
<div id="delete-logic-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="myModalLabel">Eliminar <span id="name-element">elemento</span></h3>
    </div>
    <div class="modal-body">
        <p>¿Está seguro que desea eliminar el elemento?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <a href="javascript:;" class="btn btn-primary delete-logic-accept" data-dismiss="modal" aria-hidden="true">Eliminar</a>
    </div>
</div>
<div id="change-pass-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="myModalLabel">Cambiar <span id="name-element">Contraseña</span></h3>
    </div>
    <form action="<?php echo cms_url('admin/actions/change_pass') ?>" data-form="ajax" method="post">
        <div class="modal-body">
            <label>Clave actual<strong style="color:red"> *</strong></label>
            <input type="text" class="medium" name="oldpass" />
            <br/><br/>
            <label>Nueva clave<strong style="color:red"> *</strong></label>
            <input type="text" class="medium" name="newpass" />
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button id="cambiar" type="submit" class="btn btn-primary" data-loading-text="Guardando...">Cambiar</button>
        </div>
    </form>
</div>