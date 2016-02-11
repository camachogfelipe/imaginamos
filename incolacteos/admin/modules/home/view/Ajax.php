<?php
include "../../../security/secure.php";
include "../../../core/class/db.class.php";
include "../../class/plGeneral.fnc.php";
include "../../class/PhpThumbFactory.class.php";
include "../../class/ClassFile.class.php";

//$db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
//$sql = $db->results;
//


$id = $_POST["id"];
$db = new Database();
//Conectamos
$db->connect();

    
$db->doQuery("SELECT * FROM banner WHERE posicion=".$id." ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
$cant = count($dataAll);
    ?>
<div>
    
            <?php if (count($dataAll) < 5) { ?>
                <a class="uibutton normal" href="index.php?seccion=banner&id=0&pos=<?php echo $id; ?>">Agregar nuevo banner</a>
                <?php
            }
            ?>


            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen</span></th>
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0 ; $i < $cant ; $i++){
                            $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../img/banner/1349_516_<?php echo $data["img"] . "?" . rand(0, 9999999); ?>" width="449" height="202" />
                            </td>
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?php echo $data["id"] ?>&pos=<?php echo $data ["posicion"]?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&pos=<?php echo $data["posicion"]?>&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        
        </div>
        

