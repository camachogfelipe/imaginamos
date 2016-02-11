<?php
foreach ($rss_items as $items) {
    ?>
    <!-- Begin RSS Feed -->
    <?php if (isset($items['itemsRss'])) : ?>
        <div class="contentRss">
            <section class="draggable title">
                <h4><?php echo $items['nameRss'] ?></h4>                   
            </section>
            <section class="item">
                <div class="content">
                    <ul>
                        <?php foreach ($items['itemsRss'] as $rss_item): ?>
                            <li>

                                <?php
                                $item_date = strtotime($rss_item->get_date());
                                $item_month = date('M', $item_date);
                                $item_day = date('j', $item_date);
                                ?>

                                <div class="date">
                                    <div class="time">
                                        <span class="month">
                                            <?php echo $item_month ?>
                                        </span>
                                        <span class="day">
                                            <?php echo $item_day ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="post">
                                    <div style="font-size: 20px;"><?php echo anchor($rss_item->get_permalink(), $rss_item->get_title(), 'target="_blank"') ?></div>
                                    <p class='item_body'><?php echo $rss_item->get_description() ?></p>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </section>
        </div>

    <?php endif ?>
    <!-- End RSS Feed -->
    <?php
}
?>
