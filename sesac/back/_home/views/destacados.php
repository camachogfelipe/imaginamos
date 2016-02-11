<div class="container">
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Destacados</a></li>
      </ul>
    </div>
    <div class="span2"></div>
  </div>
  <div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
      <div class="w-box w-box-green">
        <div class="w-box-header">
          <h4>Destacados</h4>
        </div>
        <div class="w-box-content">
          <div id="dt_basic_wrapper" class="dataTables_wrapper form-inline" role="grid">
            <table class="table table-vam table-striped dataTable dt_cmsTable" aria-describedby="dt_gal_info">
              <thead>
                <tr role="row">
                  <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 120px;" aria-label="Image">
                    Imagen
                  </th>
                  <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dt_gal" rowspan="1" colspan="1" style="width: 372px;" aria-sort="descending" aria-label="Name: activate to sort column ascending">
                    Título
                  </th>
                  <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 260px;" aria-label="Actions">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody role="alert" aria-live="polite" aria-relevant="all">
                <?php foreach ($destacados as $destacado) :?>
                <tr class="even">
                  <td style="width:60px" class=" ">
                    <div class="span3"></div>
                    <div class="span6">
                      <img alt="" src="<?= $destacado["imagen"] ?>">
                    </div>
                    <div class="span3"></div>
                  </td>
                  <td class=" sorting_1"><?= $destacado["titulo"] ?></td>
                  <td class=" ">
                    <div class="span3"></div>
                    <div class="span5">
                      <div class="btn-group">
                        <a href="<?= cms_url("home/loadDestacado/".$destacado["id"]) ?>" class="btn btn-mini" title="Edit"><i class="icon-pencil"></i></a>
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