<style type="text/css">#nav-bt-6 {background-color:#6a6a6a;} #foo-bt-6 {color:#ce1728;}</style>

<section>
    <div class="con-section">
        <div class="mg-section cfx">
            <div class="con-miga">
                <ul class="miga-site">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="gestion.php">Gestión de flota</a></li>
                </ul>
            </div>
            <div class="con-logo-section">
                <img src="img/logo-t4.png" height="74" width="204" alt="">
            </div>
            
            <?php foreach ($gestion_flota as $obj) : ?>
            <div class="integra-col integra-col-c1">
                <h1><?php isset($obj->linia_titulo) ? ($obj->linea_titulo) : ""; ?></h1>
                <div class="con-info-col">
                    <div class="scroll-wrap" style="overflow: hidden; padding: 0px; width: 320px;">
                        <div class="jspContainer" style="width: 320px; height: 375px;">
                            <div class="jspPane" style="padding: 0px; top: 0px; width: 320px;">
                                <?php echo isset($obj->descripcion) ? ($obj->descripcion) : ""; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="integra-col integra-col-c1">
                <div class="con-gestion-img">
                    <img width="280" height="300" alt="" src="<?php echo isset($obj->imagen_path) ? base_url() . ($obj->imagen_path) : ""; ?>">
                </div>
            </div>
            <?php endforeach; ?>            
            
            <div class="integra-col integra-col-c2">
                <h2>Nuestros clientes</h2>
                <div class="scroll-wrap">
                    <ul class="items-x3-vt cfx">
                        <?php foreach ($cliente as $obj) : ?>
                            <li>
                                <div class="con-item-x3-vt">
                                    <a href="<?php echo isset($cliente->url) ? $cliente->url : "#"; ?>" target="_blank" class="over-items">
                                        <div class="item-over-img item-x3-vt-img"><img src="<?php echo isset($cliente->imagen_path) ? base_url().$cliente->imagen_path : "#"; ?>" height="120" width="120"></div>
                                        <h1><?php echo isset($cliente->nombre) ? $cliente->nombre : "#"; ?></h1>
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="con-des-gestion">
    <div class="des-gestion">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#" target="_blank">http://www.lipsum.com/</a>
    </div>
</div>
<section>
    <div class="con-section">
        <div class="mg-section cfx">



            <?php foreach ($noticia_relacionada as $obj) : ?>
                <div class="con-news cfx">
                    <h1><?php echo $obj->parrafo_titulo; ?></h1>
                    <div class="news-img"><img src="<?php echo base_url() . $obj->imagen_path; ?>" height="160" width="304" alt=""></div>
                    <div class="news-info">
                        <div class="scroll-wrap">
                            <p><?php echo $obj->parrafo_texto; ?></p>
                        </div>
                    </div>
                 </div>   
           <?php endforeach; ?>

            
        </div>
    </div>
</section>