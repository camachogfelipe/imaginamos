<?php include 'header.php' ?>
	<div id="wrapper">
	<div class="cont_slider">
		<div id="filtro"></div>
		<div id="slider" >
		    <ul>
		        <li>
		        	<img src="../img/banner/ban01.jpg" alt="" width="100%"/>
		        	<div class="banner_text">
		        		<p class="ban_t1">¿Todavía no sabes qué estudiar?</p>
		        		<p class="ban_t2">En PTP te ayudaremos a encontrar la <span>mejor opción</span></p>
		        		<!-- <a href="#"><button class="btn btn-3 btn-3e icon-arrow-right">Ver cómo</button></a> -->
		        	</div>
		        </li>
		        <li>
		        	<img src="../img/banner/ban02.jpg" alt="" width="100%"/>
		        	<div class="banner_text">
		        		<p class="ban_t1">¿Todavía no sabes qué estudiar?</p>
		        		<p class="ban_t2">En PTP te ayudaremos a encontrar la <span>mejor opción</span></p>
		        		<!-- <a href="#"><button class="btn btn-3 btn-3e icon-arrow-right">Ver cómo</button></a> -->
		        	</div>
		        </li>
		        <li>
		        	<img src="../img/banner/ban03.jpg" alt="" width="100%"/>
		        	<div class="banner_text">
		        		<p class="ban_t1">¿Todavía no sabes qué estudiar?</p>
		        		<p class="ban_t2">En PTP te ayudaremos a encontrar la <span>mejor opción</span></p>
		        		<!-- <a href="#"><button class="btn btn-3 btn-3e icon-arrow-right">Ver cómo</button></a> -->
		        	</div>
		        </li>
		    </ul>
		</div>
	</div> <!-- end cont_slider -->
	</div>
	
	<div class="clean"></div>

	<section>

		<article class="art_l art1">
			<h1>Bienvenidos <span>Rhoncus Amet elit</span></h1>
			<hr>
			<div>
				<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend.</p>
			</div>
			<hr style="margin-bottom:20px;">
		</article>

		<article class="art_r art3">
			<div class="art3_title"><img align="left" src="../img/build.png"><h1>Empresas</h1></div>
			<p class="art3_p">Si eres una empresa y quieres publicar tus vacantes de empleo</p>
			<a href="#pop_vacantes" class="fancybox2" ><button class="btn btn-2 btn-2e icon-arrow-right entrar">Entra aquí</button></a>
			<hr>
			<a href="vacantes.php"><div class="vacantes"></div></a>
			<div class="text_bot">
				<h2>Lorem ipsum dolor sit amet roles</h2>
				<p>Maiores, animi facilis laboriosam reiciendis ipsum.</p>
			</div>
		</article>

		<article class="art_l art2">
			<div class="art2_d1">
				<div class="art2_title"><img align="left" src="../img/pc_icon.png"><h1>Test de Orientación</h1></div>
				<form action="">
					<div class="fr">
						<label for="taller">Taller</label>
						<select name="taller" id="" class="styled">
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
						</select>
					</div>
					<div class="fl">
						<label for="sector">Sector</label>
						<select name="sector" id="" class="styled">
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
						</select>
					</div>
					<div class="fr">
						<label for="vacante">Vacante</label>
						<select name="vacante" id="" class="styled">
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
						</select>
					</div>
					<div class="fl">
						<label for="mes">Mes</label>
						<select name="mes" id="" class="styled">
							<option value="option1">option1</option>
							<option value="option2">option2</option>
							<option value="option3">option3</option>
						</select>
					</div>
					<a href="#pop_test" class="fancybox2"><button class="btn btn-2 btn-2e icon-arrow-right cont">Continuar</button></a>
				</form>
				<div class="clean"></div>
			</div> <!-- end art2_d1 -->

			<div class="art2_d2">
				<a href="calendario.php"><div class="calendar"></div></a>
				<div id="fecha">
					<p><span>09</span> OCT</p>
				</div>
				<div id="evento">
					<h2>Lorem ipsum dolor sit amet</h2>
					<p>Ipsam, veniam, molestiae adipisci consequuntur quaerat.</p>
				</div>
			</div> <!-- end art2_d2 -->
		</article>
	</section>

	<?php include 'popups.php' ?>

<?php include 'footer.php' ?>