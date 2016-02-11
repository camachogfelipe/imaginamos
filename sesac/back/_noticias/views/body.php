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
          <h4>Agregar Noticias</h4>
        </div>
        <div class="w-box-content">
          <form id="validate_extended" novalidate="novalidate" method="post" action="<?= cms_url("noticias/save") ?>">
            <div class="formSep">
              <label class="req">Fecha</label>
              <input class="short" type="text" name="fecha" value="<?= date('Y-m-d') ?>" data-date-format="yyyy-mm-dd" id="dp1" required>
            </div>
            <div class="formSep">
              <label class="req">Titulo</label>
              <input type="text" name="titulo" required>
            </div>
            <div class="formSep">
              <label class="req">Intro</label>
              <textarea name="intro" id="" cols="30" rows="6" class="span12" required></textarea>
            </div>
            <div class="formSep">
              <label class="req">Texto</label>
              <textarea name="texto" cols="30" rows="6" class="span12" required></textarea>
            </div>
            <div class="formSep">
              <label class="req">Url del video</label>
              <input type="text" class="span12" name="video_url" required>
            </div>
            <div class="formSep">
              <button type="submit" class="btn">Guardar e ir al paso 2</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Noticias Registradas</h4>
        </div>
        <div class="w-box-content">
        <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
            <thead>
              <tr role="row">
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 15%;" aria-label="Image">
                  Fecha
                </th>
                <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dt_gal" rowspan="1" colspan="1" style="width: 70%;" aria-sort="descending">
                  Título
                </th>
                <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 15%;" aria-label="Actions">
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              <?php foreach ($noticias as $noticia) :?>
              <tr class="even">
                <td style="width:60px" class=" ">
                  <?= $noticia["fecha"] ?>
                </td>
                <td class=" sorting_1">
                  <?= $noticia["titulo"] ?>
                </td>
                <td class=" ">
                  <div class="span3"></div>
                  <div class="span6">
                    <div class="btn-group">
                      <a href="<?= cms_url("noticias/edit/".$noticia["id"])?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
                      <a href="<?= cms_url("noticias/delete/".$noticia["id"]) ?>" class="btn btn-mini bb-confirm" title="Delete"><i class="icon-trash"></i></a>
                    </div>
                  </div>
                  <div class="span3"></div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="dt-row dt-bottom-row">
          <div class="row-fluid">
            <div class="dataTables_paginate paging_bootstrap pagination">
              <ul>
                <li class="prev <?php if($pagina == 1){ echo "disabled"; } ?>">
                  <?php if($pagina > 1){?>
                  <a href="<?= cms_url("noticias/pagina/".(intval($pagina)-1)) ?>" >Anterior</a>
                  <?php } ?>
                </li>
                
                <?php for($i = 1; $i<=$paginas; $i++ ) :?>
                <li class="<?php if($pagina==$i) { echo "active"; }?>">
                  <a href="<?= cms_url("noticias/pagina/".$i) ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>
                
                <li class="next">
                  <?php if($pagina < $paginas) :?>
                  <a href="<?= cms_url("noticias/pagina/".(intval($pagina)+1)) ?>">Siguiente</a>
                  <?php endif; ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>