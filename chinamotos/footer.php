	<?PHP
		$infoContacto = Parametros::getInfoContacto();
	?>
	<div class="footer">
    	<div class="conFooter">
        	<div class="conColsFooter">
            	<div class="colT1Footer">
                	<div class="titColFooter">DIRECCIÓN</div>
                    <p class="txFooter"><?PHP echo trim($infoContacto[0]['contacto_direc']); ?></p>
                    <p class="txFooter"><?PHP echo trim($infoContacto[0]['contacto_direc2']); ?></p>
                    <p class="txFooter"><?PHP echo trim($infoContacto[0]['contacto_barrio']); ?></p>
                    <p class="txFooter"><?PHP echo trim($infoContacto[0]['contacto_ciudad']); ?> <?PHP echo trim($infoContacto[0]['contacto_pais']); ?></p>
                </div>
                <div class="colT1Footer">
                	<div class="titColFooter">CONTÁCTENOS</div>
                    <p class="txFooter">Tel&eacute;fono: <?PHP echo trim($infoContacto[0]['contacto_tel']); ?></p>
                    <p class="txFooter">Movil: <?PHP echo trim($infoContacto[0]['contacto_movil']); ?></p>
                    <p class="txFooter"><a href="mailto:<?PHP echo trim($infoContacto[0]['contacto_email']); ?>" target="_blank"><?PHP echo trim($infoContacto[0]['contacto_email']); ?></a></p>
                </div>
                <div class="colT2Footer">
                	<div class="titColFooter">MAPA DE SITIO</div>
                    <ul class="listaFooter">
                    	<a href="empresa.php"><li><strong>>></strong>Lo que hacemos</li></a>
                        <a href="novedades.php"><li><strong>>></strong>Novedades</li></a>
                        <a href="ventas.php"><li><strong>>></strong>Lo que vendenos</li></a>
                        <a href="promociones.php"><li><strong>>></strong>Promociones</li></a>
                        <a href="tiendas.php"><li><strong>>></strong>Nuestras tiendas</li></a>
                        <a href="distribuidores.php"><li><strong>>></strong>Distribuidores</li></a>
                        <a href="contacto.php"><li><strong>>></strong>Contáctenos</li></a>
                    </ul>
                </div>
                <div class="colT3Footer">
                	<div class="titColFooter">SÍGUENOS</div>
                    <ul class="redesFooter">
                    	<a href="#" target="_blank"><li class="redFooter1">Twitter<strong>>></strong></li></a>
                        <a href="#" target="_blank"><li class="redFooter2">Facebook<strong>>></strong></li></a>
                        <a href="#" target="_blank"><li class="redFooter3">Youtube<strong>>></strong></li></a>
                    </ul>
                </div>
            </div>
            <div class="conDerSite">
            	<div class="copyHome">
                	<div class="txDerechos">&copy; 2013 <strong>CHINA MOTOS</strong> - Todos los derechos reservados.</div>
    				<div class="footer-autor">
        				<span id="ahorranito2"></span>
            			<a href="http://www.imaginamos.com" target="_blank">Diseño Web: </a>
            			<a href="http://www.imaginamos.com" target="_blank">imagin<span>a</span>mos.com</a>
         			</div>
    			</div>
            </div>
        </div>
	</div>