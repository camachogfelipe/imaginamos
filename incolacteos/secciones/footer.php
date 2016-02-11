<?php
$textosc = new Dbtextos();
$textof = $textosc->getList();
?>

<footer>
    <div class="con-footer">
        <div class="footer-sw"></div>
        <div class="mg-footer clearfix">
            <div class="info-footer">
                <div class="sedes">
                    <ul class="slider-sedes">
                        <?php
                        $cFooter = new Dbfooter();
                        $footer = $cFooter->getList();
                        for ($fo = 0, $ff = count($footer); $fo < $ff; $fo++) {
                            ?>
                            <li>
                                <h1><?php echo utf8_encode($footer[$fo]["titulo"]) ?></h1><span></span>
                                <ul class="sede-dates">
                                    <li class="sede-date-1">
                                        <p><?php echo utf8_decode($footer[$fo]["direccion"]) ?></p>
                                        <p><?php echo utf8_decode($footer[$fo]["direccion1"]) ?></p>
                                    </li>
                                    <li class="sede-date-2">
                                        <p>Teléfonos de Contacto:</p>
                                        <p><strong><?php echo utf8_decode($footer[$fo]["telefono"]) ?></strong></p>
                                    </li>
                                    <li class="sede-date-3">
                                        <p>Fax: <?php echo utf8_decode($footer[$fo]["fax"]) ?></p>
                                        <a href="mailto:<?php echo utf8_decode($footer[$fo]["correo"]) ?>"><p><strong><?php echo utf8_decode($footer[$fo]["correo"]) ?></strong></p></a>
                                    </li>
                                </ul>
                            </li>
                        <?php }
                        ?>

                          
                    </ul>
                </div>
                <div class="footer-map">
                    <ul>
                        <a href="index.php?seccion=empresa"><li>¿Quiénes somos?</li></a>
                        <a href="#modal-map" class="modals-act"><li>Mapa del sitio</li></a>
                        <a href="#modal-privacy" class="modals-act"><li>Políticas de privacidad</li></a>
                        <a href="#modal-terms" class="modals-act"><li>Términos y condiciones</li></a>
                    </ul>
                </div>
                <div class="footer-copy">
                    <div class="footer-copy-tx"><p>&copy; <?php echo date("Y") ?> <strong>INCOLACTEOS</strong> - Todos los derechos reservados - Prohibida su reproducci&oacute;n parcial o total</p></div>
                    <div class="footer-ahorranito"></div>
                </div>
            </div>
        </div>
    </div>
</footer><div id="toTop"></div>
<div class="con-modals">
    <div id="modal-news">
        <h2>Newsletter</h2>
        <div class="news-tx">
            <div class="scroll-wrap">
                <p><?php echo utf8_encode(nl2br($textof[3]["texto"])) ?></p>
            </div>
        </div>
        <div class="con-form-int clearfix">
            <form class="fm-int" action="index.php?seccion=contacto-ok" method="post">
                <div class="form-db">
                    <fieldset>
                        <label>Nombre</label>
                        <input name="nombre" class="validate[required]">
                        <input type="hidden" name="bandera" value="123">
                    </fieldset>
                    <fieldset>
                        <label>Correo electrónico</label>
                        <input name="correo" class="validate[required, custom[email]]">
                    </fieldset>
                    <fieldset>
                        <label>Suscribirme a</label>
                        <select name="suscripcion" class="validate[required]" data-validation-placeholder="">
                            <option value="">-</option>
                            <option value="Incolacteos">&nbsp; &bull; Incolacteos</option>
                            <option value="California">&nbsp; &bull; California</option>
                            <option value="Lechesan">&nbsp; &bull; Lechesan</option>
                            <option value="Todos">&nbsp; &bull; Todos los anteriores</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <input type="submit" class="bt-submit" value="ENVIAR">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-privacy">
        <h2>Políticas de privacidad</h2>
        <div class="modal-more-tx">
            <div class="scroll-wrap">
                <p>www.california.com.co es un sitio web dedicado a la promoción, publicidad y mercadeo de los productos fabricados y/o comercializados por nuestra Compañía. De acuerdo con lo establecido en la ley 1581 de 2012 y su Decreto Reglamentario 1377 de 2013, CONSERVAS CALIFORNIA S.A.  ha llevado a cabo el tratamiento de datos personales en desarrollo del su actividad económica de clientes, consumidores, proveedores y empleados con los que tiene o ha tenido una relación comercial y/o laboral hasta la fecha.</p>
                <p>Su información personal será utilizada para las siguientes finalidades: 
                <ul>
                	<li>Evaluar el uso de los sitios, productos y servicios de Conservas California</li>
                  <li>Mejorar tu experiencia en el sitio web de Conservas California S.A.</li>
                  <li>Analizar la efectividad de nuestra publicidad, concursos y promociones</li>
                  <li>Sugerir productos o servicios que pueden ser de su interés</li>
                  <li>Comunicar cambios sobre cambios productos o servicios</li>
                  <li>Ofrecer la oportunidad de participar en nuestros concursos y promociones</li>
								</ul>
                </p>
                <p>Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:
                <ul>
                	<li>Nombre completo</li>
                  <li>Teléfono fijo y/o celular</li>
                  <li>Correo electrónico</li>
                  <li>Ciudad</li>
                  <li>Dirección</li>
                </ul>
                </p>
                <p>Es importante informarle que usted tiene derecho al Acceso, Rectificación y Cancelación de sus datos personales, a Oponerse al tratamiento de los mismos o a revocar el consentimiento que para dicho fin nos haya otorgado.</p>
                <p>Para ello, es necesario que envíe la solicitud al Departamento de Mercadeo, ubicado en Carrera 34 No. 19 - 17, Bogotá - Colombia o bien, se comunique al teléfono (57) 3 517766 o vía correo electrónico a trademarketing@incolacteos.com.co, el cual solicitamos confirme vía telefónica para garantizar su correcta recepción.</p>
                <p>En caso de que no desee de recibir mensajes promocionales de nuestra parte, puede enviarnos su solicitud por medio de la dirección electrónica: trademarketing@incolacteos.com.co</p>
            </div>
        </div>
    </div>
    <div id="modal-terms">
        <h2>Términos y condiciones</h2>
        <div class="modal-more-tx">
            <div class="scroll-wrap">
                <p><strong>Aceptación de Términos.</strong></p>
                <p>Al acceder, hojear y/o usar este Sitio, el usuario admite haber leído y entendido estos Términos de Uso y está de acuerdo en sujetarse a ellos y a la legislación Colombiana aplicable. Cuando el usuario utilice cualquier servicio suministrado en este Sitio, como "newsletter", contactos, concursos, y demás, estará sujeto a las reglas, guías, políticas, términos y condiciones aplicables a cada uno de ellos. En caso de que el usuario no esté de acuerdo con estos términos, se abstendrá de usar, acceder y/o hojear este Sitio.</p>
                <p>CONSERVAS CALIFORNIA S.A. no se responsabiliza de que el material de este Sitio sea apropiado o esté disponible para ser accedido desde aquellos lugares donde esté prohibido su contenido por ser considerado ilegal. Aquellos que decidan acceder a este Sitio desde otros lugares lo harán bajo su propia iniciativa y es su responsabilidad el sujetarse a las leyes locales que sean aplicables. Cualquier reclamo con relación al uso de este Sitio y el material en él contenido está regulado por las leyes de Colombia. Estos términos y condiciones están sujetos a cambios sin previo aviso en cualquier momento, bajo la sola voluntad de CONSERVAS CALIFORNIA S.A., y a partir de la fecha de modificación de estos términos y condiciones, todas las operaciones que se celebren entre CONSERVAS CALIFORNIA S.A. y el usuario se regirán por el documento modificado.</p>
                <p><strong>California.com.co</strong></p>
                <p>www.california.com.co (en adelante “california.com.co”) es un sitio web dedicado a la promoción, publicidad y mercadeo de los productos fabricados y/o comercializados por CONSERVAS CALIFORNIA S.A. y/o sus sociedades vinculadas. California.com.co es de propiedad de la sociedad CONSERVAS CALIFORNIA S.A., sociedad comercial constituida en y bajo las leyes colombianas, cuya actividad principal es la fabricación y comercialización de productos alimenticios.</p>
                <p><strong>Derechos de Propiedad intelectual</strong></p>
                <p>La información, contenido, informes, datos, bases de datos, gráficos, interfases, paginas web, textos, archivos, software, nombres de productos, nombres de compañías, marcas comerciales, insignias, y nombres comerciales incluidos en este sitio web (en adelante “El Contenido”) son de propiedad de CONSERVAS CALIFORNIA S.A. y/o sus sociedades vinculadas y/o licenciantes según el caso, así como la forma en la cual El Contenido se presenta o aparece. En consecuencia, El Contenido no podrá ser modificado, copiado, reproducido, transmitido o distribuido de ninguna manera, así como tampoco podrá utilizarse en ninguna forma, ni para ningún propósito sin autorización expresa y escrita por parte de CONSERVAS CALIFORNIA S.A.
                </p>
                <p>CONSERVAS CALIFORNIA S.A. otorga al usuario una licencia y derecho personal, intransferible y no exclusivo para navegar por el sitio web California.com.co en pantalla de un computador ordenador o dispositivo PDA bajo su control, únicamente para uso personal y no comercial, con la condición de que el usuario no modificará los Contenidos y conservará todas las leyendas de derechos de autor y de otro tipo de propiedad.</p>
                <p>Ningún contenido de es sitio web podrá ser interpretado como concesión u otorgamiento a cualquier título de autorizaciones, licencias o cualquier otro derecho para usar o disponer de cualquier forma de la Propiedad Intelectual y de la propiedad Industrial. Cualquier uso no autorizado constituirá una violación a los presentes Términos y Condiciones y a las normas vigentes nacionales e internacionales sobre Propiedad Industrial.</p>
                <p>Las ideas, comentarios, reclamos, quejas y sugerencias que sean enviadas en forma espontánea y libre por los su usuarios a CONSERVAS CALIFORNIA S.A. a través de esta página, relativas a los productos, servicios, planes de mercadeo o de cualquier otro tipo, serán usadas libremente por CONSERVAS CALIFORNIA S.A. bajo el entendimiento de que tales comunicaciones no son confidenciales y no están protegidas por ninguna regulación atinente a derechos de autor o propiedad intelectual, y por ende, el usuario remitente de tal información, no podrá reclamar indemnización o participación alguna en virtud del legítimo uso comercial que CONSERVAS CALIFORNIA S.A. dé a la misma. Si dicha información estuviera protegida por algún tipo de regulación sobre derechos de autor o propiedad intelectual, su comunicación espontánea a CONSERVAS CALIFORNIA S.A. se entenderá como una renuncia total e irrevocable a los derechos y privilegios morales y patrimoniales que tales regulaciones otorgan, y la transferencia de los mismos a CONSERVAS CALIFORNIA S.A.</p>
                <p><strong>Divisibilidad</strong></p>
                <p>En caso de que una o más de las disposiciones contenidas en estos Términos y Condiciones sean consideradas nulas, ilegales o ineficaces en cualquier aspecto, la validez, legalidad, exigibilidad o eficacia del resto de las disposiciones aquí contenidas no se verán afectadas o anuladas por dicha circunstancia.</p>
                <p><strong>Renuncia de responsabilidad</strong></p>
                <p>Ni CONSERVAS CALIFORNIA S.A. ni ninguna otra parte involucrada en crear, producir o manejar este sitio en nuestro nombre tendrán responsabilidad alguna por cualquier uso directo, accidental, consecuente, indirecto, daños, gastos, pérdidas o responsabilidad por su acceso a usar, inhabilitar el uso, cambiar el contenido de este sitio o que surjan por cualquier otro acceso al sitio web a través de un enlace de este sitio web o de cualquier acción que tomemos o decidamos no tomar como resultado de cualquier correo electrónico que nos envíen.</p>
                <p>Ni CONSERVAS CALIFORNIA S.A. ni ninguna otra parte involucrada en crear, producir o entregar este sitio web tendrán responsabilidad alguna de actualizar el material y servicios disponibles en este sitio web o corregir, actualizar o lanzar en relación con lo aquí mencionado. Cualquier material contenido en este sitio web está sujeto a cambio sin previo aviso. Adicionalmente, CONSERVAS CALIFORNIA S.A. no tendrá responsabilidad alguna por cualquier pérdida causada por virus que puedan infectar a su computadora u otra propiedad por razón de usar, ingresar o bajar cualquier material de este sitio web. Si usted elige bajar materiales de este sitio web siempre será bajo su propio riesgo.</p>
                <p>La disponibilidad de los sitios y medios de comunicación no obliga a CONSERVAS CALIIFONRIA S.A. a tenerlos activos en todo momento. De igual manera la compañía se reserva el derecho de admisión de cualquier persona, y a suspender el servicio sin previo aviso sea cual fuere la razón.</p>
                <p><strong>Actualización del Aviso Legal</strong></p>
                <p>Nos reservamos el derecho de hacer cualquier cambio o corrección a este aviso. Por favor visite esta página de tiempo en tiempo para revisar esta información, así como información adicional nueva.</p>
                <p><strong>Ley aplicable</strong></p>
                <p>Todos los asuntos relacionados con esta página web se rigen por las leyes de la República de Colombia.</p>
            </div>
        </div>
    </div>
    <?php
    $promociones1 = DbHandler::GetAll("SELECT * FROM promociones_detalles");
    for ($a = 0, $b = count($promociones1); $a < $b; $a++) {
        ?>
        <div id="modal-promo<?php echo $promociones1[$a]["id_promociones"] ?>">
            <h2><?php echo utf8_encode($promociones1[$a]["titulo"]) ?></h2>
            <div class="con-img-modal-promo"><img src="img/promociones/396_346_<?php echo $promociones1[$a]["img"] ?>" width="396" height="346" alt=""></div>
            <div class="promo-tx">
                <div class="scroll-wrap">
                    <p><?php echo utf8_encode(nl2br($promociones1[$a]["texto"])) ?></p>
                </div>
            </div>
        </div>
    <?php }
    ?>

    <div id="modal-map">
        <h2>Mapa de navegación</h2>
        <div class="list-map">
            <h1>Incolacteos</h1>
            <ul>
                <li><a href="index.php?seccion=empresa">Quiénes somos</a></li>
                <li><a href="index.php?seccion=productos">Productos</a></li>
                <li><a href="index.php?seccion=importadas">Marcas importadas</a></li>
                <li><a href="index.php?seccion=promociones">Promociones</a></li>
                <li><a href="index.php?seccion=contacto">Contáctenos</a></li>
            </ul>
            <h1>California</h1>
            <ul>
                <li><a href="index.php?seccion=california">Quiénes somos</a></li>
                <li><a href="index.php?seccion=productos-california">Productos</a></li>
                <li><a href="index.php?seccion=recetas-california">Recetas</a></li>
                <li><a href="index.php?seccion=contacto-california">Contáctenos</a></li>
            </ul>
            <h1>Lechesan</h1>
            <ul>
                <li><a href="index.php?seccion=lechesan">Quiénes somos</a></li>
                <li><a href="index.php?seccion=productos-lechesan">Productos</a></li>
                <li><a href="index.php?seccion=recetas-lechesan">Recetas</a></li>
                <li><a href="index.php?seccion=contacto-lechesan">Contáctenos</a></li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="assets/js/actions.js"></script>

</body>
</html>
