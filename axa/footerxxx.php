<footer>
	<div id="contenido_footer">
    	<div class="arriba_footer">
			<p id="footer_izquierda"> © 2012. AXA ASSISTANCE.  |  <a href="#" id="terminos">Terminos y condiciones</a></p> 
            <div id="chat">
    			<div id="abrir_emergente_chat">
        		</div>
              <div id="contenido_chat">
           	    <div id="fechas_chat">
                    	<p> Lunes - Viernes: <span style="color:#999"><?php echo unserialize($_SESSION['user']);?>8 AM - 6 PM</span></p>
                        <p> S&aacute;bados: <span style="color:#999">8 AM - 12 PM</span></p>
                    </div>
                <div id="mensajes_chat">
                
                <iframe src="admin_chat/chat-admin/index.php?login=<?php echo 'Usuario aleatorio: '.unserialize($_SESSION['user']);?>" ></iframe>
                
                    </div>
                <div id="escribir_chat">
                    </div>
                    <div id="enviar_chat">
                   	<a href="#">Enviar</a></div>
                </div>
            	<a id="terminar_conversacion" href="#">»Terminar conversaci&oacute;n</a></div> 
            <span id="footer_derecha"><img style="float:left" src="images/direct/cerdito.png" /> 
            <a href="http://www.imaginamos.com/" target="_blank" style="float:left; margin-left:5px">Dise&ntilde;o Web: imagin<span style="color:#06F">a</span>mos.com </a>  </span>  <br /> 
            </div>      
 			  <p id="abajo_footer">Raz&oacute;n Social: AXA Asistencia Colombia S.A. - NIT: 800244309-1 - Tel: (571) 646 28 28 - Dir: Cra 11 No. 82 - 01 Piso 4 - E-mail: marketing@axa-assistance.com.co - www.SIC.gov.co</p>
 
  </div>


</footer>