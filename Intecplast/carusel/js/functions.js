//OpenId
$(document).ready(
  function() {
    if ($("#edit-openid-url").val()) {
      $("#edit-name-wrapper").hide();
      $("#edit-pass-wrapper").hide();
      $("#edit-openid-url-wrapper").show();
      $("a.openid-link").hide();
      $("a.user-link").show();
    }
    $("a.openid-link").click( function() {
      $("#edit-pass-wrapper").hide();
      $("#edit-name-wrapper").fadeOut('medium', function() {
          $("#edit-openid-url-wrapper").fadeIn('medium');
        });
      $("a.openid-link").hide();
      $("a.user-link").show();
      return false;
    });
    $("a.user-link").click( function() {
      $("#edit-openid-url-wrapper").hide();
      $("#edit-pass-wrapper").show();
      $("#edit-name-wrapper").show();
      $("a.user-link").hide();
      $("a.openid-link").show();
      return false;
    });
  });


function cambiarPagina(menu,newwindow)
{
  if(menu.selectedIndex != 0)
  {
      if(newwindow == 'newwindow')
	  {
	      window.open (menu[menu.selectedIndex].value, 'newwindow', config='toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, directories=no, status=no');
	  }
	  else
	  {
	      window.document.location = menu[menu.selectedIndex].value;
      }
  }
}

function bookmarksite(title, url)
{
	if (document.all)
	{
		window.external.AddFavorite(url, title);	
	}

	else if (window.sidebar)
	{
		window.sidebar.addPanel(title, url, "");
	}
}

// Extract from:
//
// BASIC DATA VALIDATION FUNCTIONS:
// 18 Feb 97 created Eric Krock
// (c) 1997 Netscape Communications Corporation

// Check whether string s is empty.
function isEmpty(s)
{
	return ((s == null) || (s.length == 0))
}

// Returns true if string s is empty or 
// whitespace characters only.
function isWhitespace(s)
{
	var i;
	// whitespace characters
	var whitespace = " \t\n\r";

    // Is s empty?
    if (isEmpty(s)) return true;

    // Search through string's characters one by one
    // until we find a non-whitespace character.
    // When we do, return false; if we don't, return true.

    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);

        if (whitespace.indexOf(c) == -1) return false;
    }

    // All characters are whitespace.
    return true;
}

function isEmail(s)
{   
	var i = 1;
    var sLength = s.length;

    // look for @
    while ((i < sLength) && (s.charAt(i) != "@"))
    { i++;
    }

    if ((i >= sLength) || (s.charAt(i) != "@"))
	 return false;
    
	else
	 i += 2;

    // look for .
    while ((i < sLength) && (s.charAt(i) != "."))
    { i++;
    }

// there must be at least one character after the .
    if((i >= sLength - 1) || (s.charAt(i) != "."))
	 return false;
    
	else
	 return true;
}

function esComentarioVacio()
{
	s = document.getElementById('edit-comment');

	if(isWhitespace(s.value))
	{
		alert('Por favor escriba su opinion en el espacio indicado.');
		s.value = '';
		s.focus();
		return false;
	}
	s.value = s.value.substring(0,800);
	return true;
}

function esIngresoUsuario()
{
	n = document.getElementById('edit-name-ingreso');
	c = document.getElementById('edit-pass-ingreso');
	

	if(isWhitespace(n.value))
	{
		alert('Por favor ingrese su nombre de usuario.');
		n.value = '';
		n.focus();
		return false;
	}

	if(isWhitespace(c.value))
	{
		alert('Por favor ingrese su contrase&ntilde;a.');
		c.value = '';
		c.focus();
		return false;
	}

	return true;
}

function esOlvidoContrasena()
{
	n = document.getElementById('edit-name-olvido');

	if(isWhitespace(n.value))
	{
		alert('Por favor ingrese su nombre de usuario.');
		n.value = '';
		n.focus();
		return false;
	}

	return true;
}

function esUsuarioNuevo()
{
	n = document.getElementById('edit-name-nuevo');
	m = document.getElementById('edit-mail-nuevo');

	if(isWhitespace(n.value))
	{
		alert('Por favor ingrese un nombre de usuario.');
		n.value = '';
		n.focus();
		return false;
	}

	if(isWhitespace(m.value))
	{
		alert('Por favor ingrese una direccin de correo.');
		m.value = '';
		m.focus();
		return false;
	}

	if(!isEmail(m.value))
	{
		alert('Por favor ingrese una direccin de correo vlida.');
		m.value = '';
		m.focus();
		return false;
	}

	return true;
}

var BrowserDetect = {
	init: function () { 
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [		{string: navigator.userAgent,subString: "OmniWeb",versionSearch: "OmniWeb/",identity: "OmniWeb"},		{string: navigator.vendor,subString: "Apple",identity: "Safari"},		{prop: window.opera,identity: "Opera"},		{string: navigator.vendor,subString: "iCab",identity: "iCab"},		{string: navigator.vendor,subString: "KDE",identity: "Konqueror"},		{string: navigator.userAgent,subString: "Firefox",identity: "Firefox"},		{string: navigator.vendor,subString: "Camino",identity: "Camino"},		{string: navigator.userAgent,subString: "Netscape",	identity: "Netscape"},		{string: navigator.userAgent,subString: "MSIE",identity: "Explorer",versionSearch: "MSIE"},		{string: navigator.userAgent,subString: "Gecko",identity: "Mozilla",versionSearch: "rv"},		{string: navigator.userAgent,subString: "Mozilla",identity: "Netscape",versionSearch: "Mozilla"}	],

	HacerPaginaInicio: function(obj){ 
		if(this.browser == 'Firefox'){
			window.sidebar.addPanel('Noticias | ELESPECTADOR.COM', 'http://www.elespectador.com','');
		}else if(this.browser == 'Explorer'){
		  obj.style.behavior='url(#default#homepage)';  obj.setHomePage('http://www.elespectador.com/');
		}else{
			alert('Por favor presione CTRL + D para agregar a ELESPECTADOR.COM a sus enlaces favoritos');
		}	
	}
};

function desplegarMenuEdicion(obj,thisEvent){ 
	BrowserDetect.init();
	if(BrowserDetect.browser=='Explorer'){
		if(document.readyState == 'complete')  dropdownmenu(obj, thisEvent, menu1, '175px'); 
	}
	else{ if(BrowserDetect.browser=='Firefox') 
			dropdownmenu(obj, thisEvent, menu1, '175px');
		else
			dropdownmenu(obj, thisEvent, menu1, '175px');
	}

}

function limitText(obj){ 
	var count = "800"; 
	if(obj.value.length > count){
		obj.value = obj.value.substring(0,count);
		return false;
	}
	document.getElementById("caracter").value = 800 - parseInt(obj.value.length);
	return true;
}

function limitCTRV(obj, evento){ 
	var text; 
	text = obj.value;
	var ctrl = typeof evento.modifiers == 'undefined' ?   evento.ctrlKey : evento.modifiers & evento.CONTROL_MASK;
	var v = typeof evento.which == 'undefined' ?   evento.keyCode == 86 : evento.which == 86;
	if ( ctrl && v ) { 		
		alert('Lo sentimos, no se puede pegar un texto externo');
		obj.value=text;
		return false;
	}
	return true;
}

function limitClickRigth(e) {
if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2)){
	alert('Lo sentimos, no se puede pegar un texto externo')
	return false;
}else  if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2)){
			alert('Lo sentimos, no se puede pegar un texto externo')
		}	
}

function abrirVentana(menu)
{
  if(menu.selectedIndex != 0)
  {
	window.open(menu[menu.selectedIndex].value,"Revista","width=1024,height=768,scrollbars=NO") 
  }
}



/*
  -------------------------------------------------------------------------
		      JavaScript Form Validator (gen_validatorv31.js)
              Version 3.1.1
	Copyright (C) 2003-2008 JavaScript-Coder.com. All rights reserved.
	You can freely use this script in your Web pages.
	You may adapt this script for your own needs, provided these opening credit
    lines are kept intact.
		
	The Form validation script is distributed free from JavaScript-Coder.com
	For updates, please visit:
	http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
	
	Questions & comments please send to form.val at javascript-coder.com
  -------------------------------------------------------------------------  
*/
function Validator(frmname)
{
  //this.formobj=document.forms[frmname];
  this.formobj=document.getElementById(frmname);
	if(!this.formobj)
	{
	  alert("Error: couldnot get Form object "+frmname);
		return;
	}
	if(this.formobj.onsubmit)
	{
	 this.formobj.old_onsubmit = this.formobj.onsubmit;
	 this.formobj.onsubmit=null;
	}
	else
	{
	 this.formobj.old_onsubmit = null;
	}
	this.formobj._sfm_form_name=frmname;
	this.formobj.onsubmit=form_submit_handler;
	this.addValidation = add_validation;
	this.setAddnlValidationFunction=set_addnl_vfunction;
	this.clearAllValidations = clear_all_validations;
    this.disable_validations = false;//new
    document.error_disp_handler = new sfm_ErrorDisplayHandler();
    this.EnableOnPageErrorDisplay=validator_enable_OPED;
	this.EnableOnPageErrorDisplaySingleBox=validator_enable_OPED_SB;
    this.show_errors_together=true;
    this.EnableMsgsTogether=sfm_enable_show_msgs_together;
}
function set_addnl_vfunction(functionname)
{
  this.formobj.addnlvalidation = functionname;
}
function sfm_enable_show_msgs_together()
{
    this.show_errors_together=true;
    this.formobj.show_errors_together=true;
}
function clear_all_validations()
{
	for(var itr=0;itr < this.formobj.elements.length;itr++)
	{
		this.formobj.elements[itr].validationset = null;
	}
}
function form_submit_handler()
{
   var bRet = true;
    document.error_disp_handler.clear_msgs();
	for(var itr=0;itr < this.elements.length;itr++)
	{
		if(this.elements[itr].validationset &&
	   !this.elements[itr].validationset.validate())
		{
		  bRet = false;
		}
        if(!bRet && !this.show_errors_together)
        {
          break;
        }
	}
    if(!bRet)
    {
      document.error_disp_handler.FinalShowMsg();
      return false;
    }

	if(this.addnlvalidation)
	{
	  str =" var ret = "+this.addnlvalidation+"()";
	  eval(str);
    if(!ret) return ret;
	}
	return true;
}
function add_validation(itemname,descriptor,errstr)
{
	var condition = null;
	if(arguments.length > 3)
	{
	 condition = arguments[3]; 
	}
  if(!this.formobj)
	{
		alert("Error: The form object is not set properly");
		return;
	}//if
	var itemobj = this.formobj[itemname];
    if(itemobj.length && isNaN(itemobj.selectedIndex) )
    //for radio button; don't do for 'select' item
	{
		itemobj = itemobj[0];
	}	
  if(!itemobj)
	{
		alert("Error: Couldnot get the input object named: "+itemname);
		return;
	}
	if(!itemobj.validationset)
	{
		itemobj.validationset = new ValidationSet(itemobj,this.show_errors_together);
	}
	itemobj.validationset.add(descriptor,errstr,condition);
    itemobj.validatorobj=this;
}
function validator_enable_OPED()
{
    document.error_disp_handler.EnableOnPageDisplay(false);
}

function validator_enable_OPED_SB()
{
	document.error_disp_handler.EnableOnPageDisplay(true);
}
function sfm_ErrorDisplayHandler()
{
  this.msgdisplay = new AlertMsgDisplayer();
  this.EnableOnPageDisplay= edh_EnableOnPageDisplay;
  this.ShowMsg=edh_ShowMsg;
  this.FinalShowMsg=edh_FinalShowMsg;
  this.all_msgs=new Array();
  this.clear_msgs=edh_clear_msgs;
}
function edh_clear_msgs()
{
    this.msgdisplay.clearmsg(this.all_msgs);
    this.all_msgs = new Array();
}
function edh_FinalShowMsg()
{
    this.msgdisplay.showmsg(this.all_msgs);
}
function edh_EnableOnPageDisplay(single_box)
{
	if(true == single_box)
	{
		this.msgdisplay = new SingleBoxErrorDisplay();
	}
	else
	{
		this.msgdisplay = new DivMsgDisplayer();		
	}
}
function edh_ShowMsg(msg,input_element)
{
	
   var objmsg = new Array();
   objmsg["input_element"] = input_element;
   objmsg["msg"] =  msg;
   this.all_msgs.push(objmsg);
}
function AlertMsgDisplayer()
{
  this.showmsg = alert_showmsg;
  this.clearmsg=alert_clearmsg;
}
function alert_clearmsg(msgs)
{

}
function alert_showmsg(msgs)
{
    var whole_msg="";
    var first_elmnt=null;
    for(var m=0;m < msgs.length;m++)
    {
        if(null == first_elmnt)
        {
            first_elmnt = msgs[m]["input_element"];
        }
        whole_msg += msgs[m]["msg"] + "\n";
    }
	
    alert(whole_msg);

    if(null != first_elmnt)
    {
        first_elmnt.focus();
    }
}
function sfm_show_error_msg(msg,input_elmt)
{
    document.error_disp_handler.ShowMsg(msg,input_elmt);
}
function SingleBoxErrorDisplay()
{
 this.showmsg=sb_div_showmsg;
 this.clearmsg=sb_div_clearmsg;
}

function sb_div_clearmsg(msgs)
{
	var divname = form_error_div_name(msgs);
	show_div_msg(divname,"");
}

function sb_div_showmsg(msgs)
{
	var whole_msg="<ul>\n";
	for(var m=0;m < msgs.length;m++)
    {
        whole_msg += "<li>" + msgs[m]["msg"] + "</li>\n";
    }
	whole_msg += "</ul>";
	var divname = form_error_div_name(msgs);
	show_div_msg(divname,whole_msg);
}
function form_error_div_name(msgs)
{
	var input_element= null;

	for(var m in msgs)
	{
	 input_element = msgs[m]["input_element"];
	 if(input_element){break;}
	}

	var divname ="";
	if(input_element)
	{
	 divname = input_element.form._sfm_form_name + "_errorloc";
	}

	return divname;
}
function DivMsgDisplayer()
{
 this.showmsg=div_showmsg;
 this.clearmsg=div_clearmsg;
}
function div_clearmsg(msgs)
{
    for(var m in msgs)
    {
        var divname = element_div_name(msgs[m]["input_element"]);
        show_div_msg(divname,"");
    }
}
function element_div_name(input_element)
{
  var divname = input_element.form._sfm_form_name + "_" + 
                   input_element.name + "_errorloc";

  divname = divname.replace(/[\[\]]/gi,"");

  return divname;
}
function div_showmsg(msgs)
{
    var whole_msg;
    var first_elmnt=null;
    for(var m in msgs)
    {
        if(null == first_elmnt)
        {
            first_elmnt = msgs[m]["input_element"];
        }
        var divname = element_div_name(msgs[m]["input_element"]);
        show_div_msg(divname,msgs[m]["msg"]);
    }
    if(null != first_elmnt)
    {
        first_elmnt.focus();
    }
}
function show_div_msg(divname,msgstring)
{
	if(divname.length<=0) return false;

	if(document.layers)
	{
		divlayer = document.layers[divname];
        if(!divlayer){return;}
		divlayer.document.open();
		divlayer.document.write(msgstring);
		divlayer.document.close();
	}
	else
	if(document.all)
	{
		divlayer = document.all[divname];
        if(!divlayer){return;}
		divlayer.innerHTML=msgstring;
	}
	else
	if(document.getElementById)
	{
		divlayer = document.getElementById(divname);
        if(!divlayer){return;}
		divlayer.innerHTML =msgstring;
	}
	divlayer.style.visibility="visible";	
	return false;
}
function ValidationDesc(inputitem,desc,error,condition)
{
  this.desc=desc;
	this.error=error;
	this.itemobj = inputitem;
	this.condition = condition;
	this.validate=vdesc_validate;
}
function vdesc_validate()
{
	if(this.condition != null )
	{
		if(!eval(this.condition))
		{
			return true;
		}
	}
	if(!validateInput(this.desc,this.itemobj,this.error))
	{
		this.itemobj.validatorobj.disable_validations=true;
		this.itemobj.focus();
		return false;
	}
	return true;
}
function ValidationSet(inputitem,msgs_together)
{
    this.vSet=new Array();
	this.add= add_validationdesc;
	this.validate= vset_validate;
	this.itemobj = inputitem;
    this.msgs_together = msgs_together;
}
function add_validationdesc(desc,error,condition)
{
  this.vSet[this.vSet.length]= 
  new ValidationDesc(this.itemobj,desc,error,condition);
}
function vset_validate()
{
    var bRet = true;
    for(var itr=0;itr<this.vSet.length;itr++)
    {
        bRet = bRet && this.vSet[itr].validate();
        if(!bRet && !this.msgs_together)
        {
            break;
        }
    }
    return bRet;
}
function validateEmail(email)
{
    var splitted = email.match("^(.+)@(.+)$");
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(splitted[1].match(regexp_user) == null) return false;
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null) return false;
      }// if
      return true;
    }
return false;
}

function IsCheckSelected(objValue,chkValue)
{
    var selected=false;
	var objcheck = objValue.form.elements[objValue.name];
    if(objcheck.length)
	{
		var idxchk=-1;
		for(var c=0;c < objcheck.length;c++)
		{
		   if(objcheck[c].value == chkValue)
		   {
		     idxchk=c;
			 break;
		   }//if
		}//for
		if(idxchk>= 0)
		{
		  if(objcheck[idxchk].checked=="1")
		  {
		    selected=true;
		  }
		}//if
	}
	else
	{
		if(objValue.checked == "1")
		{
			selected=true;
		}//if
	}//else	

	return selected;
}
function TestDontSelectChk(objValue,chkValue,strError)
{
	var pass = true;
	pass = IsCheckSelected(objValue,chkValue)?false:true;

	if(pass==false)
	{
     if(!strError || strError.length ==0) 
        { 
        	strError = "Can't Proceed as you selected "+objValue.name;  
        }//if			  
	  sfm_show_error_msg(strError,objValue);
	  
	}
    return pass;
}
function TestShouldSelectChk(objValue,chkValue,strError)
{
	var pass = true;

	pass = IsCheckSelected(objValue,chkValue)?true:false;

	if(pass==false)
	{
     if(!strError || strError.length ==0) 
        { 
        	strError = "You should select "+objValue.name;  
        }//if			  
	  sfm_show_error_msg(strError,objValue);
	  
	}
    return pass;
}
function TestRequiredInput(objValue,strError)
{
 var ret = true;
 var val = objValue.value;
 val = val.replace(/^\s+|\s+$/g,"");//trim
    if(eval(val.length) == 0) 
    { 
       if(!strError || strError.length ==0) 
       { 
         strError = objValue.name + " : Required Field"; 
       }//if 
       sfm_show_error_msg(strError,objValue); 
       ret=false; 
    }//if 
return ret;
}
function TestMaxLen(objValue,strMaxLen,strError)
{
 var ret = true;
    if(eval(objValue.value.length) > eval(strMaxLen)) 
    { 
      if(!strError || strError.length ==0) 
      { 
        strError = objValue.name + " : "+ strMaxLen +" characters maximum "; 
      }//if 
      sfm_show_error_msg(strError,objValue); 
      ret = false; 
    }//if 
return ret;
}
function TestMinLen(objValue,strMinLen,strError)
{
 var ret = true;
    if(eval(objValue.value.length) <  eval(strMinLen)) 
    { 
      if(!strError || strError.length ==0) 
      { 
        strError = objValue.name + " : " + strMinLen + " characters minimum  "; 
      }//if               
      sfm_show_error_msg(strError,objValue); 
      ret = false;   
    }//if 
return ret;
}
function TestInputType(objValue,strRegExp,strError,strDefaultError)
{
   var ret = true;

    var charpos = objValue.value.search(strRegExp); 
    if(objValue.value.length > 0 &&  charpos >= 0) 
    { 
     if(!strError || strError.length ==0) 
      { 
        strError = strDefaultError;
      }//if 
      sfm_show_error_msg(strError,objValue); 
      ret = false; 
    }//if 
 return ret;
}
function TestEmail(objValue,strError)
{
var ret = true;
     if(objValue.value.length > 0 && !validateEmail(objValue.value)	 ) 
     { 
       if(!strError || strError.length ==0) 
       { 
          strError = objValue.name+": Enter a valid Email address "; 
       }//if                                               
       sfm_show_error_msg(strError,objValue); 
       ret = false; 
     }//if 
return ret;
}
function TestLessThan(objValue,strLessThan,strError)
{
var ret = true;
	  if(isNaN(objValue.value)) 
	  { 
	    sfm_show_error_msg(objValue.name +": Should be a number ",objValue); 
	    ret = false; 
	  }//if 
	  else
	  if(eval(objValue.value) >=  eval(strLessThan)) 
	  { 
	    if(!strError || strError.length ==0) 
	    { 
	      strError = objValue.name + " : value should be less than "+ strLessThan; 
	    }//if               
	    sfm_show_error_msg(strError,objValue); 
	    ret = false;                 
	   }//if   
return ret;          
}
function TestGreaterThan(objValue,strGreaterThan,strError)
{
var ret = true;
     if(isNaN(objValue.value)) 
     { 
       sfm_show_error_msg(objValue.name+": Should be a number ",objValue); 
       ret = false; 
     }//if 
	 else
     if(eval(objValue.value) <=  eval(strGreaterThan)) 
      { 
        if(!strError || strError.length ==0) 
        { 
          strError = objValue.name + " : value should be greater than "+ strGreaterThan; 
        }//if               
        sfm_show_error_msg(strError,objValue);  
        ret = false;
      }//if  
return ret;           
}
function TestRegExp(objValue,strRegExp,strError)
{
var ret = true;
    if( objValue.value.length > 0 && 
        !objValue.value.match(strRegExp) ) 
    { 
      if(!strError || strError.length ==0) 
      { 
        strError = objValue.name+": Invalid characters found "; 
      }//if                                                               
      sfm_show_error_msg(strError,objValue); 
      ret = false;                   
    }//if 
return ret;
}
function TestDontSelect(objValue,dont_sel_index,strError)
{
var ret = true;
    if(objValue.selectedIndex == null) 
    { 
      sfm_show_error_msg("ERROR: dontselect command for non-select Item"); 
      ret =  false; 
    } 
    if(objValue.selectedIndex == eval(dont_sel_index)) 
    { 
     if(!strError || strError.length ==0) 
      { 
      strError = objValue.name+": Please Select one option "; 
      }//if                                                               
      sfm_show_error_msg(strError,objValue); 
      ret =  false;                                   
     } 
return ret;
}
function TestSelectOneRadio(objValue,strError)
{
	var objradio = objValue.form.elements[objValue.name];
	var one_selected=false;
	for(var r=0;r < objradio.length;r++)
	{
	  if(objradio[r].checked)
	  {
	  	one_selected=true;
		break;
	  }
	}
	if(false == one_selected)
	{
      if(!strError || strError.length ==0) 
       {
	    strError = "Please select one option from "+objValue.name;
	   }	
	  sfm_show_error_msg(strError,objValue);
	}
return one_selected;
}

function validateInput(strValidateStr,objValue,strError) 
{ 
    var ret = true;
    var epos = strValidateStr.search("="); 
    var  command  = ""; 
    var  cmdvalue = ""; 
    if(epos >= 0) 
    { 
     command  = strValidateStr.substring(0,epos); 
     cmdvalue = strValidateStr.substr(epos+1); 
    } 
    else 
    { 
     command = strValidateStr; 
    } 
    switch(command) 
    { 
        case "req": 
        case "required": 
         { 
		   ret = TestRequiredInput(objValue,strError)
           break;             
         }//case required 
        case "maxlength": 
        case "maxlen": 
          { 
			 ret = TestMaxLen(objValue,cmdvalue,strError)
             break; 
          }//case maxlen 
        case "minlength": 
        case "minlen": 
           { 
			 ret = TestMinLen(objValue,cmdvalue,strError)
             break; 
            }//case minlen 
        case "alnum": 
        case "alphanumeric": 
           { 
				ret = TestInputType(objValue,"[^A-Za-z0-9]",strError, 
						objValue.name+": Only alpha-numeric characters allowed ");
				break; 
           }
        case "alnum_s": 
        case "alphanumeric_space": 
           { 
				ret = TestInputType(objValue,"[^A-Za-z0-9\\s]",strError, 
						objValue.name+": Only alpha-numeric characters and space allowed ");
				break; 
           }		   
        case "num": 
        case "numeric": 
           { 
                ret = TestInputType(objValue,"[^0-9]",strError, 
						objValue.name+": Only digits allowed ");
                break;               
           }
        case "dec": 
        case "decimal": 
           { 
                ret = TestInputType(objValue,"[^0-9\.]",strError, 
						objValue.name+": Only numbers allowed ");
                break;               
           }
        case "alphabetic": 
        case "alpha": 
           { 
                ret = TestInputType(objValue,"[^A-Za-z]",strError, 
						objValue.name+": Only alphabetic characters allowed ");
                break; 
           }
        case "alphabetic_space": 
        case "alpha_s": 
           { 
                ret = TestInputType(objValue,"[^A-Za-z\\s]",strError, 
						objValue.name+": Only alphabetic characters and space allowed ");
                break; 
           }
        case "email": 
          { 
			   ret = TestEmail(objValue,strError);
               break; 
          }
        case "lt": 
        case "lessthan": 
         { 
    	      ret = TestLessThan(objValue,cmdvalue,strError);
              break; 
         }
        case "gt": 
        case "greaterthan": 
         { 
			ret = TestGreaterThan(objValue,cmdvalue,strError);
            break; 
         }//case greaterthan 
        case "regexp": 
         { 
			ret = TestRegExp(objValue,cmdvalue,strError);
           break; 
         }
        case "dontselect": 
         { 
			 ret = TestDontSelect(objValue,cmdvalue,strError)
             break; 
         }
		case "dontselectchk":
		{
			ret = TestDontSelectChk(objValue,cmdvalue,strError)
			break;
		}
		case "shouldselchk":
		{
			ret = TestShouldSelectChk(objValue,cmdvalue,strError)
			break;
		}
		case "selone_radio":
		{
			ret = TestSelectOneRadio(objValue,strError);
		    break;
		}		 
    }//switch 
	return ret;
}
function VWZ_IsListItemSelected(listname,value)
{
 for(var i=0;i < listname.options.length;i++)
 {
  if(listname.options[i].selected == true &&
   listname.options[i].value == value) 
   {
     return true;
   }
 }
 return false;
}
function VWZ_IsChecked(objcheck,value)
{
 if(objcheck.length)
 {
     for(var c=0;c < objcheck.length;c++)
     {
       if(objcheck[c].checked == "1" && 
	     objcheck[c].value == value)
       {
        return true; 
       }
     }
 }
 else
 {
  if(objcheck.checked == "1" )
   {
    return true; 
   }    
 }
 return false;
}
/*
	Copyright (C) 2003-2008 JavaScript-Coder.com . All rights reserved.
*/

 function blshow(EL)
   {
      ELpntr=document.getElementById(EL);
      ELpntr.style.display='';
	  
	  return false;
   }
   
   function blhide(EL)
   {
      ELpntr=document.getElementById(EL);
	  ELpntr.style.display='none';
	  return false;			
   }
   function IsNumeric(sText)
{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
      return IsNumber;   
   }
   
   function HasNumbers(sText)
{
   var ValidChars = "0123456789";
   var IsNumber=false;
   var Char;
   for (i = 0; i < sText.length && IsNumber == false; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) != -1) 
         {
         IsNumber = true;
         }
      }
      return IsNumber;   
}

function HasCharacters(sText)
{
   var ValidChars = "|!\"#$%&/()=?'\\*+~[]{}^`";
   var IsNumber=false;
   var Char;
   for (i = 0; i < sText.length && IsNumber == false; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) != -1) 
         {
         IsNumber = true;
         }
      }
      return IsNumber;   
}

	
function http_request(url,divObj){
        ajax=objetoAjax();
        ajax.open("GET", url);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divObj.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}