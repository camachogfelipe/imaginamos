<?php
///////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
///////////////////////////////


foreach ($menu as $item): $url = $item->menu_url;
    $ban = false; # La bandera permite cerrar la etiqueta </ul> una vez se acaben los submenus
    if ($url == "") {
        $url = 'cms';
    }
    ?>

<div id="sortable">
    <!-------------- Menu raiz -->
    <li class="limenu <?php if ($this->uri->segment(1) == $item->menu_url) { echo 'select';} ?>" id="mod_<?php echo $item->menu_id ?>">
        <a href="<?php echo base_url() . $url ?>">
            <img src="<?php echo base_url() ?>assets/images/icons/<?php echo $item->menu_icon ?>.png" style="margin-right: -20px">
            <span class="ico gray shadow" ></span><b><?php echo $item->menu_title ?></b>
        </a>



        <!-------------- Sub menu -->
        <?php
        $cont = 1; # Este contador permite abrir una sola vez la etiqueta <ul> en caso de haber submenus.
        foreach ($submenu as $sub_item):
            if ($sub_item->submenu_idmenu == $item->menu_id): $ban = true;
                ?>
                <?php
                if ($cont == 1) {
                    echo "<ul>";
                }
                ?>
            <li>
                <a href="<?php echo base_url() ?><?php echo $sub_item->submenu_url ?>">
                    <span class="ico gray shadow" ></span><b><?php echo $sub_item->submenu_title ?></b>
                </a>
            </li>

            <?php $cont++;
        endif;
    endforeach; ?>
    <?php if ($ban === true) {
        echo "</ul>";
        $cont = 1;
    } ?>

    </li>
<?php endforeach; ?>

</div>
<script>
    $(document).ready(function(){
        
        
        
             $(function() {
                    $("#sortable").sortable({
                revert: true,
                cursor: 'move', 
                update: function(event, ui) {
                    var newOrder = $('#sortable').sortable('serialize');
                    
                    $.ajax({
                        url : '<?php echo base_url(); ?>cms/changeOrder',
                        type : 'POST',
                        data : newOrder,
                                          
                        success : function(json){
                                    
                                    
                        }
                    });	
            
                }
            }).disableSelection();
            
           
             });
      });
</script>

