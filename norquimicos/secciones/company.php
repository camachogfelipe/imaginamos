<?php
if (isset($_POST["envio"])) {
    $env = $_POST["envio"];
    if ($env == "abc") {
        $body = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            <b>Name</b> : ' . utf8_decode(GetData("nombref")) . ' <br>            
            <b>Phone</b> : ' . GetData("telefonof") . ' <br> 
            <b>Email</b>: <a href="mailto:' . GetData("emailf") . ' " target="_blank">' . GetData("emailf") . '</a> <br>
            <b>Message</b>: ' . GetData("campocomentariof") . ' <br> 
                
            <b>Ship Date</b>: ' . date("Y-m-d H:i:s") . '<br>';
        $asunto = utf8_decode("Contact us");
        $cCorreo = new Correo();
        $cCorreos = new Dbcontacto();
        $contactos = $cCorreos->getList();
        $cCorreo->SendEmail($contactos[0]["contacto"], $asunto, $body);
        $val = 1;
        //  $cCorreo->SendEmail($contactos[0]["contacto1"], $asunto, $body);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Norquimicos</title>
        <meta name="viewport" content="width=1024, maximum-scale=2">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <meta http-equiv="content-language" content="es" />
        <meta http-equiv="pragma" content="No-Cache" />
        <meta name="Keywords" lang="es" content="" />
        <meta name="Description" lang="es" content="" />
        <meta name="copyright" content="imaginamos.com" />
        <meta name="date" content="2011" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />
        <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script> 
        <script src="js/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
        <?php include 'scripst.php'; ?>
        <script type="text/javascript">
            $(function(){ $("#formenviar").validationEngine(); });
        </script>
    </head>
    <body onload="menuSlider.init('menu','slide')">
        <div class="principal">
            <?php include 'header.php'; ?>
            <div class="titulo">
                <div class="contienetitulo"><h1>COMPANY<BR /><span id="rojo">PROFILE</span></h1></div>
            </div>
            <div class="contenido">
                <div class="contenedorcompany">
                    <div class="watwi">What<br />we<br />do</div>
                    <div class="watwitex">With a network of 260 distributors in Colombia, we are proud to of being a leader company in the research, medical and pharmaceutical area. Giving the possibility of small companies to grow and reach more territories and more clients.</div>
                    <img src="imagenes/mundo.png" width="500"  alt="" class="mundo" />
                    <div class="wecar">"We care of your business as if they were part of us"</div>
                    <div class="watwiaretex">Welcome to the world of NORQUIMICOS Company. A Professional importer company with more than 20 years of experience in the areas of glassware, Plastic ware, Molecular Biology, biotechnology and advanced technologies.<br /><br />
                        By providing innovative products and ideas as well as outstanding expertise in technology, we make NORQUIMICOS part of our client’s life; enabling our customer’s success through unique solutions based on our superior technologies offered.<br /><br />
                        Our core markets are the household appliance, pharmaceuticals, medicine and general laboratory industries; covering the whole research area. We hardly invite you too to take advantage of our years of experience in successfully transforming technological innovations into business success.</div>
                    <div class="watwiare">What<br />we<br />are</div>
                    <?php
                    $cPdf = new Dbpdf();
                    $pdf = $cPdf->getList();
                    // $varpdf = base64_encode($pdf[0]["pdf"]);
                    ?>
                    <a class="btndowloader" target="_blank" href="imagenes/pdf/<?php echo  $pdf[0]["pdf"] ?>">Download<br /><span id="regular">company profile</span></a>
                </div>
                <div class="banner" style="height:500px; margin-top:-25px;">
                    <div class="contienebannersombra">
                        <div class="sombrabanner1"></div>
                        <div id="bannernosotros">
                            <div id="carouselnosotros">
                                <?php
                                $slide = new Dbslide_english();
                                $sli = $slide->getList();
                                for ($a = 0, $b = count($sli); $a < $b; $a++) { ?>
                                    <div id="contienebannernosotros"><!--item banner-->
                                        <img class="imgbanner" src="imagenes/english/980_380_<?php echo  $sli[$a]["img"]. "?" . rand(0, 9999999); ?>" />
                                    </div><!--item banner-->
                                <?php } ?>
                            </div>
                            <div id="pager"></div>
                        </div>
                        <div class="sombrabanner2"></div>
                    </div>
                </div>
                <div class="contenedor">
                    <div class="seccion1">
                        <div class="textochat2">
                            chat<br /><span id="rojo" style="font-size:60px;">with us</span>
                            <div class="flechacontac"></div>
                            <!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><a name="livezilla_chat_button" href="javascript:void(window.open('http://www.norquimicos.com.co/livezilla/chat.php?acid=8f791','','width=590,height=760,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="lz_cbl"><img src="http://www.norquimicos.com.co/livezilla/image.php?acid=90074&amp;id=2&amp;type=inlay" width="200" height="55" style="border:0px;" alt="LiveZilla Live Chat Software" /></a><!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
/* <![CDATA[ */
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "http://www.norquimicos.com.co/livezilla/server.php?acid=03efd&request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
/* ]]> */
</script><noscript><img src="http://www.norquimicos.com.co/livezilla/server.php?acid=03efd&amp;request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript><!-- http://www.LiveZilla.net Tracking Code -->                            </div>

</div>
                    </div>
                    <form action="" method="post" id="formenviar">
                        <div class="seccion1">
                            <div id="formulario">
                                <input type="hidden" value="abc" name="envio" />
                                <input type="text" name="nombref" id="texto" class="validate[required]" onblur="if(this.value=='') this.value='Name'" onclick="if(this.value=='Name') this.value=''" value="Name" data-validation-placeholder="Name" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" name="emailf" class="validate[required,custom[email]]" id="texto" onblur="if(this.value=='') this.value='E-mail'" onclick="if(this.value=='E-mail') this.value=''" value="E-mail" data-validation-placeholder="E-mail" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" name="telefonof" class="validate[required,custom[phone]]" id="texto" onblur="if(this.value=='') this.value='Phone'" onclick="if(this.value=='Phone') this.value=''" value="Phone" data-validation-placeholder="Phone"/>
                            </div>
                            <div id="formulariota">
                                <textarea name='campocomentariof' class='rom validate[required];' rows="4"  onblur="if(this.value=='') this.value='Comment'" onclick="if(this.value=='Comment') this.value=''"  data-validation-placeholder="Comment">Comment</textarea>
                            </div>
                            <input id="btnmoreenviar" type ="submit" value="Send" />
                    </form>
                    <!--<a id="btnmoreenviar" href="#"><span id="bold">send</span></a>-->
                    <a href="http://www.linkedin.com/NORQUIMICOS" target="_blank" id="in-c"></a>
                    <a href="https://twitter.com/norquimicosltda" target="_blank" id="twi-c"></a>
                    <a href="http://www.facebook.com/Norquimicos" target="_blank" id="fac-c"></a>
                    <a href="skype:norquimicos.ltd?call" id="skype"></a>
                    <div class="info-contacto">
                        <div class="info-cont-sen-1"><strong>Phone:</strong><br>(1) 4143089</div>
                        <div class="info-cont-sen-2"><strong>E-mail:</strong><br><a href="mailto:info@norquimicos.com.co" target="_blank">info@norquimicos.com.co</a></div>
                        <div class="info-cont-dob"><strong>Address:</strong><br>Carrera 56 A # 4D-19 Bogotá - Colombia</div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footerenglish.php'; ?>

    </div>
</body>

</html>

<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == "1") {
            echo '<script>setTimeout(\'alert("Message sent, will soon receive a response from us");\',400);</script>';
        } else {
            echo "<script type='text/javascript'>window.location='index.php?seccion=index';</script>";
        }
    }
}
?>