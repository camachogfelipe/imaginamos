<section>
    <div class="con-section">
        <div class="mg-section cfx" style="padding-top: 50px;">
            <h1 class="main-title">
                Zona segura SETRONICS
                <a href="javascript:history.back()"><div class="back-bt">Volver</div></a>
            </h1>
            <h2>Productos agregados</h2>
            <div class="con-tabla-rs">
                <div>
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
                        <thead>
                            <tr>
                                <th width="80">Referencia</th>
                                <th width="528">Nombre</th>
                                <th width="528">Descripción</th>
                                <th width="80">Cantidad</th>
                                <th width="80">Valor Unitario</th>
                                <th width="80">Percio IVA</th>
                                <th width="80">Sub-Total</th>
                                <th width="92">Eliminar</th>
                            </tr>
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
                                    <td><div class="con-datos-rem-bt cfx">
                                            <a class="elimina-bt" href="#" data-url="<?php echo base_url(); ?>cart/update" data-datos="rowid=<?php echo $items['rowid']; ?>&qty=<?php echo $items['qty']; ?>"></a>
                                         </div>
                                    </td>
                                </tr>

                                <?php   $i++; ?>

                            <?php endforeach; ?>      
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="con-total-resumen">
                <ul>
                    <li>Precio sin IVA:</li>
                    <li class="nums"><?php echo $this->cart->format_number($this->cart->total(), 2); ?></li>
                    <li>IVA</li>
                    <li class="nums">16%</li>
                    <li>TOTAL</li>
                    <li class="nums"><?php echo $this->cart->format_number($this->cart->total()+($this->cart->total()*0.16), 2); ?></li>
                </ul>
                <div class="con-pago-final">
                    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);javascript:new_window('http://www.pagosonline.com/',1100,600);">
                        <img src="http://www.pagosonline.com/logos/images/transpeque_05_60x180.png" alt="" width="180" height="60" border="0" />
                        <div class="coco-bt">Comprar</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$('.elimina-bt').click(function(e) {
    alert('hola mundo'); 
    
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
            }
        });
        return false; 
});
</script>

