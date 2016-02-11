  	<?php include("head.php"); ?>  
       <div id="fb-root"></div>
<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<?php include("header.php"); ?>

<div class="titulo-internas"><h1>MEDIA</h1></div>

 <div class="sub-menu">
     <ul class="nav-main nav-sub-lf">
        <a href="index.php?base&seccion=media"><li>BLOG<span></span></li></a>
       <a href="index.php?base&seccion=trailers" class="activo"><li>TRAILERS<span></span></li></a>
       <a href="index.php?base&seccion=industry-new"><li>INDUSTRY NEWS<span></span></li></a>
    </ul>
    
    <a href="#registro" class="login-window">
    <div class="subcrib">
      <h2>Suscribe to our RRS</h2>
    </div>
    </a>
    
 </div>  

<div class="contenido">
   
  <ul class="pagination2" id="trailer">
   <?php $dbtrailers = new Dbtrailers();
   $trailers = $dbtrailers->getList();
   $contador = count($trailers);
   ?>
   <?php for($i=0; $i<$contador; $i++): ?> 
   <a onclick="ajax('trailers', <?php echo $trailers[$i]["id"]; ?>);" href="#desc-trailer" class="inline">
    <li>
     <div class="over5">
      <h1>View Trailer</h1>
     </div>
     <div class="desc-trailer">
      <h1><?php echo utf8_encode($trailers[$i]["titulo"]); ?></h1>
      <h2><?php echo utf8_encode($trailers[$i]["genero"]); ?> / <?php echo utf8_encode($trailers[$i]["release_year"]); ?></h2>
     </div>
   <img src="img/trailers/<?= str_replace("original","redimension",$trailers[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
    </li>
    </a>
    <?php endfor; ?> 
    
   </ul> 
 

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>
		
        
<!---------Pop Up Registro---------------------------->
<?php include 'rss.php'; ?>
<script>
function ajax(type, id){
    $.get('./controllers/controllerAjax.php', { type: type, id:id  } , function(datos) {
         $("#innerpop").html(datos).change();
          });
}
</script>
<!---------Pop Up Trailer---------------------------->
<div style='display:none'>
    <div id='desc-trailer'>
    <div id='innerpop'>

     
    
    </div>
    </div>
</div>