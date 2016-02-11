<?php 
require_once('class/class_pintar.php');
$obj= new Pintar();
$result = $obj->Pintarcatalogo();
$c_cat1=count($result);
//echo $c_cat1.'-->';
$pics = $obj->Pintarcatalogo_pics(8);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>.: TECNOSALUD :.</title>
<meta name="viewport" content="width=1008, maximum-scale=2" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/tecnosalud.css" rel="stylesheet" />

</head>
<body>

	<!--<div id="loader"><div id="progress"></div></div>-->

        
	<div class="con-general">
  	<div class="margen-general">
    
    
      <?php include("header.php"); ?>
      
     
      
      <div class="info-auto">
          
      	<h6>CATÁLOGOS</h6>
        
        <input type="hidden" id="ccat" value="<?php echo $c_cat1; ?>"
        <div class="scroll-catalogos">
        	
          	<!--Catalogo-->
                
                <?php 
                    
                    if(is_array($result)&& !empty($result)){
                       $i=0;
                       $j=1;
                    while($i <  sizeof($result)){
                        $id_cat=$result[$i]['catalogo_id'];
                        $result_p = $obj->Pintarcatalogo_pics($id_cat);
                        $tp=count($result_p); $v1='0';
                        if($tp >= 3){
                        if (($tp%2)!=0){
                         $v1=1;   
                        }
                        $z=0;
                            if(is_array($result_p)&&!empty($result_p)){        
                                while($z < sizeof($result_p)){
                                    echo "<input type='hidden' id='cat_".$i."_".$z."' name='cat_".$i."[".$z."]' value='".str_replace(" ", "%20", utf8_encode($result_p[$z]['catalogo_pics_path']))."'  />";
                                    echo "<input type='hidden' id='tit_".$i."_".$z."' name='tit_".$i."[".$z."]' value='".utf8_encode($result_p[$z]['catalogo_pics_titulo'])."'  />";
                                    $z++;
                                }
                                if ($v1==1){
                                       // $z++;
                                        echo "<input type='hidden' id='cat_".$i."_".$z."' name='cat_".$i."[".$z."]' value='contra-b(1)1370026743.jpg'  />";
                                        echo "<input type='hidden' id='tit_".$i."_".$z."' name='tit_".$i."[".$z."]' value=''  />";
                                        $z++;
                                 }
                                echo "<input type='hidden' id='tcat_".$i."' name='tcat_".$i."[".$z."]' value='".$z."'  />";
                            }
                        
                ?>
                
            <div class="item-catalogo">
                <a style="padding-top: 100px" name="Ancla<?php echo $i ?>" id="a"></a>
              <div class="mosaic-block bar" title="Catálogo línea farmaceutica">
                <div class="mosaic-overlay catalogo-<?php echo $j ?>">
                  <div class="details">
                      <p class="t-mosaic-catalogo"><?php echo utf8_encode($result[$i]['catalogo_title']); ?></p> 
                      <p class="p-mosaic"><?php echo utf8_encode($result[$i]['catalogo_article']); ?></p>
                  </div>
                </div>
                  <div class="mosaic-backdrop catalogo-<?php echo $j ?>" style="background-image: url(cms/modules/catalogo/files/big/<?php echo str_replace(" ", "%20", utf8_encode($result[$i]['catalogo_image']));?>) !important;"></div>
                <a class="bt-pdf" href="pdf.pdf" target="_blank"><div class="bt-mas-pdf">Descargar PDF</div></a> 
              </div>
            </div> 
            
            <!--Fin catalogo-->
           <?php
           }
                $i++;
                $j++;
                    }
                }
           ?>
            
          
        </div>
      </div>
  	</div>
  </div>
          
        
  <?php include("footer.php"); ?>
  

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
  <!--<script type="text/javascript" src="js/jquery.pajinate.js"></script>-->
	<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
  <script type="text/javascript" src="js/flipbook.min.js"></script>
  <!--<script type="text/javascript" src="js/jquery.colorbox.js"></script>-->
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){
		//$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$('.main-menu').superfish();
		$('.scroll-catalogos').jScrollPane();
		//$('#paging_site').pajinate({items_per_page : 1});
		var over = 0; $(".mosaic-block").hover(function(){if(over==0){$(this).children(".bt-pdf").animate({bottom:10}, 50); over=1}else{$(".bt-pdf").animate({bottom:-390}, 50); over=0}});
		$('.bar').mosaic({animation: 'slide'});
                var ccat=$("#ccat").val();
               // alert(ccat)
              var z=1;
                for (var i=0;i<ccat;i++){
                 var pcat=$("#tcat_"+i).val();
                  var pages=[];
                  
                  //if (pcat>=3){
                    for (var j=0;j<pcat;j++){
                        var picat=$("#cat_"+i+"_"+j).val();
                        var tit=$("#tit_"+i+"_"+j).val();
                       // alert(picat+'--'+i+'--'+j);
                        pages.push({
                            src:"cms/modules/catalogo/files/big/"+picat,
                            thumb:"cms/modules/catalogo/files/big/"+picat,
                            title:tit
                        });
                    }
                        catalogo(z,pages)
                        z++
                  //}else{
                    //  alert(pcat);
                  //}
                }
		$('#slider-footer').bxSlider({displaySlideQty: 1, moveSlideQty: 1, auto:true, pause:7000, easing: 'easeInQuart'});
		$('.footer-ahorranito').ahorranito({theme:'claro',type:1});
	});
        
        function catalogo(i,Paginas){
           // alert(i+'-->cat')
            $(".catalogo-"+i).flipBook({
				css:"css/black.css",
				lightBox:true,
                                lightboxTransparent:true,
				pages:Paginas
			}); 
        }
  </script>


</body>
</html>
