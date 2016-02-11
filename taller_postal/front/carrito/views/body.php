
<?php 
$m = $this->cart->contents();
if(empty($m)) { ?>
<div class="content_int clearfix">
  <h1 class="bebas main-title"><span>NO EXISTEN PRODUCTOS AGREGADOS</span></h1>
  <!--div class="linea_home"></div-->
  <div class="clearfix">
  	<div class="con-grl-tx">
      
          <ul>
                <?php if(!empty($buscador)){
          foreach ($buscador as $result): ?>
          <hr class="sep-rom">
           <a href="<?php echo (!empty($result['url']))?$result['url']:"#"; ?>">
          	<li>
            	<h1><span></span><?php echo (!empty($result['title']))?$result['title']:"Resultado"; ?></h1>
              <p><?php echo (!empty($result['contents']))?$result['contents']:"Resultado"; ?></p>
            </li>
          </a>
          <?php endforeach;
          }else{
          ?>
          <li>
            <h1><span></span>No exsten productos agregados</h1>
            <p>Si desea agregar productos al carito haga click <a href="<?php echo base_url()."tienda"; ?>">AQUÍ...!</a></p>
          </li>
          <?php } ?>       
          </ul>
      
    </div>
  </div>
</div>
<?php }else { ?>

<div class="content_int clearfix">
  <h1 class="bebas main-title"><span>Carrito de compras</span></h1>
  <!--div class="linea_home"></div-->
  <div class="clearfix">
    <table class="resumen-table">
      <tr>
      	<th>Foto</th>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Cantidad de sobres</th>
        <th>Precio</th>
        <th>Eliminar</th>
      </tr>
      <?php
      $i = 1;
      $precio_envio = 0;
      foreach ($this->cart->contents() as $items):
          echo form_hidden($i . '[rowid]', $items['rowid']);
          ?>
          <tr>
              <td><img src="<?php echo base_url() . $items['imagen']; ?>" class="left" width="50"></td>
              <td class="pro-name"> <?php echo $items['name']; ?></td>
              <td><?php echo $items['cantidad']; ?></td>
              <td><?php echo $items['qty_sobre']; ?><!--<a class="link-change" href="<?php echo base_url(); ?>custom_prod/">Cambiar</a> --></td>
              <td>$<?php echo number_format($items['price'],0,',','.'); ?></td>
              <td>
                  <div class="con-clear-bt left">
                      <a  href="<?php echo base_url(); ?>carrito/eliminar?rowid=<?php echo $items['rowid']; ?>&qty=<?php echo $items['qty']; ?>"   class="borrar clear-bt" />
                  </div>
              </td>

          </tr>
          <?php $precio_envio += $items['precio_envio'];
          $i++;
          ?>
      <?php endforeach; ?> 


    </table>
    <hr class="sep-rom">
    <div class="con-total clearfix">
      <ul class="right">
        <li class="total-high">Subtotal</li>
        <li>$<?php echo number_format($this->cart->total(),0,',','.'); ?></li>
        <li class="total-high">IVA</li>
        <li>16%</li>
        <li class="total-high">Costo de envío</li>
        <li>$<?php echo number_format($precio_envio,0,',','.'); ?></li>
        <li class="total-high">Total</li>
        <li>$<?php echo number_format(($this->cart->total()+($this->cart->total()*0.16)+$precio_envio), 0,',','.'); ?></li>
      </ul>
    </div>
    <hr class="sep-rom">
    <div class="con-carro-bts clearfix">
      <a class="carro-bt right" href="<?php echo base_url(); ?>registro_compra">Comprar</a>
    </div>
  </div>
</div>
<?php } ?>

 <?php if($enviado == true): ?>
 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
         <h1>Producto Agregado con Exito...!</h1>
    	 <p>Para depurar su compra presione el boton comprar que aparese en esta pagina y registre sus datos...!</p>
  	</div>
  </div>
<?php endif; ?>
<script>
    $('.borrar').click(function() {
                    var this_data = $(this);
                    var valor = $("#" + this_data.attr('id')).parent().parent().find('input.qty').val();
                    var datos = this_data.data('datos')+"&qty="+valor; 
                    $.ajax({
                        type: "POST",
                        url: this_data.data('url'),
                        data: datos,
                        dataType: 'json',
                        success: function(js) {
                            if (js.ok) {
                                $("#" + this_data.attr('id')).parent().parent().find('input').val(js.qty);
                            } else {
                                alert('Producto Removido con exíto...!');
                            }
                        },
                        error: function(e){
                          alert('Error'+e) ; 
                        }
                    });

                    return  false;
                });
</script>    
