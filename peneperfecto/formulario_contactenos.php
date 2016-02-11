<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Contact Form CSS3/jQuery Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style_contact.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
    
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />


		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

		<script>
		$(document).ready(function() {
			
			
			
			// SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
			$("#form1").validationEngine({
				ajaxSubmit: true,
					ajaxSubmitFile: "ajaxSubmit.php",
					ajaxSubmitMessage: "Thank you, We will contact you soon !",
				success :  false,
				failure : function() {}
			})
			

		
		});
		</script>
</head>
<body>
<div id="wrapper">
  <div id="form-div">
    <form class="form" id="form1">
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="name" value="Nombre" />
        <label for="name"></label>
      </p>
	  
	  
      <p class="empresa">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="name" value="Apellido" />
        <label for="web"></label><label for="web"></label>
      </p>
	  <p class="pais">
	  	      
	  	            <select name="select2" >
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
	  	          
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] text-input" id="email" value="email@email.com" />      </p>
      <p class="pago">
        <select name="select" >
          <option>Selecciones su forma de pago</option>
          <option>Tarjeta de Crédito</option>
          <option>Efectivo</option>
        </select>
      </p>
   
      </p>
     <br/>
     
    <p>
      <input type="checkbox" name="checkbox" value="checkbox" class="check"  />
     
      Acepto los <span id="linkterminos"><a href="terminos_condiciones.php">términos y condiciones </a></span></p><br/>
      <p class="submit">
        <input type="submit" value="Continuar" />
      </p>
    </form>

  </div>
</div>
</body>
</html>