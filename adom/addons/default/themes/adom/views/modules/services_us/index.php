<div class="content_940 content_home">
    <div class="menu_servicios clearfix">
        <a class="servicio_activo"  href="{{url:site}}services_us">Nuestros Servicios</a>
        <a href="{{url:site}}area_protegida">Área Protegida</a>
    </div>
    <div class="linea_home">
        <h1 class="title_dest bold">Nuestros Servicios</h1>
    </div>
    <div class="texto_producto clearfix">
        <img src="{{site:url}}files/large/<?php echo $entry['images']['filename']; ?>" class="right" style="height:250px; margin-top:76px;" />
        <h3 ><?php echo $entry['name'] ?> </h3>
        <br />
        <div class="main_p">
        <?php echo $entry['description'] ?>
        </div>
        <!--<h3 class="bold"><?php echo $entry['name_inf'] ?></h3>
        <br /> 
        <?php echo $entry['description_inf'] ?>-->
    </div>
</div>