<?php
    require_once("conexion.php");
    $id = $_REQUEST["country"];
    global $conexion;
       if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' "
                    . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from City where CountryCode = '$id' ";
      //  echo $sql;
        $dbRS = $conexion->query($sql);
        $ciudades = $dbRS->fetchAll();
        ?>
       <!--<div class="contenedor_select3">-->
           <select name="City" class="sel3">
               <!-- <option>City</option>-->
                <?php
                        for($c=0; $c<=count($ciudades);$c++){  
                            ?>
                             <option>
                                <?php echo utf8_encode($ciudades [$c]['Name']); ?>
                              </option>
                           <?php
                           }
                    ?>
           </select>
        <!--  </div>-->
            <?
    //return $html;
   
?>
