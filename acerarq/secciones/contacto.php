<?php include("head.php"); ?>

<?php include("header.php");
$cContacto = new Dbcontacto_des();
$mData = array("where"=>"idcontacto_des=1");
$contacto = $cContacto->getListOne($mData);
$cDirectorio = new Dbcontacto();
$mData = array("where"=>"idcontacto=1");
$directorio = $cDirectorio->getListOne($mData);
?>

<div class="con-content">
    <div class="mg-content">
        <div class="info-content">
            <h1>Contáctenos</h1>
            <div class="contact-icon"><img src="assets/img/contact-icon.png" width="160" height="150" alt=""></div>
            <div class="con-info-gral">
                <h2><?php echo utf8_encode($contacto["texto"]) ?></h2>
                <div class="con-form">
                    <form id="contact-form" action="index.php?seccion=mail" method="post">
                        <fieldset>
                            <input name="nombre" value="Nombre..." class="validate[required]" type="text" data-validation-placeholder="Nombre..." onBlur="if (this.value == '') {
                                    this.value = 'Nombre...'
                                }" onFocus="if (this.value == 'Nombre...') {
                                    this.value = ''
                                }">
                        </fieldset>
                        <fieldset>
                            <input name="empresa" value="Empresa..." type="text" onBlur="if (this.value == '') {
                                    this.value = 'Empresa...'
                                }" onFocus="if (this.value == 'Empresa...') {
                                    this.value = ''
                                }">
                        </fieldset>
                        <fieldset>
                            <input  name="cargo" value="Cargo..." type="text" onBlur="if (this.value == '') {
                                    this.value = 'Cargo...'
                                }" onFocus="if (this.value == 'Cargo...') {
                                    this.value = ''
                                }">
                        </fieldset>
                        <fieldset>
                            <input name="telefono" value="Teléfono..." class="validate[required, custom[phone]]" type="text" data-validation-placeholder="Teléfono..." onBlur="if (this.value == '') {
                                    this.value = 'Teléfono...'
                                }" onFocus="if (this.value == 'Teléfono...') {
                                    this.value = ''
                                }">
                        </fieldset>
                        <fieldset>
                            <input name="email" value="Correo electrónico..." class="validate[required, custom[email]]" type="text" data-validation-placeholder="Correo electrónico..." onBlur="if (this.value == '') {
                                    this.value = 'Correo electrónico...'
                                }" onFocus="if (this.value == 'Correo electrónico...') {
                                    this.value = ''
                                }">
                        </fieldset>
                        <fieldset>
                            <textarea name="comentario" value="Comentarios..."class="validate[required]" data-validation-placeholder="Comentarios..." onBlur="if (this.value == '') {
                                    this.value = 'Comentarios...'
                                }" onFocus="if (this.value == 'Comentarios...') {
                                    this.value = ''
                                }">Comentarios...</textarea>
                        </fieldset>
                        <fieldset class="bt-envio">
                            <input type="submit" value="Enviar">
                        </fieldset>
                    </form>
                </div>
                <div class="con-map">
                    <div class="map-acerarq">
                        <?php echo $contacto["mapa"] ?>
                    </div>
                    <div class="info-acerarq">
                        <p><strong>Dirección: </strong> <?php echo utf8_encode($directorio["direccion"]).' '.  utf8_encode($directorio["ciudad"]) ?></p>
                        <p><strong>Teléfonos: </strong><?php echo utf8_encode($directorio["telefono_uno"]).' / '.utf8_encode($directorio["telefono_dos"]) ?> </p>
                        <p><strong>E-mail: </strong> <a href="mailto:<?php echo utf8_encode($directorio["email"]) ?>"><?php echo utf8_encode($directorio["email"]) ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
<?php 
 if (isset($_GET['Erno'])) {
    if (intval($_GET['Erno'])) {
        $valor = $_GET['Erno'];
        if ($valor == 1) {
            ?><div class="con-modals">
                <div id="ok-form">
                  <h1>Su consulta ha sido enviada exitosamente.</h1>
                  <p>Su respuesta está siendo preparada y la recibirá antes de 24 horas.</p>
                </div>
              </div>
            <?php
        }
    }
}
?>