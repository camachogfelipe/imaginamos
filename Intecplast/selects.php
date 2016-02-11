<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>Intecplast</title>


 <link rel="STYLESHEET" type="text/css" href="codebase/dhtmlxcalendar.css">
<script>
      window.dhx_globalImgPath="codebase/imgs/";
</script>
<script  src="codebase/dhtmlxcommon.js"></script>
<script  src="codebase/dhtmlxcalendar.js"></script>
	<script>
	var cal1, cal2, mCal, mDCal, newStyleSheet;

	var dateFrom = null;
	var dateTo = null;
	
	window.onload = function () {
		cal1 = new dhtmlxCalendarObject('calendar1');
		cal1.setOnClickHandler(selectDate1);
		cal2 = new dhtmlxCalendarObject('calendar2');
		cal2.setOnClickHandler(selectDate2);
		
		mCal = new dhtmlxCalendarObject('dhtmlxCalendar', false, {isYearEditable: true});
		mCal.setYearsRange(2000, 2500);
		mCal.draw();
	}
	
	function setFrom() {
		mCal.setSensitive(dateFrom, dateTo);
		return true;
	}

	function selectDate1(date) {
		document.getElementById('calInput1').value = cal1.getFormatedDate(null,date);
		document.getElementById('calendar1').style.display = 'none';
		dateFrom = new Date(date);
		mCal.setSensitive(dateFrom, dateTo);
		return true;
	}
	function selectDate2(date) {
		document.getElementById('calInput2').value = cal2.getFormatedDate(null,date);
		document.getElementById('calendar2').style.display = 'none';
		dateTo = new Date(date);
		mCal.setSensitive(dateFrom, dateTo);
		return true;
	}
	
	

	function showCalendar(k) {
		document.getElementById('calendar'+k).style.display = 'block';
	}
	
	

	</script>
	<link rel="stylesheet" type="text/css" href="css/static.layout.css" media="screen" />

		


	


<style type="text/css">
</style>

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />


<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />












</head>

<body class="body">








<table width="613" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td >&nbsp;</td>
            </tr>
            <tr>
              <td class="bgcontenidos"><form id="form1" name="form1" method="post" action="">
				
				
				
				<table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Nombre:</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Apellidos:</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="text" class="transparenteform" name="textfield" />
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td valign="top">
                          <label>
                          <input type="text" class="transparenteform" name="textfield" />
                        </label>        </td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Genero:</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Mail:</td>
                  </tr>
                  <tr>
                    <td valign="top" class="textforitem"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>
                      <label>
                      Femenino&nbsp;
                      <input name="radiobutton" type="radio" value="radiobutton" />
                       &nbsp;&nbsp;&nbsp;
                       Masculino   &nbsp;<input name="radiobutton" type="radio" value="radiobutton" />
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="text" class="transparenteform" name="textfield" />
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Pa&iacute;s:</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Ciudad:</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>          <label>
                        <select name="" class="selectsintec">
						
						
						
						 <option>Seleccione país</option>
              
               <option>Albania</option>
    <option>Algeria</option>
    <option>Andorra</option>
    <option>Angola</option>
    <option>Anguilla</option>
    <option>Antarctica</option>
    <option>Antigua and Barbuda</option>
    <option>Argentina</option>
    <option>Armenia</option>
    <option>Aruba</option>
    <option>Australia</option>
    <option>Austria</option>
    <option>Azerbaijan</option>
    <option>Bahamas</option>
    <option>Bahrain</option>
    <option>Bangladesh</option>
    <option>Barbados</option>
    <option>Belarus</option>
    <option>Belgium</option>
    <option>Belize</option>
    <option>Benin</option>
    <option>Bermuda</option>
    <option>Bhutan</option>
    <option>Bolivia</option>
    <option>Bosnia Herzegovina</option>
    <option>Botswana</option>
    <option>Bouvet Island</option>
    <option>Brazil</option>
    <option>Brunei</option>
    <option>Bulgaria</option>
    <option>Burkina Faso</option>
    <option>Burundi</option>
    <option>Cambodia</option>
    <option>Cameroon</option>
    <option>Canada</option>
    <option>Cape Verde Islands</option>
    <option>Cayman Islands</option>
    <option>Central African Republic</option>
    <option>Chad</option>
    <option>Channel Islands</option>
    <option>Chile</option>
    <option>China</option>
    <option>Colombia</option>
    <option>Comoros</option>
  
    <option>Congo (Republic of the)</option>
    <option>Cook Islands</option>
    <option>Costa Rica</option>
    <option>Croatia</option>
    <option>Cuba</option>
    <option>Cyprus</option>
    <option>Czech Republic</option>
    <option>Denmark</option>
    <option>Djibouti</option>
    <option>Dominica</option>
    <option>Dominican Republic</option>
    <option>East Timor</option>
    <option>Ecuador</option>
    <option>Egypt</option>
    <option>El Salvador</option>
    <option>England</option>
    <option>Equatorial Guinea</option>
    <option>Eritrea</option>
    <option>Estonia</option>
    <option>Ethiopia</option>
    <option>F&aelig;roe Islands</option>
    <option>Falkland Islands</option>

    <option>Fiji</option>
    <option>Finland</option>
    <option>France</option>
    <option>French Guiana</option>
    <option>French Polynesia</option>
    <option>Gabon</option>
    <option>Gambia</option>
    <option>Georgia</option>
    <option>Germany</option>
    <option>Ghana</option>
    <option>Gibraltar</option>
    <option>Greece</option>
    <option>Greenland</option>
    <option>Grenada</option>
    <option>Guadeloupe</option>
    <option>Guam</option>
    <option>Guatemala</option>
    <option>Guinea</option>
    <option>Guinea-Bissau</option>
    <option>Guyana</option>
    <option>Haiti</option>

    <option>Honduras</option>
    <option>Hong Kong</option>
    <option>Hungary</option>
    <option>Iceland</option>
    <option>India</option>
    <option>Indonesia</option>
    <option>Iran</option>
    <option>Iraq</option>
    <option>Ireland</option>
    <option>Israel</option>
    <option>Italy</option>
    <option>Ivory Coast</option>
    <option>Jamaica</option>
    <option>Japan</option>
    <option>Jordan</option>
    <option>Kazakhstan</option>
    <option>Kenya</option>
    <option>Kiribati</option>
    <option>Kuwait</option>
    <option>Kyrgyzstan</option>
    <option>Laos</option>
    <option>Latvia</option>
    <option>Lebanon</option>
    <option>Lesotho</option>
    <option>Liberia</option>
    <option>Libya</option>
    <option>Liechtenstein</option>
    <option>Lithuania</option>
    <option>Luxembourg</option>
    <option>Macau</option>
    <option>Macedonia</option>
    <option>Madagascar</option>
    <option>Malawi</option>
    <option>Malaysia</option>
    <option>Maldives</option>
    <option>Mali</option>
    <option>Malta</option>
    <option>Marshall Islands</option>
    <option>Martinique</option>
    <option>Mauritania</option>
    <option>Mauritius</option>
    <option>Mayotte Island</option>
    <option>Mexico</option>
    <option>Moldova</option>
    <option>Monaco</option>
    <option>Mongolia</option>
    <option>Montserrat</option>
    <option>Morocco</option>
    <option>Mozambique</option>
    <option>Myanmar</option>
    <option>Namibia</option>
    <option>Nauru</option>
    <option>Nepal</option>
    <option>Netherlands</option>
    <option>Netherlands Antilles</option>
    <option>New Caledonia</option>
    <option>New Zealand</option>
    <option>Nicaragua</option>
    <option>Niger</option>
    <option>Nigeria</option>
    <option>Niue Island</option>
    <option>Norfolk Island</option>
    <option>North Korea</option>
    <option>Northern Ireland</option>
    <option>Northern Mariana Islands</option>
    <option>Norway</option>
    <option>Oman</option>
    <option>Pakistan</option>
    <option>Palau</option>
    <option>Panama</option>
    <option>Papua New Guinea</option>
    <option>Paraguay</option>
    <option>Peru</option>
    <option>Philippines</option>
    <option>Pitcairn Islands</option>
    <option>Poland</option>
    <option>Portugal</option>
    <option>Puerto Rico</option>
    <option>Qatar</option>
    <option>R&eacute;union</option>
    <option>Romania</option>
    <option>Russia</option>
    <option>Rwanda</option>
 
    <option>San Marino</option>
 
    <option>Saudi Arabia</option>
    <option>Scotland</option>
    <option>Senegal</option>
    <option>Seychelles</option>
    <option>Sierra Leone</option>
    <option>Singapore</option>
    <option>Slovakia</option>
    <option>Slovenia</option>
    <option>Solomon Islands</option>
    <option>Somalia</option>
    <option>South Africa</option>
    <option>South Korea</option>
    <option>Spain</option>
    <option>Sri Lanka</option>
  
    <option>St Helena</option>
    <option>St Lucia</option>

    <option>Sudan</option>
    <option>Surinam</option>
    <option>Svalbard Islands</option>
    <option>Swaziland</option>
    <option>Sweden</option>
    <option>Switzerland</option>
    <option>Syria</option>
    <option>Taiwan</option>
    <option>Tajikistan</option>
    <option>Tanzania</option>
    <option>Thailand</option>
    <option>Togo</option>
    <option>Tokelau</option>
    <option>Tonga</option>
    <option>Trinidad and Tobago</option>
    <option>Tunisia</option>
    <option>Turkey</option>
    <option>Turkmenistan</option>
    <option>Turks</option>
    <option>Tuvalu</option>
    <option>Uganda</option>
    <option>Ukraine</option>
    <option>United Arab Emirates</option>
    <option>Uruguay</option>
    <option>USA</option>
    <option>Uzbekistan</option>
    <option>Vanuatu</option>
    <option>Vatican</option>
    <option>Venezuela</option>
    <option>Vietnam</option>
    <option>Virgin Islands </option>
    <option>Wales</option>
    <option>Wallis and Futuna Islands</option>
    <option>Western Sahara</option>
    <option>Western Samoa</option>
    <option>Yemen</option>
    <option>Yugoslavia</option>
    <option>Zambia</option>
    <option>Zimbabwe</option>
						
						
						
						
						
						
						
						
						
						</select>
                        </label>       </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <select name="" class="selectsintec">
						
						
						
						 <option>Seleccione ciudad</option>
              
               <option>Ciudad 1</option>
    <option>Ciudad 2</option>
    <option>Ciudad 3</option>
    <option>Ciudad 4</option>
    <option>Ciudad 5</option>
	
							
						</select>
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Fecha de nacimiento: </td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Profesi&oacute;n:</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><div style="position:relative; border:0px solid navy; width: 265px"><input
						  
						  
						  
					 onfocus="if (this.value=='Select...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Select...';return false;}" value="Select..."	  
						  
						  
						  
						  
						  
			 type="text" id="calInput1" style="border-width:0px; width: 245px; font-size:12px;"	 readonly="true"><img style="cursor:pointer;" onClick="showCalendar(1)" src="codebase/imgs/calendar.gif" align="absmiddle"><div id="calendar1" style="position:absolute; left:199px; top:0px; display:none"></div></div>      </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <select name="" class="selectsintec">
						
						
						
						 <option>Seleccione profesión</option>
              
               <option>Profesión 1</option>
    <option>Profesión 2</option>
    <option>Profesión 3</option>
    <option>Profesión 4</option>
    <option>Profesión 5</option>
	
							
						</select>
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Puesto solicitante:</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Expectativa salarial:</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <select name="" class="selectsintec">
						
						
						
						 <option>Seleccione puesto</option>
              
               <option>Puesto 1</option>
    <option>Puesto 2</option>
    <option>Puesto 3</option>
    <option>Puesto 4</option>
    <option>Puesto 5</option>
	
							
						</select>
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
<select name="" class="selectsintec">				
<option>Seleccione valor</option>
<option>Valor 1</option>
<option>Valor 2</option>
<option>Valor 3</option>
<option>Valor 4</option>
<option>Valor 5</option>
</select>
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Formaci&oacute;n Acad&eacute;mica :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Formaci&oacute;n complementaria: </td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <select name="" class="selectsintec">				
<option>Seleccione </option>
<option>Texto 1</option>
<option>Texto 2</option>
<option>Texto 3</option>
<option>Texto 4</option>
<option>Texto 5</option>
</select>
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <select name="" class="selectsintec">				
<option>Seleccione </option>
<option>Texto 1</option>
<option>Texto 2</option>
<option>Texto 3</option>
<option>Texto 4</option>
<option>Texto 5</option>
</select>
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="585" class="textforitem">Experiencia Laboral:</td>
                  </tr>
                  <tr>
                    <td class="bgtextarea"><table width="585" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5">&nbsp;</td>
    <td><textarea name="textarea" class="transparentearea"></textarea></td>
  </tr>
</table>
<label></label></td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">G&eacute;nero:</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Tel&eacute;fono (Fijo y celular con indicativo): </td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="text" class="transparenteform" name="textfield" />
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="text" class="transparenteform" name="textfield" />
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Adjuntar Hoja de Vida: </td>
                    <td width="10">&nbsp;</td>
                    <td width="295" class="textforitem">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="text" class="transparenteform" name="textfield" />
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" ><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="submit" name="Submit" value="Examinar" class="examinar" />
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td valign="top"><input name="button" type="submit" id="button" class="send"   border="0" onclick="if (valcontacto(document.form1)) document.form1.submit();" value="Enviar" /></td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" class="textforitem">Los campos con (*) son obligatorios </td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top" class="textforitem">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top" class="textforitem">Tambi&eacute;n pueden contactarnos al e-mail: hojasdevida@intecplast.com</td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top" class="textforitem">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top" class="textforitem">&nbsp;</td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><ul id="vertical"></td>
              </tr>
            </table>
                </form>              </td>
            </tr>
            <tr>
              <td class="bgcontenidos">&nbsp;</td>
            </tr>
</table>

















<!-------------------------------FIN BANNER----------------------------------->
<!-------------------------------CONTENIDO----------------------------------->
<!-------------------------------FIN CONTENIDO----------------------------------->
<!-------------------------------FOOTER----------------------------------->
<!-------------------------------FIN FOOTER----------------------------------->
</body>
</html>
