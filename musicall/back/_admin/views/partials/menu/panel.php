<?php if (false == $menu_superadmin) : ?>
    <li class="limenu">
        <a href="<?php echo cms_url('users/projects/') ?>" >
            <span class="ico gray notepad"></span><strong>Proyectos</strong>
        </a>                     
    </li>
    <li class="limenu">
        <a href="<?php echo cms_url('users/songs/') ?>" >
            <span class="ico gray notepad"></span><strong>Canciones</strong>
        </a>                     
    </li>
    <li>
        <a href="<?php echo cms_url('contents/edit/footer') ?>" >
            <span class="ico gray notepad"></span><strong>Pie de página</strong>
        </a>                     
    </li>
    <li>
        <a href="<?php echo cms_url('contents/edit/terminos_y_condiciones') ?>" >
            <span class="ico gray notepad"></span><strong>Términos y Cond.</strong>
        </a>                     
    </li>
    <li class="limenu">
        <a href="<?php echo cms_url('users') ?>" >
            <span class="ico gray notepad"></span><strong>Usuarios</strong>
        </a>                     
    </li>
    
<?php endif; ?>
