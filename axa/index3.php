<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="es">
<head>

<title>AXA</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

<meta name="description" content="">

<meta name="keywords" content="" >

<link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
<link rel="shortcut icon" href="images/layout/favicon.ico" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link type="text/css" href="css/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="css/ezmark.css" media="all" />

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.animate-colors-min.js" type="text/javascript"></script>
	<script src="js/actions-botones.js" type="text/javascript"></script>
    <script src="js/actions-acordeon.js" type="text/javascript"></script>
    <script src="js/chat.js" type="text/javascript"></script>
    <script src="js/misfunciones.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
	<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
	</script>
    <script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
    <script type="text/javascript" src="js/cambiar_es.js"></script>
    <script type="text/javascript" src="js/acciones_calendario.js"></script>
    <script type="text/javascript" src="js/jquery.ezmark.min.js"></script>
    <script type="text/javascript">
		$(function() {
			$('.defaultP input').ezMark();
			$('#customP input[type="checkbox"]').ezMark({checkboxCls: 'ez-checkbox-green', checkedCls: 'ez-checked-green'})
		});	
	</script>
    
<!--[if IE 7]>

<style>
#header_acordeon1, #header_acordeon2, #header_acordeon3, #header_acordeon4{
	color:#666;
	cursor:pointer;
	height:41px;
	text-align:left;
	width:790px;
}

#header_acordeon2{
	height:83px;
}

</style>
<![endif]-->

   
<?php include ('analytics.php');?>
</head>


<body>

<header>
	<div id="logo"> <a href="index6.php"><img src="images/layout/logo.png" /></a>
    </div>
    <div id="copy_home">
    	<h1>
        	<p class="copy_grande" style="float:right">Plan <br /> Cl&aacute;sico</p>
        </h1>
    </div>
</header>


<section class="contenedor_contenido">
	<div class="header_contenidos">
    		<img src="images/direct/dos.png" style="margin-left:42px" />
            <p class="header_contenidos_copy">Contesta unas simples preguntas:</p>
    </div>
    
    <ul id="acordeon">
    	<li id="acordeon1">
        	<div id="header_acordeon1">
            	<p style="float:left">Destino</p>
                <p id="lugar">España</p>
                <div id="banderita"></div>
            </div>
            <div id="listo1"></div>
            <div class="contenido_acordeon">
            	<p class="titulo_contenido_acordeon">Para d&oacute;nde viajas? </p>
                <div class="contenedor_banderas" style="margin-left:0">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera"><img src="images/layout/Banderas/eu.png" /></div>
                    	</div>
                	</div>	
                    <p>EEUU</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera"><img src="images/layout/Banderas/espana.png" /></div>
                    	</div>
                	</div>	
                    <p>España</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera"><img src="images/layout/Banderas/Francia.png" /></div>
                    	</div>
                	</div>	
                    <p>Francia</p>
                </div>
                <div class="contenedor_banderas">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera"><img src="images/layout/Banderas/argentina.png" /></div>
                    	</div>
                	</div>	
                    <p>Argentina</p>
                </div>
                <div class="contenedor_banderas" style="float:right">
                	<div class="contenedor_banderas_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="bandera"><img src="images/layout/Banderas/australia.png" /></div>
                    	</div>
                	</div>	
                    <p>Australia</p>
                </div>
                <div class="contenedor_select">
                	<form>
               			 <select id="Inicio_idOtros">
                         
<option value="3">Afganistán</option>
<option value="4">Islas Gland</option>
<option value="5">Albania</option>
<option value="6">Alemania</option>
<option value="7">Andorra</option>
<option value="8">Angola</option>
<option value="9">Anguilla</option>
<option value="10">Antártida</option>
<option value="11">Antigua y Barbuda</option>
<option value="12">Antillas Holandesas</option>
<option value="13">Arabia Saudí</option>
<option value="14">Argelia</option>
<option value="15">Argentina</option>
<option value="16">Armenia</option>
<option value="17">Aruba</option>
<option value="18">Australia</option>
<option value="19">Austria</option>
<option value="20">Azerbaiyán</option>
<option value="21">Bahamas</option>
<option value="22">Bahréin</option>
<option value="23">Bangladesh</option>
<option value="24">Barbados</option>
<option value="25">Bielorrusia</option>
<option value="26">Bélgica</option>
<option value="27">Belice</option>
<option value="28">Benin</option>
<option value="29">Bermudas</option>
<option value="30">Bhután</option>
<option value="31">Bolivia</option>
<option value="32">Bosnia y Herzegovina</option>
<option value="33">Botsuana</option>
<option value="34">Isla Bouvet</option>
<option value="35">Brasil</option>
<option value="36">Brunéi</option>
<option value="37">Bulgaria</option>
<option value="38">Burkina Faso</option>
<option value="39">Burundi</option>
<option value="40">Cabo Verde</option>
<option value="41">Islas Caimán</option>
<option value="42">Camboya</option>
<option value="43">Camerún</option>
<option value="44">Canadá</option>
<option value="45">República Centroafricana</option>
<option value="46">Chad</option>
<option value="47">República Checa</option>
<option value="48">Chile</option>
<option value="49">China</option>
<option value="50">Chipre</option>
<option value="51">Isla de Navidad</option>
<option value="52">Ciudad del Vaticano</option>
<option value="53">Islas Cocos</option>
<option value="55">Comoras</option>
<option value="56">República Democrática del Congo</option>
<option value="57">Congo</option>
<option value="58">Islas Cook</option>
<option value="59">Corea del Norte</option>
<option value="60">Corea del Sur</option>
<option value="61">Costa de Marfil</option>
<option value="62">Costa Rica</option>
<option value="63">Croacia</option>
<option value="64">Cuba</option>
<option value="65">Dinamarca</option>
<option value="66">Dominica</option>
<option value="67">República Dominicana</option>
<option value="68">Ecuador</option>
<option value="69">Egipto</option>
<option value="70">El Salvador</option>
<option value="71">Emiratos Árabes Unidos</option>
<option value="72">Eritrea</option>
<option value="73">Eslovaquia</option>
<option value="74">Eslovenia</option>
<option value="75">España</option>
<option value="76">Islas ultramarinas de Estados Unidos</option>
<option value="77">Estados Unidos</option>
<option value="78">Estonia</option>
<option value="79">Etiopía</option>
<option value="80">Islas Feroe</option>
<option value="81">Filipinas</option>
<option value="82">Finlandia</option>
<option value="83">Fiyi</option>
<option value="84">Francia</option>
<option value="85">Gabón</option>
<option value="86">Gambia</option>
<option value="87">Georgia</option>
<option value="88">Islas Georgias del Sur y Sandwich del Sur</option>
<option value="89">Ghana</option>
<option value="90">Gibraltar</option>
<option value="91">Granada</option>
<option value="92">Grecia</option>
<option value="93">Groenlandia</option>
<option value="94">Guadalupe</option>
<option value="95">Guam</option>
<option value="96">Guatemala</option>
<option value="97">Guayana Francesa</option>
<option value="98">Guinea</option>
<option value="99">Guinea Ecuatorial</option>
<option value="100">Guinea-Bissau</option>
<option value="101">Guyana</option>
<option value="102">Haití</option>
<option value="103">Islas Heard y McDonald</option>
<option value="104">Honduras</option>
<option value="105">Hong Kong</option>
<option value="106">Hungría</option>
<option value="107">India</option>
<option value="108">Indonesia</option>
<option value="109">Irán</option>
<option value="110">Iraq</option>
<option value="111">Irlanda</option>
<option value="112">Islandia</option>
<option value="113">Israel</option>
<option value="114">Italia</option>
<option value="115">Jamaica</option>
<option value="116">Japón</option>
<option value="117">Jordania</option>
<option value="118">Kazajstán</option>
<option value="119">Kenia</option>
<option value="120">Kirguistán</option>
<option value="121">Kiribati</option>
<option value="122">Kuwait</option>
<option value="123">Laos</option>
<option value="124">Lesotho</option>
<option value="125">Letonia</option>
<option value="126">Líbano</option>
<option value="127">Liberia</option>
<option value="128">Libia</option>
<option value="129">Liechtenstein</option>
<option value="130">Lituania</option>
<option value="131">Luxemburgo</option>
<option value="132">Macao</option>
<option value="133">ARY Macedonia</option>
<option value="134">Madagascar</option>
<option value="135">Malasia</option>
<option value="136">Malawi</option>
<option value="137">Maldivas</option>
<option value="138">Malí</option>
<option value="139">Malta</option>
<option value="140">Islas Malvinas</option>
<option value="141">Islas Marianas del Norte</option>
<option value="142">Marruecos</option>
<option value="143">Islas Marshall</option>
<option value="144">Martinica</option>
<option value="145">Mauricio</option>
<option value="146">Mauritania</option>
<option value="147">Mayotte</option>
<option value="148">México</option>
<option value="149">Micronesia</option>
<option value="150">Moldavia</option>
<option value="151">Mónaco</option>
<option value="152">Mongolia</option>
<option value="153">Montserrat</option>
<option value="154">Mozambique</option>
<option value="155">Myanmar</option>
<option value="156">Namibia</option>
<option value="157">Nauru</option>
<option value="158">Nepal</option>
<option value="159">Nicaragua</option>
<option value="160">Níger</option>
<option value="161">Nigeria</option>
<option value="162">Niue</option>
<option value="163">Isla Norfolk</option>
<option value="164">Noruega</option>
<option value="165">Nueva Caledonia</option>
<option value="166">Nueva Zelanda</option>
<option value="167">Omán</option>
<option value="168">Países Bajos</option>
<option value="169">Pakistán</option>
<option value="170">Palau</option>
<option value="171">Palestina</option>
<option value="172">Panamá</option>
<option value="173">Papúa Nueva Guinea</option>
<option value="174">Paraguay</option>
<option value="175">Perú</option>
<option value="176">Islas Pitcairn</option>
<option value="177">Polinesia Francesa</option>
<option value="178">Polonia</option>
<option value="179">Portugal</option>
<option value="180">Puerto Rico</option>
<option value="181">Qatar</option>
<option value="182">Reino Unido</option>
<option value="183">Reunión</option>
<option value="184">Ruanda</option>
<option value="185">Rumania</option>
<option value="186">Rusia</option>
<option value="187">Sahara Occidental</option>
<option value="188">Islas Salomón</option>
<option value="189">Samoa</option>
<option value="190">Samoa Americana</option>
<option value="191">San Cristóbal y Nevis</option>
<option value="192">San Marino</option>
<option value="193">San Pedro y Miquelón</option>
<option value="194">San Vicente y las Granadinas</option>
<option value="195">Santa Helena</option>
<option value="196">Santa Lucía</option>
<option value="197">Santo Tomé y Príncipe</option>
<option value="198">Senegal</option>
<option value="199">Serbia y Montenegro</option>
<option value="200">Seychelles</option>
<option value="201">Sierra Leona</option>
<option value="202">Singapur</option>
<option value="203">Siria</option>
<option value="204">Somalia</option>
<option value="205">Sri Lanka</option>
<option value="206">Suazilandia</option>
<option value="207">Sudáfrica</option>
<option value="208">Sudán</option>
<option value="209">Suecia</option>
<option value="210">Suiza</option>
<option value="211">Surinam</option>
<option value="212">Svalbard y Jan Mayen</option>
<option value="213">Tailandia</option>
<option value="214">Taiwán</option>
<option value="215">Tanzania</option>
<option value="216">Tayikistán</option>
<option value="217">Territorio Británico del Océano Índico</option>
<option value="218">Territorios Australes Franceses</option>
<option value="219">Timor Oriental</option>
<option value="220">Togo</option>
<option value="221">Tokelau</option>
<option value="222">Tonga</option>
<option value="223">Trinidad y Tobago</option>
<option value="224">Túnez</option>
<option value="225">Islas Turcas y Caicos</option>
<option value="226">Turkmenistán</option>
<option value="227">Turquía</option>
<option value="228">Tuvalu</option>
<option value="229">Ucrania</option>
<option value="230">Uganda</option>
<option value="231">Uruguay</option>
<option value="232">Uzbekistán</option>
<option value="233">Vanuatu</option>
<option value="234">Venezuela</option>
<option value="235">Vietnam</option>
<option value="236">Islas Vírgenes Británicas</option>
<option value="237">Islas Vírgenes de los Estados Unidos</option>
<option value="238">Wallis y Futuna</option>
<option value="239">Yemen</option>
<option value="240">Yibuti</option>
<option value="241">Zambia</option>
<option value="242">Zimbabue</option>
<option value="243">territorio schengen</option>
                            
                		</select>
                	</form>
                </div>
            </div>
        </li>
    	<li id="acordeon2">
        	<div id="header_acordeon2">
            	<p style="float:left">Fecha de Viaje </p> 
                <p id="fecha">fecha</p>
                <span  class="titulo_contenido_acordeon"><p style="float:left">Selecciona la fecha de salida y regreso.</p><p style="float:left; margin-left:400px">Salida</p><input type="checkbox" id="activa1" readonly ><p style="float:left">Llegada</p><input type="checkbox" id="activa2" readonly > </span>
             </div>
             <div id="listo2"></div>
                <div id="contenedor_calendarios">
                	<div id="calendario_salida">
                		<div id="datepicker_salida"></div>
                	</div> 
                    <div id="calendario_llegada">
                        <div id="datepicker_llegada"></div>
                	</div> 
                </div>   
            
            <div class="contenedor_boton_siguiente_grande" style="margin-top:10px;"> 
               		<div class="contenedor_boton_siguiente">
                		<input class="boton_siguiente1" name="buttom1" type="button" value="Siguiente »" />  
                    </div>          
            </div>
        </li>
        <li id="acordeon3">
        	<div id="header_acordeon3">
            	<p style="float:left">N&uacute;mero de Personas</p>
                <p id="personas">Personas</p>
            </div>
            </div>
            <div id="listo3"></div>
            <div class="contenido_acordeon">
            	<p class="titulo_contenido_acordeon">Cuantas personas viajan?</p>
                <div class="contenedor_numeros" style="margin-left:0">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero"><img src="images/layout/Numeros/uno.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_banderas_peque">
                    		<div class="numero"><img src="images/layout/Numeros/dos.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero"><img src="images/layout/Numeros/tres.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero"><img src="images/layout/Numeros/cuatro.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div class="contenedor_numeros" style="float:left; margin-left:0">
                	<div class="contenedor_numeros_grande">
                		<div class="contenedor_numeros_peque">
                    		<div class="numero"><img src="images/layout/Numeros/cinco.png" /></div>
                    	</div>
                	</div>	
                </div>
                <div  class="contenedor_select" style="float:right">
                	<form>
               			 <select id="Inicio_idOtros_personas">
                			<option value="a">5</option>
                   			<option value="b">6</option>
                    		<option value="c">7</option>
                    		<option value="d">8</option>
                    		<option value="e">9</option>
                            <option value="f">10</option>
                		</select>
                	</form>
                </div>
            </div>
        </li>
        <li id="acordeon4">
        	<div id="header_acordeon4">
            	<p>Informaci&oacute;n Pasajero(s)</p>
            </div>
            <div id="listo4"></div>
            <div id="contenedor_scroll"  class="scroll-pane">
            <form>
            	<div class="nombres"><p style="float:left">Pasajero No. 1</p><p style="float:right">Fecha de Nacimiento</p></div>
                
             <!-- nombres  -->
             
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Nombre Completo'" onclick="if(this.value=='Nombre Completo') this.value=''" value="Nombre Completo">
                
                
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Apellidos'" onclick="if(this.value=='Apellidos') this.value=''" value="Apellidos">
                
                
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Documento de Identidad'" onclick="if(this.value=='Documento de Identidad') this.value=''" value="Documento de Identidad" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='dd'" onclick="if(this.value=='dd') this.value=''" value="dd" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='mm'" onclick="if(this.value=='mm') this.value=''" value="mm" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='aa'" onclick="if(this.value=='aa') this.value=''" value="aa" />
                
                <!-- nombres  -->
                              
                              
             <!-- nombres  -->
             
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Nombre Completo'" onclick="if(this.value=='Nombre Completo') this.value=''" value="Nombre Completo">
                
                
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Apellidos'" onclick="if(this.value=='Apellidos') this.value=''" value="Apellidos">
                
                
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Documento de Identidad'" onclick="if(this.value=='Documento de Identidad') this.value=''" value="Documento de Identidad" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='dd'" onclick="if(this.value=='dd') this.value=''" value="dd" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='mm'" onclick="if(this.value=='mm') this.value=''" value="mm" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='aa'" onclick="if(this.value=='aa') this.value=''" value="aa" />
                
                <!-- nombres  -->
                
                
             <!-- nombres  -->
             
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Nombre Completo'" onclick="if(this.value=='Nombre Completo') this.value=''" value="Nombre Completo">
                
                
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Apellidos'" onclick="if(this.value=='Apellidos') this.value=''" value="Apellidos">
                
                
                <input class="nombres_text" type="text" onblur="if(this.value=='') this.value='Documento de Identidad'" onclick="if(this.value=='Documento de Identidad') this.value=''" value="Documento de Identidad" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='dd'" onclick="if(this.value=='dd') this.value=''" value="dd" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='mm'" onclick="if(this.value=='mm') this.value=''" value="mm" />
                
                <input class="fechas_text" type="text" onblur="if(this.value=='') this.value='aa'" onclick="if(this.value=='aa') this.value=''" value="aa" />
                
                <!-- nombres  -->
                
                              
               <div class="contenedor_boton_siguiente_grande"> 
               		<div class="contenedor_boton_siguiente">
                		<input class="boton_siguiente2" name="buttom" type="button" value="Siguiente »" />  
                    </div>          
               </div>
            </form>
            </div>
        </li>
    </ul>
   
</section>

<section id="contenedor_factura">
	<p id="titulo_factura">Realiza tu Pago</p>
    <div class="costo">
    	<p>El costo de tu AXA Assistance Cl&aacute;sico es:</p> <br />
    	<p id="costo_persona">Por Persona: $133,00 USD*</p>
    	<p id="total">Total: $399,00 USD*</p> 
    	<p class="condiciones_peque">* El cambio de d&oacute;lares a pesos se realiza en funcion de la tasa IATA de cada semana.</p>
    </div>
    <div class="certificado_correo">
    	<p id="costo_persona">Tu certificado de asistencia ser&aacute; enviado a tu correo electr&oacute;nico 
cuando se haya confirmado la transacci&oacute;n.</p>   
		<input class="correo_factura" type="text" onblur="if(this.value=='') this.value='Correo Electr&oacute;nico'" onclick="if(this.value=='Correo Electr&oacute;nico') this.value=''" value="Correo Electr&oacute;nico" />
    </div>
    <div class="acepto_los_terminos" id="customP">
		<input type="checkbox" name="jquery_like" id="jquery_like" value="1" />
		<label style="float:left; margin-top:8px" for="Acepto">Acepto los <a class="link_peque" href="#">t&eacute;rminos y condiciones propuestos.</a></label>
    </div>
    <a class="link_grande" href="#">» Comprar</a>
</section>
<?php 
include ('footer.php');
?>

</body>

</html>
