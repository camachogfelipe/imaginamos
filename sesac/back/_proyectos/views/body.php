<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <h3>Proyectos</h3>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span7">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Agregar Proyecto - Paso 1</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_field_types" novalidate="novalidate" method="post" action="<?= cms_url("proyectos/saveNewProject") ?>">
            <fieldset>            
              <div class="formSep">
                <label class="req">Título</label>
                <input type="text" name="titulo" maxlength="45" placeholder="max 45 caracteres" class="span8" required>
              </div>
              <div class="formSep">
                <label class="req">Intro</label>
                <textarea class="span12" name="intro" cols="70" rows="6" required></textarea>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" cols="30" rows="6" class="span12" required></textarea>
              </div>
              <div class="formSep">
                <label class="req">Cliente</label>
                <select class="span12 s2_single" name="cliente" required>
                    <option value=""></option>
                    <?php foreach ($clientes as $cliente) :?>
                    <option value="<?= $cliente["id"] ?>"><?= $cliente["nombre"] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="formSep">
                <label class="req">Servicio</label>
                <select class="span12 s2_single" name="servicio" required>
                    <option value=""></option>
                    <?php foreach ($servicios as $servicio) :?>
                    <option value="<?= $servicio["id"] ?>"><?= $servicio["titulo"] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="formSep">
                <button type="submit" class="btn">Guardar e ir al Paso 2</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span5">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Proyectos Registrados</h4>
        </div>
        <div class="w-box-content">
        <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 70%;" aria-label="Image">
                  Nombre
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 30%;" aria-label="Actions">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach ($proyectos as $proyecto) :?>
              <tr class="even">
                <td style="width:60px" class=" ">
                    <?= $proyecto["titulo"] ?>
                </td>
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("proyectos/edit/".$proyecto["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                      <a href="<?= cms_url("proyectos/delete/".$proyecto["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash"></i></a>
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