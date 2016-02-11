<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Noticias</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span3"></div>
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Editar Imagen</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("noticias/saveImageChanges") ?>" enctype="multipart/form-data">
            <fieldset>
              <input type="hidden" name="idImagen" value="<?= $imagen["id"] ?>">
              <div class="formSep">
                <label class="req">Titulo</label>
                <input class="span12" type="text" name="titulo" value="<?= $imagen["titulo"] ?>" required>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" rows="6" class="span12"><?= $imagen["texto"] ?></textarea>
              </div>
              <div class="formSep">
                <label class="req">Imagen</label>
                <img src="<?= $imagen["imagen"] ?>" width="150">
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
                  <a href="<?= $this->agent->referrer() ?>"><button type="button" class="btn btn-danger">Volver</button></a>
                </div>
                <div class="span4"></div>
                <br /><br />
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span3"></div>
  </div>
</div>