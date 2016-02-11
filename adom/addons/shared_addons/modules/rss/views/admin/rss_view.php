<div id="sortable">
    <!-- Begin RSS Feed -->
    <?php if (isset($rss_items)) : ?>
        <div id="feed" class="one_full">

            <section class="draggable title">
                <h4><?php echo lang('cp:news_feed_title') ?></h4>
                <a class="tooltip-s toggle" title="Toggle this element"></a>
            </section>

            <section class="item">
                <div class="content">
                    <ul>
                        <?php foreach ($rss_items as $rss_item): ?>
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
                                    <h4><?php echo anchor($rss_item->get_permalink(), $rss_item->get_title(), 'target="_blank"') ?></h4>

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
</div>