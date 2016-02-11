<?php include("head.php"); ?>
<?php include("header.php"); ?>

<section>
    <div class="con-section">
        <div class="mg-section section-info clearfix">
            <div class="con-contact">
                <h1>CONTÁCTENOS</h1>
                <div class="contact-head">
                    <div class="contact-tx">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="contact-img"><img src="assets/img/contact-img.jpg" width="450" height="200" alt=""></div>
                </div>
                <div class="contact-info">
                    <div class="con-form">
                        <h1>FORMULARIO DE CONTACTO</h1>
                        <form class="contact-form" action="#" method="post">
                            <fieldset>
                                <input placeholder="Nombre y apellido..." class="validate[required]" type="text">
                            </fieldset>
                            <fieldset>
                                <input placeholder="Empresa..." class="validate[required]" type="text">
                            </fieldset>
                            <fieldset>
                                <input placeholder="Correo electrónico..." class="validate[required, custom[email]]" type="text">
                            </fieldset>
                            <fieldset>
                                <input placeholder="Teléfono..." class="validate[required, custom[phone]]" type="text">
                            </fieldset>
                            <fieldset>
                                <textarea placeholder="Mensaje..." class="validate[required]" type="text"></textarea>
                            </fieldset>
                            <fieldset class="fs-last">
                                <input type="submit" value="Enviar" class="submit">
                            </fieldset>
                        </form>
                    </div>
                    <div class="con-contact-dates">
                        <h2>DIRECCIÓN FÍSICA</h2>
                        <p>Terra Capital Group ™</p>
                        <p>Via Doima km 11.5</p>
                        <p>Ibagué, Tolima</p>
                        <p>Colombia</p>
                        <h2>CORREO ELECTRÓNICO</h2>
                        <ul>
                            <li><a href="mailto:#" target="_blank">email@terra.com</a></li>
                            <li><a href="mailto:#" target="_blank">email@terra.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Modal-form-ok-->
<div style="display:none;" class="modal-ok-ct">
    <div id="form-ok-ct">
        <h1>El formulario se ha enviado</h1>
        <h1>correctamente.</h1>
    </div>
</div>

<?php include("footer.php"); ?>