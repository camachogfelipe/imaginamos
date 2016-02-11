<?php
session_start();
include('../Connections/conn.php');
?>

<?php
    $login = $_GET['login'];
    $email = $_GET['email'];
    $queryParametro = "Select * From parametro1 Where id_parametro = 1";
    $queryResult = mysql_query($queryParametro, $conn) or die(mysql_error());
    $parametro = mysql_fetch_array($queryResult);
	
    if($parametro["valor"] == 1){
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
   <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
        var name = "<?php echo $login; ?>";
        var email = "<?php echo $login; ?>";
        
        var intervalTecla;
        var intervalMensaje = setInterval('chat.actualizarMensaje()', 1000);


        if(name=="null"){
            window.close();
        }
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("<span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
            $("#chat_mensaje").hide();
                chat.getState(name,email);
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
			 
			 $('#sendie2').click(function() {	
    		 					 
					var text = $('#sendie').val();
						
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length > 0) { 
    			        chat.send(text, name);	
    			        $('#sendie').val("");
    			        
                    } else {
                    
    					$('#sendie').val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  
             });
            
    	});
		
	function teclaPresionada(){
            chat.escribiendo(name,cate);
            clearInterval(intervalTecla);
            intervalTecla = setInterval('chat.ocultarMensaje()', 1000);
        }

        
    </script>

</head>

    <body background="#FFFFFF" onload="setInterval('chat.update(name)', 1000);" onbeforeunload ="chat.deleteChat(name,'0');">


        <div id="page-wrap">
    <div class="chat">

        <div class="chat_superior"><div class="chat_salir"><a href="#" onclick="window.close();"></a></div></div>
        
        <p id="name-area"></p>
        
        <div class="chat_mensajes"><div id="chat-wrap"><div id="chat-area"></div></div></div>
        <div class="chat_comentario">
        <form id="send-message-area" >
            <table width="98%" border="0" cellspacing="0" cellpadding="2">
				<tr>
					<td width="40%">
						<label>
                                                    <textarea id="sendie" maxlength = '1000' onkeyup="teclaPresionada();" ></textarea>
						</label>
					</td>
					<td width="10%">&nbsp;</td>
        			<td width="60%">
			    <a href="#" id="sendie2" class="button">
							<img  width="82" height="22"  border=0 />
                                                        
						</a>
					</td>
		      </tr>
		    </table>
            
        </form>
            <div id="chat_mensaje">El asesor esta escribiendo un mensaje...</div>
        </div>
        </div> 

    
    </div>

</body>

</html>

<?php } else if($parametro['valor'] == 0){ ?>
	<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="408" bgcolor="#FFEEE1">
	<table width="428" border="0" align="center" cellpadding="0" cellspacing="8">
                  <tr>
                    <td>&nbsp;</td>
                    <td  style="text-align:left"><label id="error" style="font-size: .8em; color:red"></label></td>
                  </tr>
                  <tr>
                    <td width="141" style="text-align:right">&nbsp;</td>
                    <td width="257" class="bg_campo2" style="text-align:left">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td colspan=2 id="vin2">
						<span class="Estilo2">
						En este momento el chat se encuentra temporalmente fuera de servicio, 
						para cualquier duda, inquietud o comentario haga clic <a href="../contactenos.php">aquí.</a>
						</span>
					</td>
                  </tr>
                  <tr>
                    <td valign="top">&nbsp;</td>
                    <td style="text-align:left"><table width="160" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="text-align:left">&nbsp;
							
						</td>
                      </tr>
                      <tr>
                        <td style="text-align:left">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style="text-align:left" id="vin2">&nbsp;
							
						</td>
                      </tr>
                      <tr>
                        <td style="text-align:left">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style="text-align:left" id="vin2">&nbsp;
							
						</td>
                      </tr>
                      <tr>
                        <td style="text-align:left">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
			</td>
		</tr>
	</table>
<?php } ?>