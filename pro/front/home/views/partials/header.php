<style type="text/css">
    #menu-horizontal li a.active {
        color: #333 !important;	
    }

    .musicos-cont{
        height: 190px;
        margin-left: 4px;
        margin-top: 20px;
        width: 480px;
    }

    .mensaje-tit{
        color: #E82E7C;
        font-family: 'BebasNeueRegular';
        font-size: 36px;
        margin-bottom: 21px;
        text-align: center;
    }
    .musicos{
        margin: 0 auto;
        width: 320px;
    }
    .bot-buscar {

        float: right;

        margin-bottom: 60px;

    }
    .bot{
        color: #666666;
        cursor: pointer;
        float: left;
        font-family: 'BebasNeueRegular';
        font-size: 28px;
        margin-bottom: 61px;
        margin-left: 107px;
        margin-top: 10px;
        text-align: center;
    }
    .bot:hover{
        color: #E82E7C;
    }
    #user-panel{
        font-size: .8em;
        float: right;
        text-align: right;
    }
</style>


<script type="text/javascript">
    $(document).ready(function(){
        $('.registro-modal').fancybox();
    });
</script>


<div class="header">
    <div class="conMenu">
        <div class="menu">
            <ul id="menu-horizontal">
                <li><a class="b1 <?php echo $current_page == 'home' ? 'active' : null ?>" href="<?php echo site_url('/') ?>">INICIO</a></li>
                <li><a class="b2 <?php echo $current_page == 'mishaka' ? 'active' : null ?>" href="<?php echo site_url('mishaka') ?>">MISHAKA</a></li>
                <li><a class="b3 <?php echo $current_page == 'build-a-band' ? 'active' : null ?>" href="<?php echo site_url('build-a-band') ?>">BUILD A BAND</a></li>
                <li><a class="b4 <?php echo $current_page == 'audiciones' ? 'active' : null ?>" href="<?php echo site_url('audiciones') ?>">AUDICIONES</a></li>
                <li><a class="b5 <?php echo $current_page == 'directorio' ? 'active' : null ?>" href="<?php echo site_url('directorio') ?>">DIRECTORIO</a></li>
                <li><a class="b6 <?php echo $current_page == 'clasificados' ? 'active' : null ?>" href="<?php echo site_url('clasificados') ?>">CLASIFICADOS</a></li>
                <li><a class="b7 <?php echo $current_page == 'entertainment' ? 'active' : null ?>" href="<?php echo site_url('entertainment') ?>">FAQ</a></li>
            </ul>
            <a href="#seleccion-registro" class="registro-modal" style="display:<?php echo ($is_usuario ? 'none' : 'block') ?>;"><div class="bot-registro" style="margin-left: 698px;position: absolute;">Regístrate</div></a>

            <a href="<?php echo site_url('usuarios/logout') ?>" style="display:<?php echo (!$is_usuario ? 'none' : 'block') ?>;"><div class="bot-logout">Logout</div></a>
            <a href="<?php echo site_url('perfil/' . $this->session->userdata('inshaka_url')) ?>" style="display:<?php echo (!$is_usuario ? 'none' : 'block') ?>;"><div class="bot-logout" style="margin-right: .5em">Perfil</div></a>
        </div>
    </div>
</div>

<div class="musicos-cont" style="display:none;" id="seleccion-registro">
    <div class="mensaje-tit">¿Cuál perfil deseas crear?</div>
    <div class="bot"><a href="<?php echo site_url('usuarios/registro/index/individual') ?>">Individual</a></div>
    <div class="bot"><a href="<?php echo site_url('usuarios/registro/index/banda') ?>">Banda</a></div>
</div>