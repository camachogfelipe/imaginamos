<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Contact Form CSS3/jQuery Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style_registro.css" type="text/css" media="all" />
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
      
      
      
      
<script type="text/javascript">
    
    function validarHoja (){
    
        var alerta = 'Todos los campos en rojo son obligatorios';
        var control = true;
        
        if (document.hoja.nombre.value+"" == "" || document.hoja.nombre.value+"" == "Nombre"){
            document.hoja.nombre.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.apellido.value+"" == "" || document.hoja.apellido.value+"" == "Apellido"){
            document.hoja.apellido.style.background = '#FF0000';
            control = false;
        }
        if (document.hoja.mail.value+"" == "" || document.hoja.mail.value+"" == "email@email.com"){
            document.hoja.mail.style.background = '#FF0000';
            control = false;
        }
        
        
        if (!control)
            alert(alerta);
        else{
            if (!document.hoja.Terminos_y_Condiciones.checked){
                alert ('Se deben aceptar los términos y condiciones.');
                control = false;
            }
            else{
                if (document.hoja.pais.value+"" == "x"){
                    alert('Debe de seleccionar un pais');
                    control = false;
                }
                else {
                     if (document.hoja.fpago.value+"" == "x"){
                        alert('Debe de seleccionar una forma de pago');
                        control = false;
                    }
                }
            }
                
        }
        
        
        
        return control;
    }
    
</script>
      
      
      
      
      
      <form name='hoja' id='formulario' onsubmit="return validarHoja ()" method='post' action='./php/action/ventaAdd.php' target='_self' enctype="multipart/form-data"> 
      <p class="name">
          <input name="nombre" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" onBlur="javascript:if(this.value=='') this.value='Nombre';" onFocus="javascript:if(this.value=='Nombre') this.value='';" value="Nombre" />
        <label for="name"></label>
      </p>
	  
	  
      <p class="empresa">
        <input name="apellido" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="name" onBlur="javascript:if(this.value=='') this.value='Apellido';" onFocus="javascript:if(this.value=='Apellido') this.value='';" value="Apellido" />
        <label for="web"></label><label for="web"></label>
      </p>
	  <p class="pais">
	  	      
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
	  	          
      <p class="email">
        <input name="mail" type="text" class="validate[required,custom[email]] text-input" id="email" onBlur="javascript:if(this.value=='') this.value='Ingrese su E-mail';" onFocus="javascript:if(this.value=='Ingrese su E-mail') this.value='';" value="Ingrese su E-mail" />      </p>
        
        <p class="email">
        <input name="mail" type="text" class="validate[required,custom[email]] text-input" id="email2" onBlur="javascript:if(this.value=='') this.value='Verifique su E-mail';" onFocus="javascript:if(this.value=='Verifique su E-mail') this.value='';" value="Verifique su E-mail" />      </p>
        
      <p class="pago">
        <select name="fpago" >
            <option value="x">Selecciones su forma de pago</option>
            <option value="1">Tarjeta de Cr&eacute;dito</option>
            <option value="2">Efectivo</option>
        </select>
      </p>
   
      </p>
     <br/>
     
    <p>
      <input type="checkbox" name="Terminos_y_Condiciones" value="checkbox" class="check"  />
     
      Acepto los <span id="linkterminos"><a href="terminos_condiciones.php">términos y condiciones </a></span></p><br/>
      <p class="submit">
        <input type="submit" value="Continuar" />
      </p>
    </form>
<div id="logos_pagos"><img src="images/logo_pagos.png" width="354" height="73" /></div>
  </div>
</div>
</body>
</html>
