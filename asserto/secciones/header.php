	<div class="header">
    <div class="bd-head-1"></div><div class="bd-head-2"></div>
    <div class="con-header">
        <div class="logo-header">
    	   <a href="index.php"><img src="assets/imagenes/logo-header.png"></a>
    	</div>
    	<ul class="main-nav">
    	   <a href="index.php"><li class="bt-nav">Home</li></a>
    	   <li class="sep-nav"></li>
    	   <a href="index.php?seccion=empresa" class="<?php if ($_GET['seccion'] == 'empresa'){echo 'nav-act';}?>"><li class="bt-nav">Quiénes somos</li></a>
    	   <li class="sep-nav"></li>
    	   <a href="index.php?seccion=sabemos" class="<?php if ($_GET['seccion'] == 'sabemos'){echo 'nav-act';}?>"><li class="bt-nav">Qué sabemos hacer</li></a>
    	   <li class="sep-nav"></li>
    	   <a href="index.php?seccion=herramientas" class="<?php if ($_GET['seccion'] == 'herramientas'){echo 'nav-act';}?>"><li class="bt-nav">Herramientas útiles</li></a>
    	   <li class="sep-nav"></li>
    	   <a href="index.php?seccion=ayuda" class="<?php if ($_GET['seccion'] == 'ayuda'){echo 'nav-act';}?>"><li class="bt-nav">Cómo lo podemos ayudar</li></a>
    	   <li class="sep-nav"></li>
    	   <a href="index.php?seccion=contacto" class="<?php if ($_GET['seccion'] == 'contacto'){echo 'nav-act';}?>"><li class="bt-nav">Contacto</li></a>
    	</ul>
    </div>
	</div>