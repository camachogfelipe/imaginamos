<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
      <div class="span8">
        <ul id="breadcrumbs">
            <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
            <li><a href="javascript:void(0)">Nuestra Compañía</a></li>
            <li><a href="javascript:void(0)"><?= $titulo ?></a></li>
        </ul>
      </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4><?= $titulo ?></h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" enctype="multipart/form-data" method="post" action="<?= cms_url("empresa/saveArticle") ?>">
            <fieldset>
              <input type="hidden" value="<?= $articulo["id"] ?>" name="idArticle"/>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" id="wysiwg_val" cols="30" rows="6" class="span8" required><?= $articulo["texto"] ?></textarea>
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
                <label class="req">Imagen Actual</label>
                <img src="<?= $articulo["imagen"] ?>" height="330" width="290">
              </div>
              <div class="formSep">
                <button type="submit" class="btn">Guardar</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span2"></div>
  </div>
</div>