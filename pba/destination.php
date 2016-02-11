<?php 

    require_once ("includes/clase_parametros_destination.php");
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
<script src="js/jquery.colorbox.js"></script>
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

	<script>
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$(".group1").colorbox({rel:'group1', width: 700, height: 450});
                        $(".group2").colorbox({rel:'group2', width: 700, height: 450});
                        $(".group3").colorbox({rel:'group3', width: 700, height: 450});
                        $(".group4").colorbox({rel:'group4', width: 700, height: 450});
                        $(".group5").colorbox({rel:'group5', width: 700, height: 450});
                        $(".group6").colorbox({rel:'group6', width: 700, height: 450});
                        $(".group7").colorbox({rel:'group7', width: 700, height: 450});
                        $(".group8").colorbox({rel:'group8', width: 700, height: 450});
                        $(".group9").colorbox({rel:'group9', width: 700, height: 450});
                        $(".group10").colorbox({rel:'group10', width: 700, height: 450});
                        $(".group11").colorbox({rel:'group11', width: 700, height: 450});
                        $(".group12").colorbox({rel:'group12', width: 700, height: 450});
                        $(".group13").colorbox({rel:'group13', width: 700, height: 450});
                        $(".group14").colorbox({rel:'group14', width: 700, height: 450});
                        $(".group15").colorbox({rel:'group15', width: 700, height: 450});
                        $(".group16").colorbox({rel:'group16', width: 700, height: 450});
                        $(".group17").colorbox({rel:'group17', width: 700, height: 450});
                        $(".group18").colorbox({rel:'group18', width: 700, height: 450});
                        $(".group19").colorbox({rel:'group19', width: 700, height: 450});
                        $(".group20").colorbox({rel:'group20', width: 700, height: 450});
                        
			$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
		});
	</script> 
  
</head>

<body>

	<?php include 'header.php';?><!--contiene todo el footer-->
        <?php $destination = ParametrosDestination::getContenidoDestination();?>
        <?php $descargas = ParametrosDestination::getDescargables();?>
        <?php $desing = ParametrosDestination::getDesingContenido();?>
        <?php $items = ParametrosDestination::getDesingItems() ?>
        <?php $paises = ParametrosContact::getPaises(); ?>
        
        
    <div id="imagen"><!--imagen estatica-->    	
        <div id="imgrojo" style="background-image: url(cms/modules/destination/files/big/<?php echo str_replace(" ","%20",trim($destination[0]['imagen']));?>) !important;"></div>
    </div><!--fin imagen estatica-->      
    
    <div id="rojo"><!--destacado-->
    
    	<div id="contentazul">
            <div id="titulo">Destination Management Company<br /><span id="negro"><?php echo utf8_encode(nl2br($destination[0]['titulo']));?></span></div>
            <div id="textazul">
                	<?php echo utf8_encode(nl2br(($destination[0]['texto'])));?>
            </div>
    	</div>
        
    </div><!--fin destacado-->
        
    <div class="contenido"> <!--contenido--> 
    	
    	<div id="contenidodo">
            
            <?PHP
                    
                    
            
                    if (is_array($descargas) && !empty($descargas)) {
                    $j=1;
                        for ($i = 0; $i < sizeof($descargas); $i++) {
                   
                            ?>	
            
            
                    <div id="columna"><!--item 1-->
            
            	<div id="filanombre">
                    <div id="nombre"><?php echo utf8_encode(nl2br($descargas[$i]['titulo'])); ?></div>
                </div>
                <div id="dowload">
                    <?php 
                        
                        if(!empty($descargas[$i]['descarga'])){
                    ?>
                    <a target="_blank" href="cms/modules/destination/files/<?php echo str_replace(" ","%20",trim($descargas[$i]['descarga'])); ?>"><div id="iconod">Download</div></a>
                    <?php 
                        }else{
                    ?>
                    <div class="nonegroup" ><div id="icovideo">N/A</div></div>
                    <?php 
                        }
                    ?>
                </div>
                                        <?php 
            
                            $id_descarga = $descargas[$i]['id_descarga'];
                            $galeria = ParametrosDestination::getGaleria($id_descarga);
            
            ?>
                        <div id="imagenes">
                            <?php
                            // print_r($galeria);
                            $ci=count($galeria);
                            if ($ci>0){        
                            ?>
                            <a class="group<?php echo $j; ?>" href="cms/modules/destination/files/big/<?php 
                            echo str_replace(" ","%20",($galeria[0]['imagenes'])); ?>" title="<?php echo trim($galeria[0]['titulo']); ?>"><div id="icoimg">Pictures</div></a>
                	<div style='display:none; '>
                        <?php
                            if (is_array($galeria)&& !empty($galeria)){
                                for ($n = 1 ;$n <sizeof($galeria);$n++){    
                        ?>
                
                    
                            <a  class="group<?php echo $j; ?>" href="cms/modules/destination/files/big/<?php echo str_replace(" ","%20",trim($galeria[$n]['imagenes'])); ?>" title="<?php echo trim($galeria[$n]['titulo']); ?>"></a>   
                   
                        
                        <?php 
                        
                                }
                                
                            }
                        
                        ?>
                         
                          </div>
                           <?php
                            }else{
                                ?>
                                <div class="nonegroup" ><div id="icoimg">N/A</div></div>
                                <!--<a class="group<?php echo $j; ?>"  title="NA"><div id="icoimg">NA</div></a>-->
                            <?php
                            } 
                            
                           ?>
                </div>
                <div id="video">
                    <?php
                            // print_r($galeria);
                            $ci=count($galeria);
                            if (!empty($descargas[$i]['url'])){        
                                $step1=explode('v=', $descargas[$i]['url']);
                                $step2 =explode('&',$step1[1]);
                                $vedio_id = $step2[0];
                            ?>
                                <a class='youtube' href="http://www.youtube.com/embed/<?php echo $vedio_id;?>?rel=0&wmode=transparent" title="Vida Nocturna Panamá"><div id="icovideo">Video</div></a>
                            <?php 
                            }else{
                                ?>
                                <div class="nonegroup" ><div id="icovideo">N/A</div></div>
                                <?php
                            }
                            ?>    
                </div>
               
            </div><!--fin item 1-->
                    
                    
                    
                            <?PHP
                            $j++;
                        }
                    }
                    ?>	
                     
            
        	
<!--        	<div id="columna">item 13
            
            	<div id="filanombre">
                	<div id="nombre">Typical Panamaian Dinner<br />with Folklorical Show</div>
                </div>
                <div id="dowload">
                	<a href="Tours/Casco Viejo Walking Tour.pdf"><div id="iconod">Download</div></a>
                </div>
                <div id="imagenes">
                	<a class="group1" href="imagenes/5.jpg" title="Me and my grandfather on the Ohoopee."><div id="icoimg">Pictures</div></a>
                </div>
                <div id="video">
                	<a class='youtube' href="http://www.youtube.com/embed/XEkxMIg2XEw?rel=0&amp;wmode=transparent" title="Vida Nocturna Panamá"><div id="icovideo">Video</div></a>
                </div>
            </div>fin item 13            -->
          </div>
          <div class="destacado-des"><!--destacado-->
            <div id="contentazul">
                <div id="titulo" style="color:#d8d8d8;"><?php echo utf8_encode(nl2br($desing[0][titulo])); ?><br /></div>
                  <div id="textlist">
                      <?php echo utf8_encode(nl2br($desing[0][texto])); ?><br /><?php echo utf8_encode(nl2br($desing[0][subtitulo])); ?><br />
                      
                      <?php
                        
                            
                            
                            if (is_array($items)&& !empty($items)){
                                
                                for ($d = 0 ;$d <sizeof($items);$d++){    
                            
                        
                        ?>
                            <ul class="list-add">
                                <li><?php echo utf8_encode($items[$d][item]);?></li>
                            </ul>
                        <?php 
                        
                                }
                                
                            }
                        
                        ?>
                  </div>
            </div>
          </div><!--fin destacado-->
          <div id="contenidodo">
            <div id="titulocentro">PROPOSAL REQUEST</div>
            <div id="subtitulotex">Request for a Proposal.<br />
            Please complete the information requested in the form. To navigate from field to field, use your Tab key. To submit the completed form, click on the button at the bottom or use your Enter key. For your convenience, we offer the option of completing all the information and/or attaching your document at the bottom of the form.<br /><br />
            Providing as much information as possible, allows our performance teams to deliver the right proposal the first time. You may select as many destinations as desired in one submission. Any information that varies from destination to destination (dates, etc.) can be included in the Program Information field or in an attached document. If you need assistance, please contact us at: 

			</div>
            
             <div id="formulario" >
                <form id="contact" method="post" action ="mailDestination.php" enctype="multipart/form-data">
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
