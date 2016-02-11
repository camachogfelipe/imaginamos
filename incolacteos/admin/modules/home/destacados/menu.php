<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>HOME >> DESTACADOS</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">         
            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen</span></th>
                        <th><span class="th_wrapp">T&iacute;tulo azul claro</span></th>
                        <th><span class="th_wrapp">T&iacute;tulo azul oscuro</span></th>
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM destacados_home ORDER BY id ASC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../img/destacados/270_168_<?php echo $data["img"] . "?" . rand(0, 9999999); ?>" width="270" height="168" />
                            </td> 
                            <td class="center titulo" width="100px"><?php echo $data["titulo"] ?></td>
                            <td class="center titulo" width="100px"><?php echo $data["subtitulo"] ?></td>                           
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=destacados&id=<?php echo $data["id"] ?>">Editar</a>                            
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>
<?php
if (isset($valor)) {
    if ($valor == 0) {
        ?><script>showError('Mínimo un banner',3000);</script>
        <?php
    }
}
?>