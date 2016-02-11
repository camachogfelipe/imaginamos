<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Footer</a></li>
      </ul>
    </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Footer - Información de contacto</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("home/saveFooter") ?>">
            <fieldset>
              <div class="formSep">
                <label class="req">Teléfono</label>
                <input class="span8"   name="telefono" type="text" maxlength="55" placeholder="Max 55 caracteres" value="<?= $footer["telefono"] ?>" required>
              </div>
              <div class="formSep">
                <label class="req">Dirección</label>
                <input class="span8"   name="direccion" type="text" maxlength="30" placeholder="Max 30 caracteres" value="<?= $footer["direccion"] ?>" required>
              </div>
              <div class="formSep">
                <label class="req">Edificio</label>
                <input class="span8"   name="edificio" type="text" maxlength="30" placeholder="Max 30 caracteres" value="<?= $footer["edificio"] ?>" required>
              </div>
              <div class="formSep">
                <label class="req">Ubicación Google Maps</label>
                <span><small>Haga click sobre el punto relacionado a la dirección</small></span>
                <div>
                  <?= $map['js']; ?>
                  <?= $map['html']; ?>
                </div>
                <label class="req">Coordenadas de dirección</label>
                <input class="span4" id="CoordenadaA"  name="CoordenadaA" type="text" placeholder="Norte" value="<?= $footer["gmapsX"] ?>">
                <input class="span4" id="CoordenadaB"  name="CoordenadaB" type="text" placeholder="Oeste" value="<?= $footer["gmapsY"] ?>">
              </div>
              <div class="formSep">
                <button type="submit" class="btn">Guardar</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Footer - Agregar Email</h4>
        </div>
        <div class="w-box-content">
          <?php if(count($emails)<3) {?>
          <form id="validate_extendedB" novalidate="novalidate" action="<?= cms_url("home/saveEmail") ?>" method="post">
            <fieldset>
              <div class="formSep">
                <label class="req">Nombre</label>
                <input class="span8" name="nombre" type="text" maxlength="30" placeholder="Max 30 caracteres" required>
              </div>
              <div class="formSep">
                <label class="req">Email</label>
                <input class="span8" name="email" type="email" maxlength="30" placeholder="Max 30 caracteres" required>
              </div>
              <div class="formSep">
                <button type="submit" class="btn">Agregar</button>
              </div>
            </fieldset>
          </form>
          <?php }else{ ?>
          <br/>
          <h4>Ha alcanzado el máximo de Emails</h4>
          <?php } ?>
        </div>
      </div>
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Footer - Correos registrados</h4>
        </div>
        <div class="w-box-content">
          <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_desc" role="columnheader" rowspan="1" colspan="1" style="width: 30%;" aria-label="Image">
                  Nombre
                </th>
                <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dt_gal" rowspan="1" colspan="1" style="width: 30%;">
                  Email
                </th>
                <th class="" role="columnheader" tabindex="0" aria-controls="dt_gal" rowspan="1" colspan="1" style="width: 40%;">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach ($emails as $email) :?>
              <tr class="even">
                <td style="width:60px" class=" ">
                    <?= $email["nombre"] ?>
                </td>
                <td style="width:60px" class=" ">
                    <?= $email["email"] ?>
                </td>
                <td class=" ">
                  <div class="span3">
                  </div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("home/loadEmail/".$email["id"]) ?>" class="btn btn-mini" title="Edit">
                        <i class="icon-pencil"></i>
                      </a>
                      <?php if(count($emails)> 1) :?>
                      <a href="<?= cms_url("home/deleteEmail/".$email["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete">
                        <i class="icon-trash"></i>
                      </a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="span3">
                  </div>
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