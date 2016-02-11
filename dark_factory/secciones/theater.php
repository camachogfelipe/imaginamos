  	<?php include("head.php"); ?>  
		<?php include("header.php"); ?>

<div class="titulo-internas"><h1>Theater</h1></div>

<div class="contenido">
<?php 
$sqlQuery = "SELECT * FROM categorias WHERE lineas_id = 2";
$categorias = DbHandler::GetAll($sqlQuery);
$contador = count($categorias);
?>
<?php for($i=0; $i<$contador; $i++): ?>
  <div class="subtitulo"><?php echo utf8_encode($categorias[$i]["categoria"]); ?></div>
  <?php $items = DbHandler::GetAll("SELECT * FROM item WHERE categorias_id = ".$categorias[$i]["id"]." ORDER BY id DESC"); 
      $contadorItems = count($items);
      ?>
<?php if($i%2==0){ $number = '1'; }else{ $number = '2';} if(count($items)==1){$number ='0';}?>
  <div class="theater">
  <ul class="efecto-theater<?php echo $number; ?>">
      
      <?php for($j=0; $j<$contadorItems; $j++): ?>
              <li class="slide">
              <div class="titulo-theater"><h1><?php echo utf8_encode($items[$j]["titulo"]); ?></h1></div>  
     <div class="theater-img"><img src="img/item/<?= str_replace("original","redimension",$items[$j]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>"></div>
                  <div class="theater-info">
                  	<div class="theater-tx">
                      <p><?php echo utf8_encode($items[$j]["texto"]); ?></p>
                    </div>
                    <?php 
                    $picturesDetail = DbHandler::GetAll("SELECT * FROM galeria WHERE item_id =".$items[$j]['id']);
                        $contadorImages = count($picturesDetail);
                        if($contadorImages>0){
                    ?>
                   <a href="index.php?base&seccion=detail-theater&idp=<?php echo $items[$j]['id']; ?>"><div class="submit2">Go to detail</div></a>
                   <?php } ?>
                  </div>
                </li>
                <?php endfor; ?>
              </ul>
            </div>
 <?php endfor; ?>                      
</div><!--------------Fin Contenido-------------->
					
		<?php include("footer.php"); ?>
		