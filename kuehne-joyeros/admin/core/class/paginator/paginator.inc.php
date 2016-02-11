<?php
/*
**----------------------------No Borrar esta secci�n -------------------------
**	Paginator 
**	Paginaci�n de resultados de consultas a MySql con PHP
**
**	Versi�n 1.6.3
**
**	Nombre de archivo	:
**		paginator.inc.php
**
**	Autor	:
**		Jorge Pinedo Rosas (jpinedo)	<jorpinedo@yahoo.es>
**		Con la colaboraci�n de los usuarios del foro de PHP de www.forosdelweb.com
**		Especialmente de dooky que poste� el c�digo en el que se basa este script.	
**
**	Descripci�n :
**		Devuelve el resultado de una consulta sql por p�ginas, as� como los enlaces de navegaci�n respectivos.
**		Este script ha sido pensado con fines did�cticos, por eso la gran cantidad de comentarios.	
**
**	Licencia : 
**		GPL con las siguientes extensiones:
** 			*Uselo con el fin que quiera (personal o lucrativo).
**			*Si encuentra el c�digo de utilidad y lo usa, mandeme un mail si lo desea o deje un comentario en la p�gina 
**			 de documentaci�n.
**			*Si mejora el c�digo o encuentra errores, hagamelo saber al mail indicado o deje un comentario en la p�gina 
**			 de documentaci�n.
**
**	Documentaci�n y ejemplo de uso:
**		http://jpinedo.webcindario.com
**----------------------------------------------------------------------*/

/*----------------------------------------------------------------------
**	Historial:
**
**	Versi�n 1.0.0	(30/11/2003):	-Versi�n inicial.
**	Versi�n 1.1.0	(12/01/2004):	-Se agreg� la propagaci�n de las variables que llegan al script v�a url ($_GET)
**					 				 en los enlaces de navegaci�n por las p�ginas.
**									-Se optimiz� el conteo del total de registros utilizando el COUNT(*) de MySql.
**	Versi�n 1.3.0	(10/08/2004):	-Se agreg� la opci�n de limitar el n�mero enlaces que se mostrar�n en la barra 
**									 de navegaci�n. Gracias a la recomendaci�n de Jorge Camargo (andinistas)
**									-Se agreg� la opci�n de elegir si se quiere mostrar los mensajes de error de mysql.
**									-Se agreg� la generaci�n de informaci�n de la p�gina actual en una cadena que contiene
**									 el total de registros de la consulta y el primer y �ltimo registro de la p�gina actual.
** 	Versi�n 1.4.0	(12/08/2004):	-Se agreg� la opci�n de elegir qu� variables se quiere propagar por url. Se ha utilizado
**									 la misma forma de hacerlo que utiliza la Clase Paginado de webstudio.
**					 				 (http://www.forosdelweb.com/showthread.php?t=65528). Gracias a la acalmaci�n popular :)
** 	Versi�n 1.4.1 	(06/09/2004): 	-Corregido el bug en la propagaci�n de variables por GET al renombrar la variable
** 									 "pg" por "_pagi_pg". Esto s�lo ocurre en la versi�n 1.4. Gracias a jean pierre m. por
**									 reportar el bug.
**	Versi�n 1.5.0 	(03/11/2004): 	-Se agreg� la opci�n de elegir si se hace el conteo desde mySQL (COUNT(*)) o desde PHP (mysql_num_rows()).
**									 Esta es una de las modificaciones m�s importantes porque gracias a esto, ahora el script funciona para 
**									 cualquier tipo de consulta, corrigiendo una de sus principales limitaciones. Gracias a C�sar (CDs) por 
**									 sus ganas de colaborar y su paciencia.
**	Versi�n 1.5.1	(16/11/2004): 	-Se cambi� el nombre de las variables $desde y $hasta por $_pagi_desde y $_pagi_hasta para mantener 
**									 uniformidad y evitar conflictos.
**	Versi�n 1.5.2	(15/02/2005):	-Se cambi� preventivamente el uso del array $GLOBALS por el array $_REQUEST con la intenci�n de que
**									 funcione con la directiva register globals en Off. Gracias a Lorena Casas por su colaboraci�n en la detecci�n de
**									 este bug y en las pruebas.
**	Versi�n 1.6.0	(08/03/2005):	-Se reestructur� toda la parte de propagaci�n reincluyendo el array $GLOBALS para poder propagar variables
**									 generadas en el �mbito del script.
**									-Se incluy� la opci�n de elegir un estilo CSS para los enlaces de la barra de navegaci�n.
**									-Se incluy� la opci�n de personalizar los enlaces a la p�gina anterior y a la siguiente. (Inspirado en la clase Paginador de WebStudio)
**	Versi�n 1.6.1	(07/05/2005):	-Corregido el bug que multiplicaba la variable _pagi_pg en el URL cuando se propaga autom�ticamente 
**									 el array $_GET.
**	Versi�n 1.6.2	(21/10/2005):	-Se incluyeron los enlaces a la p�gina primera y a la �ltima.
**									-Se incluy� la opci�n de personalizar los enlaces a la p�gina primera y a la �ltima.
**	Versi�n 1.6.3	(22/02/2006):	-Corregida la expresi�n regular para que reconozca los saltos de l�nea y tabulaciones como espacio en blanco.
**									 Gracias a El_Condor en forosdelweb por reportar el comportamiento indeseado.
**
**-----------------------------------------------------------------------------------------------------------*/


/**
 * Variables que se pueden definir antes de incluir el script v�a include():
 * ------------------------------------------------------------------------
 * $_pagi_sql 					OBLIGATORIA.	Cadena. Debe contener una sentencia sql v�lida (y sin la cl�usula "limit").
 
 * $_pagi_cuantos				OPCIONAL.		Entero. Cantidad de registros que contendr� como m�ximo cada p�gina.
								Por defecto est� en 20.
											
 * $_pagi_nav_num_enlaces		OPCIONAL		Entero. Cantidad de enlaces a los n�meros de p�gina que se mostrar�n como 
								m�ximo en la barra de navegaci�n.
								Por defecto se muestran todos.
											
 * $_pagi_mostrar_errores		OPCIONAL		Booleano. Define si se muestran o no los errores de MySQL que se puedan producir.
 								Por defecto est� en "true";
											
 * $_pagi_propagar				OPCIONAL		Array de cadenas. Contiene los nombres de las variables que se quiere propagar
								por el url. Por defecto se propagar�n todas las que ya vengan por el url (GET).
 * $_pagi_conteo_alternativo	OPCIONAL		Booleano. Define si se utiliza mysql_num_rows() (true) o COUNT(*) (false).
								Por defecto est� en false.
 * $_pagi_separador				OPCIONAL		Cadena. Cadena que separa los enlaces num�ricos en la barra de navegaci�n entre p�ginas.
 								Por defecto se utiliza la cadena " | ".
 * $_pagi_nav_estilo			OPCIONAL		Cadena. Contiene el nombre del estilo CSS para los enlaces de paginaci�n.
 								Por defecto no se especifica estilo.
 * $_pagi_nav_anterior			OPCIONAL		Cadena. Contiene lo que debe ir en el enlace a la p�gina anterior. Puede ser un tag <img>.
 								Por defecto se utiliza la cadena "&laquo; Anterior".
 * $_pagi_nav_siguiente			OPCIONAL		Cadena. Contiene lo que debe ir en el enlace a la p�gina siguiente. Puede ser un tag <img>.
 								Por defecto se utiliza la cadena "Siguiente &raquo;"
 * $_pagi_nav_primera			OPCIONAL		Cadena. Contiene lo que debe ir en el enlace a la primera p�gina. Puede ser un tag <img>.
 								Por defecto se utiliza la cadena "&laquo;&laquo; Primera".
 * $_pagi_nav_ultima			OPCIONAL		Cadena. Contiene lo que debe ir en el enlace a la p�gina siguiente. Puede ser un tag <img>.
 								Por defecto se utiliza la cadena "&Uacute;ltima &raquo;&raquo;"
--------------------------------------------------------------------------
*/


/*
 * Verificaci�n de los par�metros obligatorios y opcionales.
 *------------------------------------------------------------------------
 */
 if(empty($_pagi_sql)){
	// Si no se definio $_pagi_sql... grave error!
	// Este error se muestra si o si (ya que no es un error de mysql)
	die("<b>Error Paginator : </b>No se ha definido la variable \$_pagi_sql");
 }
 
 if(empty($_pagi_cuantos)){
	// Si no se ha especificado la cantidad de registros por p�gina
	// $_pagi_cuantos ser� por defecto 20
	$_pagi_cuantos = 10;
 }
 
 if(!isset($_pagi_mostrar_errores)){
	// Si no se ha elegido si se mostrar� o no errores
	// $_pagi_errores ser� por defecto true. (se muestran los errores)
	$_pagi_mostrar_errores = true;
 }

 if(!isset($_pagi_conteo_alternativo)){
	// Si no se ha elegido el tipo de conteo
	// Se realiza el conteo dese mySQL con COUNT(*)
	$_pagi_conteo_alternativo = false;
 }
 
 if(!isset($_pagi_separador)){
	// Si no se ha elegido un separador
	// Se toma el separador por defecto.
	//$_pagi_separador = " | "; ***************************Este es el qeu está por default
	$_pagi_separador = " ";
 }
 
  if(isset($_pagi_nav_estilo)){
	// Si se ha definido un estilo para los enlaces, se genera el atributo "class" para el enlace
	//$_pagi_nav_estilo_mod = "class=\"$_pagi_nav_estilo\"";****************Este es el qeu está por default
	$_pagi_nav_estilo_mod = "";
 }else{
 	// Si no, se utiliza una cadena vac�a.
 	$_pagi_nav_estilo_mod = "";
 }
 
 if(!isset($_pagi_nav_anterior)){
	// Si no se ha elegido una cadena para el enlace "siguiente"
	// Se toma la cadena por defecto.
	//$_pagi_nav_anterior = "&laquo; Anterior";****************Este es el qeu está por default
	$_pagi_nav_anterior = "&laquo;";
 } 
 
 if(!isset($_pagi_nav_siguiente)){
	// Si no se ha elegido una cadena para el enlace "siguiente"
	// Se toma la cadena por defecto.
	//$_pagi_nav_siguiente = "Siguiente &raquo;";****************Este es el qeu está por default
	$_pagi_nav_siguiente = "&raquo;";
 } 

 if(!isset($_pagi_nav_primera)){
	// Si no se ha elegido una cadena para el enlace "primera"
	// Se toma la cadena por defecto.
	//$_pagi_nav_primera = "&laquo;&laquo; Primera";****************Este es el qeu está por default
	$_pagi_nav_primera = "";
 } 
 
 if(!isset($_pagi_nav_ultima)){
	// Si no se ha elegido una cadena para el enlace "siguiente"
	// Se toma la cadena por defecto.
	//$_pagi_nav_ultima = "&Uacute;ltima &raquo;&raquo;";****************Este es el qeu está por default
	$_pagi_nav_ultima = "";
 } 
 
//------------------------------------------------------------------------


/*
 * Establecimiento de la p�gina actual.
 *------------------------------------------------------------------------
 */
 if (empty($_GET['_pagi_pg'])){
	// Si no se ha hecho click a ninguna p�gina espec�fica
	// O sea si es la primera vez que se ejecuta el script
    	// $_pagi_actual es la pagina actual-->ser� por defecto la primera.
	$_pagi_actual = 1;
 }else{
	// Si se "pidi�" una p�gina espec�fica:
	// La p�gina actual ser� la que se pidi�.
    	$_pagi_actual = $_GET['_pagi_pg'];
 }
//------------------------------------------------------------------------


/*
 * Establecimiento del n�mero de p�ginas y del total de registros.
 *------------------------------------------------------------------------
 */
 // Contamos el total de registros en la BD (para saber cu�ntas p�ginas ser�n)
 // La forma de hacer ese conteo depender� de la variable $_pagi_conteo_alternativo
 if($_pagi_conteo_alternativo == false){
 	$_pagi_sqlConta = eregi_replace("select[[:space:]](.*)[[:space:]]from", "SELECT COUNT(*) FROM", $_pagi_sql);
 	$_pagi_result2 = mysql_query($_pagi_sqlConta);
	// Si ocurri� error y mostrar errores est� activado
 	if($_pagi_result2 == false && $_pagi_mostrar_errores == true){
		die (" Error en la consulta de conteo de registros: $_pagi_sqlConta. Mysql dijo: <b>".mysql_error()."</b>");
 	}
 	$_pagi_totalReg = mysql_result($_pagi_result2,0,0);//total de registros
 }else{
	$_pagi_result3 = mysql_query($_pagi_sql);
	// Si ocurri� error y mostrar errores est� activado
 	if($_pagi_result3 == false && $_pagi_mostrar_errores == true){
		die (" Error en la consulta de conteo alternativo de registros: $_pagi_sql. Mysql dijo: <b>".mysql_error()."</b>");
 	}
	$_pagi_totalReg = mysql_num_rows($_pagi_result3);
 }
 // Calculamos el n�mero de p�ginas (saldr� un decimal)
 // con ceil() redondeamos y $_pagi_totalPags ser� el n�mero total (entero) de p�ginas que tendremos
 $_pagi_totalPags = ceil($_pagi_totalReg / $_pagi_cuantos);

//------------------------------------------------------------------------


/*
 * Propagaci�n de variables por el URL.
 *------------------------------------------------------------------------
 */
 // La idea es pasar tambi�n en los enlaces las variables hayan llegado por url.
 $_pagi_enlace = $_SERVER['PHP_SELF'];
 $_pagi_query_string = "?";
 
 if(!isset($_pagi_propagar)){
 	//Si no se defini� qu� variables propagar, se propagar� todo el $_GET (por compatibilidad con versiones anteriores)
	//Perd�n... no todo el $_GET. Todo menos la variable _pagi_pg
	if (isset($_GET['_pagi_pg'])) unset($_GET['_pagi_pg']); // Eliminamos esa variable del $_GET
	$_pagi_propagar = array_keys($_GET);
 }elseif(!is_array($_pagi_propagar)){
	// si $_pagi_propagar no es un array... grave error!
	die("<b>Error Paginator : </b>La variable \$_pagi_propagar debe ser un array");
 }
 // Este foreach est� tomado de la Clase Paginado de webstudio
 // (http://www.forosdelweb.com/showthread.php?t=65528)
 foreach($_pagi_propagar as $var){
 	if(isset($GLOBALS[$var])){
		// Si la variable es global al script
		$_pagi_query_string.= $var."=".$GLOBALS[$var]."&";
	}elseif(isset($_REQUEST[$var])){
		// Si no es global (o register globals est� en OFF)
		$_pagi_query_string.= $var."=".$_REQUEST[$var]."&";
	}
 }

 // A�adimos el query string a la url.
 $_pagi_enlace .= $_pagi_query_string;
 
//------------------------------------------------------------------------


/*
 * Generaci�n de los enlaces de paginaci�n.
 *------------------------------------------------------------------------
 */
 // La variable $_pagi_navegacion contendr� los enlaces a las p�ginas.
 $_pagi_navegacion_temporal = array();
 if ($_pagi_actual != 1){
	// Si no estamos en la p�gina 1. Ponemos el enlace "primera"
	$_pagi_url = 1; //ser� el n�mero de p�gina al que enlazamos
	$_pagi_navegacion_temporal[] = "<a style='color:#000' ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_primera</a>";

	// Si no estamos en la p�gina 1. Ponemos el enlace "anterior"
	$_pagi_url = $_pagi_actual - 1; //ser� el n�mero de p�gina al que enlazamos
	//$_pagi_navegacion_temporal[] = "<a style='color:#000' ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_anterior</a>";
	$_pagi_navegacion_temporal[] = "<a  ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_anterior</a>";
 }
 
 // La variable $_pagi_nav_num_enlaces sirve para definir cu�ntos enlaces con 
 // n�meros de p�gina se mostrar�n como m�ximo.
 // Ojo: siempre se mostrar� un n�mero impar de enlaces. M�s info en la documentaci�n.
 
 if(!isset($_pagi_nav_num_enlaces)){
	// Si no se defini� la variable $_pagi_nav_num_enlaces
	// Se asume que se mostrar�n todos los n�meros de p�gina en los enlaces.
	$_pagi_nav_desde = 1;//Desde la primera
	$_pagi_nav_hasta = $_pagi_totalPags;//hasta la �ltima
 }else{
	// Si se defini� la variable $_pagi_nav_num_enlaces
	// Calculamos el intervalo para restar y sumar a partir de la p�gina actual
	$_pagi_nav_intervalo = ceil($_pagi_nav_num_enlaces/2) - 1;
	
	// Calculamos desde qu� n�mero de p�gina se mostrar�
	$_pagi_nav_desde = $_pagi_actual - $_pagi_nav_intervalo;
	// Calculamos hasta qu� n�mero de p�gina se mostrar�
	$_pagi_nav_hasta = $_pagi_actual + $_pagi_nav_intervalo;
	
	// Ajustamos los valores anteriores en caso sean resultados no v�lidos
	
	// Si $_pagi_nav_desde es un n�mero negativo
	if($_pagi_nav_desde < 1){
		// Le sumamos la cantidad sobrante al final para mantener el n�mero de enlaces que se quiere mostrar. 
		$_pagi_nav_hasta -= ($_pagi_nav_desde - 1);
		// Establecemos $_pagi_nav_desde como 1.
		$_pagi_nav_desde = 1;
	}
	// Si $_pagi_nav_hasta es un n�mero mayor que el total de p�ginas
	if($_pagi_nav_hasta > $_pagi_totalPags){
		// Le restamos la cantidad excedida al comienzo para mantener el n�mero de enlaces que se quiere mostrar.
		$_pagi_nav_desde -= ($_pagi_nav_hasta - $_pagi_totalPags);
		// Establecemos $_pagi_nav_hasta como el total de p�ginas.
		$_pagi_nav_hasta = $_pagi_totalPags;
		// Hacemos el �ltimo ajuste verificando que al cambiar $_pagi_nav_desde no haya quedado con un valor no v�lido.
		if($_pagi_nav_desde < 1){
			$_pagi_nav_desde = 1;
		}
	}
 }

 for ($_pagi_i = $_pagi_nav_desde; $_pagi_i<=$_pagi_nav_hasta; $_pagi_i++){//Desde p�gina 1 hasta �ltima p�gina ($_pagi_totalPags)
	if ($_pagi_i == $_pagi_actual) {
		// Si el n�mero de p�gina es la actual ($_pagi_actual). Se escribe el n�mero, pero sin enlace y en negrita.
		//$_pagi_navegacion_temporal[] = "<span ".$_pagi_nav_estilo_mod.">$_pagi_i</span>";
		$_pagi_navegacion_temporal[] = "<span style='font-size:11px' ".$_pagi_nav_estilo_mod.">$_pagi_i</span>";
		$_pagi_current = $_pagi_i;
	}else{
		// Si es cualquier otro. Se escibe el enlace a dicho n�mero de p�gina.
		//$_pagi_navegacion_temporal[] = "<a style='color:#000' ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_i."'>".$_pagi_i."</a>";
		$_pagi_navegacion_temporal[] = "<a style='color:#C3C3C3; text-decoration:none' ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_i."'>".$_pagi_i."</a>";
	}
 }

 if ($_pagi_actual < $_pagi_totalPags){
	// Si no estamos en la �ltima p�gina. Ponemos el enlace "Siguiente"
	$_pagi_url = $_pagi_actual + 1; //ser� el n�mero de p�gina al que enlazamos
	$_pagi_navegacion_temporal[] = "<a  ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_siguiente</a>";

	// Si no estamos en la �ltima p�gina. Ponemos el enlace "�ltima"
	$_pagi_url = $_pagi_totalPags; //ser� el n�mero de p�gina al que enlazamos
	$_pagi_navegacion_temporal[] = "<a ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_ultima</a>";
 }
 $_pagi_navegacion = implode($_pagi_separador, $_pagi_navegacion_temporal);

//------------------------------------------------------------------------


/*
 * Obtenci�n de los registros que se mostrar�n en la p�gina actual.
 *------------------------------------------------------------------------
 */
 // Calculamos desde qu� registro se mostrar� en esta p�gina
 // Recordemos que el conteo empieza desde CERO.
 $_pagi_inicial = ($_pagi_actual-1) * $_pagi_cuantos;
 
 // Consulta SQL. Devuelve $cantidad registros empezando desde $_pagi_inicial
 $_pagi_sqlLim = $_pagi_sql." LIMIT $_pagi_inicial,$_pagi_cuantos";
 $_pagi_result = mysql_query($_pagi_sqlLim);
 // Si ocurri� error y mostrar errores est� activado
 if($_pagi_result == false && $_pagi_mostrar_errores == true){
 	die ("Error en la consulta limitada: $_pagi_sqlLim. Mysql dijo: <b>".mysql_error()."</b>");
 }

//------------------------------------------------------------------------


/*
 * Generaci�n de la informaci�n sobre los registros mostrados.
 *------------------------------------------------------------------------
 */
 // N�mero del primer registro de la p�gina actual
 $_pagi_desde = $_pagi_inicial + 1;
 
 // N�mero del �ltimo registro de la p�gina actual
 $_pagi_hasta = $_pagi_inicial + $_pagi_cuantos;
 if($_pagi_hasta > $_pagi_totalReg){
 	// Si estamos en la �ltima p�gina
	// El ultimo registro de la p�gina actual ser� igual al n�mero de registros.
 	$_pagi_hasta = $_pagi_totalReg;
 }
 
 $_pagi_info = "desde el $_pagi_desde hasta el $_pagi_hasta de un total de $_pagi_totalReg";

//------------------------------------------------------------------------


/**
 * Variables que quedan disponibles despu�s de incluir el script v�a include():
 * ------------------------------------------------------------------------
 
 * $_pagi_result		Identificador del resultado de la consulta a la BD para los registros de la p�gina actual. 
 				Listo para ser "pasado" por una funci�n como mysql_fetch_row(), mysql_fetch_array(), 
				mysql_fetch_assoc(), etc.
							
 * $_pagi_navegacion		Cadena que contiene la barra de navegaci�n con los enlaces a las diferentes p�ginas.
 				Ejemplo: "<<primera | <anterior | 1 | 2 | 3 | 4 | siguiente> | �ltima>>".
							
 * $_pagi_info			Cadena que contiene informaci�n sobre los registros de la p�gina actual.
 				Ejemplo: "desde el 16 hasta el 30 de un total de 123";				

*/
?>