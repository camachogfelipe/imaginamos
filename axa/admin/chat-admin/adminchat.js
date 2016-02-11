/* 
Created by: Kenrick Beckett

Name: Chat Engine
*/

var instanse = false;
var state;
var mes;
var file;
var usuario = '';

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
    this.getState = getStateOfChat;
    this.deleteChat = deleteChat;
    this.escribiendo = escribiendo;
    this.actualizarMensaje = actualizarMensaje;
    this.ocultarMensaje = ocultarMensaje;
}

//gets the state of the chat
function getStateOfChat(archivo){
	file = archivo;
	nickname = 'Admin';
	nickname = 'usuario';
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "adminprocess.php",
			   data: {  
			   			'function': 'getState',
						'nickname': nickname,
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
					
				    state = data.state;
				   instanse = false;
			   }
			});
	}	 
}

//Updates the chat
function updateChat(){
	
	 if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "adminprocess.php",
			   data: {  
			   			'function': 'update',
						'state': state,
						'nickname': usuario,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
			      if(data.text){
						$('#chat-area').html("");
                        //alert(data.text);
                        for (var i = 0; i < data.text.length; i++) {
                            var texto = data.text[i];
                            var fecha = '';
                            if(data.text[i+1]!=undefined && i!=0){
                                fecha = '<br/>' + data.text[i+1];
                                i++;
                            }
                            $('#chat-area').append($('<p>'+ texto + fecha +'</p>'));
                        }
				   }
				   document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				   instanse = false;
				   state = data.state;
			   }
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

    function actualizarMensaje(){
        if(!instanse){
            instanse = true;
            $.ajax({
                type: "POST",
                url: "adminprocess.php",
		data: {
                    'function'  : 'mensaje',
                    'state'     : state,
                    'nickname'  : usuario,
                    'file'      : file
		},
		dataType: "json",
		success: function(data){
                    if(data.estado == "1"){
                        $("#chat_mensaje").show();
                    } else {
                        $("#chat_mensaje").hide();
                    }
                    instanse = false;
		},
                error: function(XMLHttpRequest,textStatus,errorThrown){
                    //alert("XMLHttpRequest="+XMLHttpRequest.responseText+"\ntextStatus="+textStatus+"\nerrorThrown="+errorThrown);
                }
            });
        }
    }

    function escribiendo(){
        if(!instanse){
            instanse = true;
            $.ajax({
                type: "POST",
                url: "adminprocess.php",
		data: {
                    'function': 'escribiendo',
                    'state': state,
                    'nickname': usuario,
                    'file': file
		},
		dataType: "json",
		success: function(data){
                    instanse = false;
		},
                error: function(XMLHttpRequest,textStatus,errorThrown){
                    //alert("XMLHttpRequest="+XMLHttpRequest.responseText+"\ntextStatus="+textStatus+"\nerrorThrown="+errorThrown);
                }
            });
        }
    }

    function ocultarMensaje(){
        if(!instanse){
            instanse = true;
            $.ajax({
                type: "POST",
                url: "adminprocess.php",
		data: {
                    'function': 'ocultarMensaje',
                    'state': state,
                    'nickname': usuario,
                    'file': file
		},
		dataType: "json",
		success: function(data){
                    instanse = false;
		},
                error: function(XMLHttpRequest,textStatus,errorThrown){
                    //alert("XMLHttpRequest="+XMLHttpRequest.responseText+"\ntextStatus="+textStatus+"\nerrorThrown="+errorThrown);
                }
            });
        }
    }

//send the message
function sendChat(message, archivo)
{       
	file = archivo;
	nickname = 'Admin';
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "adminprocess.php",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   }
		});
}
function deleteChat(nickname2){
	alert("delete"+nickname2);
	$.ajax({
		type: "POST",
		url: "adminprocess.php",
		data: {
			'function': 'delete',
			'nickname': nickname2,
			'file': file
		},
		dataType: "json",
		success: function(data){
			alert("Usuario eliminado.");
			window.location.reload();
		}
	});
}
