<script>
    $(document).ready(function() {
        $('#example').dataTable( {
            "sPaginationType": "full_numbers",
            "iDisplayLength": 10 /* NUMERO DE ROWS O ITEMS POR PAGINA EN EL PAGINADOR */
            
        });
    } );
</script>
<style>
    .dataTables_length, .dataTables_filter, .dataTables_info{
        display:none; 
    }
    td{
        background-color:#fff !important;
    }
    th{
        border: none !important;
    }
</style>
<div class="mensaje-tit">Resultados</div>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
        <tr style="background-image:none;">
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato) : ?>
            <tr class="gradeU">
                <td><?php echo $dato->first_name,' ',$dato->last_name ?></td>
                <td><a href="<?php echo site_url('perfil/' . $dato->inshaka_url) ?>" target="_blank">Ver más</a></td>
                <td class="center">
                	<div class=" ver-mas-musico">
                    <a class="add-user-to-list" href="javascript:;" target="_blank" data-user-id="<?php echo $dato->id ?>" data-name-user="<?php echo $dato->first_name,' ',$dato->last_name ?>" data-url-user="<?php echo site_url('perfil/' . $dato->inshaka_url) ?>">Agregar</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th></th>
           
            <th></th>
        </tr>
    </tfoot>
</table>