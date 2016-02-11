// JavaScript Document

var flash        = false;
var flashStep    = 0;
var flashState   = new Array("","Nuevo mensaje");
var flashDefault = document.title;

function abrir(direccion, pantallacompleta, herramientas, direcciones, estado, barramenu, barrascroll, cambiatamano, ancho, alto, izquierda, arriba, sustituir){
     var opciones = "fullscreen=" + pantallacompleta +
                 ",toolbar=" + herramientas +
                 ",location=" + direcciones +
                 ",status=" + estado +
                 ",menubar=" + barramenu +
                 ",scrollbars=" + barrascroll +
                 ",resizable=" + cambiatamano +
                 ",width=" + ancho +
                 ",height=" + alto +
                 ",left=" + izquierda +
                 ",top=" + arriba;
     var ventana = window.open(direccion,"venta",opciones,sustituir);

}

function setIconAvatar(idvalue,idsrc) {
	var oVal=document.getElementById(idvalue);
	var oSrc=document.getElementById(idsrc);
	
	if(oVal || oSrc){
		var oOpt=document.getElementById('imgAvatar'+oVal.value)
		if (oOpt) oSrc.src=oOpt.title;
	}
}

function GetNumUnico(){	
	var Dia = new Date();	
	var d = Dia.getDay();	
	var n = Dia.getMonth();	
	var a = Dia.getFullYear();	
	var m = Dia.getMinutes();	
	var h = Dia.getHours();	
	var s = Dia.getSeconds();	
	var Num = "" + a + n + d + h + m + s;		
	return parseInt(Num);
}

function setInitLogin() {
	try {	
		var oParent=document.getElementById('iduser');
		if(oParent){
			oParent.focus();
		}
	}catch(err){
		 alert('Error setInitLogin:'+err.description);
	}			
}

function setInit() {
	try {	
		var oParent=document.getElementById('message');
		if(oParent){
			oParent.value="";
			oParent.focus();
		}
	}catch(err){
		 setMessage(GetNumUnico(),'Error setInit:'+err.description);
	}			
}	

function setEmoticon(string){
	try {
		var oParent=document.getElementById('message');
		if(oParent){
			oParent.value+=string; 
			oParent.focus();
		}
	}catch(err){
		 setMessage(GetNumUnico(),'Error setEmoticon:'+err.description);
	}
}
	
function setUsers(users) {
	try{
		 var oParent=document.getElementById('panelUsers');
		 if(oParent){
			 oParent.innerHTML=users;
		 }
	}catch(err){
		 setMessage(GetNumUnico(),'Error setUsers:'+err.description);
	}
}

function setTo(user,name){
	var oParentTo=document.getElementById('to');
	var oParentLbl=document.getElementById('lblTo');
		
	try {
		
		if(oParentTo || oParentLbl){
			oParentTo.value=user;
			oParentLbl.innerHTML=name;
		}
		
		setInit();
	}catch(err){
		 setMessage(GetNumUnico(),'Error setTo:'+err.description+' '+name);
	}
}
	
function setRoom(room,name) {
	try {	
		var head = document.getElementsByTagName('head').item(0);
		var old  = document.getElementById('lastLoadedRoom');
		var nam  = document.getElementById('nroom');
		if (nam) nam.innerHTML=name;
		if (old) head.removeChild(old);
		script = document.createElement('script');
		script.src = "helpdeskquery.php?action=2&room="+room+"&name="+name;
		script.type = 'text/javascript';
		script.defer = true;
		script.id = 'lastLoadedRoom';
		void(head.appendChild(script));
	}catch(err){
		 setMessage(GetNumUnico(),'Error setRoom:'+err.description+' '+name);
	}
}
	
function setStatus(status,name) {
	try {
		var head = document.getElementsByTagName('head').item(0);
		var old  = document.getElementById('lastLoadedStatus');
		var sta  = document.getElementById('nstatus');
		if (sta) sta.innerHTML=name;
		if (old) head.removeChild(old);
		script = document.createElement('script');
		script.src = "helpdeskquery.php?action=4&status="+status+"&name="+name;
		script.type = 'text/javascript';
		script.defer = true;
		script.id = 'lastLoadedStatus';
		void(head.appendChild(script));
	}catch(err){
		 setMessage(GetNumUnico(),'Error setStatus:'+err.description+' '+name);
	}
}	

function setflashTitle() {
	try {
		document.title = flashDefault + " " + flashState[flashStep++ % 2] ;
		flash=setTimeout("setflashTitle()",1000);
		
		if(flashStep>=10) {
			clearTimeout(flash);
			flashStep    = 0;
			document.title = flashDefault;
		}			
	}catch(err){
		setMessage(GetNumUnico(),'Error setflashTitle:'+err.description);
	}
}

function setMessage(id,msgs) {
	try{
		var eDIV = document.createElement("div");
		var oParent=document.getElementById('panelMessages');
		var oUpdate=document.getElementById('update');
		var oDay = new Date();
		
		if(eDIV) {
			eDIV.id="myMsgs"+id;
			eDIV.innerHTML=msgs;
		}
		
		if(oParent || eDIV){
			oParent.appendChild(eDIV);
			oParent.scrollTop = oParent.scrollHeight;
		}
		
		if(oUpdate) {
			oUpdate.innerHTML=oDay.getHours()+":"+oDay.getMinutes()+":"+oDay.getSeconds();
		}
		
		setflashTitle();
		
	}catch(err){
		alert('Error setMessage:'+err.description+' '+msgs);
	}	
}

function callServer() {	
	try{
		var head = document.getElementsByTagName('head').item(0);
		var old  = document.getElementById('lastLoadedCmds');
		if (old) head.removeChild(old);
		script = document.createElement('script');
		script.src = "helpdeskquery.php?action=1";
		script.type = 'text/javascript';
		script.defer = true;
		script.id = 'lastLoadedCmds';
		void(head.appendChild(script));
	}catch(err){
		setMessage(GetNumUnico(),'Error callServer:'+err.description);
	}	
}