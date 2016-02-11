<?php include("head.php"); ?>

<style type="text/css">.nav-bt2 {background:url(assets/img/nav-sup-bt2.png) 0 0 no-repeat;} .nav-bt2:hover {background-position:0 -30px;} .nav-bt2:active {background-position:0 -60px;}</style>

<?php include("header.php");
$cBanner = new Dbbanner();
$banner = $cBanner->getList();
$cant = count($banner);
$cBienvenida = new Dbbienvenida();
$mData = array("where"=>"idbienvenida=1");
$bienvenida = $cBienvenida->getListOne($mData);
$cBanner_dos = new Dbbanner_dos();
$banner_dos = $cBanner_dos ->getList();
$num = count($banner_dos);
$cSirius = new Dbbienvenida_sirius();
$mData = array("where"=>"idbienvenida_sirius=1");
$sirius = $cSirius->getListOne($mData);
?>

<div class="con-slider-home">
    <div class="slider-home">
        <div class="slider1">
            <?php for($i = 0 ; $i < $cant ; $i++){ ?>
            <div class="slide">
                <img src="assets/img/banner/960_392_<?php echo $banner[$i]["imagen"] ?>" height="392" width="550">
                <div class="slider-frase">
                    <h1><?php echo utf8_encode($banner[$i]["titulo"]) ?></h1>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="mask-slide"></div>
    </div>
    <div class="slider-mas"></div>
    <div class="slider-tx">
        <h1><?php echo utf8_encode($bienvenida["titulo"]) ?></h1>
        <p><?php echo utf8_encode(nl2br($bienvenida["texto"])) ?></p>
        <a href="<?php echo $bienvenida["link"] ?>"><div class="slider-bt"></div></a>
    </div>
</div>
<div class="con-destacados">
    <div class="mg-destacados">
        <div class="slider-des">
            <ul class="slider2">
                <?php for($j = 0 ; $j < $num ; $j++){?>
                <li>
                    <div class="con-img-destacado">
                        <div class="img-des"><img src="assets/img/banner_dos/234_206_<?php echo $banner_dos[$j]["imagen"] ?>" height="206" width="234"></div>
                        <div class="cap-des">
                            <p><?php echo utf8_encode($banner_dos[$j]["titulo"]) ?></p>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="des-info">
            <div class="des-logo"><img src="assets/img/destacados-logo.png" width="398" height="186" alt=""></div>
            <p><?php echo utf8_encode(nl2br($sirius["texto"])) ?></p>
            <a href="index.php?seccion=sirius"><div class="des-bt"></div></a>
        </div>
    </div>
</div>
<div class="con-news">
    <div class="mg-con-news">
        <div class="news">
            <h1>Suscríbete al newsletter</h1>
            <div class="news-user">
                <div class="form-news">
                    <form id="sus-news" method="post" action="index.php?seccion=newsletter">
                        <fieldset>
                            <input name="nombre" class="validate[required]" data-validation-placeholder="Nombre completo..." type="text" value="Nombre completo..." onBlur="if (this.value == '') { }" onFocus="if (this.value == 'Nombre completo...') {
                                    this.value = ''
                                }"/>
                        </fieldset>
                        <fieldset>
                            <input name="email" class="validate[required,custom[email]]"data-validation-placeholder="Correo electrónico..." type="text" value="Correo electrónico..." onBlur="if (this.value == '') {
                                    this.value = 'Correo electrónico...'
                                }" onFocus="if (this.value == 'Correo electrónico...') {
                                    this.value = ''
                                }">
                        </fieldset>
                        <fieldset>
                            <div class="delete" data-type="reset" onClick="document.getElementById('sus-news').reset()">Borrar</div>
                        </fieldset>
                        <fieldset>
                            <input type="submit" value="Enviar" class="submit">
                        </fieldset>
                    </form>
                </div>
                <div class="redes-news">
                    <a href="http://www.youtube.com/" target="_blank"><div class="red-news red-yt"></div></a>
                    <a href="https://twitter.com/" target="_blank"><div class="red-news red-tw"></div></a>
                    <a href="https://es-la.facebook.com/" target="_blank"><div class="red-news red-fb"></div></a>
                </div>
                <div class="con-indicadores">
                    <div class="indicadores">
                        <table> 
                            <tr>
                                <td>
                            <marquee>
                                <div id="bgBody">
                                    <script type="text/javascript">
                                        // <![CDATA[
                                        var bgHost = "http://www.applab.in/";
                                        var bgType = "CO-19285-1";
                                        var bgIndi = "1|2|9|10|3";
                                        (function(d) {
                                        var f = bgHost + "apps/indicators/" + bgType + "/" + bgIndi + "/functions.js";
                                        d.write(unescape("%3Cscript src='" + f + "' type='text/javascript'%3E%3C/script%3E"));
                                        })(document);
                                        // ]]>
                                    </script>
                                </div>
                            </marquee> 
                            </td>
                            </tr> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
            $(".foo-map li").first().addClass('foo-act');
        });
</script>
<?php 
 if (isset($_GET['Erno'])) {
    if (intval($_GET['Erno'])) {
        $valor = $_GET['Erno'];
        if ($valor == 1) {
            ?>  <div class="con-modals">
                    <div id="ok-form">
                      <h1>Su Registro ha sido enviado exitosamente.</h1>
                    </div>
                </div>
            <?php
        }
    }
}
?>
<?php include("footer.php"); ?>
<script>
    $("#sus-news").validationEngine();
</script>