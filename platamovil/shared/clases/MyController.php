<?php

/**
 * myHandlerEvent
 *
 * @uses Controlador de eventos
 * @package OSEZNO FRAMEWORK
 * @version 0.1
 * @author joselitohaCker
 *
 * Clase que es padre de los eventos
 * de los diferentes modulos que existan
 * en la aplicacion.
 *
 */
class MyController {

	/**
	 * Objeto de xajax pasado como referencia del Original
	 * pasado como parametro dentro del constructor.
	 *
	 * @var object
	 */
	private $xajaxObject;
	/**
	 * Recibe todas las peticiones de respuesta de xajax
	 * para poder permitir que este atributo se permita
	 * retornar en los metodos de la clases hijas.
	 *
	 * @var string
	 */
	protected $response;
	/**
	 * Nombre de la clase CSS que usara el contenido
	 * de los messageBox.
	 *
	 * @var string
	 */
	private $class_name_msg_content = 'message_box';
	/**
	 * Nombre de la clase CSS que usara el contenido
	 * de los titulos de los messageBox
	 *
	 * @var string
	 */
	private $class_name_msg_ttl = 'ttl_message_box';
	/**
	 * Nombre de la clase CSS que usaran los botones
	 * que se definan dentro del messageBox
	 *
	 * @var string
	 */
	private $class_name_msg_buttons = 'button_message_box';
	/**
	 * Arreglo que contiene los nombres de los metodos
	 * magicos que para el controlador de eventos   no
	 * seran tenidos exajax_getMsgErrorn cuenta.
	 *
	 * @var mixed
	 */
	private $arrayInvalidMethods = array('__get', '__set', '__call',
		'__isset', '__unset', '__sleep', '__wakeup', '__clone', '__construct',
		'__destruct', 'alert', 'assign', 'replace', 'clear', 'redirect', 'script',
		'append', 'prepend', 'call', 'remove', 'create', 'insert', 'insertAfter',
		'createInput', 'insertInput', 'insertInputAfter', 'setEvent', 'addHandler',
		'removeHandler', 'setFunction', 'wrapFunction', 'includeScript',
		'includeScriptOnce', 'removeScript', 'includeCSS', 'removeCSS',
		'waitForCSS', 'waitFor', 'sleep', 'setReturnValue', 'getContentType',
		'getOutput', 'getCommandCount', 'loadCommands', 'closeWindow',
		'window', 'closeMessageBox', 'messageBox', 'notificationWindow',
		'modalWindow', 'closeModalWindow'
	);
	/**
	 * Define el alto de la caja de
	 * mensaje, si no tiene un valor
	 * este se calculara automaticamente
	 * dependiento del numero de caracteres
	 * que contenga el mensaje
	 *
	 * @var int
	 */
	public $heightMessageBox;
	/**
	 * Define el ancho de la caja de
	 * mensaje, si no tiene un valor
	 * este sera por defecto 450px
	 *
	 * @var int
	 */
	public $widthMessageBox;
	
	public $pageSize;

	/**
	 * Constructor de la clase
	 * Nota: Es el handlerEvent principal, aqui se registran automaticamente
	 * todos los methodos para que sean llamados a travez de xajax del lado del
	 * cliente.
	 *
	 * @param object $objxAjax Objeto de xAjax
	 */
	public function __construct($objxAjax) {

		$this->response = new xajaxResponse();

		$this->xajaxObject = $objxAjax;

		$methods = get_class_methods(get_class($this));

		foreach ($methods as $method) {

			if (!in_array($method, $this->arrayInvalidMethods)) {
				$this->xajaxObject->registerFunction(array($method, $this, $method));
			}
		}

		/* if( (!isset($_SESSION['ses_usr_cod']) || $_SESSION['ses_usr_cod']=="") && strtolower( basename($_SERVER['PHP_SELF'])) != strtolower("login_intro.php") ){
		  //redireccionar al usuario a la pagina de inicio de sesion una vez haya expirado
		  $url ="/admin/index";
		  $this->script("window.open('".$url."','_top');");
		  return $objResponse;
		  } */
		
		$this->pageSize = 10;
	}

	/**
	 * Destructor de la clase
	 *
	 */
	public function __destruct() {
		
	}

	/**
	 * Display an alert dialog to the user.
	 *
	 * @param string: The message to be displayed.
	 */
	public function alert($srtMsg) {

		$this->response->alert($srtMsg);
	}

	/**
	 * Response command indicating that the
	 * specified  value should be  assigned
	 * to the given elementós attribute.
	 *
	 * @param  string: The id of the html element on the browser.
	 * @param  string: The property to be assigned.
	 * @param  string: The value to be assigned to the property.
	 */
	public function assign($idElement, $propertyElement, $newValue) {

		$this->response->assign($idElement, $propertyElement, $newValue);
	}

	/**
	 * Replace a specified value with another
	 * value within the given elementós property.
	 *
	 * @param  string: The id of the element to update.
	 * @param  string: The property to be updated.
	 * @param  string: The needle to search for.
	 * @param  string: The data to use in place of the needle.
	 */
	public function replace($idElement, $propertyElement, $strToFind, $newValue) {

		$this->response->replace($idElement, $propertyElement, $strToFind, $newValue);
	}

	/**
	 * Response command used to clear the specified
	 * property of the given element.
	 *
	 * @param  string: The id of the element to be updated.
	 * @param  string: The property to be clared.
	 */
	public function clear($idElement, $propertyElement) {

		$this->response->clear($idElement, $propertyElement);
	}

	/**
	 * Response command that causes the browser to
	 * navigate to the specified URL.
	 *
	 * @param  string: The relative or fully qualified URL.
	 * @param  integer, optional: Number of seconds to delay before the redirect occurs.
	 */
	public function redirect($strUrl, $intDelaySeconds) {

		$this->response->redirect($strUrl, $intDelaySeconds);
	}

	/**
	 * Response command that is used  to execute a
	 * portion of javascript on the browser.
	 * The script  runs  in itós own  context,  so
	 * variables declared locally, using the óvaró
	 * keyword, will  no longer be available after
	 * the call.
	 * To construct a variable that will be accessable
	 * globally,  even after the script  has executed,
	 * leave off the óvaró keyword.
	 *
	 * @param  string: The script to execute.
	 */
	public function script($strJs) {

		$this->response->script($strJs);
	}

	/**
	 * Response  command that indicates the specified
	 * data should be appended to the given elementós
	 * property.
	 *
	 * @param  string: The id of the element to be updated.
	 * @param  string: The name of the property to be appended to.
	 * @param  string: The data to be appended to the property.
	 */
	public function append($idElement, $propertyElement, $dataAppended) {

		$this->response->append($idElement, $propertyElement, $dataAppended);
	}

	/**
	 * Response command to prepend the specified value
	 * onto the given elementós property.
	 *
	 * @param  string: The id of the element to be updated.
	 * @param  string: The property to be updated.
	 * @param  string: The value to be prepended.
	 */
	public function prepend($idElement, $propertyElement, $dataPrepended) {

		$this->response->prepend($idElement, $propertyElement, $dataPrepended);
	}

	/**
	 * Response command that indicates that the  specified
	 * javascript function should be called with the given
	 * (optional) parameters.
	 *
	 * @param  string: The name of the function to call.
	 * @param  arg2 .. argn .. arguments to be passed to the function.
	 */
	public function call($strFunctionToCall, $params) {

		$this->response->call($strFunctionToCall, $params);
	}

	/**
	 * Response command used to remove an element from the
	 * document.
	 *
	 * @param  string: The id of the element to be removed.
	 */
	public function remove($strFunctionToCall) {

		$this->response->remove($strFunctionToCall);
	}

	/**
	 * Response command used to create a new element on the
	 * browser.
	 *
	 * @param  string: The id of the parent element.
	 * @param  string: The tag name to be used for the new element.
	 * @param  string: The id to assign to the new element.
	 * @param  string, optional: The type of tag, deprecated, use xajaxResponse->createInput instead.
	 */
	public function create($idParentElement, $tagNewElement, $idNewElement, $tagType) {

		$this->response->create($idParentElement, $tagNewElement, $idNewElement, $tagType = '');
	}

	/**
	 * Response command used to insert a new element just
	 * prior to the specified element.
	 *
	 * @param  string: The element used as a reference point for the insertion.
	 * @param  string: The tag to be used for the new element.
	 * @param  string: The id to be used for the new element.
	 */
	public function insert($idElementRef, $tagNewElement, $idNewElement) {

		$this->response->insert($idElementRef, $tagNewElement, $idNewElement);
	}

	/**
	 * Response command used to insert a new element after
	 * the specified one.
	 *
	 * @param  string: The id of the element that will be used as a reference for the insertion.
	 * @param  string: The tag name to be used for the new element.
	 * @param  string: The id to be used for the new element.
	 */
	public function insertAfter($idElementRef, $tagNewElement, $idNewElement) {

		$this->response->insertAfter($idElementRef, $tagNewElement, $idNewElement);
	}

	/**
	 * Response command used to create an input element on
	 * the browser.
	 *
	 * @param  string: The id of the parent element.
	 * @param  string: The type of the new input element.
	 * @param  string: The name of the new input element.
	 * @param  string: The id of the new element.
	 */
	public function createInput($idParentElement, $typeNewElement, $strNameNewElement, $idNewElement) {

		$this->response->createInput($idParentElement, $typeNewElement, $strNameNewElement, $idNewElement);
	}

	/**
	 * Response command used to insert a new input element
	 * preceeding the specified element.
	 *
	 * @param  string: The id of the element to be used as the reference point for the insertion.
	 * @param  string: The type of the new input element.
	 * @param  string: The name of the new input element.
	 * @param  string: The id of the new input element.
	 */
	public function insertInput($idElementRef, $typeNewElement, $strNameNewElement, $idNewElement) {

		$this->response->insertInput($idElementRef, $typeNewElement, $strNameNewElement, $idNewElement);
	}

	/**
	 * Response command used to insert a new input element
	 * after the specified element.
	 *
	 * @param  string: The id of the element that is to be used as the insertion point for the new element.
	 * @param  string: The type of the new input element.
	 * @param  string: The name of the new input element.
	 * @param  string: The id of the new input element.
	 */
	public function insertInputAfter($idElementRef, $typeNewElement, $strNameNewElement, $idNewElement) {

		$this->response->insertInputAfter($idElementRef, $typeNewElement, $strNameNewElement, $idNewElement);
	}

	/**
	 * Response command used to set an event handler on the
	 * browser.
	 *
	 * @param  string: The id of the element that contains the event.
	 * @param  string: The name of the event.
	 * @param  string: The javascript to execute when the event is fired.
	 */
	public function setEvent($idELement, $strNameEvent, $strNameFunction) {

		$this->response->setEvent($idELement, $strNameEvent, $strNameFunction);
	}

	/**
	 * Response command used to install an event handler on the
	 * specified element.
	 *
	 * @param  string: The id of the element.
	 * @param  string: The name of the event to add the handler to.
	 * @param  string: The javascript function to call when the event is fired.
	 *
	 * You can add more than one event handler to an elementós event using this method.
	 */
	public function addHandler($idElement, $strNameEvent, $strNameFunction) {

		$this->response->addHandler($idElement, $strNameEvent, $strNameFunction);
	}

	/**
	 * Response command used to remove an event handler from
	 * an element.
	 *
	 * @param  string: The id of the element.
	 * @param  string: The name of the event.
	 * @param  string: The javascript function that is called when the event is fired.
	 */
	public function removeHandler($idElement, $strNameEvent, $strNameFunction) {

		$this->response->removeHandler($idElement, $strNameEvent, $strNameFunction);
	}

	/**
	 * Response command used to construct a javascript function
	 * on the browser.
	 *
	 * @param  string: The name of the function to construct.
	 * @param  string: Comma separated list of parameter names.
	 * @param  string: The javascript code that will become the body of the function.
	 */
	public function setFunction($strNameFunction, $params, $jsCode) {

		$this->response->setFunction($strNameFunction, $params, $jsCode);
	}

	/**
	 * Response command used to construct a wrapper function
	 * around and existing javascript function on the browser.
	 *
	 * @param  string: The name of the existing function to wrap.
	 * @param  string: The comma separated list of parameters for the function.
	 * @param  array:  An array of javascript code snippets that will be used to build the body of the function.  The first piece of code specified in the array will occur before the call to the original function, the second will occur after the original function is called.
	 * @param  string: The name of the variable that will retain the return value from the call to the original function.
	 */
	public function wrapFunction($strNameFunction, $params, $mixedJsCode, $varReturn) {

		$this->response->wrapFunction($strNameFunction, $params, $mixedJsCode, $varReturn);
	}

	/**
	 * Response command used to load a javascript file on the
	 * browser.
	 *
	 * @param  string: The relative or fully qualified URI of the javascript file.
	 */
	public function includeScript($strUri) {

		$this->response->includeScript($strUri);
	}

	/**
	 * Response command used to include a javascript file on
	 * the browser if it has not already been loaded.
	 *
	 * @param  string: The relative for fully qualified URI of the javascript file.
	 */
	public function includeScriptOnce($strUri) {

		$this->response->includeScriptOnce($strUri);
	}

	/**
	 * Response command used to remove a SCRIPT reference to
	 * a javascript file on the browser.  Optionally,    you
	 * can call a javascript function just prior to the file
	 * being unloaded (for cleanup).
	 *
	 * @param  string: The relative or fully qualified URI of the javascript file.
	 * @param  string: Name of a javascript function to call prior to unlaoding the file.
	 */
	public function removeScript($strUri, $strNameFunction) {

		$this->response->removeScript($strUri, $strNameFunction);
	}

	/**
	 * Response command used to include a LINK reference to
	 * the specified CSS file on the browser.     This will
	 * cause the browser to load and apply the style sheet.
	 *
	 * @param  string: The relative or fully qualified URI of the css file.
	 */
	public function includeCSS($strUri) {

		$this->response->includeCSS($strUri);
	}

	/**
	 * Response command used to remove a LINK  reference to a
	 * CSS file on the browser.  This causes the  browser  to
	 * unload the style sheet, effectively removing the style
	 * changes it caused.
	 *
	 * @param  string: The relative or fully qualified URI of the css file.
	 */
	public function removeCSS($strUri) {

		$this->response->removeCSS($strUri);
	}

	/**
	 * Response command instructing xajax to pause while the CSS
	 * files are loaded.
	 * The browser is not typically a multi-threading application,
	 * with regards to javascript code.  Therefore, the CSS files
	 * included or removed with xajaxResponse->includeCSS and
	 * xajaxResponse->removeCSS respectively, will not be loaded
	 * or removed until the browser regains control from the script.
	 * This command returns control back to the browser and pauses
	 * the execution of the response until the CSS files, included
	 * previously, are loaded.
	 *
	 * @param  integer: The number of 1/10ths of a second to pause before timing out and continuing with the execution of the response commands.
	 */
	public function waitForCSS($insSeconds) {

		$this->response->waitForCSS($insSeconds);
	}

	/**
	 * Response command instructing xajax to delay execution of the
	 * response commands until a specified condition is met.
	 * Note, this returns control to the browser, so that other
	 * script operations can execute.  xajax will continue to
	 * monitor the specified condition and, when it evaulates to
	 * true, will continue processing response commands.
	 *
	 * @param  string: A piece of javascript code that evaulates to true or false.
	 * @param  integer: The number of 1/10ths of a second to wait before timing out and continuing with the execution of the response commands.
	 */
	public function waitFor($jsPiece, $intSeconds) {

		$this->response->waitFor($jsPiece, $intSeconds);
	}

	/**
	 * Response command which instructs xajax to pause execution
	 * of the response commands, returning control to the browser
	 * so it can perform other commands asynchronously.
	 * After the specified delay, xajax will continue execution of the response commands.
	 *
	 * @param  integer: The number of 1/10ths of a second to sleep.
	 */
	public function sleep($intSeconds) {

		$this->response->sleep($intSeconds);
	}

	/**
	 * Stores a value that will be passed back as part of the response.
	 * When making synchronous requests, the calling javascript can
	 * obtain this value immediately as the return value of the xajax.call function.
	 *
	 * @param  mixed: Any value.
	 */
	public function setReturnValue($strValue) {

		$this->response->setReturnValue($strValue);
	}

	/**
	 * Returns the current content type that will be used for
	 * the response packet.  (typically: ótext/xmló)
	 */
	public function getContentType() {

	}

	public function getOutput() {

	}

	public function getCommandCount() {

	}

	public function loadCommands() {
		
	}

	public function getPager(){
		$cadena = "
			<div id=\"pager\" class=\"pager\" style=\"text-align: center;\">
				<form>
					<img class=\"first\" src=\"../shared/img/admin/first.png\">
					<img class=\"prev\" src=\"../shared/img/admin/prev.png\">
					<input type=\"text\" class=\"pagedisplay\" style=\"width: 70px; display:inline; text-align: center;\">
					<img class=\"next\" src=\"../shared/img/admin/next.png\">
					<img class=\"last\" src=\"../shared/img/admin/last.png\">
					<input type=\"hidden\" value=\"{$this->pageSize}\" class=\"pagesize\" />
				</form>
			</div>";
		
		return $cadena;
	}
	
	protected function getMsgError($mensaje=""){
		$cadena = "
			<div id=\"capa_msg_error\" class=\"albox errorbox\" style=\"display: block; z-index: 730;\">
				$mensaje
				<a original-title=\"close\" href=\"javascript:void(0);\" onclick=\"$('#capa_msg_error').hide('slow');\" class=\"close tips\">close</a>
			</div>";
		
		return $cadena;
	}
	
	protected function getMsgSuccess($mensaje=""){
		$cadena = "
			<div id=\"capa_msg_success\" style=\"display: block; z-index: 720;\" class=\"albox succesbox\">
				$mensaje
				<a class=\"close tips\" href=\"javascript:void(0);\" onclick=\"$('#capa_msg_success').hide('slow');\" original-title=\"close\">close</a>
			</div>";
		
		return $cadena;
	}
	
	public function mostrarMensaje($tipo, $mensaje, $capa){
		switch ($tipo){
			case 'success':
				$cadena = $this->getMsgSuccess($mensaje);
				break;
			case 'error':
				$cadena = $this->getMsgError($mensaje);
				break;
		}
		
		$this->assign($capa, 'innerHTML', $cadena);
		
		return $this->response;
	}
}

?>