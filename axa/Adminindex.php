<?php require_once('../restriccion.php'); ?>
<?php require_once('../Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

/*$colname_query = "-1";
if (isset($_GET['t'])) {
  $colname_query = $_GET['t'];
}*/
mysql_select_db($database_conn, $conn);
$query_query = sprintf("SELECT * FROM chat1 WHERE activo = 1", GetSQLValueString($colname_query, "int"));
$query = mysql_query($query_query, $conn) or die(mysql_error());
$totalRows_query = mysql_num_rows($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $archivo = $_REQUEST['a']; ?>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
     <link rel="stylesheet" href="../css/feval2.css" type="text/css" />
     <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="adminchat.js"></script>
    <!--<script type='text/javascript' src='soundmanager/script/soundmanager2.js'></script>-->
    <script type="text/javascript">
    
        
		        
        // default name is 'Guest'
    	name = "Admin";
    	
		if(!name){
			window.close();
		}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("<span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();

        var intervalTecla;
        var intervalMensaje = setInterval('chat.actualizarMensaje()', 1000);
		
    	$(function() {
    	$("#chat_mensaje").hide();
    		 chat.getState('<?php echo $archivo ?>');
    		 
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
                     
    			        chat.send(text, '<?php echo $archivo ?>');
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
    			        chat.send(text, '<?php echo $archivo ?>');
    			        $('#sendie').val("");
    			        
                    } else {
                    
    					$('#sendie').val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  
             });
    	});
		
		updateChat();

        function updateUsers() {
          $.ajax({
                type: "POST",
                url: "adminprocess.php",
                data: {
                    'function': 'users',
                },
                success: function(data){
                    data=data.replace("[]","");
                    $("#listausuarios").html(data);
                }
            });
        }
        updateUsers();
/*
        function reproducirSonido(){
            soundManager.url = 'soundmanager/swf/';
            soundManager.debugMode = true;
            soundManager.onload = function() {
                soundManager.createSound('alerta','pop.mp3');
                soundManager.play('alerta');
            };
        }
        reproducirSonido();*/

        function teclaPresionada(){
            chat.escribiendo();
            clearInterval(intervalTecla);
            intervalTecla = setInterval('chat.ocultarMensaje()', 1000);
        }
    </script>
	
	
</head>

<body onload="setInterval('chat.update(name)', 500);setInterval('updateUsers()', 500)">
	<div id="listausuarios">
		<ul>
			<?php while($row_query = mysql_fetch_assoc($query)){ ?>
				<li>
                                    <a href='Adminindex.php?a=<?php echo $row_query['archivo'] ?>'>
                                            <?php echo utf8_decode($row_query['login']); ?>
                                    </a>
                                    
                                    <img src="images/Delete-32.png" width="12" title="Eliminar" alt="Eliminar" style="cursor: pointer;" onclick="chat.deleteChat('<?php echo $row_query['login']; ?>')"/>
				</li>
			<?php } ?>
		</ul>
	</div>
    <div id="page-wrap">
        <div class="chat">

        <div class="chat_superior"></div>

       
        <p id="name-area"></p>

         <div class="chat_mensajes">
        <div id="chat-wrap">
                <div id="chat-area"></div>
        </div>
         </div>
        <div class="chat_comentario">
		
        
        <form id="send-message-area">
            <table width="600" border="0" cellspacing="0" cellpadding="2">
                <tr>
                    <td width="35%">
                        <label>
                            <textarea id="sendie" maxlength = '1000' onkeyup="teclaPresionada();" style="width:279px" ></textarea>
                        </label>
                    </td>
                    <td width="5%">&nbsp;</td>
                    <td width="60%">
                        <img src="images/btn_enviarchat.gif" id="sendie2" width="75" height="22"  border=0 style="cursor: pointer;" />
                    </td>
                </tr>
            </table>
        </form>
            <div id="chat_mensaje">El usuario esta escribiendo un mensaje...</div>
        </div>
        </div>
    </div>

</body>

</html>

<?php mysql_close($conn); ?>