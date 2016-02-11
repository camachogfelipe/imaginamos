<div id="loader"><div id="progress"></div></div>
<header>
   
    <div class="con-header">
        <div class="header-bg"></div>
        <div class="mg-header clearfix">
            <div class="header-logos">
                <div class="header-logo-1"><a href="index.php?seccion=california"><img src="assets/img/header-logo-1.png" width="158" height="128" alt=""></a></div>
                <div class="header-logo-2"><a href="index.php?seccion=lechesan"><img src="assets/img/header-logo-2.png" width="170" height="128" alt=""></a></div>
            </div>
            <nav>
                <div class="con-nav">
                    <div class="nav-sup">
                        <form action="index.php?seccion=resultados" method="post" id="header-search">
                            <fieldset>
                                <div class="campo-bg">
                                    <input type="text" name="buscar" id="buscar" placeholder="Buscar...">
                                </div>
                            </fieldset>
                            <fieldset>
                                <input type="submit" value="" onclick="enviob()" class="search-bt">
                            </fieldset>
                        </form>
                        <div class="nav-sup-sep"></div>
                        <a href="http://www.youtube.com/" target="_blank"><div class="header-red red-yt"></div></a>
                        <a href="https://twitter.com/" target="_blank"><div class="header-red red-tw"></div></a>
                        <a href="https://www.facebook.com/" target="_blank"><div class="header-red red-fb"></div></a>
                        <div class="nav-sup-sep"></div>
                        <a href="index.php?seccion=index"><div class="nav-home-bt"></div></a>
                    </div>
                    <div class="nav-main">
                        <ul>
                            <a href="#modal-news" class="modals-act"><li>Newsletter<span></span></li></a>
                            <li class="nav-sep"></li>
                            <a href="index.php?seccion=contacto"><li class="<?php
if ($_GET['seccion'] == 'contacto') {
    echo 'nav-act';
}
?>">Contáctenos<span></span></li></a>
                            <li class="nav-sep"></li>
                            <a href="index.php?seccion=promociones"><li class="<?php
                                                                     if ($_GET['seccion'] == 'promociones') {
                                                                         echo 'nav-act';
                                                                     }
?>">Promociones<span></span></li></a>
                            <li class="nav-sep"></li>
                            <a href="index.php?seccion=importadas"><li class="<?php
                                                                        if ($_GET['seccion'] == 'importadas') {
                                                                            echo 'nav-act';
                                                                        }
?>">Marcas importadas<span></span></li></a>
                            <li class="nav-sep"></li>
                            <a href="index.php?seccion=productos"><li class="<?php
                                                                       if ($_GET['seccion'] == 'productos') {
                                                                           echo 'nav-act';
                                                                       }
?>">Productos<span></span></li></a>
                            <li class="nav-sep"></li>
                            <a href="index.php?seccion=lechesan"><li class="<?php
                                                                      if ($_GET['seccion'] == 'lechesan') {
                                                                          echo 'nav-act';
                                                                      }
?>">Lechesan<span></span></li></a>
                            <li class="nav-sep"></li>
                            <a href="index.php?seccion=california"><li class="<?php
                                                                     if ($_GET['seccion'] == 'california') {
                                                                         echo 'nav-act';
                                                                     }
?>">California<span></span></li></a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php
$textosc = new Dbtextos();
$textof = $textosc->getList();
?>
 <script>
        function enviob(){
            var envio = $('#buscar').val();
            if(envio == ""){
                return false;
            }else{
                return true;
            }
        }    
    </script>