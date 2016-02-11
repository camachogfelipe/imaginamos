<script type="text/javascript" src="assets/js/actions2.js"></script>
<?php
include "../cms/core/class/db.class.php";
include("head.php"); 
ini_set('display_errors','On');

$nivel  = $_REQUEST["nivel"];
$modulo = $_REQUEST["modulo"];
$paso = $_REQUEST["paso"];
$idpadre=$_REQUEST['idpadre'];

$cla=''; $dis=''; $hre='';

if($paso==3){
    $hre='#va-paso-3';
    $cla='vn-nav paso-item-p2'; 
    $dis='con-paso-1-1-1';
    $pas='va-paso-3';
}else if($paso==4){
    $hre='#va-paso-4';
    $pas='va-paso-4';
    $cla='vn-nav paso-item-p3'; 
    $dis='con-paso-1-1-1-1';
}else if($paso==5){
    $hre='#va-paso-5';
    $pas='va-paso-5';
    $cla='vn-nav paso-item-p4';
    $dis='con-paso-1-1-1-1-1'; 
}else if($paso==6){
    $hre='#va-paso-6';
    $pas='va-paso-6';
    $cla='vn-nav paso-item-p5';
    $dis='con-paso-1-1-1-1-1-1';
}else if($paso==7){
    $hre='#va-paso-7';
    $pas='va-paso-7';
    $cla='vn-nav paso-item-p6';
    $dis='con-paso-1-1-1-1-1-1-1';
}else if($paso==8){
    $hre='#va-paso-8';
    $pas='va-paso-8';
    $cla='vn-nav paso-item-p7';
    $dis='con-paso-1-1-1-1-1-1-1-1';
}

//Creamos el nuevo objeto "Database"
$db = new Database();
$db->connect();
    $datos=""; $carimg=''; $tipo='';
    $sql="select * from nivel_carburo where nivel='".$nivel."' and idportafolio_carburo='".$idpadre."' ";
    // echo $sql.'<br>';
    $db->doQuery($sql, 1);
    $datos1 = $db->results;
    
    $sql1="select * from portafolio_carburo where nivel='".$nivel."' and modulo='".$modulo."' and idportafoliopadre='".$idpadre."' ";
    //echo $sql1;
    $db->doQuery($sql1, 1);
    $datos = $db->results;
    $cant=count($datos);
    
    $arr=''; $titulo=''; $texto=''; $id=''; $imagen='';
    $nivel1  = $nivel+1;
    $modulo = $_REQUEST["modulo"];
    $paso1 = $paso+1;
    ?>
    <h1><?php echo $datos1[0]['titulo'] ?></h1>
            <div class="paso">
              <ul class="slider-tree">
                <?php
                if ($cant>0){
                for($i = 0 ; $i < $cant ; $i++){
                    $titulo=$datos[$i]['titulo'];                    
                    $texto=$datos[$i]['texto'];
                    $paso=$datos[$i]['paso'];
                    $idp=$datos[$i]['idportafolio_carburo'];
                    $imagen='portafolio_'.$modulo.'/'.$datos[$i]['imagen'];
                ?>    
                  <li>
                	<div class="paso-item">
                        <h1><?php echo $titulo; ?></h1>
                        <div class="paso-img"><img src="assets/img/<?php echo $imagen ?>" width="191" height="98" alt=""></div>
                        <div class="paso-info">
                          <div class="scroll-wrap">
                            <p><?php echo $texto ?></p>
                          </div>
                        </div>
                        <?php if ($paso=='P'){ ?>
                        <a href="index.php?base&seccion=carburo-per&idportafolio_carburo=<?php echo $idp ?>" class="vn-nav paso-item-p1" ><div class="paso-bt-vn"></div></a>
                        <?php }else{ ?>
                        <a href="<?php echo $hre ?>" class="<?php echo $cla ?>" data-id="<?php echo $dis ?>" onclick="displayNivel('<?php echo $nivel1 ?>','<?php echo $modulo ?>','<?php echo $paso1 ?>','<?php echo $pas ?>','<?php  echo $idp ?> ')"><div class="paso-bt"></div></a>
                        <?php  } ?>
                        
                      </div>
                </li>
                <?php    
                    }
                }else{
                ?>
                <li>
                	<div class="paso-item">
                        <h1>No hay mas niveles</h1>
                        <div class="paso-img"></div>
                        <div class="paso-info">
                          <div class="scroll-wrap">
                            <p></p>
                          </div>
                        </div>
                       </div>
                </li>
                <?php
                }
                ?>
            </ul>
                </div>