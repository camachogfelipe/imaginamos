<?PHP 
	require_once("includes/clase_parametros.php");
?>
<div class="clear"></div>
<div class="footer-content">
<div class="vigilado"><a href="http://www.superfinanciera.gov.co/" target="_blank"><img src="imagenes/vigilado.png" border="0" /></a></div>
	<div class="footer">
        <div class="pre-footer">
        
            
            <div class="logo-miplata"><a href="http://www.miplata.co" target="_blank"><img src="imagenes/logo-miplata.png" border="0"/></a></div>
            <a href="index.php" id="volver-btn"><div class="bot-volver" id="bot-volver">
                    <div class="bot-volver-in"></div>
                    <div class="bot-volver-act" id="bot-volver-act"></div>
            </div></a>	
            
            
            <!--<div class="separador2"></div>-->
            
			<?PHP

				$datos = Parametros::getImgAliIn();
			
			?>
            <div class="clear"></div>
            <div class="logos-footer">
                <div class="logos-txt">Con el apoyo de:</div>
                <div class="logo-footer"><a href="<?PHP echo trim($datos[2]['aliados_url']); ?>" target="_blank"><img src="cms/modules/aliados/files/big/<?PHP echo trim($datos[2]['aliados_image']); ?>" border="0" /></a></div>
                <div class="logo-footer"><a href="<?PHP echo trim($datos[1]['aliados_url']); ?>" target="_blank"><img src="cms/modules/aliados/files/big/<?PHP echo trim($datos[1]['aliados_image']); ?>" border="0"/></a></div>
                <div class="separador"></div>
                <div class="logo-footer"><a href="<?PHP echo trim($datos[0]['aliados_url']); ?>" target="_blank"><img src="cms/modules/aliados/files/big/<?PHP echo trim($datos[0]['aliados_image']); ?>" border="0" /></a></div>
            </div>
        </div>
        <div class="footer-verde">
            
                <div class="medalla"><a href="http://www.superfinanciera.gov.co/ConsumidorFinanciero/consumidorfin.htm" target="_blank"><img src="imagenes/medalla.png" width="105" height="105" border="0" /></a></div>
                <div class="datos">
                    <p><b>Calle 93 No 11A - 11 Edificio Platamóvil - Bogotá, Colombia</b></br>
            MiPlata S.A Compañia de Financiamiento 2012. Todos los derechos reservados. <a href="#">Terminos y condiciones</a></br></p>
                </div>
                <div class="footer-autorhome"><span id="ahorranito2"></span><a href="http://www.imaginamos.com" target="_blank">Diseño Web: </a><a href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a></div>
            </div>
        </div>
	</div>
</div>

</body>
</html>