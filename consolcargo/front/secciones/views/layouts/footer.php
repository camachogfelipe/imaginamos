<?php
$direccionVisitenos = '';
$barrioVisitenos = '';
$ciudadVisitenos = '';
$telefonoContactenos = '';
$correoContactenos = '';
?>
<?php if ($contactenos != false){ ?>
<?php
foreach ($contactenos as $dato):
$telefonoContactenos = $dato->telefono;
$correoContactenos = $dato->correo;
endforeach;
}
?>
<?php if ($visitenos != false){ ?>
<?php
foreach ($visitenos as $dato):
$direccionVisitenos = $dato->direccion;
$barrioVisitenos = $dato->barrio;
$ciudadVisitenos = $dato->ciudad;
endforeach;
}
?>
<footer class="cfx">
    <section class="con-footer cfx">
        <div class="con-footer-mg cfx">
            <div class="con-col-foo con-col-foo1">
                <h1>Nuestras certificaciones</h1>
                <div class="con-foo-cert">
                    <ul class="slide-cert">

                        <?php if ($certificaciones != false): $contadorCertificaciones = 0; ?>
                        <?php foreach ($certificaciones as $dato): ?>
                        <?php
                        if ($contadorCertificaciones % 4 == 0) {
                        ?> <li>
                            <?php
                            }
                            ?>
                            <div class="foo-logo"><img src="<?php echo base_url('uploads/front/certificaciones/' . $dato->imagen) ?>" alt=""></div>

                            <?php
                            $contadorCertificaciones++;
                            if ($contadorCertificaciones % 4 == 0) {
                            ?> </li>
                        <?php
                        }
                        ?>

                        <?php endforeach; ?>
                        <?php endif; ?>  
                        <!--/li-->
                    </ul>
                </div>
            </div>
            <div class="con-col-foo con-col-foo2">
                <h1>Visítenos</h1>
                <ul class="list-foo">
                    <li><span class="icon-map-pick"></span><a href="https://www.google.com/maps?q=Colombia&hl=es-419&ll=4.565474,-65.917969&spn=24.646156,43.286133&sll=4.775595,-74.039547&sspn=0.006062,0.014656&hnear=Colombia&t=m&z=5" target="_blank">
                            <?php echo $direccionVisitenos;?></a></li>
                    <li><span class="icon-map-pick"></span><?php echo $barrioVisitenos;?></li>
                    <li><span class="icon-map-pick"></span><?php echo $ciudadVisitenos;?></li>
                </ul>
            </div>
            <div class="con-col-foo con-col-foo3">
                <h1>Contáctenos</h1>
                <ul class="list-foo">
                    <li><span class="icon-phone"></span>Telef&oacute;no: <?php echo $telefonoContactenos;?></li>
                    <li><span class="icon-mail"></span><a href="mailto:<?php echo $correoContactenos;?>"><?php echo $correoContactenos;?></a></li>
                </ul>
            </div>
            <div class="con-col-foo con-col-foo4">
                <h1>Mapa de navegación</h1>
                <ul class="list-foo list-foo-s">
                    <li><span class="icon-arrow-rg"></span><a href="../secciones/empresa">Nuestra empresa</a></li>
                    <li><span class="icon-arrow-rg"></span><a href="#">Construcción</a></li>
                    <li><span class="icon-arrow-rg"></span><a href="#">Nuestros procesos</a></li>
                    <li><span class="icon-arrow-rg"></span><a href="../secciones/enlaces">Enlaces importantes</a></li>
                    <li><span class="icon-arrow-rg"></span><a href="../secciones/servicios">Nuestros servicios</a></li>
                    <li><span class="icon-arrow-rg"></span><a href="servicios-en-linea.php">Servicios en línea</a></li>
                </ul>
            </div>
        </div>
    </section>
</footer>
<div class="con-copy cfx">
    <div class="copy-foo">
        <div class="copy-tx">
            <p>&copy; 2013 <strong>CONSOLCARGO</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total.</p>
        </div>
        <div class="footer-ahorranito"></div>
    </div>
</div>
<a id="to-top"></a>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/actions.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
</body>
</html>