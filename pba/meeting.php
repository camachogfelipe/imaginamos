<?PHP 
	require_once("includes/clase_parametros_meeting.php");
        require_once("includes/clase_parametros_contact.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="dicermex" lang="es" content="texto empresarial" />
<meta name="dicermex" content="2012" />
<meta name="calvo" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PBA Panama Holding Group</title>
<link rel="stylesheet" href="css/styleold.css" type="text/css" media="all" />
<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.dimensions.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script src="js/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/enhance.js"></script>
<script type="text/javascript" charset="utf-8">
      $(function(){
				if($("#contact").size()>0){$("#contact").validationEngine();};
				$("input.adjunto").filestyle({ 
					image: "imagenes/cargar.png",
					imageheight: 30,
					imagewidth: 180,
					width: 251
				});
        //$("input, select, button").uniform();
      });
</script>

<script type="text/javascript">
	jQuery().ready(function(){
		// simple accordion
		jQuery('#list1a').accordion({
    		alwaysOpen: false,
			autoheight: false,			
		});
		jQuery('#list1b').accordion({
			autoheight: false,
    		active: false, 
    		alwaysOpen: false
		});	
	});		
</script>  
  
</head>

<body>

	<?php include 'header.php';?><!--contiene todo el footer-->
        <?php $meeting = ParametrosMeeting::getImgMeeting();?>
        <?php $proposal = ParametrosMeeting::getProposal();?>
        <?php $titulo = ParametrosMeeting::getTituloMeeting();?>
        <?php $paises = ParametrosContact::getPaises(); ?>
        
        
    <div id="imagen"><!--imagen estatica-->    	
        <div id="imgmeting" style="background-image: url(cms/modules/meeting/files/big/<?php echo str_replace(" ","%20",trim($meeting[0]['imagen_meeting_contenido']));?>) !important;"></div>
    </div><!--fin imagen estatica-->      
    
    
        
    <div class="contenidometing"> <!--contenido--> 
    	
    	<div id="contenido">
        
        	<div id="titulocentro">Meeting Planner Service</div>
                <div id="subtitulotex"><?php echo utf8_encode(nl2br(($meeting[0]['texto'])));?>
			</div>
            <div id="fila1">
                <div id="seccion1met"> <!--item 1-->
                    <?php 
                     if (!empty($titulo[0]['titulo'])){
                     ?>
                    <div id="titulopq"><?php echo utf8_encode(nl2br(($titulo[0]['titulo'])));?></div>
                    <?php
                     }
                     ?>
                    <ul type="circle" class="lista">
                           <?PHP
                    $id = $titulo [0]['id_meeting_titulo'];
                    $item = ParametrosMeeting::getItemMeeting($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                        <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    </ul>
                </div> <!--fin item 1-->
                
                <div id="seccion2met"> <!--item 2-->
                    <?php 
                     if (!empty($titulo[1]['titulo'])){
                     ?>
                    <div id="titulopq"><?php echo utf8_encode(nl2br(($titulo[1]['titulo'])));?></div>
                    <?php
                     }
                     ?>
                    <ul type="circle" class="lista">
                        <?PHP
                    $id = $titulo [1]['id_meeting_titulo'];
                    $item = ParametrosMeeting::getItemMeeting($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                        <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    </ul>
                </div> <!--item 2-->
                
                <div id="seccion3met"> <!--item 3-->
                    <?php 
                     if (!empty($titulo[2]['titulo'])){
                     ?>
                    <div id="titulopq"><?php echo utf8_encode(nl2br(($titulo[2]['titulo'])));?></div>
                    <?php
                     }
                     ?>
                    <ul type="circle" class="lista">
                        <?PHP
                    $id = $titulo [2]['id_meeting_titulo'];
                    $item = ParametrosMeeting::getItemMeeting($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                        <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    </ul>
                </div> <!--item 3-->
            </div>
            
            <div id="fila1">
                <div id="seccion1met"> <!--item 4-->
                    <?php 
                     if (!empty($titulo[3]['titulo'])){
                     ?>
                    <div id="titulopq"><?php echo utf8_encode(nl2br(($titulo[3]['titulo'])));?></div>
                    <?php
                     }
                     ?>
                    
                    <ul type="circle" class="lista">
                       <?PHP
                    $id = $titulo [3]['id_meeting_titulo'];
                    $item = ParametrosMeeting::getItemMeeting($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                        <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    </ul>
                </div> <!--item 4-->
                
                <div id="seccion2met"> <!--item 5-->
                     <?php 
                     if (!empty($titulo[4]['titulo'])){
                     ?>
                    <div id="titulopq"><?php echo utf8_encode(nl2br(($titulo[4]['titulo'])));?></div>
                    <?php
                     }
                     ?>
                   
                    <ul type="circle" class="lista">
                        <?PHP
                    $id = $titulo [4]['id_meeting_titulo'];
                    $item = ParametrosMeeting::getItemMeeting($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                        <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    </ul>
                </div> <!--item 5-->
                
                 <div id="seccion3met"> <!--item 6-->
                     <?php 
                     if (!empty($titulo[5]['titulo'])){
                     ?>
                    <div id="titulopq"><?php echo utf8_encode(nl2br(($titulo[5]['titulo'])));?></div>
                    <?php
                     }
                    ?>
                    <ul type="circle" class="lista">
                        <?PHP
                    $id = $titulo [5]['id_meeting_titulo'];
                    $item = ParametrosMeeting::getItemMeeting($id);

                    if (is_array($item) && !empty($item)) {

                        for ($i = 0; $i < sizeof($item); $i++) {
                            
                            ?>	 
                    
                        <li><span id="listile">&#9679;</span><?php echo utf8_encode(nl2br($item[$i]['item'])); ?></li>
                    
                    
                            <?PHP
                        }
                    }
                    ?>
                    </ul>
                </div>
            </div>
                
                 
            
            
        	<div id="titulocentro">PROPOSAL REQUEST</div>
                <div id="subtitulotex"><?php echo utf8_encode(nl2br($proposal[0]['titulo']));?><br />
           <?php echo utf8_encode(nl2br(($proposal[0]['texto'])));?>
			</div>
            
            <div id="formulario" >
                <form id="contact" method="post" action ="mailMeeting.php" enctype="multipart/form-data">
                	<div id="seccion1" style="margin-left:20px;"><!--seccion 1-->
                    		
                        <div id="formulariocampo"> 
                        	<input name="Name" type="text" class="validate[required]" data-validation-placeholder="Name" onblur="if(this.value=='') this.value='First name'" onclick="if(this.value=='First name') this.value=''" value="First name" ;/>
                        </div>	
                        
                        <div id="formulariocampo">
                        	<input name="E-mail" type="text" class="validate[required, custom[email]]" data-validation-placeholder="E-mail" onblur="if(this.value=='') this.value='E-mail'" onclick="if(this.value=='E-mail') this.value=''" value="E-mail" ;/>
                        </div>
                        
                        <div id="formulariocampo">
                        	<input name ="Phone" type="text" id="texto" onblur="if(this.value=='') this.value='Phone'" onclick="if(this.value=='Phone') this.value=''" value="Phone" ;/>
                        </div>

                        <div class="contenedor_select3">                            
                        	<select name ="Country" id='country' class="sel3">
                            	<option>Country</option>
                                <?php
                                
                                if (is_array($paises)&&!empty($paises)) {
                                    
                                    for ($i=0;$i < sizeof($paises);$i++){
                                        
                                
                                ?>
                                <option value='<?php echo $paises[$i]['Code'] ?>'><?php echo utf8_encode($paises[$i]['Name']);?></option>
                                <?php
                                    
                                     
                                     
                                    }
                                  
                                }
                                ?>
                            </select>                                       
                        </div>
                        
                        <div class="contenedor_select3"> 
                            <div id="ciudad2">
                                <select name ="City" class="sel3">
                                    <option>City</option>
                                
                                </select> 
                            </div>
                               <div id='ciudad' class="selector">
                        	 
                                   </div>
                            </div>
                        
                    </div><!--fin seccion 1-->
                    
                    
                	<div id="seccion2"><!--seccion 1-->
                    		
                        <div id="formulariocampo">
                        	<input name ="Lastname"type="text" id="texto" onblur="if(this.value=='') this.value='Last name'" onclick="if(this.value=='Last name') this.value=''" value="Last name" ;/>
                        </div>	
                        
                        <div id="formulariota">
                        	<textarea name="Comments" class='rom validate[required]' rows="4" data-validation-placeholder="Comments" onblur="if(this.value=='') this.value='Comments'" onclick="if(this.value=='Comments') this.value=''" ;>Comments</textarea>
                        </div>
                        
                        <div id="formulariocampo" class="field-attach">
                        	<div class="margen-adjuntar">
                            <div class="datos-adjunto">
                              <div class="mascara-adjunto"></div>
                              <label class="attach">                                                                         
                                <input type="file" class="adjunto" name="file" />
                              </label>
                            </div>
                          </div>
                        </div>
                        
                        <div id="btn" style="margin-right:-6px;"><a onclick="$('#contact').submit();">SEND</a></div>
                        <!--<div id="btn" ><a href="#">Attach Document</a></div>
                        <div id="btn"><input name ="file" type="file" /></div>-->
                        
                    </div><!--fin seccion 1-->
                </form>
            </div>
            
            <div id="titulocentro"></div>
            <div id="info">If you need assistance, please contact us at: <br /><br />PBA Holding Group   I   Phones: + ( 507 ) 269-7348  /  269-7349    I   FAX: + ( 507 ) 269-6879   I   www.pba-panama.com<br />Emails: pba@pba-panama.com   I   pba@cableonda.net

			</div>
            
    	</div>
        
    </div> <!--fin cotenido-->   
    
    <?php include 'footer.php';?><!--contiene todo el footer-->  
        
</body>
</html>
<script>
    jQuery(document).ready(function(){ 
        $('#ciudad').hide()
        
    });
    
     $('#country').change(function() {
         var country = $('#country').val();
         $('#ciudad2').hide()
         $("#ciudad").css("display", "block").on("load", function(){$("input, select, button").uniform();});
        $.ajax({//Ajax
               type: 'POST',
               url: 'includes/recibe.php',
               async: false,
               //dataType: 'json',
               data:({country : country}),
              error:function(objeto, quepaso, otroobj){alert('Error de Conexión , Favor Vuelva a Intentar');},
              success:function(data){
               $('#ciudad').html(data);
               }
            }); //AJAX
    });
</script>
