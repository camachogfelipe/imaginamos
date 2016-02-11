    <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<!--<tr>
  <th>Cantidad</th>
  <th>Item Descripción</th>
  <th style="text-align:right">Precio</th>
  <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

  <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

  <tr>
    <td><?php echo $items['qty']; ?></td>
    <td>
    <?php echo $items['name']; ?>

      <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

        <p>
          <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

          <?php endforeach; ?>
        </p>

      <?php endif; ?>

    </td>
    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
    <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
  </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>  -->


     <h1 class="main-title">COMPRAR COTIZAR</h1>
        <h2>Resumen</h2>
        <div class="con-tabla-rs-coco">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs-coco">
              <thead>
                <tr>
                  <th width="120">Cant.</th>
                  <th width="120">Producto</th>
                  <th width="120">Precio</th>
                   <th width="120">Sub-Total</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; $total = 0; ?>
                <?php foreach ($this->cart->contents() as $items): ?>
                 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                <tr>
                  <td><?php echo $items['qty']; ?></td>
                  <td><?php echo $items['name']; ?></td>
                  <td><?php echo $this->cart->format_number($items['price']);  ?></td>
                  <td>$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>
                <?php $i++; ?>
                 <?php endforeach; ?>
              </tbody>
              <tfoot>
                  <tr style="background-color: #D1E5BB">
                      <td colspan="3" style=" text-align: right;"><span><b>Total</b></span></td>
                      <td style="font-size: medium" ><?php echo  $this->cart->format_number($this->cart->total(), 2); ?></td>
                  </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="con-btsv">
          <a href="cart/zona_segura"><div class="btv">Ir a Comprar</div></a>
          <a href="#modal-cot-ok" class="modals-act"><div class="btv">Cotizar</div></a>
        </div>
<script>
  oTable = $('#tabla-rs-coco').dataTable({"bJQueryUI":true, "bLengthChange":false, "sPaginationType":"full_numbers", "iDisplayLength":5, "bFilter":false, "bInfo":false});
//    $('#cant').click(function(e) {
//        $.ajax({
//            type: "POST",
//            url: $(this).data('url'),
//            data: $(this).data('datos'),
//            dataType: 'json',
//            success: function(js) {
//                 if(js.ok){
//                     alert('Producto Agregado con exíto...!')
//                 }else{
//                     alert('Error...! El producto no pudo se agregado');
//                 }
////                location.href = '#modal-coco'; 
//            }
//        });
//    });

</script>  
