<div class="container">
    <div class="row-fluid">
    
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <li><a href="javascript:void(0)">Categorias & Productos</a></li>
          <li><a href="javascript:void(0)">Banner Café</a></li>
      </ul>
    </div>
    
  </div>
    <div class="row-fluid">
        <div class="span12"  style="color: <?php echo $color_module ?>">
            <h3><?php echo $title_page; ?></h3>
        </div>
    </div>
    

    
    
    <div class="row-fluid">
          <div class="span3">
         <div class="w-box w-box-red">
       <div  class="w-box-header">Fondo Sección Café</div>
            <div class="w-box-content cnt_a">
                <div>
                     <?php echo form_open_multipart(cms_url($direct_form_edit), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>   <?php echo $form_edit ?>
                        <div class="formSep">
                            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
                        </div>
                      <?php echo form_close() ?>
                </div>
            </div>
        </div>
       </div>       
        <div class="span9">
            <div class="w-box w-box-red">
                <div id="title_content" class="w-box-header"><?php echo $pag_content_title;?></div>
                <div class="w-box-content cnt_a">
                    <div id="ajax_content">
                        <?php echo $pag_content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
