<?php
    include_once './../php/clases.php';

    $tipoidDAO = new tipoidDAO();
    $tipoid = new tipoid();
    $tipoids = $tipoidDAO->gets();
    $totalTipoid = $tipoidDAO->total();

    $paisDAO = new paisDAO();
    $pais = new pais();
    $paises = $paisDAO->gets();
    $totalPaises = $paisDAO->total();


    $cliente_id = $_GET['id'];

    $clienteDAO = new clienteDAO();
    $cliente = new cliente();
    $cliente = $clienteDAO->getByClienteId($cliente_id);



?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta name="Keywords" lang="es" content="palabras clave" />
  <meta name="Description" lang="es" content="texto empresarial" />
  <meta name="date" content="2011" />
  <meta name="author" content="diseño web: imaginamos.com" />
  <meta name="robots" content="All" />
  <title>Intecplast</title>
  <link rel="stylesheet" type="text/css" href="css/static.layout.css" media="screen" />
  <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
  <link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />

<script> 


      $(document).ready(function(){
       
          function validar_email2(valor)
          {
              // creamos nuestra regla con expresiones regulares.
              var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
              // utilizamos test para comprobar si el parametro valor cumple la regla
              if(filter.test(valor))
                  return true;
              else
                  return false;
          }
          // cuando presionamos el boton verificar
          $("#submitformContact").click(function()
          {

          if ($("#pass1").val() != "") {

              if($("#email").val() == '')
              {
                  alert("Type an email");
              }else if(validar_email2($("#email").val()))
              {
                if ($("#nombre").val()=='') {
                  alert("You must type your Name");
                }
                else if ($("#apellido").val()=='') {alert("You must type your Lastname");}
                else if ($("#identificacion").val()=='') {alert("You must type your Identification");}
                else if ($("#tipoid").val()=='seleccione') {alert("You must select a type of identification");}
                else if ($("#empresa").val()=='') {alert("You must enter a company");}
                else if ($("#cargo").val()=='') {alert("You must enter a charge");}
                else if ($("#telfijo").val()=='') {alert("You must type your Phone");}
                else if ($("#telcel").val()=='') {alert("You must enter your cell phone");}
                else if ($("#direccion").val()=='') {alert("You must enter your address");}
                else if ($("#pais").val()=='0') {alert("You must select a country");}
                else if ($("#ciudad").val()=='') {alert("You must enter a city");}

                else if ($("#pass1").val()=="" || $("#pass2").val()=="") {
                  alert("You must type a password");

                }
                else if ($("#pass1").val() != $("#pass2").val()) {
                  alert("The password fields don't match");
                }

                else{
                  $("#form7").submit();
                }
              }else
              {
                  alert("The e-mail are invalid");
              }

            }
            else{

              if($("#email").val() == '')
              {
                  alert("Type an email");
              }else if(validar_email2($("#email").val()))
              {
                if ($("#nombre").val()=='') {alert("You must type your Name");}
                else if ($("#apellido").val()=='') {alert("You must type your Lastname");}
                else if ($("#identificacion").val()=='') {alert("You must type your Identification");}
                else if ($("#tipoid").val()=='seleccione') {alert("You must select a type of identification");}
                else if ($("#empresa").val()=='') {alert("You must enter a company");}
                else if ($("#cargo").val()=='') {alert("You must enter a charge");}
                else if ($("#telfijo").val()=='') {alert("You must type your Phone");}
                else if ($("#telcel").val()=='') {alert("You must enter your cell phone");}
                else if ($("#direccion").val()=='') {alert("You must enter your address");}
                else if ($("#pais").val()=='0') {alert("You must select a country");}
                else if ($("#ciudad").val()=='') {alert("You must enter a city");}

                else{
                  $("#form7").submit();
                }
              }else
              {
                  alert("The e-mail are invalid");
              }


            }

          });
       
      });






      function validar(){ 
        var clave1 = document.getElementById("pass1").value;
        var clave2 = document.getElementById("pass2").value;


        if (clave1 != clave2){ 
             alert("Las contraseñas no coinciden...\npara poder continuar las contraseñas deberán ser iguales"); 
             return false;
           }

        else {
           return true;} 
  }

</script> 

<script type="text/javascript">
    function format(input){
     var num = input.value.replace(/\./g,"");
     if(!isNaN(num)){
     num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g,"$1");
     num = num.split("").reverse().join("").replace(/^[\.]/,"");
     input.value = num;
     }else{
     input.value = input.value.replace(/[^\d\.]*/g,"");
     }
     }
  </script>

            

</head>

<body class="body">


<table width="613" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
             
            </tr>
            <tr>
              <td class="bgcontenidos">
              <form id="form7" name="form7" method="POST" action="./php/action/procesarDatosCliente.php?action=new">
				
							
				      <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Name* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Lastname* :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <input type="text" class="transparenteform" name="nombre" id="nombre" required="required" value="<?php echo $cliente->getNombre() ?>"/>
                        </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td valign="top">
                          <label>
                          <input type="text" class="transparenteform" name="apellido" id="apellido" value="<?php echo $cliente->getApellido() ?>" />
                        </label>        </td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Identification* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Type of identification* :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>
                     <label>
                     <input type="text" class="transparenteform" name="identificacion" id="identificacion" value="<?php echo $cliente->getClienteId() ?>"  readonly="readonly"/>
                     </label></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td><label>
                          <select name="tipoid" id="tipoid" class="selectsintec">
                        	<option value="seleccione">Select</option>        
                            <?php if ($totalTipoid>0): ?>
                                <?php foreach ($tipoids as $tipoid): ?>
                                    <option <?php echo $tipoid->getid() == $cliente->getTipoid() ?  "selected" : "" ?> value="<?php echo $tipoid->getid() ?>"><?php echo $tipoid->getnombre() ?></option>
                                <?php endforeach ?>
                            <?php endif ?>
						</select>
                        </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Company* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Job Title* :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>          <label>
                         <label>
                     <input type="text" class="transparenteform" name="empresa" id="empresa" value="<?php echo $cliente->getEmpresa() ?>"/>
                     </label>  </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td> <label>
                     <input type="text" class="transparenteform" name="cargo" id="cargo" value="<?php echo $cliente->getCargo() ?>"/>
                     </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Phone* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Cellphone* :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>          <label>
                         <label>
                     <input type="text" class="transparenteform" name="telfijo" id="telfijo" value="<?php echo $cliente->getTelFijo() ?>" onkeyup="format(this)" onchange="format(this)"/>
                     </label>  </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td> <label>
                     <input type="text" class="transparenteform" name="telcel" id="telcel" value="<?php echo $cliente->getTelCel() ?>" onkeyup="format(this)" onchange="format(this)"/>
                     </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Address* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">E-mail * :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>          <label>
                         <label>
                     <input type="text" class="transparenteform" name="direccion" id="direccion" value="<?php echo $cliente->getDireccion() ?>"/>
                     </label>  </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td> <label>
                     <input type="email" class="transparenteform" name="email" id="email" value="<?php echo $cliente->getEmail() ?>" required="required"/>
                     </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table><table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Country* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">City* :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>
                            <label>
                                <select name="pais" id="pais" class="selectsintec" >	
						
                                    <option value="0">Select Country</option>
                                    <?php if ($totalPaises>0): ?>
                                        <?php foreach ($paises as $pais): ?>
                                            <option <?php echo $pais->getnombre_e() == $cliente->getPais() ?  "selected" : "" ?> value="<?php echo $pais->getnombre_e(); ?>"><?php echo $pais->getnombre_i(); ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>

                                </select>
                            </label>
                        </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>
                            <label>
                              <input type="text" class="transparenteform" name="ciudad" id="ciudad" value="<?php echo $cliente->getCiudadId() ?>" required="required"/>
                            </label>

                        </td>


                      </tr>
                    </table></td>
                  </tr>
                </table>
                
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="textforitem">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="textforitem">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="280" class="textforitem">Password :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Type again password :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>          <label>
                         <label>




                     <input type="password" class="transparenteform" name="pass1" id="pass1" value="<?php echo $cliente->getClave() ?>"/>
                     </label>  </td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td> <label>
                     <input type="password" class="transparenteform" name="pass2" id="pass2" value="<?php echo $cliente->getClave() ?>"/>
                     </label></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  
                  <tr>
                    <td valign="top" >&nbsp;</td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <div id="btenviarformprom">
                        <a href="#" id="submitformContact">
                          &nbsp;
                        </a>
                      </div>
                    </td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" class="textforitem">The fields (*) are required </td>
                    <td>&nbsp;</td>
                    <td valign="top" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top" class="textforitem">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top" class="textforitem">&nbsp;</td>
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


</body>
</html>
