<?php
//echo '<pre>';
//print_r($valores);
//exit;
?>

<div class="content_940 content_home">
    <div class="menu_servicios clearfix">

        <a class="servicio_activo" href="quienes">Quiénes Somos</a>
        <a href="donde">Dónde Atendemos</a>
    </div>

    <div class="linea_home">
        <h1 class="title_dest bold">Quiénes Somos</h1>
    </div>
    <div class="clearfix">
        <div class="texto_quienes scroll_pane left">
            <div class="main_p">
                <?php echo $quienes[0]->description; ?>
            </div>
        </div>
        <img src="{{url:site}}files/large/<?php echo $quienes[0]->image; ?>" class="img_quienes right" width="370" height="250"/>
    </div>
    <h2 class="title2"><?php echo $valores[0]->title; ?></h2>
    <p class="main_p">
        <?php echo $valores[0]->description; ?>
    </p>
    <div class="content_valores clearfix" style="width: 960px;">
        <?php foreach ($valores as $key => $value) { ?>
            <?php if ($key > 0) { ?>
                <div class="item_valor">
                    <h3><?php echo $value->title; ?></h3>
                    <div class="texto_valor scroll_pane">
                        <p class="main_p">
                            <?php echo $value->description; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    
</div>

