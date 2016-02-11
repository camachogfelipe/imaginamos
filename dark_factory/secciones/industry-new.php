  	<?php include("head.php"); ?>  
       <div id="fb-root"></div>
<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<?php include("header.php"); ?>


<div class="titulo-internas"><h1>MEDIA</h1></div>

 <div class="sub-menu">
     <ul class="nav-main nav-sub-lf">
        <a href="index.php?base&seccion=media"><li>BLOG<span></span></li></a>
       <a href="index.php?base&seccion=trailers"><li>TRAILERS<span></span></li></a>
       <a href="index.php?base&seccion=industry-new" class="activo"><li>INDUSTRY NEWS<span></span></li></a>
    </ul>
    
    <a href="#registro" class="login-window">
    <div class="subcrib">
      <h2>Suscribe to our RRS</h2>
    </div>
    </a>
    
 </div>  

<div class="contenido">
   
  <ul class="pagination3" >
   <?php $dbind = new Dbindustry_news();
   $ind = $dbind->getList();
   $contador = count($ind);
   ?>
   <?php for($i=0; $i<$contador; $i++): ?> 
    <li>
  <div class="caja-new">
    <div class="titulo-new"><h1><?php echo utf8_encode($ind[$i]["titulo"]); ?></h1></div> 
    <img src="img/industry_news/<?= str_replace("original","redimension",$ind[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>"> 
    <div class="text-new"> 
   <p><?php echo utf8_encode($ind[$i]["texto"]); ?></p>
     </div>
     <a onclick="ajax('industry', <?php echo $ind[$i]["id"]; ?>);" href="#desc-new" class="login-window"><div class="submit">Details</div></a>
  </div>
   </li>
  <?php endfor; ?> 
   </ul> 
 

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>
		
        
<!---------Pop Up New---------------------------->
<div style='margin-top: -197px !important;' id="desc-new" class="login-popup">
 <a href="#" class="close" id="popup"><div class="btn_close"></div></a>
 <div id='innerpop'>
 
     </div> 
   <div class="clearfix"></div>
</div>
<script>
function ajax(type, id){
    $.get('./controllers/controllerAjax.php', { type: type, id:id  } , function(datos) {
         $("#innerpop").html(datos).change();
          });
}
</script>


<!---------Pop Up Registro---------------------------->
<?php include 'rss.php'; ?>
