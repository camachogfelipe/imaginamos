<script type="text/javascript" src="js/jsalphanumeric/jquery.alphanumeric.js"></script>
<script type="text/javascript" src="js/jsalphanumeric/jquery.alphanumeric.pack.js"></script>
<script type="text/javascript" src="js/jsalphanumeric/jquery.validate.js"></script>
<footer>
	<div id="contenido_footer">
    	<div class="arriba_footer">
			<p id="footer_izquierda">
                    <a id="reclamos" href="http://www.axa-assistance.com.co/index.php?pag=contacto" target="_blank">Quejas y Reclamos</a>
                    <a href="docpdf/<?php echo $listaPDF->getPdf(); ?>" id="terminos" target="_blank">Términos y Condiciones</a> 
                    <a href="OA1100-politica.pdf" target="_blank" id="terminos" target="_blank">Protección de datos</a> 
          </p> 
            <div id="chat" style="display:none">
    			<div id="abrir_emergente_chat">
        		</div>
              <div id="contenido_chat">
           	    <div id="fechas_chat">
                    	<p> Lunes - Viernes: <span style="color:#999">6 AM - 8 PM</span></p>
                        <p> S&aacute;bados: <span style="color:#999">8 AM - 12 M</span></p>
                    </div>
                <div id="mensajes_chat">
                <div id="div_loginchat">
                <p style="color:#000; font-size:11px; text-align:left">
                Bienvenidos a la atencion en linea de AXA, por favor ingrese su cédula para iniciar el Chat:
                </p>
                <br />
                <input type="text" id="loginchatcedula" value="" placeholder="Cédula..." />
                <input type="button" size="6" value="Enviar" onclick="accionchat()" />
                </div>
                <iframe id="chatiframe"  style="height:270px; display:none" ></iframe>
                </div>
                
                </div>
            	</div> 
            <span id="footer_derecha">
            	<a href="http://www.imaginamos.com/" target="_blank" style="float:right; margin-left:5px">Dise&ntilde;o Web: imagin<span style="color:#00cccc">a</span>mos.com </a>  
 				<img style="float:right" src="images/direct/cerdito.png" />            
            </span>  <br /> 
            </div>      
            
 			  <p id="abajo_footer">Raz&oacute;n Social: AXA Asistencia Colombia S.A. - NIT: 800244309-1 - Tel: (571) 646 28 28 - Dir: Cra 11 No. 82 - 01 Piso 4 - E-mail: marketing@axa-assistance.com.co - <span class="sic"><a href="http://www.sic.gov.co">www.SIC.gov.co</a> <br /> </span>  © 2012. AXA ASSISTANCE.</p>
 
  </div>


</footer>
<script type="text/javascript" language="javascript">

$("#loginchatcedula").numeric();
function accionchat()
{
	alert('En este nomento el chat se ecuentra temporalmente fuera de servicio');
	exit;
var cedula = document.getElementById('loginchatcedula').value;
if (cedula == '' || cedula == 'Cédula...')
{
	alert ('Debe ingresar su cédula')	;
}
else
	{
		document.getElementById('chatiframe').src = "admin_chat/chat-admin/index.php?login="+cedula;
		document.getElementById('chatiframe').style.display = '';	
		$("#div_loginchat").hide();
		document.getElementById('loginchatcedula').value='';
	}
}

</script>