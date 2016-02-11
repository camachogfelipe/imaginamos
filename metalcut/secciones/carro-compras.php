<?php include("head.php"); ?>
	<?php include("header-int.php"); 
          $iduser=isset($_SESSION['id']) ? $_SESSION['id'] : '';
         $cCompras= new Dbcompras();
         $mDataP = array("where"=>"user_id='".$iduser."' and estado='Proceso' ");
         $compras = $cCompras->getList2($mDataP);
         $cant = count($compras);
        ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Carro de compras
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <h2>Productos agregados</h2>
        <div class="con-tabla-rs">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
              <thead>
                <tr>
                  <th width="80">Referencia</th>
                  <th width="528">Descripci&#243;n</th>
                  <th width="80">Direcci&#243;n</th>
                  <th width="80">Cantidad</th>
                  <th width="172">Selecci&#243;n</th>
                </tr>
              </thead>
              <tbody>
                  <?php for($i = 0 ; $i < $cant ; $i++){ 
                       $pieces = explode("-", $compras[$i]["det"]);
                       $detalle='';
                       $j=0;
                       foreach ($pieces  as $valor){
                           if ($j>0) $detalle.=$valor.' ';
                           $j++;
                       }
                  ?>
                <tr>
                  <td><?php echo $pieces[0] ?></td>
                  <td><?php echo $detalle ?></td>
                  <td><?php echo $compras[$i]["ori"] ?></td>
                  <td><?php echo $compras[$i]["cant"] ?>
                    <!--	<div class="con-datos-rs clearfix">
                    	<fieldset>
                    		<input placeholder="Cantidad..." onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                      </fieldset>
                    </div>-->
                  </td>
                  <td>
                  	<div class="con-datos-rs-bt clearfix">
                      <a href="#modal-ref" class="submit-torn modals-act"></a>
                    </div>
                  </td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
				</div>
        <div class="sep-line"></div>
        <div class="con-info-total">
        	<h2>
          	* Si desea adquirir todos los productos puede dar clic ac&#225;:
            <div class="con-bt-total"><a href="#modal-ref" class="submit-total modals-act"></a></div>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>
<?php 
 if (!empty($_GET['Erno'])) {
        $valor = $_GET['Erno'];
        if ($valor == 1) {
            ?>
              <div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>Informaci&#243;n enviada correctamente.</h1>
                    <p>En las pr&#243;ximas 24 horas uno de nuestros asesores se pondr&#225; en contacto.</p>
                  </div>
                </div>
            <?php
        }
        if ($valor == 2) {
            ?>
              <div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>Ya existe este usuario.</h1>
                  </div>
                </div>
            <?php
        }
        if ($valor == 3) {
            ?>
              <div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>Informaci&#243;n enviada correctamente.</h1>
                  </div>
                </div>
            <?php
        }
         if ($valor == 4) {
            ?>
              <div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>El Usuario no existe o no esta activo.</h1>
                  </div>
                </div>
            <?php
        }
}
?>