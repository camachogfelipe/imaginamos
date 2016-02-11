<div class="selectores-directorio">
  
    <div class="buscador">
        <input class="campo2" type="text">
        <input class="bot-buscar" type="submit" value="buscar">
    </div>
    <div class="clr"></div>
    
    <?php foreach ($categorias as $categoria) : ?>
        <div class="noticia-mini">
            <div class="publi-header">
                <div class="publi-tit"><a href="<?php echo sprintf($urls->categoria_detalle, $categoria->var) ?>"><?php echo $categoria->name ?></a></div>
            </div>
            <div class="publi-subtit">Publicados</div>
            <div class="publi-info">
                <div class="publi-nom"><?php echo $categoria->description; ?></div>
                <div class="publi-valor"><?php echo $categoria->count_anuncios() ?></div>
                <div class="clr"></div>
                <a href="<?php echo sprintf($urls->categoria_detalle, $categoria->var) ?>"><div class="ver-mas2">Ver más</div></a>
            </div>
        </div>
       
    <?php endforeach; ?>
    
   

    <div class="clr"></div>




</div>

<script>
    (function($){
        $('.noticia-mini:nth-child(2n)').before('<div class="sep-noti"></div>');
    })(jQuery);
</script>