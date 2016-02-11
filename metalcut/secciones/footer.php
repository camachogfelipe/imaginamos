<?php
$cContacto = new Dbcontacto();
$mData = array("where" => "idcontacto='1'");
$contacto = $cContacto->getListOne($mData);

$cRedes = new Dbredes();
$mDataR = array("where" => "idredes=1");
$redes = $cRedes->getListOne($mDataR);

$cProductos_referido = new Dbproductos_referido();
$productos_referido = $cProductos_referido->getList();
$cant = count($productos_referido);

//$iduser=$_SESSION['id'];       
$iduser = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$cCompras = new Dbcompras();
$mDataP = array("where" => "user_id='" . $iduser . "' and estado='Proceso' ");
$compras = $cCompras->getList2($mDataP);
$cant_prod = count($compras);
?>  
<footer>
    <div class="con-footer">
        <div class="mg-footer clearfix">
            <h1><a href="index.php?base&seccion=index">METAL<strong>CUT</strong></a></h1>
            <div class="footer-c1">
                <ul class="footer-map">
                    <a href="index.php?base&seccion=index"><li id="map-home"><span class="map-p1"></span>INICIO</li></a>
                    <a href="index.php?base&seccion=empresa"><li class="<?php if ($_GET['seccion'] == '1') {
    echo 'map-act';
} ?>"><span class="map-p2"></span>QUI&#201;NES SOMOS</li></a>
                    <a href="index.php?base&seccion=servicios"><li class="<?php if ($_GET['seccion'] == '2') {
    echo 'map-act';
} ?>" id="map-services"><span class="map-p3"></span>PORTAFOLIO DE SERVICIOS</li></a>
                    <a href="index.php?base&seccion=contacto"><li class="<?php if ($_GET['seccion'] == '3') {
    echo 'map-act';
} ?>"><span class="map-p4"></span>CONT&#193;CTENOS</li></a>
                </ul>
            </div>
            <div class="footer-c2">
                <h1><?php echo $contacto['ciudad'] ?></h1>
                <ul class="footer-dates">
                    <li>
                        <span class="date-p1"></span>
                        <p><?php echo $contacto['direccion1'] ?></p>
                        <p><?php echo $contacto['direccion2'] ?></p>
                    </li>
                    <li>
                        <span class="date-p2"></span>
                        <p>Tel&#233;fonos de Contacto:</p>
                        <p><strong><?php echo $contacto['telefonos'] ?></strong></p>
                    </li>
                    <li>
                        <span class="date-p3"></span>
                        <p>Fax:</p>
                        <p><?php echo $contacto['fax'] ?></p>
                        <p><strong><?php echo $contacto['correos'] ?></strong></p>
                    </li>
                </ul>
            </div>
            <div class="footer-c3">
                <h1><span></span>COPYRIGHT</h1>
                <p>&copy; <?php echo date('Y') ?> <strong>METALCUT</strong> - Todos los derechos reservados - Prohibida su reproducci&#243;n parcial o total</p>
                <div style="font-size: 12px; height: 40px; line-height: 40px; width: 220px;">
                    <span style="background: url(&quot;http://www.imaginamos.com/footer_ahorranito/ahorranito-2.png&quot;) repeat scroll 0% 0% transparent; margin-top: 9px; width: 22px; height: 22px; display: block; float: left; font-size: 12px; margin-right: 10px;"></span>
                    <a class="imaginamosOver" style="font-family: Helvetica,Arial; color: rgb(255, 255, 255); float: left; text-decoration: none; margin-right: 3px;" href="http://www.imaginamos.com/" target="_blank">
                        Diseño Web : </a>
                    <a class="imaginamosOver" style="font-family: Helvetica,Arial; color: rgb(255, 255, 255); float: left; text-decoration: none; margin-right: 3px;" href="http://www.imaginamos.com/" target="_blank">
                        imagin<span style="color: rgb(0, 204, 255);">a</span>mos.com</a>

                </div>

                <a href="index.php?base&seccion=index"><h2>METAL<strong>CUT</strong></h2></a>
                <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
                <div id="ciq90u" style="z-index:100;position:absolute"></div><div id="scq90u" style="display:inline"></div><div id="sdq90u" style="display:none"></div><script type="text/javascript">var seq90u = document.createElement("script");
    seq90u.type = "text/javascript";
    var seq90us = (location.protocol.indexOf("https") == 0 ? "https" : "http") + "://image.providesupport.com/js/0h77b06sp6e9d0hczz13ee7tsp/safe-standard.js?ps_h=q90u&ps_t=" + new Date().getTime();
    setTimeout("seq90u.src=seq90us;document.getElementById('sdq90u').appendChild(seq90u)", 1)</script><noscript><div style="display:inline"><a href="http://www.providesupport.com?messenger=0h77b06sp6e9d0hczz13ee7tsp">Chat de atenciÃ³n al cliente en directo</a></div></noscript>
                <!-- END ProvideSupport.com Graphics Chat Button Code -->
            </div>
        </div>
    </div>
</footer><div id="toTop"></div>
<div class="con-redes">
    <a href="<?php echo $redes['facebook'] ?>" target="_blank"><div class="red-pick"><div class="red-fb"></div><span class="red-fb-s"></span></div></a>
    <a href="<?php echo $redes['twitter'] ?>" target="_blank"><div class="red-pick"><div class="red-tw"></div><span class="red-tw-s"></span></div></a>
    <a href="index.php?base&seccion=carro-compras">
    <div class="red-pick pick-tool-carro"><div class="pick-carro"></div><span class="pick-carro-s"></span><div class="carro-tool">Productos agregados: <strong>(<?php echo $cant_prod ?>)</strong><div class="carro-arrow"></div></div></div></a>
    <a onclick="psq90uow(); return false;" href="#"><div class="red-pick"><div class="pick-chat"></div><span class="pick-chat-s"></span></div></a>
</div>
<div class="con-modals">
    <div id="modal-ref">
        <h1>Productos referidos</h1>
        <div class="con-referidos">
<?php for ($i = 0; $i < $cant; $i++) { ?>
                <div class="paso-item">
                    <h1><?php echo $productos_referido[$i]["titulo"] ?></h1>
                    <div class="paso-img"><img src="assets/img/productos_referido/<?php echo $productos_referido[$i]["imagen"] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                        <div class="scroll-wrap">
                            <p><?php echo $productos_referido[$i]["texto"] ?></p>
                        </div>
                    </div>
                    <a href="index.php?base&seccion=productos&idproductos_referido=<?php echo $productos_referido[$i]["idproductos_referido"] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-coco"></div></a>
                </div>
<?php } ?>
        </div>
        <div class="con-bts-ref">
            <a href="#modal-coco" class="modals-act"><div class="ref-bt ir-bt"></div></a>
            <a href="index.php?base&seccion=servicios"><div class="ref-bt agrega-bt"></div></a>
        </div>
    </div>
    <div id="modal-coco">
        <h1>Cotizar / Comprar</h1>
        <h2>Resumen</h2>
        <div class="con-tabla-rs-coco">
            <div>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs-coco">
                    <thead>
                        <tr>
                            <th width="120">&#237;tem(s)</th>
                            <th width="120">Referencia</th>
                            <th width="120">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
for ($i = 0; $i < $cant_prod; $i++) {
    $pieces = explode("-", $compras[$i]["det"]);
    $j = $i + 1;
    ?>
                            <tr>
                                <td><?php echo $j ?></td>
                                <td><?php echo $pieces[0] ?></td>
                                <td><?php echo $compras[$i]["cant"] ?></td>
                            </tr>
<?php } ?>
                    </tbody>
                </table>
<?php if ($cant_prod > 0) { ?>
                    <br>
                    <div class="con-datos-rs-bt clearfix">
                        <a href="index.php?base&seccion=cotiza-compra"  class="submit-torn modals-act"></a>
                    </div>
                    <br>
<?php } ?>
            </div>
        </div>
<?php if (empty($_SESSION['nombre'])) { ?>
            <p>Si est&#225; registrado ingrese sus datos para Cotizar / Comprar:</p>
            <p>De lo contrario registrese aca: <a href="index.php?base&seccion=registro" class="modals-reg fancybox.iframe">Registrarme</a></p>
            <div class="con-form-int clearfix">
                <form class="fm-int" action="index.php?base&seccion=zona-segura" method="post">
                    <fieldset>
                        <label><strong>Nombre:</strong></label>
                        <input class="validate[required]" id="correo" name="correo" >
                    </fieldset>
                    <fieldset>
                        <label><strong>Contrase&#241;a:</strong></label>
                        <input type="password" id="contrasena" name="contrasena" class="validate[required]">
                    </fieldset>
                    <p align="right" class="p-olv"><a href="#modal-rec" class="modals-act">&#191;Olvido su contrase&#241;a?</a></p>
                    <div class="bt-ingreso">
                        <input type="submit" class="bt-submit" value="">
                    </div>
                </form>
                <div class="con-bts-coco">
                    <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);javascript:new_window('http://www.pagosonline.com/',1020,600);"><div class="coco-bt compra-bt"></div></a>
                    <a href="#modal-cot-ok" class="modals-act"><div class="coco-bt cotiza-bt"></div></a>
                    <!--<a href="#modal-registro" class="modals-act"><div class="coco-bt cotiza-bt"></div></a>-->
                </div>
            </div>
        </div>
        <div id="modal-rec">
            <h1>Recordar contrase&#241;a:</h1>
            <form class="fm-rec" action="index.php?base&seccion=mail2&estado=2" method="post">
                <fieldset>
                    <label><strong>Correo electr&#211;nico:</strong></label>
                    <input type="text" id="correo" name="correo" class="validate[required, custom[email]]">
                </fieldset>
                <div class="bt-ingreso">
                    <input type="submit" class="bt-envio" value="">
                </div>
            </form>
        </div>
<?php } else { ?>

<?php } ?>
    <!-- <div id="modal-cot-ok">
       <h1>Informaci&#211;n enviada correctamente.</h1>
       <p>En las pr&#211;ximas 24 horas uno de nuestros asesores se pondra en contacto.</p>
     </div>-->
</div> 

<script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="assets/js/actions.js"></script>

</body>
</html>