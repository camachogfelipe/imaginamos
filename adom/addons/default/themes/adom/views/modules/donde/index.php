<?php
//echo '<pre>';
//print_r($valores);
//exit;
?>

<div class="content_940 content_home">
    <div class="menu_servicios clearfix">

        <a  href="quienes">Quiénes Somos</a>
        <a class="servicio_activo" href="donde">Dónde Atendemos</a>
    </div>
    <div class="linea_home">
        <h1 class="title_dest bold">Dónde Atendemos</h1>
    </div>
    <img src="{{site:url}}files/large/<?php echo $donde[0]->image; ?>" class="img_donde" /><br>
    <div class="main_p">
        <?php echo $donde[0]->description; ?>
    </div>

</div>