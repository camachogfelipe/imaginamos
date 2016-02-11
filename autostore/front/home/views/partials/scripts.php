 
<script src="<?php echo base_url(); ?>assets/js/lib/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.quick.pagination.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-transition.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-alert.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-modal.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-tab.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-popover.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-button.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-collapse.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-typeahead.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap-fileupload.js"></script> 


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/source/jquery.fancybox.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/source/helpers/jquery.fancybox-buttons.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/source/helpers/jquery.fancybox-thumbs.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/source/helpers/jquery.fancybox-media.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lib/bxslider/js/jquery.bxslider.js"></script>

<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.position.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.widget.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.mouse.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.draggable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.droppable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.resizable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/ui/js/jquery.ui.dialog.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/actions.js"></script>
<script language="javascript" type="text/javascript">var SITE_BASE = "<?php echo base_url() ?>"</script>
<script language="JavaScript" type="text/javascript" src="<?php echo base_url() ?>chat/views/javascript/visitorchat.js"></script>

<script type="text/javascript">
   


    $(function() {
        $('#footerForm').validate({
            rules: {
                mi_email: {
                    required: true,
                    email: true
                }

            }
        });
    });

    $(function() {
        $('#contactoForm').validate({
            rules: {
                mi_email: {
                    required: true,
                    email: true
                },
                telefono: {
                    required: true,
                    number: true
                }

            }
        });
    });

    $('.slider_home').bxSlider({
        minSlides: 1,
        maxSlides: 1,
        pager: false,
        moveSlides: 1,
        auto: true,
        autoHover: false,
        pause: 6000
    });


    $('.slider_marcas').bxSlider({
        slideWidth: 222,
        controls: false,
        minSlides: 1,
        maxSlides: 4,
        pager: false,
        slideMargin: 5,
        speed: 20000,
        ticker: true
    });

    $('.slider_marcas2').bxSlider({
        slideWidth: 222,
        controls: false,
        minSlides: 1,
        maxSlides: 4,
        pager: false,
        slideMargin: 5,
        speed: 20000,
        ticker: true
    });

    $('.slider_detalle').bxSlider({
        slideWidth: 460,
        minSlides: 1,
        maxSlides: 4,
        pager: false,
        moveSlides: 1,
        auto: false,
        autoHover: false,
        slideMargin: 5
    });

    $(".carga_comprar").fancybox({
        'width': 640,
        'height': 460,
        fitToView: false,
        autoSize: false,
        'transitionIn': 'none',
        'transitionOut': 'none',
        'type': 'iframe',
        'padding': 20
    });

    $(function() {
        var $gallery = $("#ul_productosmes"),
                $trash = $("#bt_tiendaflotante");
        $("li", $gallery).draggable({
            cancel: "a.ui-icon",
            revert: "invalid",
            containment: "document",
            helper: "clone",
            cursor: "move"
        });
        $trash.droppable({
            accept: "#ul_productosmes > li",
            activeClass: "ui-state-highlight",
            drop: function(event, ui) {
                var this_data = $(ui.draggable.find('.add_to_cart'));
                $.ajax({
                    type: "POST",
                    url: this_data.data('url'),
                    data: this_data.data('datos'),
                    dataType: 'json',
                    success: function(js) {
                           if (js.ok) {
                               /* var row = "<tr><input type='hidden' value='"+js.rowid+"' name='2[rowid]' /><td class='nombreimagen_carrito'><img width='50' src='"+CMS_URL+js.imagen+"'><h3 class='tit_carrito2'>"+js.name+"</h3></td><td class='dec_carrito'><input class='qty delete_cart cantidad_tablacarrito' type='text' size='5' maxlength='3' value='"+js.qty+"' name='1[qty]'></input></td></td><td id='price_td' class='dec_carrito'>$"+js.price+"</td><td  class='dec_carrito'><a id='"+js.rowid+"' data-datos='rowid="+js.rowid+"' data-url='"+CMS_URL+"carrito/eliminar' class='borrar inline'></a></td></tr>";
                                */
                                
               var row_data = '<tr  class="n'+js.id+'" >'+
                '<td  class="'+js.rowid+' nombreimagen_carrito">'+
                    '<img width="50" src="'+CMS_URL+js.imagen+'" >'+
                    '<h3 class="tit_carrito2">'+js.name+'</h3>'+
                '</td>'+
                '<td  class="'+js.rowid+' dec_carrito">'+
                    '<input class="qty delete_cart cantidad_tablacarrito" type="text" size="5" maxlength="3" value="'+js.qty+'" name="1[qty]"></input>'+
                '</td>'+
                '<td class="'+js.rowid+' dec_carrito">'+
                    '$'+js.price+
                '</td>'+
                '<td  class="dec_carrito">'+
                    '<a id="delete_cart" data-datos="rowid='+js.rowid+'" data-url="'+CMS_URL+'carrito/eliminar" class="borrar inline">'+
                    '</a>'+
                '</td>'+'</tr>'+ "<script>$('#delete_cart').click(function() {"+
                    "var this_data = $(this);"+
                    "var valor = $('#' + this_data.attr('id')).parent().parent().find('input.qty').val();"+
                    "var datos = this_data.data('datos')+'&qty='+valor;"+ 
                    "$.ajax({"+
                        "type: 'POST',"+
                        "url: this_data.data('url'),"+
                        "data: datos,"+
                        "dataType: 'json',"+
                        "success: function(js) {"+
                            "if (js.ok) {"+
                                "$('#' + this_data.attr('id')).parent().parent().find('input').val(js.qty);"+
                                "if (parseInt(js.qty) <= 0) {"+
                                    "$('#' + this_data.attr('id')).parent().parent().remove();"+
                                "}$('#' + this_data.attr('id')).data('datos');"+
                                "$('#subtotal').html('$'+js.subtotal);"+
                                "var precio = (parseFloat($('#envio').data('price'))-parseFloat(js.precio_envio));"+
                                "$('#envio').html('$'+precio);"+
                                "$('#total').html('$'+(parseFloat(js.total)+parseFloat(precio)));"+
                                "alert('Producto Removido con exíto...!');"+
                                "$('.numero_items').html(js.cantidada); "+
                                "$('#items-carro').html(js.cantidada);"+
                            "} else {"+
                               " $('.numero_items').html('0');"+
                                "$('#subtotal').html('$0');"+
                                "$('#envio').html('$0');"+
                                "$('#total').html('$0');"+
                                "alert('Producto Removido con exíto...!');"+
                            "} }, error: function(e){ alert('Error'+e) ; } });"+
                            "return  false; });<\/script>"; 
                                
                                if($('.n'+js.id).length){
                                      $('#rows_data .n'+js.id).find('input').val(js.qty);
                                }else{ 
                                      $('#rows_data').append(row_data);
                                }
                                $("#subtotal").html('$'+js.subtotal);
                                var precio = (parseFloat($("#envio").data('price'))-parseFloat(js.precio_envio));
                                $("#envio").html('$'+precio);
                                $("#total").html('$'+(parseFloat(js.total)+parseFloat(precio)));
                                $('.numero_items').html(js.cantidada);  
                                alert('Producto Agregado con exíto...!');
                           } else {
                                $('.numero_items').html('0');  
                                alert('Error...!, El producto no pudo se agregado');
                           }
                    },
                    error: function(e) {
                        alert('Error Ajax' + e);
                    }
                });
                deleteImage(ui.draggable);

            }
        });
        $gallery.droppable({
            accept: "#bt_tiendaflotante li",
            activeClass: "custom-state-active",
            drop: function(event, ui) {
                recycleImage(ui.draggable);
            }
        });
        var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
        function deleteImage($item) {
            $item.fadeOut(function() {
                var $list = $("ul", $trash).length ?
                        $("ul", $trash) :
                        $("<ul class='gallery ui-helper-reset'/>").appendTo($trash);
                $item.find("a.ui-icon-trash").remove();
            });
        }
    });





</script>

<script type="text/javascript">
    $(document).ready(function() {
        var tiendahome = $('.cont_tiendahome');
        var tiendahome_offset = tiendahome.offset();
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > tiendahome_offset.top) {
                tiendahome.addClass('fijo');
            } else {
                tiendahome.removeClass('fijo');
            }
        });
    });
</script>
