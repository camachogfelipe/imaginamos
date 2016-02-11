<?php include 'header.php' ?>
<script type="text/javascript">
$(function() {
$("body").css("background-image","url(../img/bg1.jpg)");
});
</script>
	<div class="main_content">
		<div class="content_wrapper">
			<h1><img src="../img/punto.png">ALCANCE</h1>
			<div id="hexagonos">
				<div class="duo">
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/solar2.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/toma.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
				</div><!-- end duo -->
				<div class="_duo">
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/toma.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/solar.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
				</div><!-- end _duo -->
				<div class="duo">
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/solar.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/toma.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
				</div><!-- end duo -->
				<div class="_duo">
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/toma.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
					<div class="hexagon hexagon1"><div class="hexagon-in1"><div class="hexagon-in2"><img src="../img/solar2.jpg" height="200"><a href="alcance_sub.php"><div class="in_hexagon"><img class="bg_hexagon" src="../img/bg_hexagon.png"><p class="p_hexagons"><span class="subtitulo_a">Phasellus eros</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div></a></div></div></div>
				</div><!-- end _duo -->
			</div><!-- end hexagonos -->
		</div><!-- end content_wrapper -->
	</div>
<script type="text/javascript">
$( ".hexagon" ).hover(
  function() {
    $( this ).find('.in_hexagon').fadeIn();
    $( this ).find('.bg_hexagon').rotate({animateTo:180})
  }, function() {
    $( this ).find('.in_hexagon').fadeOut();
    $( this ).find('.bg_hexagon').rotate({animateTo:0})
  }
);

</script>
<?php include 'footer.php' ?>