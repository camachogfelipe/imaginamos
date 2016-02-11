<div class="content_940 content_home">
    <div class="menu_servicios clearfix">
        <a  href="{{url:site}}services_us">Nuestros Servicios</a>
        <a class="servicio_activo" href="{{url:site}}compromisos">Área Protegida</a>
    </div>
    <div class="linea_home">
        <h1 class="title_dest bold"><?php echo $entry['name'] ?></h1>
    </div>
    <div class="dest_serv" style="color:#454545; padding:22px 0;">
        <?php echo $entry['description'] ?>
    </div>
    <img src="{{site:url}}files/large/<?php echo $entry['images']['filename']; ?>" width="940" class="img_donde" />
    <div class="dest_serv2" style="color:#454545; padding:10px 0;">
    <h3 class="title2"><?php echo $entry['name_inf'] ?></h3>
    <?php echo $entry['description_inf'] ?>
    </div>
</div>