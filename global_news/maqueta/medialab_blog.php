<?php include("head.php"); ?>
<div class="cuerpo">
	<div class="menu">
    <a href="quienes.php" class="menubtn"><img src="assets/img/home/servicios.png" width="157" height="157"></a>
    <a href="medialab.php" class="menu_int menubtn"><img src="assets/img/home/medialab.png" width="157" height="157"></a>
    <a href="servicios.php" class="menu_int menubtn"><img src="assets/img/home/casosexito.png" width="157" height="157"></a>
    <a href="contacto.php" class="menu_int menubtn"><img src="assets/img/home/contacto.png" width="157" height="157"></a>
	</div>
  <article>
  	<header class="hrarticle">
    	<div style="text-align: right"><a href="medialab.php"><img src="assets/img/home/back.png" width="48" height="48"></a></div><br>
    	<span class="hinternos" style="font-size: 2em;">BLOG</span>
      <div class="redes_sociales">
      	Comparta en: 
      	<a href="http://www.pinterest.com" target="_blank"><img src="assets/img/blog/pinteres.png" width="23" height="23"></a> 
        <a href="http://www.twitter.com" target="_blank"><img src="assets/img/blog/twitter.png" width="23" height="23"></a> 
        <a href="http://plus.google.com" target="_blank"><img src="assets/img/blog/google.png" width="23" height="23"></a>
      </div>
		</header>
    <section class="blog">
    	<img src="assets/img/blog/imagen7.png" width="172" height="193">
      <div>His audiam deserunt in, eum ubique voluptatibus te. In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu.Est ei erat mucius quaeque. Ei his quas phaedrum, efficiantur mediocritatem ne sed, hinc oratio blandit ei sed. Blandit gloriatur eam et. Brute noluisse per et, verear disputando neglegentur at quo. Sea quem legere ei, unum soluta ne duo. Ludus complectitur quo te, ut vide autem homero pro.Vis id minim dicant sensibus. Pri aliquip conclusionemque ad, ad malis evertitur torquatos his. Has ei solum harum reprimique, id illum saperet tractatos his. Ei omnis soleat antiopam quo. Ad augue inani postulant mel, mel ea qualisque forensibus.Lorem salutandi eu mea, eam in soleat iriure assentior. Tamquam lobortis id qui. Ea sanctus democritum mei, per eu alterum electram adversarium. Ea vix probo dicta iuvaret, posse epicurei suavitate eam an, nam et vidit menandri. Ut his accusata petentium.</div>
    </section>
    <section class="comentar" id="comentarios">
    	<div class="titulo_comentario">Agregar comentario</div>
    	<form action="" method="post">
      	<div style="text-align: center">
      	<input type="text" name="titulo" class="validate[required] inputComentario" placeholder="Título *" />&nbsp;
        <input type="text" name="email" class="validate[required, custom[email]] inputComentario" placeholder="email *" />
        </div>
				<p><textarea style="width: 100%" rows="3" name="comentario" placeholder="Comentario *"></textarea></p>
        <div style="text-align: right">
        	<button type="submit" value="Enviar">Enviar</button>
        </div>
      </form>
      <div class="comentario">
      	<div class="usuario">Expetenda tincidunt</div>
        <p class="fecha">15/07/2013</p>
        Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex. Ea aperiri sententiae duo. Usu nullam dolorum quaestio ei, sit vidit facilisis ea. Per ne impedit iracundia neglegentur. Consetetur neglegentur eum ut, vis animal legimus inimicus id.
      </div>
      <div class="comentario">
      	<div class="usuario">Ex partem placerat sea</div>
        <p class="fecha">23/07/2013</p>
        Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex. Ea aperiri sententiae duo. Usu nullam dolorum quaestio ei, sit vidit facilisis ea. Per ne impedit iracundia neglegentur. Consetetur neglegentur eum ut, vis animal legimus inimicus id.
      </div>
    </section>
  </article>
</div>
<?php require_once("footer.php"); ?>