<?
    include_once './php/clases.php';
    
    $pagoefectivoDAO = new pagoefectivoDAO();
    $pagoefectivo =$pagoefectivoDAO->getById(1);
    
    $formasdepagoDAO = new formasdepagoDAO();
    $formasdepagos = $formasdepagoDAO->gets();
    $total = $formasdepagoDAO->total();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENEPERFECTO.com / Ejercicios para agrandar tu pene</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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

#sb-wrapper {height:640px !important; width:450px !important;}
#sb-wrapper-inner {height:640px !important; width:450px !important;}
#envlogsoportepago {width:320px; height:457px; position:relative; margin:auto;}
#loginForm {width:284px !important;}
#loginBox {width:294px !important; top:0px !important; left:0px !important;}

</style>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style_login5.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $(".modal-form").colorbox({inline:true, width:295, height:457});
  });
</script>

</head>

<body>
<div id="wrapcontenidos">
  <!--------------------------------------------HEADER PP---------------------------->
  <div id="headlgomenu">
    <div id="envlogo"><a href="index.php"><img src="images/logopp.png" alt="PENEPERFECTO.com" width="484" height="129" border="0" /></a></div>
    <div id="envsearchmenu">
      <div id="envsearch">
        <form action="" method="get">
          <div id="campsearch">
            <input name="text" type="text"  id="Buscar..." onfocus="if (this.value=='Buscar...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Buscar...';return false;}" value="Buscar..." class="transparente" />
          </div>
        </form>
      </div>
      <div id="envmenudest">
        <?php include "menutop_2.php"; ?>
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
        <div id="envpagoefectivo ">
            <div id="tit_registro"><?=$pagoefectivo->gettitulo() ?> </div>
          <div id="env_cajonregistro">
            <div id="textos_registro">
			<div id="btadjuntarsoporte">
      	<a href="#con-modal" class="modal-form"></a>
      	<!--<a href="#nogo" rel="shadowbox;width=308;height=640;" onclick="openShadowbox4('loginsoporte_pago.php')"></a>-->
      </div>
        
      <br/><br/><br/>
			
			
			
                <p><?=$pagoefectivo->getTexto() ?></p>
              <p>&nbsp;</p>
              
              <? if($total>0): foreach ($formasdepagos as $formasdepago): ?>
              <div id="row_beneficios">
                  <div id="img_beneficios"><img src=".<?=$formasdepago->getimagen() ?>" width="250" height="150" /></div>
                <div id="txt_beneficios">
                    <p><?=$formasdepago->gettexto() ?></p>
                </div>
              </div>
              <div id="clear_sepinfo"></div>
              <? endforeach;              endif; ?>
              
              
              <!--
              <div id="row_beneficios">
                <div id="img_beneficios"><img src="images/logo_western.jpg" width="250" height="150" /></div>
                <div id="txt_beneficios">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sagittis nibh, a condimentum dolor volutpat vel.</p>
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus, malesuada sit amet dictum ac, mattis sed augue. Sed quis risus massa. Nulla ut blandit sapien.</p>
                </div>
              </div>
              <div id="clear_sepinfo"></div>
              <div id="row_beneficios">
                <div id="img_beneficios"><img src="images/logo_banco.jpg" width="250" height="150" /></div>
                <div id="txt_beneficios">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sagittis nibh, a condimentum dolor volutpat vel.</p>
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus, malesuada sit amet dictum ac, mattis sed augue. Sed quis risus massa. Nulla ut blandit sapien.</p>
                </div>
              </div>
              <div id="clear_sepinfo"></div>
              <div id="row_beneficios">
                <div id="img_beneficios"><img src="images/logo_moneygram.jpg" width="250" height="150" /></div>
                <div id="txt_beneficios">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sagittis nibh, a condimentum dolor volutpat vel.</p>
                  <p>Donec elit massa, rutrum ut venenatis a, fermentum quis diam. Suspendisse et ligula odio. Praesent pretium mollis aliquet. Aenean erat lacus, malesuada sit amet dictum ac, mattis sed augue. Sed quis risus massa. Nulla ut blandit sapien.</p>
                </div>
              </div>
              <div id="clear_sepinfo"></div>
              -->
              
              <br/>
              <br/>
              <div id="div">&nbsp;</div>
            </div>
            <br/>
          </div>
          <div id="footregistro"><img src="images/footregistro.png" width="1104" height="30" /></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------FIN CONTENIDOS---------------------------------------->
<!---------------------------------------FOOTER PP--------------------------------------------->
<div id="clear_division">&nbsp;</div>
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


	<div style="display:none">
		<div id="con-modal">
    	<div id="envlogsoportepago">
  			<div id="loginBox">                
          <form id="loginForm">
            <fieldset id="body">
              <fieldset style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#009900">
                <strong>Adjuntar Soporte de Pago</strong>
              </fieldset>
         			<fieldset>
       					<label for="nombre" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; font-weight:bold;">Nombre y apellido </label>
        				<input type="text" name="nombre" id="nombre" />
       				</fieldset>
							<fieldset>
                <label for="email" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold;">Correo Electrónico</label>
                <input type="text" name="email" id="email" />
 							</fieldset>
							<fieldset>
             		<label for="pais" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold;">País</label>
             		<label>
             			<select name="select" id="select" class="select" style="width: 170px; text-transform: none; height: 35px; ">
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
           			</label>
        			</fieldset>
							<fieldset>
                <label for="telefono" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold;">Teléfono</label>
                <input type="text" name="telefono" id="telefono" />
      				</fieldset>			
							<fieldset>
                <label for="adjuntar" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold;">Adjuntar documento</label>
                <input type="file" name="adjuntar" id="adjuntar" />
         			</fieldset>			
              <label for="checkbox"><a id="various3" href="chat.php"><img src="images/btenviarform.png" width="90" height="22" border="0"></a></label>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
	</div>


</body>
</html>
