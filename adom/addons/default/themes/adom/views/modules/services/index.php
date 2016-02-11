<div class="content_940 content_home">
    <div class="linea_home">
        <h1 class="title_dest bold">Servicios</h1>
    </div>
    <div class="lista_servicios clearfix" style="width: 970px; text-align: center;">
        <?php foreach ($results as $value) { ?>
        <a href="<?= $value->uri; ?>" class="item_serv" style="display: inline-block;"> 
                <img src="{{site:url}}files/large/<?php echo $value->image; ?>" width="300" height="250"/>
                <h3 class="bold"><?php echo $value->title; ?></h3>
            </a>
        <?php } ?>
    </div>

</div>