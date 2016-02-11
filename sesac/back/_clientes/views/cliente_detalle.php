<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Clientes</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Editar Cliente</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("clientes/saveChangesCliente") ?>" enctype="multipart/form-data">
            <fieldset>
              <input type="hidden" name="idCliente" value="<?= $cliente["id"] ?>">
              <div class="formSep">
                <label class="req">Nombre</label>
                <input type="text" name="nombre" class="span8" required maxlength="47" placeholder="max 47 caracteres" value="<?= $cliente["nombre"] ?>">
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" cols="30" rows="6" class="ckeditor" required><?= $cliente["texto"] ?></textarea>
              </div>
              <div class="formSep">
                <label class="req">Link</label>
                <input type="url" class="span8" name="url" placeholder="Enlace a la página del cliente" required value="<?= $cliente["url"] ?>">
              </div>
              <div class="formSep">
                <label>Imagen</label>
                <img src="<?= $cliente["imagen"] ?>">
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
                      <span class="fileupload-new">Selecccionar Imagen</span>
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
                  <a href="<?= cms_url("clientes") ?>"><button type="button" class="btn btn-danger">Volver</button></a>
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