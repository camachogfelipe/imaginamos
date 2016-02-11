<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Clientes</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span7">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Agregar Cliente</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("clientes/saveNewCliente") ?>" enctype='multipart/form-data'>
            <fieldset>
              <div class="formSep">
                <label class="req">Nombre</label>
                <input type="text" name="nombre" class="span8" required maxlength="47" placeholder="max 47 caracteres">
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" class="ckeditor" cols="30" rows="6" required></textarea>
              </div>
              <div class="formSep">
                <label class="req">Link</label>
                <input type="url" class="span8" name="url" placeholder="Enlace a la página del cliente" required>
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
                <button type="submit" class="btn">Agregar</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span5">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Clientes Registrados (<?= count($clientes) ?>)</h4>
        </div>
        <div class="w-box-content">
        <table class="table" id="dt_basic" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 60%;" aria-label="Image">
                  Nombre
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 40%;" aria-label="Actions">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach($clientes as $cliente) :?>
              <tr class="even">
                <td style="width:60px" class=" ">
                    <?= $cliente["nombre"] ?>
                </td>
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("clientes/loadCliente/".$cliente["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                      <?php if(count($clientes)>1) :?>
                      <a href="<?= cms_url("clientes/deleteCliente/".$cliente["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash bb-confirm"></i></a>
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