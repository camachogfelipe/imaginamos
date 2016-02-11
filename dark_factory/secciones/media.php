  	<?php include("head.php"); ?>  
       <div id="fb-root"></div>
<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<?php include("header.php"); ?>

<div class="titulo-internas"><h1>MEDIA</h1></div>

 <div class="sub-menu">
     <ul class="nav-main nav-sub-lf">
        <a href="index.php?base&seccion=media" class="activo"><li>BLOG<span></span></li></a>
       <a href="index.php?base&seccion=trailers"><li>TRAILERS<span></span></li></a>
       <a href="index.php?base&seccion=industry-new"><li>INDUSTRY NEWS<span></span></li></a>
    </ul>
    
    <a href="#registro" class="login-window">
    <div class="subcrib">
      <h2>Suscribe to our RRS</h2>
    </div>
    </a>
    
 </div>  

<div class="contenido">
   
   <ul class="pagination1" id="media">
       <?php  $dbblog = new Dbblog();
       $blog = $dbblog->getList();
       $contador = count($blog);
       ?>
      <?php for($i=0; $i<$contador; $i++): ?> 
    <a onclick="ajax('blog', <?php echo $blog[$i]["id"]; ?>);" href="#desc-blog" class="login-window">
    <li> 
     <div class="over4">
      <div class="text-blog">
       <h1><?php echo utf8_encode($blog[$i]["titulo"]); ?>:</h1>
       <p><?php echo substr(utf8_encode($blog[$i]["texto"]),0,286); ?></p>
       <div class="ver-m">More »</div>
      </div>
     </div>    
      <div class="img-media">
        <div class="media-date"><?php echo substr(str_replace("-",".",utf8_encode($blog[$i]["fecha"])),2,10); ?></div>
       <img src="img/blog/<?= str_replace("original","redimension",$blog[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
      </div>
      <h1><span><?php echo utf8_encode($blog[$i]["titulo"]); ?> </span><?php echo utf8_encode($blog[$i]["subtitulo"]); ?></h1>
    </li>
    </a>
    <?php endfor; ?> 
   </ul> 
 

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>
		
        
    
<!---------Pop Up Blog---------------------------->
<div style='margin-top: -197px !important;' id="desc-blog" class="login-popup">
 <a href="#" class="close" id="popup"><div class="btn_close"></div></a>
 <div id="innerpop">
<!-- <div class="titulo-pop"><h1>Lorem ipsum dolor sit amet</h1></div>
     
   <div class="img-pop1">
     <div class="media-date2">12.12.13</div>
    <img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn2/181091_558769144154391_1362147879_n.jpg">
   </div>
  
   <div class="text-pop1">
    <p>Vivamus rhoncus lacus at diam egestas pellentesque vulputate tellus mattis. Aenean ultricies libero eu nisi interdum adipiscing. Donec aliquet ante quis quam aliquam bibendum. Maecenas auctor metus interdum nulla suscipit imperdiet. Curabitur eget lorem nibh.</p>

<p>Donec aliquet ante quis quam aliquam bibendum. Maecenas auctor metus interdum nulla suscipit imperdiet. Curabitur eget lorem nibh, et dapibus.</p>

<p>Vivamus rhoncus lacus at diam egestas pellentesque vulputate tellus mattis. Aenean ultricies libero eu nisi interdum adipiscing. Donec aliquet ante quis quam aliquam bibendum. Maecenas auctor metus interdum nulla suscipit imperdiet. </p>
   </div>-->
  </div>
   <div class="compartir1">
   
   <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
   <div class="fb-like" data-href="https://www.facebook.com/DarkFactoryEntertainment" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
   
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
<!--<div id="registro" class="login-popup" style="width:550px;">
 <a href="#" class="close" id="popup"><div class="btn_close"></div></a>
     
      <form id="form-contacto" method="post" class="loguin">
  <div class="subtitulo">Subscribe to our RSSS</div>
    <fieldset>
      <label>Name:</label>
       <input value="" class="validate[required] text-input" type="text" name="nombre" id="" placeholder=""/>
      
    <label>Email:</label>    
      <input value="" class="validate[required,custom[email]]" type="text" name="email" id="" placeholder=""/>    
    </fieldset>
              
        <div class="check1">
         <input type="checkbox" id="c2" name="cc" checked>             
         <label for="c2"><span></span> Blog</label>
        </div>
        <div class="check1">
         <input type="checkbox" id="c3" name="cc" checked>             
         <label for="c3"><span></span> Trailers</label>
        </div>
        <div class="check1">
         <input type="checkbox" id="c4" name="cc" checked>             
         <label for="c4"><span></span> Industry News</label>
        </div>
        <div class="clearfix"></div>
        
     <input type="submit" class="submit" value="Suscribe" />   
        
  </form>
      
   <div class="clearfix"></div>
</div>-->