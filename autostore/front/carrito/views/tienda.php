
    <a href="#" class="cerrar_tienda"></a>
    <div class="div_gris"></div>
    <h2 class="tit_secciones">
        MI CARRITO
    </h2>
    <div class="div_gris margin_bottom"></div>
    <div class="numcaritems">
        <img src="<?php echo base_url(); ?>assets/img/iconos/carrito.png">
        <div id="items-carro">
              <?php echo $this->cart->total_items(); ?> Item(s)
        </div>
    </div>

    <div class="cont_prodselececcionados clearfix">
        <table width="880" border="1">
            <tr style="border-bottom: solid 3px #fff;">
                <td class="tit_carrito">Producto</td>
                <td class="tit_carrito">Cantidad</td>
                <td class="tit_carrito">Precio</td>
                <td class="tit_carrito">Eliminar</td>
            </tr>

            <?php
            $precio_envio = 0;
            foreach ($this->cart->contents() as $items):
               // echo form_hidden($i . '[rowid]', $items['rowid']);
                ?>
                <tr>
                <td class="nombreimagen_carrito">
                    <img src="<?php echo base_url() . $items['imagen']; ?>">
                    <h3 class="tit_carrito2">
                        <?php echo $items['name']; ?>
                    </h3>
                </td>
                <td class="dec_carrito">
                <td><?php echo form_input(array('class' => "delete_cart cantidad_tablacarrito", 'name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                </td>
                <td class="dec_carrito">
                    $<?php echo $this->cart->format_number($items['price']); ?>
                </td>
                <td  class="dec_carrito">
                    <a id="delete_cart" data-datos="rowid=<?php echo $items['rowid']; ?>" data-url="<?php echo base_url(); ?>carrito/eliminar" class="borrar inline">
                    </a>
                </td>
                </tr>
                <?php $precio_envio += $items['precio_envio'];
                $i++; ?>
              <?php endforeach; ?> 


          
        </table>
    </div>

    <div class="div_gris"></div>
    <div class="condetallecompra clearfix">
        <div class="row-fluid">
            <div class="span2">
                <div class="val_compra">
                     $<?php echo $this->cart->format_number($this->cart->total(), 2); ?>
                </div>
            </div>
            <div class="span2">
                <h3 class="tit_detcompra">
                    Subtotal:
                </h3>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row-fluid">
            <div class="span2">
                <div class="val_compra">
                   16%
                </div>
            </div>
            <div class="span2">
                <h3 class="tit_detcompra">
                    IVA:
                </h3>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row-fluid">
            <div class="span2">
                <div class="val_compra">
                    $<?php echo $precio_envio; ?> 
                </div>
            </div>
            <div class="span2">
                <h3 class="tit_detcompra">
                    Valor de Envío:
                </h3>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row-fluid">
            <div class="span2">
                <div class="val_compra precio-high">
                    $<?php echo $this->cart->format_number(($this->cart->total()+($this->cart->total()*0.16)+$precio_envio), 2); ?>
                </div>
            </div>
            <div class="span2">
                <h3 class="tit_detcompra precio-high">
                    <span>Total:</span>
                </h3>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row-fluid">
            <div class="span2 offset4"> 
                <a class="bt_anadir carga_comprar" href="<?php echo base_url(); ?>emergente_pago">
                    Comprar
                </a>
            </div>
        </div>

        <div class="img-carrito">
            <img src="<?php echo base_url(); ?>assets/img/envio-img.jpg" height="178" width="550" alt="" />
            <p class="tx-carrito">* Por compras mayores o iguales a 100.000 el envío será completamente gratis.</p>
        </div>

    </div>
    <div class="div_gris margin_bottom"></div>

    <div class="div_gris"></div>
    <h3 class="subtitsecciones">Productos recomendados</h3>
    <div class="div_gris margin_bottom"></div>
   
    <?php foreach ($productos_pro as $pro_rec) : ?>
    <div class="destacadopeque">
        <img src="<?php echo base_url().$pro_rec->imagen_path; ?>">
        <div class="info_destacado">
            <h2 class="tit_destacado">
                <?php echo strtoupper($pro_rec->nombre); ?>
            </h2>
            <div class="division_destacado"></div>
            <p class="codigo_destacado float_left">
                <?php echo $pro_rec->referencia; ?>
            </p>
            <p class="precio_destacado float_right">
                $<?php echo $pro_rec->precio; ?>
            </p>
             <div class="cont_botonesdestacados">
              <a  data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $pro_rec->id; ?>" href="#" class=" add_to_cart float_right">
                <p>Añadir al</p>
                <img src="<?php echo base_url(); ?>assets/img/iconos/ico_carrito.png">
              </a>
            </div>
        </div>
    </div>
   <?php endforeach; ?> 
   

