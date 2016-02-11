<!--Productos tipo 4-->
<div class="con-info-lt frt con-info-t1">
      <?php foreach ($cat_parent as $obj): ?>  
                    <h1><?php echo $cat_parent->categoria; ?></h1>
                    <p><?php echo $cat_parent->descripcion; ?></p>
        	 <?php endforeach; ?>  
    <div class="content-items">
        <div class="pager-info pager-info-t4 cfx">
            <ul class="con-scroll-items8 cfx">
                
               <?php foreach ($grupos as $obj): ?>  
                <li>
                    <a href="#"  data-url="comunicaciones/productos" data-datos="id=<?php echo $obj->id; ?>" class="item-vn-t4">
                        <div class="items-pro item-t4">
                            <div class="con-item-img"><img src="<?php echo base_url().$obj->imagen_path; ?>" width="140" height="140" alt="" ></div>
                            <div class="con-item-info con-item-info-c1">
                                <h1><?php echo $obj->grupo; ?></h1>
                                <p><?php echo $obj->texto; ?></p>
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

    $("a.item-vn-t4").click(function(e) {
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
    
    $(".item-pro-gal-img:first").show(); $(".item-pro-gal-img-s").click(function(){$(".item-pro-gal-img-s").children(".item-gal-act").removeClass("gal-act-s"); $(this).children(".item-gal-act").addClass("gal-act-s"); $(".item-pro-gal-img").hide(); var ver_contenido = $(this).attr("data-id"); $('.'+ver_contenido).fadeIn(200, "easeInQuart");});
	$(".item-pro-gal-img-s").hover(function(){$(this).children("span").stop().fadeIn();}, function(){$(this).children("span").stop().fadeOut();});
	   $(".items-pro").hover(function(){$(this).children(".con-item-info").stop().animate({height:"100%"});}, function(){$(this).children(".con-item-info").stop().animate({height:40});});


</script>