<div class="sliderlateral mtop">
    <div class="contienesliderla">
        <div class="headersli">Inmuebles Binswanger</div>
        <div class="carousel">
            <?php foreach ($list as $val): ?>
                <div class="imgcarrouse">
                    <div style="height: 201px; overflow: hidden;">
                        <img src="<?= $val['image']->path ?>" alt="mts"/>
                    </div>
                    <div class="footerslider"><?= $val['description'] ?></div>
                </div>
            <?php endforeach; ?>            
        </div>
        <div class="pager"></div>
    </div>
</div>



