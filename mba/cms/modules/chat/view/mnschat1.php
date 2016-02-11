<?
    include '../../../core/mapping/front.mapping.php'; 
    $idchat=$_POST['idchat'];
    print_r($idchat);
   // $mnschaten=mnschaten( $idchat);
?>
<? for($i=0;$i<count($mnschaten->id);$i++){
    if($mnschaten->tipo[$i]==1)$color="#10105F";
    else$color="#ADADAD";
?>
<div style="color: <?=$color?>;margin-bottom: 5px;"><b><?=$mnschaten->usuario[$i];?></b><?=" : ".$mnschaten->mensaje[$i]."<br>" ?></div>
<? } ?>
