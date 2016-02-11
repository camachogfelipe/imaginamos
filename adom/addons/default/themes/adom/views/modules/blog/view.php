<?php

function FechaEs($sintax, $date = '') {
    // En caso de qe no este seteada la fecha pongo la fecha actual
    $date = ($date) ? $date : time();
    // Pongo los meses y dias en un array
    $meses = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');

    // Remplazando sintaxis [En el array $meses resto uno ya que como saben los array cuentan desde 0]
    $fechaes = str_replace('&diatexto', $dias[date('w', $date)], $sintax);
    $fechaes = str_replace('&dianum', date('d', $date), $fechaes);
    $fechaes = str_replace('&mestexto', $meses[date('m', $date) - 1], $fechaes);
    $fechaes = str_replace('&mesnum', date('m', $date), $fechaes);
    $fechaes = str_replace('&año', date('Y', $date), $fechaes);
    $fechaes = str_replace('&hora', date('H:i', $date), $fechaes);

    // Si existe $fechaes la muestro si no muestro la comemierderia que puse abajo xD
    return ($fechaes) ? $fechaes : '<b>Sintax Error</b>: sintax error in <b>' . __FILE__ . '</b> in function <b>FechaEs(int sintax,int time)</b>';
}
?>
<!-- content -->
{{ theme:partial name="header" }}
{{ theme:partial name="menu_internas" }}
{{ theme:partial name="breadcrumbs" }}
<section id="content">
    <div class="interna-global">
        <div class="conten-global">
            <div class="breadcrumb fonregular">
                {{ theme:partial name="breadcrumbs" }}
                <div class="buscador">
                    <input type="text" class="buscar" placeholder="Buscar...">
                    <input type="submit" class="btnbuscar">
                </div>
            </div>







            <div class="lateralbar">
                {{ widgets:instance id="7"}}   
                {{ rss:view_rss}} 
            </div>

            <div class="contenidos">
                <?php foreach ($post as $key => $value) { ?>
                    <div class="fondoblanco mtop">
                        <div class="contenidodetalle">
                            <div class="headerdetalle">
                                <div class="titulodetalle">
                                    <h1><?= $value['title']; ?></h1>
                                </div>
                                <div class="horadetalle">
                                    <i class="icon-clock relojdetalle"></i>
                                    <span><?= FechaEs('&dianum.&mesnum.&año.', $value['created']); ?><br><?= FechaEs('&hora', $value['created']); ?></span>
                                </div>
                                <div class="cerrardetalle">
                                    <a href="javascript:;" onclick="window.history.back();" class="icon-close"></a>
                                </div>
                            </div>
                            <div class="jp-container">
                                <div class="imgdetalle">
                                    <img src="<?= $value['image']['image']; ?>" height="300" alt="mts"/>
                                </div>
                                <div class="textodetalle">
                                    <p><?= $value['body']; ?></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
</section>
{{ theme:partial name="footer" }}
<!-- /content -->


