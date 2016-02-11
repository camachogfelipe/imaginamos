<?php include 'header.php' ?>
<script type="text/javascript">
$(function() {
	var divs = document.getElementsByClassName("panel");
$(".panel").css("width",1000/divs.length+"px");
$("body").css("background-image","url(../img/bg1.jpg)");
});
</script>
	<div class="main_content">
		<h1><img src="../img/atom.png">QUIÉNES SOMOS</h1>
		<div class="panel">
			<div class="q_contents borde">
				<button class="btn btn-4 btn-4e" onclick="onclickhandler(this);"><div class="cabecera_panel"><span class="subtitulo_q">Historia</span></div></button>
				<img src="../img/baterias.jpg" width="210" height="210">
				<div class="q_texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi justo quam, ultricies nec aliquam ac, tempor at turpis. Proin porta accumsan dolor, eu pulvinar est laoreet et. Aenean sed turpis dolor. Curabitur varius enim eget lacus porttitor tincidunt. <br/><br/>Quisque non elementum orci. Phasellus ut dui in orci laoreet semper a non tellus. Vestibulum scelerisque iaculis porta. Aliquam et dolor nec orci molestie mollis in id enim. Nulla a congue ante, vestibulum molestie turpis. Integer et volutpat diam. Donec dictum mattis mauris ut consequat. Sed consectetur est felis, quis fringilla neque commodo id.</p></div>
				<button class="btn btn-3 btn-3e" onclick="onclickhandler(this);">Ver más</button>
			</div>
		</div><!-- end panel -->
		<div class="panel">
			<div  class="q_contents borde">
				<button class="btn btn-4 btn-4e" onclick="onclickhandler(this);"><div class="cabecera_panel"><span class="subtitulo_q">Misión</span></div></button>
				<img src="../img/baterias.jpg" width="210" height="210">
				<div class="q_texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi justo quam, ultricies nec aliquam ac, tempor at turpis.<br/><br/> Proin porta accumsan dolor, eu pulvinar est laoreet et. Aenean sed turpis dolor. Curabitur varius enim eget lacus porttitor tincidunt. Quisque non elementum orci. Phasellus ut dui in orci laoreet semper a non tellus. Vestibulum scelerisque iaculis porta. Aliquam et dolor nec orci molestie mollis in id enim. Nulla a congue ante, vestibulum molestie turpis. Integer et volutpat diam. Donec dictum mattis mauris ut consequat. Sed consectetur est felis, quis fringilla neque commodo id.</p></div>
				<button class="btn btn-3 btn-3e" onclick="onclickhandler(this);">Ver más</button>
			</div>
		</div><!-- end panel -->
		<div class="panel">
			<div  class="q_contents borde">
				<button class="btn btn-4 btn-4e" onclick="onclickhandler(this);"><div class="cabecera_panel"><span class="subtitulo_q">Visión</span></div></button>
				<img src="../img/baterias.jpg" width="210" height="210">
				<div class="q_texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi justo quam, ultricies nec aliquam ac, tempor at turpis. Proin porta accumsan dolor, eu pulvinar est laoreet et. <br/><br/>Aenean sed turpis dolor. Curabitur varius enim eget lacus porttitor tincidunt. Quisque non elementum orci. Phasellus ut dui in orci laoreet semper a non tellus. Vestibulum scelerisque iaculis porta. Aliquam et dolor nec orci molestie mollis in id enim. Nulla a congue ante, vestibulum molestie turpis. Integer et volutpat diam. Donec dictum mattis mauris ut consequat. Sed consectetur est felis, quis fringilla neque commodo id.</p></div>
				<button class="btn btn-3 btn-3e" onclick="onclickhandler(this);">Ver más</button>
			</div>
		</div><!-- end panel -->
		<div class="panel">
			<div class="q_contents">
				<button class="btn btn-4 btn-4e" onclick="onclickhandler(this);"><div class="cabecera_panel"><span class="subtitulo_q">Políticas de cálidad</span></div></button>
				<img src="../img/baterias.jpg" width="210" height="210">
				<div class="q_texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi justo quam, ultricies nec aliquam ac, tempor at turpis. Proin porta accumsan dolor, eu pulvinar est laoreet et. Aenean sed turpis dolor. Curabitur varius enim eget lacus porttitor tincidunt. Quisque non elementum orci. Phasellus ut dui in orci laoreet semper a non tellus. Vestibulum scelerisque iaculis porta. Aliquam et dolor nec orci molestie mollis in id enim. Nulla a congue ante, vestibulum molestie turpis. Integer et volutpat diam. Donec dictum mattis mauris ut consequat. <br/><br/>Sed consectetur est felis, quis fringilla neque commodo id.</p></div>
				<button class="btn btn-3 btn-3e" onclick="onclickhandler(this);">Ver más</button>
			</div>
		</div><!-- end panel -->
		<div class="fade" onclick="onclosefade(this);"></div>
	</div><!-- end main_content -->
	<script src="../js/actions.js" type="text/javascript"></script>
<?php include 'footer.php' ?>