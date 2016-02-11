<?php include("head.php"); ?>
<style type="text/css">.enlaces-slider li {min-height:700px;}</style>
<?php include("header.php"); ?>

<section class="cfx">
    <h1 class="main-title">Enlaces importantes</h1>
    <ul class="nav-din cfx" id="an-en">
        <li><a href="../secciones/enlaces#an-en" class="nav-din-bt-st nav-din-act">Comercio exterior</a></li>
        <li><a href="../secciones/enlacesnavieras#an-en" class="nav-din-bt-st">Itinerario navieras</a></li>
        <li><a href="../secciones/senlacescolombia#an-en" class="nav-din-bt-st">Enlaces Colombia</a></li>
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
                                <a href="../secciones/enlaceext/<?php echo $dato->id; ?>" target="_blank">
                                    <div class="e-icon">
                                        <img  style="height:40px;width:40px;magin:0;" src="<?php echo base_url('uploads/front/enlaces/' . $dato->imagen) ?>">
                                    </div>
                                    <h1><?php echo $dato->titulo ?></h1>
                                </a>
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