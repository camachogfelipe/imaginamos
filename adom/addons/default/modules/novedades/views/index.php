<div>
    <?php foreach ($results as $value) {
        echo '<pre>';
     print_r($value);
        if ($value){
        ?>
    
        <div>
            <div>
                <div><span data-icon="&#xe079;" aria-hidden="true"></span> <?= $value->title; ?></div>
                <div><?= $value->description; ?></div>
                <div><span data-icon="&#xe073;" aria-hidden="true"></span><?= $value->user->display_name; ?></div>
            </div>
        </div> 
    <?php }} ?>
</div>