<?
/*******************************************************/
// Vars n features of paginator
/************************************/   
$_pagi_sql = $query;
$i = 0;	 
 $_pagi_cuantos = 15;//Eleg� un n�mero peque�o para que se generen varias p�ginas
//cantidad de enlaces que se mostrar�n como m�ximo en la barra de navegaci�n
$_pagi_nav_num_enlaces = 7;//Eleg� un n�mero peque�o para que se note el resultado
//Decidimos si queremos que se muesten los errores de mysql
$_pagi_mostrar_errores = false;//recomendado true s�lo en tiempo de desarrollo.
//Si tenemos una consulta compleja que hace que el Paginator no funcione correctamente, 
//realizamos el conteo alternativo.
$_pagi_conteo_alternativo = true;//recomendado false.
//Supongamos que s�lo nos interesa propagar estas dos variables
// $_pagi_propagar = array("idcategoria","termino");//No importa si son POST o GET
//Definimos qu� estilo CSS se utilizar� para los enlaces de paginaci�n.
//El estilo debe estar definido previamente
$_pagi_nav_estilo = "paginacion";
//definimos qu� ir� en el enlace a la p�gina anterior
$_pagi_nav_anterior = "&lt;";// podr�a ir un tag <img> o lo que sea
//definimos qu� ir� en el enlace a la p�gina siguiente
$_pagi_nav_siguiente = "&gt;";// podr�a ir un tag <img> o lo que sea
//Incluimos el script de paginaci�n. �ste ya ejecuta la consulta autom�ticamente
?>