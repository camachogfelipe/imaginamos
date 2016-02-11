<?php
    include_once './php/clases.php';

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
                  alert("Ingrese un email");
              }else if(validar_email2($("#email").val()))
              {
                if ($("#nombre").val()=='') {
                  alert("Debe ingresar su nombre");
                }
                else if ($("#apellido").val()=='') {alert("Debe ingresar su apellido");}
                else if ($("#identificacion").val()=='') {alert("Debe ingresar su identificación");}
                else if ($("#tipoid").val()=='seleccione') {alert("Debe seleccionar un tipo de identificación");}
                else if ($("#empresa").val()=='') {alert("Debe ingresar una empresa");}
                else if ($("#cargo").val()=='') {alert("Debe ingresar un cargo");}
                else if ($("#telfijo").val()=='') {alert("Debe ingresar su telefono fijo");}
                else if ($("#telcel").val()=='') {alert("Debe ingresar su telefono celular");}
                else if ($("#direccion").val()=='') {alert("Debe ingresar su dirección");}
                else if ($("#pais").val()=='0') {alert("Debe seleccionar un pais");}
                else if ($("#ciudad").val()=='') {alert("Debe ingresar una ciudad");}

                else if ($("#pass1").val()=="" || $("#pass2").val()=="") {
                  alert("Debe ingresar una contraseña");

                }
                else if ($("#pass1").val() != $("#pass2").val()) {
                  alert("Las contraseñas no coinciden...\npara poder continuar las contraseñas deberán ser iguales");
                }


                else{
                  $("#form7").submit();
                }
              }else
              {
                  alert("El email no es valido");
              }

            }
            else{
              if($("#email").val() == '')
              {
                  alert("Ingrese un email");
              }else if(validar_email2($("#email").val()))
              {
                if ($("#nombre").val()=='') {alert("Debe ingresar su nombre");}
                else if ($("#apellido").val()=='') {alert("Debe ingresar su apellido");}
                else if ($("#identificacion").val()=='') {alert("Debe ingresar su identificación");}
                else if ($("#tipoid").val()=='seleccione') {alert("Debe seleccionar un tipo de identificación");}
                else if ($("#empresa").val()=='') {alert("Debe ingresar una empresa");}
                else if ($("#cargo").val()=='') {alert("Debe ingresar un cargo");}
                else if ($("#telfijo").val()=='') {alert("Debe ingresar su telefono fijo");}
                else if ($("#telcel").val()=='') {alert("Debe ingresar su telefono celular");}
                else if ($("#direccion").val()=='') {alert("Debe ingresar su dirección");}
                else if ($("#pais").val()=='0') {alert("Debe seleccionar un pais");}
                else if ($("#ciudad").val()=='') {alert("Debe ingresar una ciudad");}
                
                else{
                  $("#form7").submit();
                }

              }
              else
              {
                  alert("El email no es valido");
              }
            };

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
              <form id="form7" name="form7" method="POST" action="./php/action/cotizacionRegistrado.php">
				
							
				      <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="280" class="textforitem">Nombre* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Apellidos* :</td>
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
                    <td width="280" class="textforitem">Identificación* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Tipo de identificación* :</td>
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
                        	<option value="seleccione">Seleccione</option>        
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
                    <td width="280" class="textforitem">Empresa* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Cargo* :</td>
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
                    <td width="280" class="textforitem">Teléfono fijo* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Teléfono celular* :</td>
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
                    <td width="280" class="textforitem">Dirección* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Correo electrónico* :</td>
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
                    <td width="280" class="textforitem">Pa&iacute;s* :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Ciudad* :</td>
                  </tr>
                  <tr>
                    <td valign="top" class="bgcampo2"><table width="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td>


                            <label>
                                <select name="pais" id="pais" class="selectsintec" >	
						
                                    <option value="0">Seleccione país</option>
                                    <?php if ($totalPaises>0): ?>
                                        <?php foreach ($paises as $pais): ?>
                                            <option <?php echo $pais->getnombre_e() == $cliente->getPais() ?  "selected" : "" ?> value="<?php echo $pais->getnombre_e(); ?>"><?php echo $pais->getnombre_e(); ?></option>
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
                    <td width="280" class="textforitem">Contraseña :</td>
                    <td width="25">&nbsp;</td>
                    <td width="280" class="textforitem">Repetir contraseña :</td>
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
                    <td valign="top" class="textforitem">Los campos con (*) son obligatorios </td>
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
