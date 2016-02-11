<?php include("head.php"); ?>
	<?php 
        include("header-int.php"); 
        $contrasena=isset($_REQUEST['contrasena']) ? $_REQUEST['contrasena'] : '';
        $usuario=isset($_REQUEST['correo']) ? $_REQUEST['correo'] : '';
        $id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
        $cant=0;
       // echo ""
         if (!empty($contrasena) && !empty($usuario)){
            //session_destroy();
            $cant2=0;    
            $cUser= new Dbuser_carrito();
            $mDataU = array("where"=>"correo='".$usuario."' and contrasena='".base64_encode($contrasena)."' and estado='Activo'");
            $user = $cUser->getList2($mDataU);
            $cant2 = count($user);
            $user=$user[0];
            $nombre_usuario=$user['nombre'];
            //echo $cant2.'xxx';
            if ($cant2==0){
                 header('Location:index.php?seccion=index&Erno=2');
              exit;
            }
         }
         
         if (!empty($id)){
                $cCompras= new Dbcompras();
                $mDataP = array("where"=>"user_id='".$id."' and estado='Proceso' ");
                //echo "user_id='".$id."' and estado='Proceso'";
                $compras = $cCompras->getList2($mDataP);
                $cant = count($compras);
         }
 
                
         if (!empty($user['nombre'])){
             
             if(!isset($_SESSION)) session_start();
             
            
            $nombre_usuario=$user['nombre'];             
                          

             $_SESSION['user']=$usuario;
             $_SESSION['id']=$user['iduser_carrito'];
             $_SESSION['nombre']=$user['nombre'];
             $nombre_usuario=$_SESSION['nombre'];
            
             $mensa='';
         }else{
             $mensa="Usuario Inactivo";
         }
         
         
        ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>
        	Bienvenido <?php echo $nombre_usuario ?>
        	<a href="javascript:history.back()"><div class="back-vn"></div></a>
        </h1>
        <h2>Compras pendientes</h2>
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