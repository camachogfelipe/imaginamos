<?php
$db->doQuery("SELECT * FROM newsletter ORDER BY idnewsletter ASC", 1);
$fil = $db->rows;
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Newsletter</span>
</div><!-- End header -->
<div class="content">
    <div class="section"><a href="exportar.php" id="submitForm" class="uibutton normal large">Exportar</a></div>
    <br/>
        <div class="tableName toolbar">
            <table class="display data_table2" >
                <thead>
                    <tr>
                        <th><div class="th_wrapp">Nombre</div></th>	
                <th><div class="th_wrapp">Email</div></th>
                <th><div class="th_wrapp">Acciones</div></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $fil; $i++) {
                        $data = $db->results[$i];
                        ?>
                        <tr class="odd gradeX">                                
                            <td class="center" width="70px">
                                <?php echo $data["nombre"] ?>
                            </td>
                            <td class="center" width="70px">
                                <?php echo $data["email"] ?>
                            </td>
                            <td class="center" width="100px">
                                <a id="<?php echo $data["idnewsletter"] ?>" class="Delete uibutton special" tableToDelete="newsletter" nameField="idnewsletter">Eliminar</a>                                
                            </td>  
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</div>
