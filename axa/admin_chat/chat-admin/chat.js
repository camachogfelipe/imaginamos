/* 
    Created by: Kenrick Beckett

    Name: Chat Engine
    */

    var instanse = false;
    var state;
    var mes;
    var file;
    var usuario = '';
    var idUsuario = 0;

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
    function getStateOfChat(nickname,em){
        usuario = nickname;
        email = em;
        if(!instanse){
            instanse = true;
            $.ajax({
                type: "POST",
                url: "process.php",
                data: {
                    'function': 'getState',
                    'nickname': nickname,
                    'email': email,
                    'file': file
                },
                dataType: "json",
                success: function(data){
                    /*if(data.state == -1){
                        alert('El nombre de usuario ya se encuentra registrado.');
                        document.location.href = 'index.php';
                    }*/
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
                url: "process.php",
		data: {
                    'function': 'update',
                    'state': state,
                    'nickname': usuario,
                    'file': file
		},
		dataType: "json",
		success: function(data){
                    if(data.state == -1){
                        //alert('La sesión ha caducado por inactivdad!');
						//window.close();
						$('#chat-area').html("La sesión ha caducado por inactivdad, refresca la pagina.");
						
                    }
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
                    try {
                        document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
                        //alert(/*"Arriba: " + $('#chat-area').scrollTop +*/ " Altura:" + document.getElementById('chat-area').scrollHeight);
                    } catch(e) {
                        //alert(e);
                    }
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
                url: "process.php",
		data: {
                    'function'  : 'kkkkkk',
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
                url: "process.php",
		data: {
                    'function': 'escribiendo',
                    'state': state,
                    'nickname': usuario,
                    'file': file
		},
		dataType: "json",
		success: function(data){
                    instanse = false;
		}
            });
        }
    }

    function ocultarMensaje(){
        if(!instanse){
            instanse = true;
            $.ajax({
                type: "POST",
                url: "process.php",
		data: {
                    'function': 'ocultarMensaje',
                    'state': state,
                    'nickname': usuario,
                    'file': file
		},
		dataType: "json",
		success: function(data){
                    instanse = false;
		}
            });
        }
    }

    //send the message
    function sendChat(message, nickname){
        updateChat();
        $.ajax({
            type: "POST",
            url: "process.php",
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

    //Elimina el usuario
    function deleteChat(nickname,enviar){
        $.ajax({
            type: "POST",
            url: "process.php",
            data: {
                'function': 'delete',
                'nickname': nickname,
                'enviar':enviar,
                'file': file
            },
            dataType: "json",
            success: function(data){
                //alert("Gracias por usar nuestros servicios.");
            }
        });
        if(enviar=='1'){
            //alert("La conversación ha sido enviada a su correo electrónico.");
        }
       // alert('Gracias por utilizar nuestro servicio en línea');
    }
