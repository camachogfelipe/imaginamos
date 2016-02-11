<div class="lateralbar">
    {{ widgets:instance id="7"}}
    {{ widgets:instance id="8"}}    
</div>

<div class="contenidos mtop">
    <div class="barCiudad" style="padding-left: 10;background-color: white; width: 680px; margin-left: 10px; margin-bottom: 15px; ">
        <label style="color: #52AE31;text-transform: uppercase;font-size: 20px;line-height: 40px;">Seleccione una ciudad</label> 
        <div class="campo" style="float: right; border-right: 0px solid #fff; margin-left: 0px; margin-top: 0; width: 200px; border:0 solid #fff; padding:3px 2px;">
            <?php echo form_dropdown('city_id', $cities, @$city_id, 'id="city_id"') ?>    
        </div>
    </div>
    
     
    <div class="isotope-gallery hide-content">  
        
        <?php
        foreach ($results as $value) {
            if ($value->is_live == 1 && ($value->city_id == $city_id || $city_id == 0)) {
                ?>
                <div class="isotope-item" id="item_<?php echo $value->id ?>">
                    <div class="contienecajaisotopo">
                        <div class="isotope-title isotope-box">
                            <?php echo $value->title ?>
                        </div>
                        <div class="isotope-image-container">
                            <?php if ($value->is_video_url == 1) { ?>
                                <iframe class="youtube-player" type="text/html" width="100%" height="200"  src="http://www.youtube.com/embed/<?php echo $value->url_video ?>" frameborder="0"></iframe>
                            <?php } ?>

                            <?php if ($value->is_video == 1) { ?>
                                <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="200"
                                       poster="{{ url:base }}uploads/default/files/video_play.jpg"
                                       data-setup="{}">
                                    <source src="{{ url:base }}uploads/default/files/<?php echo $value->video ?>" type='video/mp4' />       
                                </video>
                            <?php } ?>

                            <?php if ($value->is_image == 1) { ?>                           
                                <img src="{{ url:base }}uploads/default/files/<?php echo $value->image ?>"/>
                            <?php } ?>
                        </div>

                        <div class="isotope-content isotope-box">
                            <p>
                                <?php echo $value->description ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<input id="item_id" value="<?= $this->uri->segment(3) ?>" type="hidden"/>
{{ theme:js file="services.js" }}











