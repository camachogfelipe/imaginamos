  	<?php include("head.php"); ?>  
		<?php include("header.php"); ?>
<?php $dbmembers = new Dbmembers(); 
$members = $dbmembers->getList();
$contador = count($members);
?>
<div class="titulo-internas"><h1>About Us</h1></div>

<div class="contenido">
    
     <div class="subtitulo">Members</div>

<div class="marco-members">
  <?php for($i=0; $i<$contador; $i++): ?>
  <div class="caja-members">
    <div class="over">
     <h1><?php echo utf8_encode($members[$i]["nombre"]); ?></h1>
     <p><?php echo utf8_encode($members[$i]["texto"]); ?></p>
    </div>
		<img src="img/members/<?= str_replace("original","redimension",$members[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="165" height="190" alt=""> 
  </div>   
  <?php endfor; ?>

  <div class="clearfix"></div>
</div><!---------------Fin Members----------------->  
  
 
 <div class="subtitulo">Affiliates</div>  
 
   <div class="list_carousel1">
    <ul id="foo1">
    <?php $dbaffiliates = new Dbaffiliates();
    $afi = $dbaffiliates->getList();
    $contador = count($afi);
    ?>
    <?php for($i=0; $i<$contador; $i++): ?>
     <li>
       <h1><?php echo utf8_encode($afi[$i]["titulo"]); ?></h1>
       <img src="img/affiliates/<?= str_replace("original","redimension",$afi[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
       <a href="<?php echo utf8_encode($afi[$i]["link"]); ?>" target="_blank">
         <div class="enlace">Link: <span><?php echo utf8_encode($afi[$i]["link"]); ?></span></div>
       </a>
     </li>
     <?php endfor; ?>
    </ul> 
        <div class="clearfix"></div>
        <a id="prev1" class="prev1" href="#"></a>
        <a id="next1" class="next1" href="#"></a>
   </div>   
 

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>