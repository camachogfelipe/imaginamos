
	  
  <a class="back-bt tr" href="<?php echo base_url(); ?>javascript:history.back()">« Volver</a>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title">Carrito de compras</h1>
        <table class="resumen-table">
          <thead>
            <!--<th>Nombre del producto</th>
            <th>Marca</th>
            <th>Referencia</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Eliminar</th>  -->
            
              <th width="80">Referencia</th>
                                <th width="528">Nombre</th>
                                <th width="528">Descripción</th>
                                <th width="80">Cantidad</th>
                                <th width="80">Valor Unitario</th>
                                <th width="80">Percio IVA</th>
                                <th width="80">Sub-Total</th>
                                <th width="92">Eliminar</th>
          </thead>
          <tbody>
             <?php $i = 1; ?>

                                <?php foreach ($this->cart->contents() as $items): ?>

                                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                                <tr>                
                                    <td><?php echo $items['id']; ?></td>    
                                    <td><?php echo $items['name']; ?></td>
                                    <td><?php echo $items['descripcion']; ?></td>                
                                    <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                                    <td> <div class="con-datos-rs cfx"><?php echo $this->cart->format_number($items['price']); ?></div></td>
                                    <td> <div class="con-datos-rs cfx"><?php echo $this->cart->format_number($items['price_iva']); ?></div></td>
                                    <td><div class="con-datos-rs cfx">$<?php echo $this->cart->format_number($items['subtotal']); ?></div></td>
                                    <td><div class="con-clear-bt fl">
                                            <a class="clear-bt tr" href="<?php echo base_url(); ?>carrito/update?rowid=<?php echo $items['rowid']; ?>&qty=<?php echo $items['qty']; ?>" ></a>
                                         </div>
                                    </td>
                                </tr>

                                <?php   $i++; ?>

                            <?php endforeach; ?> 
          </tbody>                    
          <tfoot>
                  <tr>
                      <td colspan="3" style=" text-align: right;"><span><b>IVA</b></span></td>
                      <td style="font-size: medium" >16 %</td>
                  </tr>
                  <tr style="background-color:rgb(255, 144, 44);">
                      <td colspan="3" style=" text-align: right;"><span><b>Total</b></span></td>
                      <td style="font-size: medium" ><?php echo  $this->cart->format_number(($this->cart->total()+($this->cart->total()*0.16)), 2); ?></td>
                  </tr>
              </tfoot>                      
      <!--   <tr>
            <td class="pro-name">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</td>
            <td>Mazda</td>
            <td>No.95896412336</td>
            <td><input value="999999"></td>
            <td>$99'999.999</td>
            <td><div class="con-clear-bt fl"><a class="clear-bt tr" href="#"></a></div></td>
          </tr> -->
        </table>
        <div class="con-total cfx">
        	<ul class="fr">
         
                    <li class="total-high">Subtotal</li>
            <li>$<?php echo $this->cart->format_number($this->cart->total(), 2); ?></li>
            <li class="total-high">IVA</li>
            <li>16%</li>
            <li class="total-high">Destino</li>
            <li>
            	<form action="" class="go-form cfx fr" method="post">
              	<div class="src-select tr">
                    <select data-url="<?php echo base_url()."carrito/get_val_destino/" ?>" name="destino" id="destino">
                            <option>Escoger</option>
                 	<?php foreach ($destinos as $destino) : ?>
                            <option value="<?php echo $destino->id ?>"><?php echo $destino->lugar ?></option>
                         <?php endforeach; ?>
                	</select>
                </div>
              </form>
            </li>
            <li class="total-high">Valor del envío</li>
            <li id="valor_destino">$0</li>
            <li class="total-high">Total</li>
            <li id="total" data-valor="<?php echo $this->cart->format_number($this->cart->total()+($this->cart->total()*0.16), 2); ?>">$<?php echo $this->cart->format_number($this->cart->total()+($this->cart->total()*0.16), 2); ?></li>
          </ul>
        </div>
        <div class="con-carro-bts cfx">
        	<a class="carro-bt modals-act fr tr" href="#modal-carro">PAGAR »</a>
          <a class="carro-bt fr tr" href="<?php echo base_url(); ?>javascript:history.back()">« SEGUIR COMPRANDO</a>
        </div>
        <div class="con-fletes cfx">
          <h1 class="pro-title">Valor del flete a nivel nacional</h1>
           <?php 
           $i = 0; 
             foreach ($destinos as $destino) : 
                 $etiqueta = false;
                 if($i == 0):
                     $etiqueta = true;
           ?>
                    <ul class="fl">
            <?php
                  endif;
                  if($i == ($destinos->result_count()/2)):
                      $etiqueta=true;
            ?>
                    </ul> <ul class="fr">
            <?php endif; ?>
              <li><?php echo $destino->lugar ?></li><li><?php echo ($destino->valor==0)?"Sin Costo":"$".$destino->valor;  ?></li>
            
   
            <?php  $i++; 
          endforeach; ?>
          </ul>
        
        </div>
      </div>
    </div>
  </section>
  <div class="con-modals">
  	<div class="info-modal cfx" id="modal-carro">
    	<h1>Registro de compra</h1>
      <p><?php echo $empresa->texto; ?></p>
      <form action="<?php echo base_url()."carrito/pagar"?>" class="grl-form cfx" method="post">
      	<div class="grl-col fl">
          <input class="tr validate[required]" name="nombre" placeholder="Nombre" type="text">
          <div class="src-select tr">
            <select name="ciudad" class="validate[required]">
              <option  value="">Ciudad</option>
              	<?php foreach ($destinos as $destino) : ?>
                            <option value="<?php echo $destino->id ?>"><?php echo $destino->lugar ?></option>
                <?php endforeach; ?>
            </select>
          </div>
          <input class="tr validate[required, custom[phone]]" name="telefono" placeholder="Teléfono" type="text">
        </div>
        <div class="grl-col fr">
          <input class="tr validate[required, custom[number]]" name="cedula" placeholder="No. de Cédula" type="text">
          <input class="tr validate[required]" name="direccion" placeholder="Dirección" type="text">
          <input class="tr validate[required, custom[phone]]" name="celular" placeholder="Celular" type="text">
        </div>
        <div class="con-grl-bts">
        	<input class="grl-submit fr tr" name="tipo_pago" type="submit" value="CONSIGNAR">
          <input class="grl-submit fr tr" name="tipo_pago" type="submit" value="PAGAR EN LÍNEA">
          <input class="grl-submit fr tr" name="tipo_pago" type="submit" value="PAGAR EN EFECTIVO">
        </div>
      </form>
    </div>
  </div>
    <?php if($email_send == true): ?>
 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
         <h1>SU COMPRA HA SIDO EXITOSA!</h1>
    	 <p>Pronto nos pondremos en contacto con usted, tenga en cuenta el codigo de confirmacion que se ha enviado a su correo. <br />Gracias por su compra.</p>
  	</div>
  </div>
<?php endif; ?>

