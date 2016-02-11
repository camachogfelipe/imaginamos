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

<div class="titulo-internas"><h1>Film details</h1></div>

<div class="contenido">

  <div class="video-desc">
     
      <div class="titulo-video"><?php echo utf8_encode($item['titulo']); ?></div>
         
<iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo utf8_encode($item['url']); ?>" frameborder="0" allowfullscreen></iframe>
       <div class="text-df">
        <p><?php echo utf8_encode($item['texto']); ?></p>
       </div>
        
       <div class="clearfix"></div>
     
  </div><!---Fin Contenido Detalle Films----------->
    
    <div class="img-films">
    
      <div class="list_carousel2">
    <ul id="foo2">
     <?php $pictures = DbHandler::GetAll("SELECT * FROM galeria WHERE item_id = $itemid");
     $contador = count($pictures);
     ?>
     <?php for($i=0; $i<$contador; $i++): ?>
     <li>
<a href="img/galeria/<?= str_replace("original","redimension",$pictures[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
        <div class="over2"></div>
      </a>
<img src="img/galeria/<?= str_replace("original","redimension",$pictures[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
     </li>
     <?php endfor; ?>
    </ul> 
        <div class="clearfix"></div>
        <a id="prev2" class="prev2" href="#"></a>
        <a id="next2" class="next2" href="#"></a>
   </div>   
    
    </div>
    
     <a href="films.php?seccion=3"><div class="submit3">Return</div></a>
     
     <div class="clearfix"></div>

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>