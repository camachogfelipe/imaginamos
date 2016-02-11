<?php
include ("lib/lib_class.php");
@session_start();
//Verifica que la session este activa.
if (!isset($_SESSION['id_siniestro'])){No_session();}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
 <link id="sitestyles" href="css/formato.css" type="text/css" rel="stylesheet">
  <title>encuesta</title>
<script type="text/javascript">
function confirmar(){
}
</script>
</head>
<body>
<table style="text-align: left; width: 100%; height: 100%;"
 border="0" cellpadding="20" cellspacing="20">
  <tbody>
    <tr>
      <td align="center" valign="middle">
      <table style="text-align: left; width: 100%;" border="0"
 cellpadding="0" cellspacing="0">
        <tbody>
          <tr align="center">
            <td class="titulo"><font face="Calibri, sans-serif"><font
 style="font-size: 11pt;" size="2"><font
 face="Arial Rounded MT Bold, sans-serif"><font
 style="font-size: 16pt;" size="4">ENCUESTA
DE SATISFACCI&Oacute;N DEL SERVICIO<br>
            </font></font></font></font></td>
          </tr>
              </tbody>
            </table>
<form style="margin: 0px; padding: 0px;" action=<?php echo '"regencuesta.php?'.SID.'"'; ?> method="post" name="contacto" onsubmit="return confirm('¿Está seguro?, los datos de la encuesta no se pueden editar.')">
      <table style="text-align: left; width: 100%;" border="0"
 cellpadding="0" cellspacing="0" class="aoa">
        <tbody>
          <tr align="justify">
            <td valign="middle"> <font
 face="Calibri, sans-serif"><font style="font-size: 11pt;"
 size="2">&iquest;Cu&aacute;l
es su grado de
satisfacci&oacute;n con el servicio prestado?</font></font></td>
          </tr>
          <tr>
            <td align="center" valign="middle">
            <table style="text-align: left; width: 100%;"
 border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Completamente satisfecho" name="p1"
 type="radio" checked="checked"><font face="Calibri, sans-serif"><font
 size="2">Completamente
satisfecho</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Satisfecho" name="p1"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Satisfecho</font></font> </td>
                </tr>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Insatisfecho" name="p1"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Insatisfecho</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Completamente insatisfecho" name="p1"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Completamente insatisfecho</font></font>
                  </td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
          <tr>
            <td><font face="Calibri, sans-serif"><font
 style="font-size: 11pt;" size="2">&iquest;La
orientaci&oacute;n de nuestro personal sobre el servicio prestado
fue?</font></font> </td>
          </tr>
          <tr>
            <td align="center" valign="middle">
            <table style="text-align: left; width: 100%;"
 border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Muy Buena" name="p2"
 type="radio" checked="checked"><font face="Calibri, sans-serif"><font
 size="2">Muy Buena</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Buena" name="p2"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Buena</font></font> </td>
                </tr>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Regular" name="p2"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Regular</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Mala" name="p2"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Mala</font></font> </td>
                </tr>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Muy mala" name="p2"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Muy mala</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"> </td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
          <tr>
            <td><font face="Calibri, sans-serif"><font
 style="font-size: 11pt;" size="2">&iquest;Utilizar&aacute;
usted el servicio de nuevo?</font></font> </td>
          </tr>
          <tr>
            <td align="center" valign="middle">
            <table style="text-align: left; width: 100%;"
 border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Seguro que si" name="p3"
 type="radio" checked="checked"><font face="Calibri, sans-serif"><font
 size="2">Seguro que s&iacute;</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Probablemente si" name="p3"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Probablemente s&iacute;</font></font>
                  </td>
                </tr>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Puede que si" name="p3"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Puede que s&iacute;, puede que no</font></font>
                  </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Probablemente no" name="p3"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Probablemente no</font></font> </td>
                </tr>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Seguro que no" name="p3"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">Seguro que no</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"> </td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
          <tr>
            <td><font face="Calibri, sans-serif"><font
 style="font-size: 11pt;" size="2">&iquest;Recomendar&iacute;a
usted el servicio con otras personas?</font></font> </td>
          </tr>
          <tr>
            <td align="center" valign="middle">
            <table style="text-align: left; width: 100%;"
 border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="Si" name="p4"
 type="radio" checked="checked"><font face="Calibri, sans-serif"><font
 size="2">S&iacute;</font></font> </td>
                  <td style="text-align: left; width: 50%;"
 valign="middle"><input value="No" name="p4"
 type="radio"><font face="Calibri, sans-serif"><font
 size="2">No</font></font> </td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
          <tr>
              <td><font face="Calibri, sans-serif"><font
 style="font-size: 11pt;" size="2">&iquest;Como
califica el servicio de 1 a 5?</font></font> </td>
            </tr>
            <tr>
              <td align="center" valign="middle">
<table style="text-align: left; width: 100%;" border="0"
 cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="text-align: left; width: 50%;"
 valign="middle">
      <font face="Calibri, sans-serif"><font size="2">5&nbsp;</font></font>
      <input value="5=Excelente" name="p5"
 checked="checked" type="radio"><font
 face="Calibri, sans-serif"><font size="2">&nbsp;Excelente</font></font>
      </td>
      <td style="text-align: left; width: 50%;"
 valign="middle">
      <font face="Calibri, sans-serif"><font size="2">4</font></font>
      <input value="4=Bueno" name="p5" type="radio"><font
 face="Calibri, sans-serif"><font size="2"> Bueno</font></font></td>
    </tr>
    <tr>
      <td style="text-align: left; width: 50%;"
 valign="middle"><font face="Calibri, sans-serif"><font
 size="2">3&nbsp;</font></font>
      <input value="3=Regular" name="p5" type="radio"><font
 face="Calibri, sans-serif"><font size="2">Regular</font></font></td>
      <td style="text-align: left; width: 50%;"
 valign="middle"><font face="Calibri, sans-serif"><font
 size="2">2&nbsp;</font></font>
      <input value="2=Malo" name="p5" type="radio"><font
 face="Calibri, sans-serif"><font size="2"> Malo</font></font></td>
    </tr>
    <tr>
      <td style="text-align: left; width: 50%;"
 valign="middle"><font face="Calibri, sans-serif"><font
 size="2">1&nbsp;</font></font>
      <input value="1=Pesimo" name="p5" type="radio"><font
 face="Calibri, sans-serif"><font size="2">P&eacute;simo</font></font></td>
      <td style="text-align: left; width: 50%;"
 valign="middle"> </td>
    </tr>
  </tbody>
</table>              
              </td>
            </tr>
          <tr>
            <td style="text-align: left;" valign="middle">
            <font face="Calibri, sans-serif"><font
 style="font-size: 11pt;" size="2">Comentarios</font></font></td>
          </tr>
          <tr>
            <td style="text-align: justify;"><textarea
 style="text-align: justify; width: 100%; padding: 0pt;" rows="4" name="p6"  wrap="PHYSICAL"></textarea></td>
          </tr>
        </tbody>
      </table>
      <table style="text-align: left; width: 100%;" border="0"
 cellpadding="0" cellspacing="0">
        <tbody>
          <tr>                    <td align="center"><input value="Enviar" name="submit" type="submit">
                    &nbsp;&nbsp; <input value="Borrar" name="submit2" type="reset"></td>
                  </tr>
                </tbody>
              </table>
            </form>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>