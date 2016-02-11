<?php include("head.php"); ?>
<style type="text/css">.enlaces-slider li {min-height:580px;}</style>
<?php include("header.php"); ?>

<section class="cfx">
    <h1 class="main-title">Enlaces importantes</h1>
    <ul class="nav-din cfx" id="an-en">
        <li><a href="../secciones/enlaces#an-en" class="nav-din-bt-st">Comercio exterior</a></li>
        <li><a href="../secciones/enlacesnavieras#an-en" class="nav-din-bt-st">Itinerario navieras</a></li>
        <li><a href="../secciones/senlacescolombia#an-en" class="nav-din-bt-st nav-din-act">Enlaces Colombia</a></li>
    </ul>
    <div class="con-info-b">
        <div class="con-enlaces cfx">
            <ul class="enlaces-slider">
                <?php if ($comercio != false): $contadorNoticias = 0; ?>
                    <?php foreach ($comercio as $dato): ?>
                        <?php
                        if ($contadorNoticias % 3 == 0) {
                            ?> <li class="cfx">
                            <?php
                        }
                        ?>
                            <div class="enlace">
                                <?php if(is_null($dato->path_pdf)){ ?>
                                <a href="../secciones/enlaceext/<?php echo $dato->id; ?>" target="_blank">
                                    <figure><img src="<?php echo base_url('uploads/front/enlaces/' . $dato->imagen) ?>" alt=""></figure>
                                    <h1><?php echo $dato->titulo ?></h1>
                                </a>
                                <?php } else { ?>
                                   <a href="<?php echo base_url('uploads/front/enlaces/' . $dato->path_pdf) ?>" >
                                    <figure><img src="<?php echo base_url('uploads/front/enlaces/' . $dato->imagen) ?>" alt=""></figure>
                                    <h1><?php echo $dato->titulo ?></h1>
                                   </a>
                                <?php } ?>
                            </div>    
                            <?php
                            $contadorNoticias++;
                            if ($contadorNoticias % 3 == 0) {
                                ?> </li>
                            <?php
                        }
                        ?>

                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>