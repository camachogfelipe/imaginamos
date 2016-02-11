<div class="clean"></div>	
<div style="height:9px;"></div>
	<footer>
		<div class="main_content">
			<ul id="infooter">
				<li><p>© 2013 <span style="color:#c3d500; font-weight: bold;">GIM</span> - Todos los derechos reservados</p></li>
				<li><p style="color:#c2c2c2">Diseño web: <img class="ahorranito" src="img/ahorranito.png"><a href="http://www.imaginamos.com">Imaginamos</a></p></li>
				<li><a href="../front_alcance"><img id="zone1" src="img/nuestros_servicios.png"></a><div class="icon-hand"><img id="icon-img" src="img/hand_over.png"></div><div class="mini_box"></div></li>
			</ul>
		</div><!-- end main_content -->
	</footer>
	<script type="text/javascript">
		$("#icon-img").hide();
		 $('.mini_box').click(function() {

    document.location.href='../front_alcance';
    });
		$("#zone1").hover(
		  	function() {
		  		$("#icon-img").show();
		    	$("#icon-img").animate({
				    opacity: 0.5,
				    width: "80%",
				    marginTop: "4px",
				    marginLeft: "1px",
				  }, 200, function() {
				    $("#icon-img").animate({
				    opacity: 1,
				    width: "70%",
				    marginTop: "4px",
				    marginLeft: "1px",
				  }, 200,function() {
				    $("#icon-img").animate({
				    opacity: 0,
				    width: "110%",
				    marginTop: "0px",
				    marginLeft: "1px",
				  }, 200);
				  });
				  });
		  	}, function() {
		  		$("#icon-img").animate({
				    opacity: 0,
				    width: "110%",
				    marginTop: "0px",
				    marginLeft: "-2px",
				  }, 200, function() {
				    // Animation complete.
				  });
		    	$("#icon-img").hide();
		  	}
		);
	</script>
</body>
</html>