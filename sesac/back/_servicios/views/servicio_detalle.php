<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Servicios</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Editar Servicio</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" action="<?= cms_url("servicios/saveServiceChanges") ?>" method="post" enctype="multipart/form-data">
            <fieldset>
              <input type="hidden" name="idServicio" value="<?= $servicio["id"] ?>">
              <div class="formSep">
                <label class="req">Título</label>
                <input type="text" name="titulo" value="<?= $servicio["titulo"] ?>" class="span8" maxlength="25" placeholder="max 25 caracteres" required>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" id="wysiwg_val" cols="30" rows="6" class="span12" maxlength="365"  placeholder="max 365 caracteres" required><?= $servicio["texto"] ?></textarea>
              </div>
              <div class="formSep">
                <label class="req">Imagen</label>
                <img src="<?= $servicio["imagen"] ?>" width="85" height="85">
              </div>
              <div class="formSep">
                <label class="req">Cambiar Imagen</label>
                <div class="fileupload fileupload-new span8" data-provides="fileupload">
                  <input type="hidden">
                  <div class="input-append">
                    <div class="uneditable-input input-small">
                      <i class="icon-file fileupload-exists"></i>
                      <span class="fileupload-preview"></span>
                    </div>
                    <span class="btn btn-file">
                      <span class="fileupload-new">Seleccionar Imagen</span>
                      <span class="fileupload-exists">Cambiar</span>
                      <input type="file" name="imagen">
                    </span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Quitar</a>
                  </div>
                </div>
              </div>
              <div class="formSep">
                <div class="span4"></div>
                  <div class="span2">
                    <button type="submit" class="btn">Guardar</button>
                  </div>
                  <div class="span2">
                    <a href="<?= cms_url("servicios") ?>">
                      <button type="button" class="btn btn-danger">Volver</button></a>
                  </div>
                  <div class="span4"></div>
                  <br /><br />
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span2"></div>
  </div>
</div>