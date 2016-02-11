<div class="content_940 content_home">
    <div class="linea_home">
        <h1 class="title_dest bold">Novedades</h1>

    </div>
    <?php
    foreach ($results['entries'] as $value) {
        if ($value['id'] > 1) {
            ?>
            <div class="item_news">
                <h3><?= $value['full_data'][0]->title ?></h3>
                <div class="clearfix">
                    <img src="{{url:site}}files/large/<?= $value['image_novedades']['filename'] ?>" width="280" height="119" class="left" />
                    <p class="main_p" style="height:82px; overflow:hidden;">
                        <?= substr(strip_tags($value['description_novedades']), 0, 420)."..."; ?>
                    </p>
                    <a class="btn_vermas" href="{{url:site}}<?= $value['full_data'][0]->uri ?>" style="width:52px;">Ver más <span></span></a>
                </div>
            </div>
        <?php
        }
    }
    ?>
<?= $results['pagination'] ?>
</div>