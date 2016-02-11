<div class="container">
    <div class="row-fluid">
    
    <div class="span8">
      <ul id="breadcrumbs">
          <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
          <?php foreach ($migas as $miga): ?>
          <li><a href="javascript:void(0)"><?php echo $miga; ?></a></li>
          <?php endforeach; ?>
      </ul>
    </div>
    
  </div>
    <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module ?>">
            <h3><?php echo $title_page; ?></h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="w-box w-box-<?php echo $color_module ?>">
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
