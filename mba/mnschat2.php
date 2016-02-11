<?
    include 'cms/core/mapping/front.mapping.php'; 
    $idchat=$_POST['idchat'];
    $mnschaten=usuarioschat( $idchat);
    mnschaten2($idchat,2);
    
?>
<? 
if(count($mnschaten->id_chat)>1){
    for($i=0;$i<count($mnschaten->id_chat);$i++){
        if($mnschaten->activo[$i]==1)$color="#10105F";
        else$color="#FF0000";
    ?>
    <div style="color: <?=$color;?>;border: 1px solid #E6E3E3;" class="chat_click" data-id="<?=$mnschaten->id_chat[$i]?>" ><b><?=$mnschaten->usuario[$i].$mnschaten->id_chat[$i];?></b></div>
    <? } ?>
<? }else {
if($mnschaten->activo==1)$color="#10105F";
else$color="#FF0000";
    ?>
        <div style="color: <?=$color;?>;border: 1px solid #E6E3E3;" class="chat_click" data-id="<?=$mnschaten->id_chat?>" ><b><?=$mnschaten->usuario.$mnschaten->id_chat;?></b></div>
<? } ?>

    