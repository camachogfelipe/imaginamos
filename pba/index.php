<?PHP 
	require_once("includes/clase_parametros.php");
       
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
<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script src="js/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				$('#carousel').carouFredSel({
					width: $(window).width(),
					height: $(window).height(),
					align: false,
					items: {
						visible: 1,
						width: 'variable',
						height: 'variable'
					}
				});

				$(window).resize(function() {
					var newCss = {
						width: $(window).width(),
						height: $(window).height(),
					};
					$('#carousel').css( 'width', newCss.width*4 );
					$('#carousel').parent().css( newCss );
					$('#carousel div').css( newCss );
				}).resize();
				
				
				$('#carousel').carouFredSel({
					
					next: '#next .carousel',
       				prev: '#prev .carousel',
					scroll: {
						fx: 'crossfade',
					duration: 700,
					timeoutDuration: 5000,						
						onBefore: function( data ) {
							$('#thumbnails').trigger( 'slideTo', [ $('#thumbnails div[id='+ data.items.visible.attr( 'id' ) +']'), -1 ] );
						}
					}
				});

				$('#thumbnails').carouFredSel({
					auto: false,

					items: {
						start: -1
					}
				});

				$('#thumbnails div').click(function() {
					$('#carousel').trigger( 'slideTo', [ $('#carousel div[id='+ $(this).attr( 'id' ) +']') ] );
					

				}).css( 'cursor', 'pointer' );
			});
		</script>
        
		<script>
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$(".group1").colorbox({rel:'group1'});
			$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
		});
	</script> 
        
</head>

<body>

    <?php include 'header.php';?><!--contiene todo el footer-->
        
	<div id="wrapper"><!--banner-->
            <?php $datos1 = Parametros::getTituloBanner(); ?>
            
            
        <div id="texbanner"><?php echo trim($datos1[0]['banners_txt1']);?><br />
            
            <?php 
                                
                if(!empty($datos1[0]['banners_txt2'])){  
            
                    if (!empty($datos1[0]['banners_url'])){        
                                $step1=explode('v=', $datos1[0]['banners_url']);
                                $step2 =explode('&',$step1[1]);
                                $vedio_id = $step2[0];
                    }
            ?>
            <span id="link"><a class='youtube' href="http://www.youtube.com/embed/<?php echo $vedio_id;?>?rel=0&wmode=transparent" title="Vida Nocturna Panamá"><?php echo trim($datos1[0]['banners_txt2']);?></a></span></div>   
            <?php 
                    
                }  else {
                    
                    ?>
            <span id="link"></span></div>
            <?php
                }
            ?>
           
    	<div id="text" ><!--thumnail-->
        	
        	<div id="thumbnails">
                    <?PHP
                    $datos = Parametros::getImgBanner();

                    if (is_array($datos) && !empty($datos)) {

                        for ($i = 0; $i < sizeof($datos); $i++) {
                            $con = $i + 1;
                            $tit = 'c' . $con;
                            ?>	 
                    <div id="<?php echo $tit; ?>"><img src="cms/modules/bannerHome/files/small/<?php echo $datos[$i]['imagen_banners']; ?>" /></div>
                    
                    
                    
                            <?PHP
                        }
                    }
                    ?>	
                     
            </div>
            
        </div><!--fin thumnail-->
        
         
        <div id="carousel"><!--carussel-->
         <?PHP
                    $datos = Parametros::getImgBanner();

                    if (is_array($datos) && !empty($datos)) {

                        for ($i = 0; $i < sizeof($datos); $i++) {
                            $con = $i + 1;
                            $tit = 'c' . $con;
                            ?>	 
                    <div id="<?php echo $tit; ?>"><img src="cms/modules/bannerHome/files/big/<?php echo trim($datos[$i]['imagen_banners']); ?>"  width="960" /></div>
                    
                    
                    
                            <?PHP
                        }
                    }
                    ?>	       
            
        </div><!--fin carussel-->
                
    </div><!--fin banner-->
    <div id="prev">
    <a href="#"class="carousel" title="Show previous"></a>
    </div>
    <div id="next">
	<a href="#"  class="carousel" title="Show next"></a>
    </div> 
       
    <div id="footer"><!--footer-->
    	<div id="contefooter">
        	<div id="logofoter"></div>
            <div id="copi" style="margin-right:140px;">Copyright 2013 <span id="amarillo">PBA HOLDING GROUP.</span></div>
            <div class="footer-autor"><span id="ahorranito2"></span><a href="http://www.imaginamos.com" target="_blank">Web Design: </a><a href="http://www.imaginamos.com" target="_blank">imagin<span>a</span>mos.com</a></div>
            <div id="sigeunos">
            	<div id="texsig">FOLLOW US</div>
            	<div id="faceb"><a href="https://www.facebook.com/pages/PBA-Holding-Group/229572283837423" target="_blank"></a></div>
            	<div id="titer"><a href="https://twitter.com/PBAHoldingGroup" target="_blank"></a></div>
              <div id="tip"><a href="http://www.tripadvisor.com/Attraction_Review-g294480-d4444360-Reviews-PBA_Holding_Group_Private_Tours-Panama_City_Panama_Province.html" target="_blank"></a></div>
              <div id="pint"><a href="https://www.pinterest.com/" target="_blank"></a></div>
            	<div id="email"><a href="mailto:pba@pba-panama.com"></a></div>
            </div>
        </div>
    </div><!--fin footer-->
        
</body>
</html>
