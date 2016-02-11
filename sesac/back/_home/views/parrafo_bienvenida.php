<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Párrafo de bienvenida</a></li>
      </ul>
    </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Párrafo de bienvenida</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("home/saveBienvenida") ?>">
            <fieldset>
              <div class="formSep">
                <label class="req">Título</label>
                <input class="span8" name="titulo" type="text" maxlength="37" placeholder="Max 37 caracteres" value="<?= $bienvenida["titulo"] ?>" required>
              </div>
              <div class="formSep">
                <label class="req">Texto</label>
                <textarea name="texto" id="wysiwg_val" cols="30" rows="6" class="span12" maxlength="968" required><?= $bienvenida["texto"] ?></textarea>
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