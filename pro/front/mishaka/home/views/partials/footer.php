<?php if ($footer_banner->exists()) : ?>
    <div class="banner">	
            <div class="logoBanner"><!--<img src="images/logoBanner.png" alt="" />--></div>
        <ul class="slideshow">
            <?php
            $first_footer_banner = true;
            foreach ($footer_banner as $banner) :
                ?>
                <li class="<?php echo $first_footer_banner ? 'show' : null ?>"><a href="#"><img src="<?php echo uploads_url($banner->image) ?>" title="" alt=""/></a></li>
                <?php
                $first_footer_banner = false;
            endforeach;
            ?> 
        </ul>
    </div>
<?php endif; ?>

<div class="conFooter">
    <div class="conLogoFooter"><a href="<?php echo site_url() ?>"><img src="images/logoFooter.png" alt="" /></a></div>   
    <div class="conMenuFooter">
        <ul id="menu-footer">
            <li><a class="b1" href="<?php echo site_url() ?>">INICIO</a></li>
            <li><a class="b2" href="<?php echo site_url('perfil') ?>">MISHAKA</a></li>
            <li><a class="b3" href="<?php echo site_url('build-a-band') ?>">BUILD A BAND</a></li>
            <li><a class="b4" href="<?php echo site_url('audiciones') ?>">AUDICIONES</a></li>
            <li><a class="b5" href="<?php echo site_url('directorio') ?>">DIRECTORIO</a></li>
            <li><a class="b6" href="<?php echo site_url('clasificados') ?>">CLASIFICADOS</a></li>
            <li style="border-right:none;"><a href="<?php echo site_url('entertainment') ?>">INSHAKA ENTERTAINMENT</a></li>
        </ul>
    </div>
    <div class="conDerechos">
        <div class="txDerechos">
            <span class="derechos">&copy; 2012 Todos los derechos reservados por INSHAKA</span>
        </div>
        <div class="copyHome">
            <div class="footer-autor">
                <span id="ahorranito2"></span>
                <a href="http://www.imaginamos.com">Diseño Web: </a>
                <a href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a>
            </div>
        </div>
    </div>
    <div class="conRedesFooter">
        <a href="http://www.facebook.com/Inshakaco" target="_blank"><div class="red1"></div></a>
        <a href="http://twitter.com/inshaka" target="_blank"><div class="red2"></div></a>
        <a href="http://youtube.com/inshaka" target="_blank"><div class="red3"></div></a>
    </div>
</div>