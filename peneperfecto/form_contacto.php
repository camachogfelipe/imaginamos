
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>CSS3 Contact Form</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/stylos_formcontacto.css" rel="stylesheet" type="text/css">



<style type="text/css">




input#entrar 
{
	height:56px;
	width:189px;
	background-image: url(images/entrar.png);
	background-repeat: no-repeat;
} 
input#entrar:hover 
{ 
background: url(images/entrar2.png); 

} 






</style>







<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#formulario').validationEngine();
		});
</script>




</head>

<body>

<div id="contact">

	 <form name='formulario' id='formulario' method='post' action='enviar.php' target='_parent' enctype="multipart/form-data">
            <input type="hidden" name="to" value="artu200@hotmail.com"/>
                    <input type="hidden" name="retorno" value="contactenos.php" />
                    <input type="hidden" name="nomasunto" value="Formulario contacto, peneperfecto.com" />
		<fieldset>
			<label>Nombre</label>
			&nbsp;&nbsp;<input name="Nombre" type="text" id="name" placeholder="Escriba su nombre y apellido" class="validate[required]" data-validation-placeholder="Nombre" />
      
			<label>E-mail</label>
			&nbsp;&nbsp;<input name="E-mail" type="text" id="email2" placeholder="Ingrese su E-mail" class="validate[required, custom[email]]"/>
      <label>Verificar E-mail</label>
			&nbsp;&nbsp;<input name="E-mail" type="text" id="email3" placeholder="Verifique su E-mail" class="validate[required, custom[email]]"/>
			<label>País</label>
      
                        &nbsp;&nbsp;<select name="select" id="select" class="select" style="width: 300px; text-transform: none; height: 45px; padding: 0px 0px 0px 15px; margin: 0 0 20px 0; background: #0C4465;">
              <option value="">Seleccione país</option>
              
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
			<label>Comentario:</label>
			
                        &nbsp;&nbsp;<textarea id="message" name="Comentario" placeholder="Escriba su comentario" class="validate[required]" ></textarea>
			
			<input type="submit" value="Enviar" id="entrar" />
			
		</fieldset>
	</form>
</div>

    
    
</body>
</html>