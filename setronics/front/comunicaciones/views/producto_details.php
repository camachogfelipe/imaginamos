<!--Productos tipo 5-->
<div class="con-info-lt frt con-info-t1">
    <h1 class="main-title">
        <?php echo $producto->titulo; ?>
        <a href="javascript:history.back()"><div class="back-bt">Volver</div></a>
        <a href="cart/zona_segura"><div class="items-carro"><?php echo isset($count_cart)?$count_cart." Producto(s)":"Carrito Vacio"; ?> </div></a>
    </h1>
    <div class="con-precio">
        <?php if ($is_proveedor) : ?>
            <div class="precio precio-c1"><?php echo number_format($producto->precio_prov, 2); ?></div>
        <?php endif; ?>
        <?php if ($is_cliente) : ?>
            <div class="precio precio-c1"><?php echo number_format($producto->precio_client, 2); ?></div>
        <?php endif; ?>

    </div>
    <div class="content-items cfx">
        <div class="item-pro-gal">
            <div class="item-pro-gal-img-b">
                <?php
                $i = 1;
                foreach ($imagenes as $img) :
                    ?>
                    <div class="item-pro-gal-img gal-img-<?php echo $i; ?>"><img src="<?php echo base_url() . $img->imagen_path; ?>" width="240" height="240" alt=""></div>
                    <?php $i++;
                endforeach;
                ?>
            </div>
            <div class="con-item-pro-gal-img-s">

                <?php
                $i = 1;
                foreach ($imagenes as $img) :
                    ?>
                    <div class="item-pro-gal-img-s" data-id="gal-img-<?php echo $i; ?>">
                        <div class="con-item-s-img"><img src="<?php echo base_url() . $img->imagen_path; ?>" width="40" height="40" alt=""></div>
                        <div class="item-gal-act gal-act-s"></div>
                        <span></span>
                    </div>
                    <?php
                    $i++;
                endforeach;
                ?>   
            </div>


        </div>
        <div class="con-item-pro-gal-info">
            <div class="item-pro-gal-info">
                <div class="scroll-wrap">
                    <p><?php echo $producto->descripcion; ?></p>
                </div>
            </div>
            <div class="con-btsv">
                <a href="<?php echo $producto->path_folleto; ?>" target="_blank"><div class="btv btv-i1">Folleto</div></a>
                <a href="<?php echo $producto->path_info_tenica; ?>" target="_blank"><div class="btv btv-i1">Info. Tecnica</div></a>
            </div>
            
            <div class="con-btsv">
                <a href="#modal-coco" data-url="cart" data-datos="id=1"   class="modals-act"><div class="btv btv-i2">Comprar / Cotizar</div></a>
                <a id="add_to_cart"  data-url="cart/add_to_cart" data-datos="id=<?php echo $producto->id; ?>"  href="#"><div  class="btv btv-i2">Añadir</div></a>
            </div>
            
            
        </div>
        <div class="con-slide-recom">
            <h1 class="main-title">Accesorios</h1>
            <ul class="slider-acces">
                <?php foreach ($accesorios as $acc): ?>
                    <li>
                        <a href="#" class="item-vn-t4">
                            <div class="items-pro item-t2">
                                <div class="con-item-img"><img src="<?php echo base_url() . $acc->imagen_path; ?>" width="193" height="193" alt=""></div>
                                <div class="con-item-info con-item-info-c1">
                                    <h1><?php echo $acc->titulo; ?></h1>
                                    <p><?php echo $acc->descripcion; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>


        <div class="con-slide-recom">
            <h1 class="main-title">Especificaciones técnicas</h1>
            <div class="con-tx-esp">
                <div class="scroll-wrap">
                    <p><?php echo $producto->especificacion_tecnica; ?></p>
                    <ul class="lista-gral">
                    </ul>
                </div>
            </div>
        </div>

        <div class="con-slide-recom">
            <h1 class="main-title">Productos recomendados</h1>
            <ul class="slider-recom">
                 <?php foreach ($prod_rec as $pro_rec): ?>
                    <li>
                        <a href="#" id="recomendado" data-url="comunicaciones/producto_details" data-datos="id=<?php echo $prod_rec->id; ?>" class="item-vn-t4">
                            <div class="items-pro item-t2">
                                <div class="con-item-img"><img src="<?php $pro_rec->imagen_path ?>" width="193" height="193" alt=""></div>
                                <div class="con-item-info con-item-info-c1">
                                    <h1><?php echo $pro_rec->titulo; ?></h1>
                                    <p><?php echo $pro_rec->descripcion_intro; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<script>
    if ($(".slider-recom").size() > 0) {
        $(".slider-recom").bxSlider({
            slideWidth: 200,
            minSlides: 2,
            maxSlides: 3,
            slideMargin: 10,
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
    }
    ;
    if ($(".slider-acces").size() > 0) {
        $(".slider-acces").bxSlider({
            slideWidth: 200,
            minSlides: 2,
            maxSlides: 3,
            slideMargin: 10,
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
    }
    ;
    
    $('#add_to_cart').click(function(e) {
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $(this).data('datos'),
            dataType: 'json',
            success: function(js) {
                 if(js.ok){
                     alert('Producto Agregado con exíto...!')
                 }else{
                     alert('Error...! El producto no pudo se agregado');
                 }
//                location.href = '#modal-coco'; 
            }
        });
    });

   $("a.modals-act").click(function(e) {
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $(this).data('datos'),
            dataType: 'html',
            success: function(html) {
                $('#modal-coco').html(html);
//                location.href = '#modal-coco'; 
            }
        });
    });

    $("a#recomendado").click(function(e) {
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

    $(".items-pro").hover(function() {
        $(this).children(".con-item-info").stop().animate({height: "100%"});
    }, function() {
        $(this).children(".con-item-info").stop().animate({height: 40});
    });
    $(".item-pro-gal-img:first").show();
    $(".item-pro-gal-img-s").click(function() {
        $(".item-pro-gal-img-s").children(".item-gal-act").removeClass("gal-act-s");
        $(this).children(".item-gal-act").addClass("gal-act-s");
        $(".item-pro-gal-img").hide();
        var ver_contenido = $(this).attr("data-id");
        $('.' + ver_contenido).fadeIn(200, "easeInQuart");
    });
    $(".item-pro-gal-img-s").hover(function() {
        $(this).children("span").stop().fadeIn();
    }, function() {
        $(this).children("span").stop().fadeOut();
    });
    	


</script>




