<?php include("head.php"); ?>
<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
<?php
include("header-int.php");

$idportafolio_cab = !empty($_REQUEST['idportfolio']) ? $_REQUEST['idportfolio'] : null;
$porta = new Dbportafolio();
$mDataPorta = array("where" => "idportafolio='" . $idportafolio_cab . "'");
$portafolio = $porta->getList2($mDataPorta);

//         echo $idportafolio_cab.'aca';
$cImg_accesorio = new Dbportafolio_cab();
$mDataI = array("where" => "idportafolio='" . $idportafolio_cab . "'");
$portafolio_cab = $cImg_accesorio->getListOne($mDataI);
$idportafolio_cab = $portafolio_cab['idportafolio_cab'];

$cPorta_ = new Dbporta_portafolio_cab();
$mDataP = array("where" => "idportafolio_cab='" . $idportafolio_cab . "'");
$porta_portafolio_cab = $cPorta_->getList2($mDataP);
$cant = count($porta_portafolio_cab);
//         print_r($portafolio_cab);
?>

<script type="text/javascript">function soloNumeros(evt) {
        if (window.event) {
            keynum = evt.keyCode;
        } else {
            keynum = evt.which;
        }
        if (keynum > 47 && keynum < 58) {
            return true;
        } else {
            return false;
        }
    }</script>

<section>
    <div class="con-section">
        <div class="mg-section clearfix">
            <h1>
                Resultado
                <a href="javascript:history.back()"><div class="back-vn"></div></a>
            </h1>
            <div class="rs-tabla-img"><img src="assets/img/portafolio_cab/<?php echo $portafolio_cab['imagen'] ?>" width="600" alt=""></div>
            <div class="sep-line"></div>
            <div class="con-tabla-rs">
                <div>
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs">
                        <thead>
                            <tr>
                                <?php if (!empty($portafolio_cab['col1'])) { ?><th width="80"><?php echo $portafolio_cab['col1'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col2'])) { ?><th width="80"><?php echo $portafolio_cab['col2'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col3'])) { ?><th width="80"><?php echo $portafolio_cab['col3'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col4'])) { ?><th width="80"><?php echo $portafolio_cab['col4'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col5'])) { ?><th width="80"><?php echo $portafolio_cab['col5'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col6'])) { ?><th width="80"><?php echo $portafolio_cab['col6'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col7'])) { ?><th width="80"><?php echo $portafolio_cab['col7'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col8'])) { ?><th width="80"><?php echo $portafolio_cab['col8'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col9'])) { ?><th width="80"><?php echo $portafolio_cab['col9'] ?></th> <?php } ?>
                                <?php if (!empty($portafolio_cab['col10'])) { ?><th width="80"><?php echo $portafolio_cab['col10'] ?></th> <?php } ?>
                                <?php
                                if (count($portafolio) > 0) {
                                    if ($portafolio[0]['orientacion'] == 'NO') {
                                        ?>
                                        
                                        <?php
                                    } else {
                                        ?>
                                        <th width="172">Orientaci&#243;n</th>
                                        <?php
                                    }
                                }
                                ?>

                                <th width="172">Cantidad</th>
                                <th width="172">Selecci&#243;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < $cant; $i++) { ?>
                                <tr>
                                    <?php if (!empty($portafolio_cab['col1'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col1"] ?>
                                            <input type="hidden" id="col1_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col1"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col2'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col2"] ?>
                                            <input type="hidden" id="col2_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col2"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col3'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col3"] ?>
                                            <input type="hidden" id="col3_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col3"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col4'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col4"] ?>
                                            <input type="hidden" id="col4_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col4"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col5'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col5"] ?>
                                            <input type="hidden" id="col5_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col5"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col6'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col6"] ?>
                                            <input type="hidden" id="col6_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col6"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col7'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col7"] ?>
                                            <input type="hidden" id="col7_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col7"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col8'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col8"] ?>
                                            <input type="hidden" id="col8_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col8"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col9'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col9"] ?>
                                            <input type="hidden" id="col9_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col9"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php if (!empty($portafolio_cab['col10'])) { ?>  
                                        <td><?php echo $porta_portafolio_cab[$i]["col10"] ?>
                                            <input type="hidden" id="col10_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["col10"] ?>" >
                                        </td>
                                    <?php } ?>
                                    <?php
                                    if (count($portafolio) > 0) {
                                        if ($portafolio[0]['orientacion'] == 'NO') {
                                            ?>
                                            <?php
                                        }else {
                                        ?>
                                        
                                        <td><center>
                                            <div class="con-datos-rs clearfix" style="float:none !important">
                                                <fieldset>
                                                    <select id="orientacion_<?php echo $i ?>" >
                                                        <option value='Neutro'>Neutro</option>
                                                        <option value='Derecha'>Derecha</option>
                                                        <option value='Izquierda'>Izquierda</option>
                                                    </select>
                                                </fieldset>
                                            </div></center>
                                        </td>
                                        <?php
                                    }
                                    } 
                                    ?>

                                    <td>
                        <center><div class="con-datos-rs clearfix" style="float:none !important">
                                            <fieldset>
                                                <input type="hidden" id="idportafolio_cab<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["idportafolio_cab"]; ?>" >
                                                <input type="hidden" id="valor_<?php echo $i ?>" value="<?php echo $porta_portafolio_cab[$i]["valor"]; ?>" >

                                                <input placeholder="Cantidad..." id="cantidad_<?php echo $i ?>" name="cantidad_<?php echo $i ?>" onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                                            </fieldset>
                                        </div></center>
                                    </td>
                                    <td>
                                    <center>
                                        <div class="con-datos-rs-bt clearfix" style="float:none !important">
                                            <a href="#modal-ref"  onclick="comprar('<?php echo $i ?>');" class="submit-torn modals-act"></a>
                                        </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-sep"></div>

<?php include("footer.php"); ?>
<script>
    function comprar(i) {
        // alert('aca');    

        var id = $('#idporta_accesorio_' + i).val();
        var can = $('#cantidad_' + i).val();
        var ori = $('#orientacion_' + i).val();
        var valor = $('#valor_' + i).val();
        var det = 'Ref:' + $('#ref_' + i).val() + '-longitud:' + $('#longitud_' + i).val() + '-Diametro:' + $('#diametro_' + i).val() + '-tipo.boquilla:' + $('#tipo_boquilla_' + i).val()
        var tabla = 'porta_accesorio';

        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: "secciones/process-compra.php",
            data: "id=" + id + "&cant=" + can + "&ori=" + ori + "&det=" + det + "&tabla=" + tabla + "&valor=" + valor,
            success: function(data) {
                if (data.success == true) {
                    alert(data.message);
                }
                else {
                    $('#msg-error').html('<p>' + data.message + '</p>');
                    $('#msg-error').addClass('msg-error');
                }
            },
            error: function(data, error, errorThrown) {
                alert(error + errorThrown);
            }
        });
    }
</script>