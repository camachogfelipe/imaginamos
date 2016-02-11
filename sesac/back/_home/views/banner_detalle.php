<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Banner</a></li>
      </ul>
    </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Editar Banner</h4>
        </div>
        <div class="w-box-content cnt_a">
          <form id="validate_extended" novalidate="novalidate" enctype='multipart/form-data' method="post" action="<?= cms_url("home/saveChangesBanner") ?>">
            <fieldset>
              <input type="hidden" name="idBanner" value="<?= $banner["id"] ?>">
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Texto 1 (Blanco)</label>
                    <input type="text" name="titulo1_blanco" class="large" placeholder="Max 21 Caracteres" maxlength="21" required value="<?= $banner["titulo1_blanco"] ?>">
                </div>
                <div class="span6">
                  <label>Texto 2 (Blanco)</label>
                  <input type="text" name="titulo2_blanco" class="large" placeholder="Max 21 Caracteres" maxlength="21" value="<?= $banner["titulo2_blanco"] ?>">
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Texto 3 (Amarillo)</label>
                  <input type="text" name="titulo1_amarillo" class="large" placeholder="Max 21 Caracteres" maxlength="21" required value="<?= $banner["titulo1_amarillo"] ?>">
                </div>
                <div class="span6">
                  <label class="req">Texto 4 (Amarillo)</label>
                  <input type="text" name="titulo2_amarillo" class="large" placeholder="Max 21 Caracteres" maxlength="21" required value="<?= $banner["titulo2_amarillo"] ?>">
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Texto 5 (Blanco)</label>
                  <input type="text" name="titulo3_blanco" class="large" placeholder="Max 21 Caracteres" maxlength="21" required value="<?= $banner["titulo3_blanco"] ?>">
                </div>
                <div class="span6"></div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Imagen Fondo</label>
                  <img src="<?= $banner["imagenFondo"] ?>" style="width: 80%;">
                </div>
                <div class="span6">
                  <label class="req">Imagen Frente</label>
                  <img src="<?= $banner["imagenFrente"] ?>" width="60">
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <div class="fileupload fileupload-new span8" data-provides="fileupload">
                    <div class="input-append">
                      <div class="uneditable-input input-small">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                      </div>
                      <span class="btn btn-file">
                        <span class="fileupload-new">Seleccionar</span>
                        <span class="fileupload-exists">Cambiar</span>
                        <input type="file" name="imagenFondo">
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="fileupload fileupload-new span8" data-provides="fileupload">
                    <div class="input-append">
                      <div class="uneditable-input input-small">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                      </div>
                      <span class="btn btn-file">
                        <span class="fileupload-new">Select file</span>
                        <span class="fileupload-exists">Change</span>
                        <input type="file" name="imagenFrente">
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="formSep">
                  <div class="span4"></div>
                  <div class="span2">
                    <button type="submit" class="btn">Guardar</button>
                  </div>
                  <div class="span2">
                    <a href="<?= cms_url("home/banner") ?>"><button type="button" class="btn btn-danger">Volver</button></a>
                  </div>
                  <div class="span4"></div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span2"></div>
  </div>
</div>