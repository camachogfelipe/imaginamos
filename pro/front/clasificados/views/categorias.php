<style type="text/css">
    .publicacion{ float:left; margin-left:1em; }
</style>

<div class="selectores-directorio">
    <div class="buscador" style="float:none; display:block;width:970px;">

        <div class="clr"></div>
        
        <?php foreach ($categorias as $categoria) : ?>
            <div class="publicacion">
                <div class="publi-header">
                   <a href="<?php echo site_url('clasificados/categoria/'.$categoria->var) ?>"><div class="publi-tit1"><?php echo $categoria->nombre ?></div></a>
                </div>
                <div class="publi-subtit">Publicados</div>
                <div class="publi-info">
                    <div class="publi-nom"><?php echo $categoria->descripcion ?></div>
                    <div class="publi-valor"><?php echo $categoria->clasificado->count() ?></div>
                    <div class="clr"></div>
                    <a href="<?php echo site_url('clasificados/categoria/'.$categoria->var) ?>"><div class="ver-mas2">Ver más</div></a>
                </div>
            </div>
        <?php endforeach; ?>
        


        <div class="clr"></div>
    </div>
</div>
<div class="clear"></div>