<?php include("head.php"); ?>
<style type="text/css">#map-home {color:#878b39}</style>
<?php include("header-home.php"); ?>

<div class="con-slider">
    <div class="sliderContainer fullWidth clearfix">
        <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
            <!--Slide-->
            <?php
            $cBanner = new Dbbanner();
            $banner = $cBanner->getList();
            if (count($banner) > 0) {
                for ($a = 0, $b = count($banner); $a < $b; $a++) {
                    ?>
                    <div class="rsContent" data-rsDelay="6000">
                        <img class="rsImg" src="img/banner/1349_608_<?php echo $banner[$a]["img"] ?>" height="608" alt="" />
                        <div class="infoBlock rsABlock rsNoDrag slideTx" data-fade-effect="" data-move-offset="1000" data-move-effect="top" data-speed="1250">
                            <h1><?php echo utf8_encode($banner[$a]["titulo"]) ?></h1>
                            <h2><?php echo utf8_encode(nl2br($banner[$a]["texto"])) ?></h2>
                            <a class="anchor-ct" href="#home-an <?php /*?><?php echo $banner[$a]["link"]?><?php */?>"><div class="slider-bt"></div></a>
                        </div>
                        <div class="slider-sh"></div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<section>
    <div class="con-section con-destacados" id="home-an">
        <div class="mg-section clearfix">
            <div class="destacado-tx">
                <?php
                $cBienvenidos = new Dbbienvenidos();
                $bien = $cBienvenidos->getByPk(1);
                ?>
                <h1><?php echo utf8_encode($bien["titulo"]) ?></h1>
                <p><?php echo utf8_encode(nl2br($bien["texto"])) ?></p>
            </div>
            <div class="destacados-login">
                <div class="login-sec-1">
                    <h1><strong>¿YA TE REGISTRASTE</strong></h1>
                    <h1>EN NUESTRA ZONA</h1>
                    <h1><strong>DOCUMENTAL?</strong></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
                <div class="login-sec-2">
                    <h1><strong>ZONA EXCLUSIVA</strong></h1>
                    <h1>PARA CLIENTES</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec enim leo.</p>
                    <div class="login-sec-2-icon"><img src="assets/img/login-sec-2-icon.png" width="74" height="74" alt=""></div>
                    <a class="modal-login" href="#form-login"><div class="login-sec-2-bt"></div></a>
                </div>
                <a class="modal-registro" href="#form-registro"><div class="login-sec-3-bt"></div></a>
            </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
if (isset($_GET["con"])) {
    echo '<script>setTimeout(\'alert("Confirmación de contraseñaa realizada correctamente, favor revisar su correo electrónico");\',400);</script>';
}
if (isset($_GET["er"])) {
    echo '<script>setTimeout(\'alert("Usuario y / o contraseña incorrectos");\',400);</script>';
}
if (isset($_GET["ya"])) {
    echo '<script>setTimeout(\'alert("Este usuario ya se encuentra registrado");\',400);</script>';
}
if (isset($_GET["true"])) {
    echo '<script>setTimeout(\'alert("Información enviada a su correo corectamente");\',400);</script>';
}
if (isset($_GET["false"])) {
    echo '<script>setTimeout(\'alert("Usuario no registrado");\',400);</script>';
}
if (isset($_GET["log"])) {
    echo '<script>setTimeout(\'alert("Usuario registrado correctamente, verificación pendiente");\',400);</script>';
}

if (isset($_GET["conno"])) {
    echo '<script>setTimeout(\'alert("El correo que ingreso no se encuentras en la lista de usuarios");\',400);</script>';
}
?>