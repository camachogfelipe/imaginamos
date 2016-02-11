<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);	
$result = $db->results;
?>
<?php if($_SESSION['CMSRolUser'] == "admin") { ?>
<div class="setting"><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/"><b>Administradores</b></a><img src="http://cms.imaginamos.com/images/gear.png" class="gear"></div>
<?php } ?>
<div class="logout" title="Clic"><b><a href="<?php echo $result[0][config_path]; ?>js/logout.php">Salir</a></b></div> 

<script type="text/javascript">        
             $(function() {
                $("#main_menu").sortable({
                revert: true,
                cursor: 'move', 
                update: function(event, ui) {
                    var newOrder = $('#main_menu').sortable('serialize');
                    
                    $.ajax({
                        url : '<?php echo $result[0][config_path]; ?>changeOrder/index.php',
                        type : 'POST',
                        data : newOrder,
                                          
                        success : function(json){
                                    
                                    
                        }
                    }); 
            
                }
            }).disableSelection();
            
           
             });
   

            </script>