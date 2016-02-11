<?php
if ($this->uri->segment(1) == 'about-us' && $this->uri->segment(2) == '') {
    redirect(site_url($list[0]->uri));
}
?>
<div class="tablaservi">
    <div class="borde-top"></div>
    <div class="borde-bottom"></div>
    <div class="borde-left"></div>
    <div class="borde-right"></div>
    <div class="borde-top-left"></div>
    <div class="borde-top-right"></div>
    <div class="borde-bottom-left"></div>
    <div class="borde-bottom-right"></div>
    <ul class="servicios">
        <?php foreach ($list as $val): ?>
            <li class="<?= $this->uri->segment(2) == $val->slug ? 'activo' : '' ?>">
                <a href="{{ url:site }}<?php echo $val->uri ?>">
                    <span class="title_event_widget"><?php echo $val->title ?></span>                
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
