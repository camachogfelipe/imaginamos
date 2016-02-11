<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Destacados</a></li>
      </ul>
    </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Agregar Destacado</h4>
        </div>
        <div class="w-box-content cnt_a">
          <form id="validate_extended" novalidate="novalidate" enctype="multipart/form-data" method="post" action="<?= cms_url("home/saveDestacado") ?>">
            <fieldset>
              <input type="hidden" name="idDestacado" value="<?= $destacado["id"] ?>">
              <div class="row-fluid">
                <div class="span12">
                  <label class="req">Titulo</label>
                    <input type="text" name="titulo" class="span8" placeholder="Max 34 Caracteres" maxlength="34" value="<?= $destacado["titulo"] ?>" required>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span12">
                  <label>Texto</label>
                  <textarea name="texto" id="wysiwg_val" cols="30" rows="6" class="span12" maxlength="968" required><?= $destacado["texto"] ?></textarea>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span12">
                  <label class="req">Imagen</label>
                  <img src="<?= $destacado["imagen"] ?>" style="width: 50%;">
                </div>
              </div>
              <div class="row-fluid">
                <div class="span12">
                  <div class="fileupload fileupload-new span8" data-provides="fileupload">
                    <div class="input-append">
                      <div class="uneditable-input input-small">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                      </div>
                      <span class="btn btn-file">
                        <span class="fileupload-new">Selecionar</span>
                        <span class="fileupload-exists">Cambiar</span>
                        <input type="file" name="imagen">
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Enlace</label>
                  <input type="text" name="enlace" class="span12" placeholder="URL del destacado" value="<?= $destacado["enlace"] ?>" required/>
                </div>
                <div class="span6">
                  <label class="req">Al hacer click</label>
                  <select name="target">
                    <option value="_self" <?php if ($destacado["target"] == "_self") :?>selected="selected"<?php endif; ?>>Abrir en la misma ventana</option>
                    <option value="_blank" <?php if ($destacado["target"] == "_blank") :?>selected="selected"<?php endif; ?>>Abrir en nueva ventana</option>
                  </select>
                </div>
              </div>
              <div class="row-fluid">
                <div class="formSep">
                  <div class="span4"></div>
                  <div class="span2">
                    <button type="submit" class="btn">Guardar</button>
                  </div>
                  <div class="span2">
                    <a href="<?= cms_url("home/destacados") ?>"><button type="button" class="btn btn-danger">Volver</button></a>
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