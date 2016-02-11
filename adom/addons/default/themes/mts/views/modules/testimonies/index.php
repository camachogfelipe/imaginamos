<div class="lateralbar">
    {{ widgets:instance id="7"}}
    {{ widgets:instance id="8"}}    
</div>

<div class="contenidosNoticia testimonio-isotopo mtop">
    <?php
    foreach ($results as $value) {
        if ($value->is_live == 1) {
            ?>
            <div class="cajamitad isotope-item">
                <div class="contienecaja">
                    <div class="headercaja lineabottom"><span data-icon="&#xe079;" aria-hidden="true"></span> <?= $value->title; ?></div>
                    <div class="footercaja"><?= $value->description; ?></div>
                    <!--div class="autor"><span data-icon="&#xe073;" aria-hidden="true"></span><?= $value->user->display_name; ?></div-->
                </div>
            </div> 
        <?php
        }
    }
    ?>
</div>

