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
    <div class="span3"></div>
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Footer - Editar Email</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extendedB" novalidate="novalidate" action="<?= cms_url("home/saveEmailChanges") ?>" method="post">
            <fieldset>
              <input type="hidden" name="idEmail" value="<?= $email["id"] ?>">
              <div class="row-fluid">
                <div class="formSep">
                  <label class="req">Nombre</label>
                  <input class="span8" name="nombre" type="text" maxlength="30" placeholder="Max 30 caracteres" value="<?= $email["nombre"] ?>" required>
                </div>
              </div>
              <div class="row-fluid">
                <div class="formSep">
                  <label class="req">Email</label>
                  <input class="span8" name="email" type="email" maxlength="30" placeholder="Max 30 caracteres" value="<?= $email["email"] ?>" required>
                </div>
              </div>
              <div class="row-fluid">
                <div class="formSep">
                  <div class="span4"></div>
                    <div class="span2">
                      <button type="submit" class="btn">Guardar</button>
                    </div>
                    <div class="span2">
                      <a href="<?= cms_url("home/footer") ?>"><button type="button" class="btn btn-danger">Volver</button></a>
                    </div>
                    <div class="span4"></div>
                </div>
              </div>
              <div class="row-fluid"><div class="span12"></div></div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="span3"></div>
  </div>
</div>