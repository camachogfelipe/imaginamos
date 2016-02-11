  	<?php 
        if(isset($_GET['idp'])&& !empty($_GET['idp'])){
            $itemid = $_GET['idp'];
        }else{
            header("Location: index.php");
            exit();
        }
        
        include("head.php"); ?>  
		<?php include("header.php"); 
                 $dbitem = new Dbitem();
                $item = $dbitem->getByPk($itemid);
                ?>
        
        
 <div class="titulo-internas"><h1>details Theater</h1></div>

<div class="contenido">

  <div class="video-desc">
     
       <div class="titulo-video"><?php echo utf8_encode($item['titulo']); ?></div>
         
<iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo utf8_encode($item['url']); ?>" frameborder="0" allowfullscreen></iframe>
       <div class="text-dt">
        <p><?php echo utf8_encode($item['texto']); ?></p>
       </div>
        <div style="float:right;" class="face">
        <a name="fb_share" type="box_count" href="https://www.facebook.com/DarkFactoryEntertainment">Share</a>	
        </div> 
       
        
       <div class="clearfix"></div>
     
  </div><!---Fin Contenido Detalle Films----------->
    
    <div class="img-theater">
    
      <div class="list_carousel3">
      <div class="caroufredsel_wrapper" style="width: 500px !important;">
    <ul id="foo3">
     <?php $pictures = DbHandler::GetAll("SELECT * FROM galeria WHERE item_id = $itemid");
     $contador = count($pictures);
     ?>
     <?php for($i=0; $i<$contador; $i++): ?>
     <li>
<a href="img/galeria/<?= str_replace("original","redimension",$pictures[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
        <div class="over3"></div>
      </a>
<img src="img/galeria/<?= str_replace("original","redimension",$pictures[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
     </li>
     <?php endfor; ?>
    </ul>
     </div> 
        <div class="clearfix"></div>
        <a id="prev3" class="prev3" href="#"></a>
        <a id="next3" class="next3" href="#"></a>
   </div>       
</div>

    <div class="marco-mapa">
      <?php $map = $item['texto_mapa'];
      $mapa = str_replace('width="425" height="350"', 'width="530" height="360"', $map);
      $mapa = str_replace('Ver mapa más grande', '', $mapa);
      echo $mapa;
      ?>
      <!--<iframe width="530" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Ciudad+de+M%C3%A9xico,+M%C3%A9xico&amp;aq=0&amp;oq=M%C3%A9xico+c&amp;sll=40.396764,-3.713379&amp;sspn=9.082693,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Ciudad+de+M%C3%A9xico,+Distrito+Federal,+M%C3%A9xico&amp;t=m&amp;ll=19.432924,-99.132385&amp;spn=0.958332,1.485901&amp;z=9&amp;iwloc=A&amp;output=embed"></iframe>-->
    </div>
   
    <a href="index.php?base&seccion=theater"><div class="submit3">Return</div></a>
    
    
    <div class="clearfix"></div>
    
      <a href="https://www.DarkFactoryEntertainment.com/" target="_blank"><div class="enlace"><span>Link:</span> https://www.DarkFactoryEntertainment.com/</div></a>
      
    <div class="clearfix"></div>  

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>