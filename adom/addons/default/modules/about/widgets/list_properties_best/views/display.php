<div>
    <div>
        <div>Lorem ipsum dolor elit.</div>
        <div>
            <?php foreach ($list as $val): ?>
                <div>
                    <img src="<?= $val['image']->path ?>" alt="mts"/>
                    <div class="footerslider"><?= $val['description'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div></div>
    </div>
</div>


