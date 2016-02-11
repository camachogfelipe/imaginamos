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
          <h4>Agregar Banner</h4>
        </div>
        <div class="w-box-content cnt_a">
          <?php if(count($banners)<5) {?>
          <form id="validate_extended" novalidate="novalidate" enctype="multipart/form-data" method="post" action="<?= cms_url("home/saveNewBanner") ?>">
            <fieldset>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Texto 1 (Blanco)</label>
                  <input type="text" name="titulo1_blanco" class="large" placeholder="Max 21 Caracteres" maxlength="21" required>
                </div>
                <div class="span6">
                  <label>Texto 2 (Blanco)</label>
                  <input type="text" name="titulo2_blanco" class="large" placeholder="Max 21 Caracteres" maxlength="21">
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Texto 3 (Amarillo)</label>
                  <input type="text" name="titulo1_amarillo" class="large" placeholder="Max 21 Caracteres" maxlength="21" required>
                </div>
                <div class="span6">
                  <label class="req">Texto 4 (Amarillo)</label>
                  <input type="text" name="titulo2_amarillo" class="large" placeholder="Max 21 Caracteres" maxlength="21" required>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Texto 5 (Blanco)</label>
                  <input type="text" name="titulo3_blanco" class="large" placeholder="Max 21 Caracteres" maxlength="21" required>
                </div>
                <div class="span6"></div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <label class="req">Imagen Fondo</label>
                  <div class="fileupload fileupload-new span8" data-provides="fileupload">
                    <div class="input-append">
                      <div class="uneditable-input input-small">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                      </div>
                      <span class="btn btn-file">
                        <span class="fileupload-new">Seleccionar</span>
                        <span class="fileupload-exists">Cambiar</span>
                        <input type="file" name="imagenFondo" required>
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <label class="req">Imagen Frente</label>
                  <div class="fileupload fileupload-new span8" data-provides="fileupload">
                    <div class="input-append">
                      <div class="uneditable-input input-small">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                      </div>
                      <span class="btn btn-file">
                        <span class="fileupload-new">Seleccionar</span>
                        <span class="fileupload-exists">Cambiar</span>
                        <input type="file" name="imagenFrente" required>
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="formSep">
                  <div class="span5"></div>
                  <div class="span2">
                    <button type="submit" class="btn">Guardar</button>
                  </div>
                  <div class="span5"></div>
                </div>
              </div>
            </fieldset>
          </form>
          <?php }else{ ?>
          <h2>Ha alcanzado el máximo de banners permitidos</h2>
          <?php } ?>
        </div>
      </div>
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Banner</h4>
        </div>
        <div class="w-box-content">
          <div id="dt_basic_wrapper" class="dataTables_wrapper form-inline" role="grid">
            <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
              <thead>
                <tr role="row">
                  <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 40%;" aria-label="Image">
                    Imagen Fondo
                  </th>
                  <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 40%;" aria-label="Image">
                    Imagen Frente
                  </th>
                  <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 30%px;" aria-label="Actions">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody role="alert" aria-live="polite" aria-relevant="all">
                <?php foreach ($banners as $banner) :?>
                <tr class="even">
                  <td style="width:60px" class="">
                    <div class="span2"></div>
                    <div class="span8">
                      <img src="<?= $banner["imagenFondo"] ?>" heigth="60" />
                    </div>
                    <div class="span2"></div>
                  </td>
                  <td style="width:60px" class="">
                    <div class="span2"></div>
                    <div class="span8">
                      <img src="<?= $banner["imagenFrente"] ?>" width="60" />
                    </div>
                    <div class="span2"></div>
                  </td>
                  <td class="">
                    <div class="span3"></div>
                    <div class="span6">
                      <div class="btn-group">
                      <a href="<?= cms_url("home/loadBanners/".$banner["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                      <?php if(count($banners)>1) :?>
                      <a href="<?= cms_url("home/deleteBanner/".$banner["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash"></i></a>
                      <?php endif; ?>
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
    <div class="span2"></div>
  </div>
</div>