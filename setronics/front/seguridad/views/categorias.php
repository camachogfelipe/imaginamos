<!--Productos Comunicaciones y/o tipo 1-->
<div class="con-info-lt frt con-info-t1">
    <h1>Categorias</h1>
    <p></p>
    <div class="content-items">
        <div class="pager-info pager-info-t1 cfx">
            <ul class="con-scroll-items4 cfx">
                <!--<div class="scroll-wrap">-->

                <?php foreach ($categorias as $obj): ?>
                <li>
                    <a href="#" data-url="comunicaciones/subcategorias" data-datos="id=<?php echo $obj->id; ?>" class="item-vn-t1">
                        <div class="items-pro item-t1">
                            <div class="con-item-img"><img src="<?php echo base_url().$obj->imagen_path; ?>" width="300" height="300" alt=""></div>
                            <div class="con-item-info con-item-info-c2">
                                <h1><?php echo $obj->categoria; ?></h1>
                                <p><?php echo $obj->descripcion; ?></p>
                            </div>
                        </div>
                    </a>
                </li>
                <?php endforeach; ?>  

                <!--</div>-->
            </ul>
            <!--<div class="pager-nav"></div>-->
        </div>
    </div>
</div>
<script>
   
    $("a.item-vn-t1").click(function(e) {
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $(this).data('datos'),
            dataType: 'html',
            success: function(html) {
                $('#contenido_ajax').html(html);
            }
        });
          return false; 
    }); 
        $(".items-pro").hover(function(){$(this).children(".con-item-info").stop().animate({height:"100%"});}, function(){$(this).children(".con-item-info").stop().animate({height:40});});
	 $(".item-pro-gal-img:first").show(); $(".item-pro-gal-img-s").click(function(){$(".item-pro-gal-img-s").children(".item-gal-act").removeClass("gal-act-s"); $(this).children(".item-gal-act").addClass("gal-act-s"); $(".item-pro-gal-img").hide(); var ver_contenido = $(this).attr("data-id"); $('.'+ver_contenido).fadeIn(200, "easeInQuart");});
$(".item-pro-gal-img-s").hover(function(){$(this).children("span").stop().fadeIn();}, function(){$(this).children("span").stop().fadeOut();});



</script>
