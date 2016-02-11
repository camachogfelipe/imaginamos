<?php
if (isset($_GET["id_del"]) && isset($_GET["pos"])&& isset($_GET["confirm"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $totals = 0;
        $db->doQuery("SELECT * FROM banner where posicion =".$_GET["pos"], SELECT_QUERY);
        $todos = $db->results;      
        if (count($todos) > 1) {
            $db->doQuery("DELETE FROM banner WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
        } else {
            $valor = 0;
        }
    }
}
?>
<?php
$db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;

//var_dump($dataAll);
?>
<script type="text/javascript">
     $(document).ready(function(){ 
               jQuery("select[name='seleccion']").change(function(){displayCollage();});           
    });
    
    function displayCollage(){
       // alert('hola');
          var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";           
        var optionValue = jQuery("select[name='seleccion']").val();
       // alert(optionValue);
        jQuery("#url")
            .html(ajaxLoader)
            .load('Ajax.php', {id: optionValue, status: 1}, function(response){     
            if(response) {
                jQuery("#url").css('display', '');                       
            } else {                    
                jQuery("#url").css('display', 'none'); 
            }
        });     
    }
    </script>
    
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>HOME >> BANNER</span>
    </div><!-- End header -->
    <div class="content">

        <div class="section" style="margin:50px 0">
                                 <label>
                                     Seleccione una seccion
                                 </label><br>
                                 <div>
                                     <select class="medium" style="display: none;" name ="seleccion" id="seleccion">
                                         <option>Seleccione</option>
                                         <option value="1">Incolacteos</option>
                                         <option value="3">California</option>
                                         <option value="2">Lechesan</option>
                                     </select>
                                 </div>
                             </div>
                             
                             <div id="url">
                    
                                 
                            </div>
    </div>              