<div class="tablaservi" style="background-color: white;">
    <div class="borde-top"></div>
    <div class="borde-bottom"></div>
    <div class="borde-left"></div>
    <div class="borde-right"></div>
    <div class="borde-top-left"></div>
    <div class="borde-top-right"></div>
    <div class="borde-bottom-left"></div>
    <div class="borde-bottom-right"></div>
    <ul class="servicios">
        <li>
            <span class="title_event_widget headercaja">Noticias RSS</span>                
        </li>
        <?php
        foreach ($rss_items as $items) {
            ?>
            <!-- Begin RSS Feed -->
            <?php if (isset($items['itemsRss'])) : ?>
                <?php foreach ($items['itemsRss'] as $key => $rss_item): ?>
                    <?php if ($key < 5) { ?>
                        <li>
                            <?php
                            $item_date = strtotime($rss_item->get_date());
                            $item_month = date('M', $item_date);
                            $item_day = date('j', $item_date);
                            ?>
                            <!--div class="headercaja">
                                <div class="time">
                                    <span class="month">
                                        <?php echo $item_month ?>
                                    </span>
                                    <span class="day">
                                        <?php echo $item_day ?>
                                    </span>
                                </div>
                            </div-->
                            <span class="title_event_widget"><?php echo anchor($rss_item->get_permalink(), $rss_item->get_title(), 'target="_blank"') ?></span>     
                        </li>
                    <?php } ?>
                <?php endforeach ?>
            <?php endif ?>
            <!-- End RSS Feed -->
            <?php
        }
        ?>      
    </ul>
</div>