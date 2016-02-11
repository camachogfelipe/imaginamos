<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
      <div class="span8">
        <ul id="breadcrumbs">
            <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
            <li><a href="javascript:void(0)">Nuestra Compañía</a></li>
            <li><a href="javascript:void(0)">Certificaciones</a></li>
        </ul>
      </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Certificaciones</h4>
        </div>
        <div class="w-box-content">
          <?php if(count($certificaciones)<4) {?>
          <form id="validate_extended" novalidate="novalidate" enctype='multipart/form-data' method="post" action="<?= cms_url("empresa/saveNewCertification") ?>">
            <div class="formSep">
              <label class="req">Texto</label>
              <textarea name="texto" id="wysiwg_val" cols="30" rows="6" class="span12" maxlength="392" required></textarea>
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
              <button type="submit" class="btn">Agregar</button>
            </div>
          </form>
          <?php }else{ ?>
          <br />
          <h4>Ha alcanzado el máximo de certificaciones</h4>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Certificaciones Registradas</h4>
        </div>
        <div class="w-box-content">
        <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Image" style=" width: 15%; ">
                  Imagen
                </th>
                <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dt_gal" rowspan="1" colspan="1" style="width: 30%;" aria-sort="descending" aria-label="Name: activate to sort column ascending">
                  Texto
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 30%px;" aria-label="Actions">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach ($certificaciones as $certificacion) :?>
              <tr class="even">
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <img alt="" src="<?= $certificacion["imagen"] ?>" width="40">
                  </div>
                  <div class="span3"></div>
                </td>
                <td class=" sorting_1"><?= substr($certificacion["texto"], 0, 25)." ..."; ?></td>
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("empresa/loadCertification/".$certificacion["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                    <?php if(count($certificaciones)>1) :?><a href="<?= cms_url("empresa/deleteCertification/".$certificacion["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash"></i></a><?php endif; ?>
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