<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Servicios</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Agregar Servicio</h4>
        </div>
        <div class="w-box-content">
          <?php if(count($servicios) < 7) {?>
          <form id="validate_extended" novalidate="novalidate" action="<?= cms_url("servicios/saveNewService") ?>" method="post" enctype="multipart/form-data">
            <fieldset>
              <div class="formSep">
                <label class="req">Título</label>
                <input type="text" name="titulo" class="span8" maxlength="25" placeholder="max 25 caracteres" required>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" id="wysiwg_val" cols="30" rows="6" class="span12" maxlength="365"  placeholder="max 365 caracteres" required></textarea>
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
                      <span class="fileupload-new">Seleccionar Imagen</span>
                      <span class="fileupload-exists">Cambiar</span>
                      <input type="file" name="imagen" required>
                    </span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Quitar</a>
                  </div>
                </div>
              </div>
              <div class="formSep">
                <button type="submit" class="btn">Agregar Servicio</button>
              </div>
            </fieldset>
          </form>
          <?php }else{ ?>
          <br/>
          <h4>Ha llegado al máximo de servicios permitidos</h4>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Servicios Registrados</h4>
        </div>
        <div class="w-box-content">
        <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dt_gal" rowspan="1" colspan="1" style="width: 70%;" aria-sort="descending" aria-label="Name: activate to sort column ascending">
                  Titulo
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 30%;" aria-label="Actions">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach($servicios as $servicio) :?>
              <tr class="even">
                <td class=" sorting_1"><?= $servicio["titulo"] ?></td>
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("servicios/loadServicio/".$servicio["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                    <?php if(count($servicios)> 1) :?>
                      <a href="<?= cms_url("servicios/deleteServicio/".$servicio["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash"></i></a>
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
</div>