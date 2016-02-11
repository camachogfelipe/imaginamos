<?php foreach ($menu_panel as $item) : ?>
    <li class="limenu">
        <a href="<?php echo (isset($item['url']) ? site_url($item['url']) : '#') ?>">
            <span class="ico gray shadow <?php echo $item['icon'] ?>"></span>
            <strong><?php echo $item['title'] ?></strong>
        </a>
    </li>
<?php endforeach; ?>
    
    
<?php if (false == $menu_superadmin) : ?>
    <li class="limenu">
        <a href="#" >
            <span class="ico gray notepad"></span><strong>Banners</strong>
        </a>
        <ul class="level-1">
            <li><a href="<?php echo cms_url('banners/principal') ?>">Principal</a></li>
            <li><a href="<?php echo cms_url('banners/footer') ?>">Pie de página</a></li>
        </ul>                     
    </li>
    <li class="limenu">
        <a href="#" >
            <span class="ico gray notepad"></span><b>Build a Band</b>
        </a>
        <ul class="level-1">
            <li><a href="<?php echo cms_url('bands/escenarios') ?>">Escenarios</a></li>
            <li><a href="<?php echo cms_url('bands/instruments') ?>">Instrumentos</a></li>
        </ul>                     
    </li>
    <li class="limenu">
        <a href="#" >
            <span class="ico gray notepad"></span><b>Directorio</b>
        </a>
        <ul class="level-1">
            <li><a href="<?php echo cms_url('directorio/categorias') ?>">Categorias</a></li>
            <li><a href="<?php echo cms_url('directorio/anuncios') ?>">Anuncios</a></li>
        </ul>                
    </li>
    <li class="limenu">
        <a href="#" >
            <span class="ico gray notepad"></span><b>Clasificados</b>
        </a>
        <ul class="level-1">
            <li><a href="<?php echo cms_url('clasificados/categorias') ?>">Categorias</a></li>
            <li><a href="<?php echo cms_url('clasificados/anuncios') ?>">Anuncios</a></li>
        </ul>                
    </li>
<?php endif; ?>
