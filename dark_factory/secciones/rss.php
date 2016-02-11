<div id="registro" class="login-popup" style="width:550px;">
 <a href="#" class="close" id="popup"><div class="btn_close"></div></a>
     
      <form id="form-contacto" method="post" class="loguin" action="controllers/rss.php" >
  <div class="subtitulo">Subscribe to our RSSS</div>
    <fieldset>
      <label>Name:</label>
       <input value="" class="validate[required] text-input" type="text" name="nombre" id="" placeholder=""/>
      
    <label>Email:</label>    
      <input value="" class="validate[required,custom[email]]" type="text" name="email" id="" placeholder=""/>    
    </fieldset>
              
        <div class="check1">
         <input value="1" type="checkbox" id="c2" name="blog" checked>             
         <label for="c2"><span></span> Blog</label>
        </div>
        <div class="check1">
         <input value="1" type="checkbox" id="c3" name="trailers" checked>             
         <label for="c3"><span></span> Trailers</label>
        </div>
        <div class="check1">
         <input value="1" type="checkbox" id="c4" name="industry" checked>             
         <label for="c4"><span></span> Industry News</label>
        </div>
        <div class="clearfix"></div>
        
     <input type="submit" class="submit" value="Suscribe" />   
        
  </form>
      
   <div class="clearfix"></div>
</div>

<?php if(isset($_GET['ok'])){
    ?><script>
$(document).ready(function(){
    alert('suscrito');
});
</script><?php
} ?>
<?php if(isset($_GET['error'])){
    ?><script>
$(document).ready(function(){
    alert('Ha ocurrido un error intenta más tarde.');
});
</script><?php
} ?>