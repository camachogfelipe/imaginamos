<?php session_start();?>
<?
    if( !isset($_SESSION['usuariosPP']) ){
        header("location: ./index.php?ur");
        exit;
    }
    
    include_once './php/clases.php';
    
    $venta = new venta();
    $venta = unserialize($_SESSION['usuariosPP']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENEPERFECTO.com / Ejercicios para agrandar tu pene</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


<link rel="STYLESHEET" type="text/css" href="codebase/dhtmlxcalendar.css">
<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></link>
<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>



<style type="text/css">
<!--
body {
	background-image: url(images/bg_pp.png);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapcontenidos">
  <!--------------------------------------------HEADER PP---------------------------->
  <div id="headlgomenu_usuarios">
    <div id="envlogo_usuarios"><a href="index.php"><img src="images/logopp_usuarios.png" alt="PENEPERFECTO.com" width="300" height="80" border="0" /></a></div>
    <div id="envtop_usuarios">
      <div id="envbienv_usuarios">
	  <div id="bthelpd">
</div>
	    <div id="btselector"><a href="inicio_usuarios.php"><img src="images/btsalir.png" width="160" height="32" border="0" /></a></div>
	    <div id="text_bienvenidos">Bienvenidos</div>
	  
	  
	  
	  
	  
	  </div>
	  
	  
	  
	  <div id="envnombre_usuarios">
	  
	  
	  <div id="text_nombrebienvenidos">NOMBRE Y APELLIDO DEL USUARIO </div>
	  
	  
	  
	  
	  
	  </div>
	  
	  
	  
	  
	  
	  
	  
    </div>
  </div>
  <!-------------------------------FIN HEADER-------------------------------------->
  <!-------------------------------BANNER----------------------------------------->
  <!----------------------------------FIN BANNER------------------------------------------->
  <!----------------------------------CONTENIDOS--------------------------------------------->
  <div id="env_internas">
    <div id="caja_centbienestar">
      <div class="cont_pperfecto" >
        <div id="colatizq">
          <?php include "columna_modulos_usuarios.php"; ?>
          <br/>
          <br/>
          <p></p>
        </div>
        <div id="envcolder_edicion">
          <div id="tit_barconts">Editar perfil de usuario</div>
          <div id="env_cajonprograma">
            <div id="textoscont_pperfectointernas">
              <div id="row_usuarios3">
                <div id="envus3">
				
<script type="text/javascript">
    
    function validarHoja (){
    
        var alerta = 'Todos los campos en rojo son obligatorios';
        var control = true;
        
        if (document.hoja.nombre.value+"" == ""){
            document.hoja.nombre.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.apellido.value+"" == ""){
            document.hoja.apellido.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.pais.value+"" == "x"){
            document.hoja.pais.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.telefono.value+"" == "x"){
            document.hoja.telefono.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.mail.value+"" == "x"){
            document.hoja.mail.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.pass.value+"" == ""){
            document.hoja.pass.style.background = '#FF0000';
            control = false;
        }
        
        if (!control){
            alert(alerta);
            return false;
        }
        else{
            if (document.hoja.pass.value+"" != document.hoja.passs.value+""){
                alert ('Las contraseñas no son iguales.');
                return false;
            }
            else{
                document.hoja.submit();
            }
            
            }
        
                                
    }
    
</script>
				
                    <form name="hoja" method="post" action="./php/action/ventaEdit.php">
				
                        <input type="hidden" name="id" value="<?=$venta->getid() ?>" />
				
				
				
				
                  <table width="605" border="0" align="center" cellpadding="2" cellspacing="2">
                    <tr>
                      <td width="200" class="text_tablas">Nombre </td>
                      <td nowrap="nowrap"><label>
                              <input name="nombre" type="text" value="<?=$venta->getnombre() ?>" class="campo_regis" id="nombre" />
                      </label></td>
                    </tr>
                    <tr>
                      <td class="text_tablas">Apellido:</td>
                      <td nowrap="nowrap"><label>
                              <input name="apellido" type="text" value="<?=$venta->getapellido() ?>" class="campo_regis" id="email" />
                      </label></td>
                    </tr>

                    
                    <tr>
                      <td class="text_tablas">País </td>
                      <td nowrap="nowrap"><label>
                        <select name="pais" >
                                <option value="x">Seleccione país</option>
<option values="Albania">Albania</option>
<option values="Algeria">Algeria</option>
<option values="Andorra">Andorra</option>
<option values="Angola">Angola</option>
<option values="Anguilla">Anguilla</option>
<option values="Antarctica">Antarctica</option>
<option values="Antigua and Barbuda">Antigua and Barbuda</option>
<option values="Argentina">Argentina</option>
<option values="Armenia">Armenia</option>
<option values="Aruba">Aruba</option>
<option values="Australia">Australia</option>
<option values="Austria">Austria</option>
<option values="Azerbaijan">Azerbaijan</option>
<option values="Bahamas">Bahamas</option>
<option values="Bahrain">Bahrain</option>
<option values="Bangladesh">Bangladesh</option>
<option values="Barbados">Barbados</option>
<option values="Belarus">Belarus</option>
<option values="Belgium">Belgium</option>
<option values="Belize">Belize</option>
<option values="Benin">Benin</option>
<option values="Bermuda">Bermuda</option>
<option values="Bhutan">Bhutan</option>
<option values="Bolivia">Bolivia</option>
<option values="Bosnia Herzegovina">Bosnia Herzegovina</option>
<option values="Botswana">Botswana</option>
<option values="Bouvet Island">Bouvet Island</option>
<option values="Brazil">Brazil</option>
<option values="Brunei">Brunei</option>
<option values="Bulgaria">Bulgaria</option>
<option values="Burkina Faso">Burkina Faso</option>
<option values="Burundi">Burundi</option>
<option values="Cambodia">Cambodia</option>
<option values="Cameroon">Cameroon</option>
<option values="Canada">Canada</option>
<option values="Cape Verde Islands">Cape Verde Islands</option>
<option values="Cayman Islands">Cayman Islands</option>
<option values="Central African Republic">Central African Republic</option>
<option values="Chad">Chad</option>
<option values="Channel Islands">Channel Islands</option>
<option values="Chile">Chile</option>
<option values="China">China</option>
<option values="Colombia">Colombia</option>
<option values="Comoros">Comoros</option>
<option values="Congo (Republic of the)">Congo (Republic of the)</option>
<option values="Cook Islands">Cook Islands</option>
<option values="Costa Rica">Costa Rica</option>
<option values="Croatia">Croatia</option>
<option values="Cuba">Cuba</option>
<option values="Cyprus">Cyprus</option>
<option values="Czech Republic">Czech Republic</option>
<option values="Denmark">Denmark</option>
<option values="Djibouti">Djibouti</option>
<option values="Dominica">Dominica</option>
<option values="Dominican Republic">Dominican Republic</option>
<option values="East Timor">East Timor</option>
<option values="Ecuador">Ecuador</option>
<option values="Egypt">Egypt</option>
<option values="El Salvador">El Salvador</option>
<option values="England">England</option>
<option values="Equatorial Guinea">Equatorial Guinea</option>
<option values="Eritrea">Eritrea</option>
<option values="Estonia">Estonia</option>
<option values="Ethiopia">Ethiopia</option>
<option values="F&aelig;roe Islands">F&aelig;roe Islands</option>
<option values="Falkland Islands">Falkland Islands</option>
<option values="Fiji">Fiji</option>
<option values="Finland">Finland</option>
<option values="France">France</option>
<option values="French Guiana">French Guiana</option>
<option values="French Polynesia">French Polynesia</option>
<option values="Gabon">Gabon</option>
<option values="Gambia">Gambia</option>
<option values="Georgia">Georgia</option>
<option values="Germany">Germany</option>
<option values="Ghana">Ghana</option>
<option values="Gibraltar">Gibraltar</option>
<option values="Greece">Greece</option>
<option values="Greenland">Greenland</option>
<option values="Grenada">Grenada</option>
<option values="Guadeloupe">Guadeloupe</option>
<option values="Guam">Guam</option>
<option values="Guatemala">Guatemala</option>
<option values="Guinea">Guinea</option>
<option values="Guinea-Bissau">Guinea-Bissau</option>
<option values="Guyana">Guyana</option>
<option values="Haiti">Haiti</option>
<option values="Honduras">Honduras</option>
<option values="Hong Kong">Hong Kong</option>
<option values="Hungary">Hungary</option>
<option values="Iceland">Iceland</option>
<option values="India">India</option>
<option values="Indonesia">Indonesia</option>
<option values="Iran">Iran</option>
<option values="Iraq">Iraq</option>
<option values="Ireland">Ireland</option>
<option values="Israel">Israel</option>
<option values="Italy">Italy</option>
<option values="Ivory Coast">Ivory Coast</option>
<option values="Jamaica">Jamaica</option>
<option values="Japan">Japan</option>
<option values="Jordan">Jordan</option>
<option values="Kazakhstan">Kazakhstan</option>
<option values="Kenya">Kenya</option>
<option values="Kiribati">Kiribati</option>
<option values="Kuwait">Kuwait</option>
<option values="Kyrgyzstan">Kyrgyzstan</option>
<option values="Laos">Laos</option>
<option values="Latvia">Latvia</option>
<option values="Lebanon">Lebanon</option>
<option values="Lesotho">Lesotho</option>
<option values="Liberia">Liberia</option>
<option values="Libya">Libya</option>
<option values="Liechtenstein">Liechtenstein</option>
<option values="Lithuania">Lithuania</option>
<option values="Luxembourg">Luxembourg</option>
<option values="Macau">Macau</option>
<option values="Macedonia">Macedonia</option>
<option values="Madagascar">Madagascar</option>
<option values="Malawi">Malawi</option>
<option values="Malaysia">Malaysia</option>
<option values="Maldives">Maldives</option>
<option values="Mali">Mali</option>
<option values="Malta">Malta</option>
<option values="Marshall Islands">Marshall Islands</option>
<option values="Martinique">Martinique</option>
<option values="Mauritania">Mauritania</option>
<option values="Mauritius">Mauritius</option>
<option values="Mayotte Island">Mayotte Island</option>
<option values="Mexico">Mexico</option>
<option values="Moldova">Moldova</option>
<option values="Monaco">Monaco</option>
<option values="Mongolia">Mongolia</option>
<option values="Montserrat">Montserrat</option>
<option values="Morocco">Morocco</option>
<option values="Mozambique">Mozambique</option>
<option values="Myanmar">Myanmar</option>
<option values="Namibia">Namibia</option>
<option values="Nauru">Nauru</option>
<option values="Nepal">Nepal</option>
<option values="Netherlands">Netherlands</option>
<option values="Netherlands Antilles">Netherlands Antilles</option>
<option values="New Caledonia">New Caledonia</option>
<option values="New Zealand">New Zealand</option>
<option values="Nicaragua">Nicaragua</option>
<option values="Niger">Niger</option>
<option values="Nigeria">Nigeria</option>
<option values="Niue Island">Niue Island</option>
<option values="Norfolk Island">Norfolk Island</option>
<option values="North Korea">North Korea</option>
<option values="Northern Ireland">Northern Ireland</option>
<option values="Northern Mariana Islands">Northern Mariana Islands</option>
<option values="Norway">Norway</option>
<option values="Oman">Oman</option>
<option values="Pakistan">Pakistan</option>
<option values="Palau">Palau</option>
<option values="Panama">Panama</option>
<option values="Papua New Guinea">Papua New Guinea</option>
<option values="Paraguay">Paraguay</option>
<option values="Peru">Peru</option>
<option values="Philippines">Philippines</option>
<option values="Pitcairn Islands">Pitcairn Islands</option>
<option values="Poland">Poland</option>
<option values="Portugal">Portugal</option>
<option values="Puerto Rico">Puerto Rico</option>
<option values="Qatar">Qatar</option>
<option values="R&eacute;union">R&eacute;union</option>
<option values="Romania">Romania</option>
<option values="Russia">Russia</option>
<option values="Rwanda">Rwanda</option>
<option values="San Marino">San Marino</option>
<option values="Saudi Arabia">Saudi Arabia</option>
<option values="Scotland">Scotland</option>
<option values="Senegal">Senegal</option>
<option values="Seychelles">Seychelles</option>
<option values="Sierra Leone">Sierra Leone</option>
<option values="Singapore">Singapore</option>
<option values="Slovakia">Slovakia</option>
<option values="Slovenia">Slovenia</option>
<option values="Solomon Islands">Solomon Islands</option>
<option values="Somalia">Somalia</option>
<option values="South Africa">South Africa</option>
<option values="South Korea">South Korea</option>
<option values="Spain">Spain</option>
<option values="Sri Lanka">Sri Lanka</option>
<option values="St Helena">St Helena</option>
<option values="St Lucia">St Lucia</option>
<option values="Sudan">Sudan</option>
<option values="Surinam">Surinam</option>
<option values="Svalbard Islands">Svalbard Islands</option>
<option values="Swaziland">Swaziland</option>
<option values="Sweden">Sweden</option>
<option values="Switzerland">Switzerland</option>
<option values="Syria">Syria</option>
<option values="Taiwan">Taiwan</option>
<option values="Tajikistan">Tajikistan</option>
<option values="Tanzania">Tanzania</option>
<option values="Thailand">Thailand</option>
<option values="Togo">Togo</option>
<option values="Tokelau">Tokelau</option>
<option values="Tonga">Tonga</option>
<option values="Trinidad and Tobago">Trinidad and Tobago</option>
<option values="Tunisia">Tunisia</option>
<option values="Turkey">Turkey</option>
<option values="Turkmenistan">Turkmenistan</option>
<option values="Turks">Turks</option>
<option values="Tuvalu">Tuvalu</option>
<option values="Uganda">Uganda</option>
<option values="Ukraine">Ukraine</option>
<option values="United Arab Emirates">United Arab Emirates</option>
<option values="Uruguay">Uruguay</option>
<option values="USA">USA</option>
<option values="Uzbekistan">Uzbekistan</option>
<option values="Vanuatu">Vanuatu</option>
<option values="Vatican">Vatican</option>
<option values="Venezuela">Venezuela</option>
<option values="Vietnam">Vietnam</option>
<option values="Virgin Islands ">Virgin Islands </option>
<option values="Wales">Wales</option>
<option values="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
<option values="Western Sahara">Western Sahara</option>
<option values="Western Samoa">Western Samoa</option>
<option values="Yemen">Yemen</option>
<option values="Yugoslavia">Yugoslavia</option>
<option values="Zambia">Zambia</option>
<option values="Zimbabwe">Zimbabwe</option>

                    </select>
                      </label></td>
                    </tr>

      
                    <tr>
                      <td class="text_tablas">Teléfono </td>
                      <td  style="text-align:left"><input name="telefono" type="text" value="<?=$venta->gettelefono() ?>" class="campo_regis" /></td>
                    </tr>
                    <tr>
                      <td class="text_tablas">E-mail</td>
                      <td style="text-align:left"><input name="mail" type="text" value="<?=$venta->getmail() ?>" class="campo_regis" /></td>
                    </tr>
                    <tr>
                      <td class="text_tablas">&nbsp;</td>
                      <td  class="text_tablas" style="text-align:left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td  style="text-align:left">&nbsp;</td>
                    </tr>

                    <tr>
                      <td class="text_tablas">Nueva contraseña:</td>
                      <td  style="text-align:left"><label>
                        <input name="pass" type="password" class="campo_regis" />
                      </label></td>
                    </tr>
                    <tr>
                      <td class="text_tablas">Confirma tu contraseña: </td>
                      <td  style="text-align:left"><label>
                        <input name="passs" type="password" class="campo_regis" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td nowrap="nowrap">&nbsp;</td>
                    </tr>
                    <!--<tr>
                      <td colspan="2" class="text_tablas">Digite los caracteres en el siguiente campo: </td>
                    </tr>
                    <tr>
                      <td class="text_tablas" style="text-align:center"><img src="http://samples.unijimpe.net/jpgraph/captcha.php" width="100" height="30" /></td>
                      <td class="text_tablas2" style="text-align:left"><input name="tmptxt" type="text" id="tmptxt" /></td>
                    </tr>
                  </table>
                  <table width="605" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="text_tablas">Subir Foto para imagen de Perfil </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" height="55" bgcolor="#CBEBFA"></td>
                      <td bgcolor="#CBEBFA"><table width="547" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td style="text-align:left">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="455" style="text-align:left"><input name="palabra_clave" type="text" class="buscadormuro"  value="" /></td>
                            <td width="6">&nbsp;</td>
                            <td width="83"><div id="btexaminar"><a href="#nogo">&nbsp;</a></div></td>
                          </tr>
                          <tr>
                            <td style="text-align:left">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="textpost" style="text-align:center">Max. 2mb </td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td bgcolor="#CBEBFA"></td>
                      <td bgcolor="#CBEBFA">&nbsp;</td>
                    </tr>-->
                  </table>
                  <table width="605" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="200" >&nbsp;</td>
                      <td  style="text-align:center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td  style="text-align:center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td  style="text-align:center"><table width="144" border="0" align="right" cellpadding="0" cellspacing="0">
                          <tr>
                              <td><div id="btguardarperfil"><a href="#" onclick="validarHoja ()">&nbsp;</a></div></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
				  
				  
				  
				  
				  
				  </form>
				  
				  
				  
				  
				  
                    <script type="text/javascript">
                        document.hoja.pais.value = "<?=$venta->getpais() ?>";
                    </script>
				  
				  
				  
				  
                </div>
              </div>
            </div>
            <br/>
            <br />
            <br />
          </div><div id="footcajonprogram"></div>
          <br/>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!---------------------------------------FIN CONTENIDOS---------------------------------------->
<!---------------------------------------FOOTER PP--------------------------------------------->
<div id="piedepagina">
  
  <div id="envcont_foot">
  
  
  <?php include "foot_pperfecto.php"; ?>
  
  
  
  
  </div>
  <div id="envcreditos">
  <div class="footer_autor"><span id="ahorranito"></span><a href="http://www.imaginamos.com">Diseño Web: </a><a href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a></div>
    <div id="logfootpperfecto">
     Copyright © 2013&nbsp; PenePerfecto.com  -Todos los derechos reservados.
    </div>
  </div>
</div>
</body>
</html>
