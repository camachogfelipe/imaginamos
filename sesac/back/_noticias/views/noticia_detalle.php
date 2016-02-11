<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Noticias</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Editar Noticia</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("noticias/saveChanges") ?>">
            <fieldset>
              <input type="hidden" name="idNoticia" value="<?= $noticia["id"] ?>">
              <div class="formSep">
                <label class="req">Fecha</label>
                <input class="short" type="text" name="fecha" value="<?= $noticia["fecha"] ?>" data-date-format="yyyy-mm-dd" id="dp1" required>
              </div>
              <div class="formSep">
                <label class="req">Titulo</label>
                <input class="span12" type="text" name="titulo" value="<?= $noticia["titulo"] ?>" required>
              </div>
              <div class="formSep">
                <label class="req">Intro</label>
                <textarea name="intro" id="" rows="6" class="span12"><?= $noticia["intro"] ?></textarea>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" rows="6" class="span12"><?= $noticia["texto"] ?></textarea>
              </div>
              <div class="formSep">
                <label class="req">Video URL</label>
                <input class="span12" type="text" name="video_url" value="<?= $noticia["video_url"] ?>" required>
              </div>
              <div class="formSep">
                <div class="span4"></div>
                <div class="span2">
                  <button type="submit" class="btn">Guardar</button>
                </div>
                <div class="span2">
                  <a href="<?= cms_url("noticias") ?>">
                    <button type="button" class="btn btn-danger">Volver</button>
                  </a>
                </div>
                <div class="span4"></div>
                <br><br>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Agregar Imagen</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("noticias/saveNewImage") ?>" enctype="multipart/form-data">
            <fieldset>
              <input type="hidden" name="idNoticia" value="<?= $noticia["id"] ?>">
              <div class="formSep">
                <label class="req">Titulo</label>
                <input type="text" name="titulo" value="" required>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" class="span12" rows="6" ></textarea>
              </div>
              <div class="formSep">
                <label class="req">Imagen</label>
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
                        <input type="file" name="imagen" required>
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Quitar</a>
                    </div>
                  </div>
              </div>
              <div class="formSep">
                <div class="span2">
                  <button type="submit" class="btn">Guardar</button>
                </div>
                <div class="span5"></div>
                <div class="span5"></div>
                <br /><br />
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Imágenes</h4>
        </div>
        <div class="w-box-content">
        <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 15%;" aria-label="Image">
                  Titulo
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 15%;" aria-label="Image">
                  Imagen
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 15%;" aria-label="Actions">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach ($imagenes as $imagen) :?>
              <tr class="even">
                <td class="">
                  <?= $imagen["titulo"] ?>
                </td>
                <td class="">
                  <img src="<?= $imagen["imagen"] ?>" width="55">
                </td>
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("noticias/editGallery/".$imagen["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                      <a href="<?= cms_url("noticias/deleteGallery/".$imagen["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash"></i></a>
                    </div>
                  </div>
                  <div class="span3"></div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>