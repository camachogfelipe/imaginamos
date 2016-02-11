<?
    include 'cms/core/mapping/front.mapping.php'; 
    $idchat=$_POST['idchat'];
    $activo=$_POST['activo'];
    $mnschaten=mnschaten( $idchat);
   if(isset($_POST['activo'])) mnschaten2($idchat,$activo);  
?>
<? 
if(count($mnschaten->id_chat)>1){
    for($i=0;$i<count($mnschaten->id);$i++){
     if($mnschaten->tipo[$i]==1)$color="#10105F";
     else$color="#ADADAD";
        ?>
    <div style="color: <?=$color?>;margin-bottom: 5px;"><b><?=$mnschaten->usuario[$i] ?></b><?=" : ".$mnschaten->mensaje[$i]."<br>" ?></div>
    <? } ?>
<? }else{
         if($mnschaten->tipo==1)$color="#10105F";
     else$color="#ADADAD";
        ?>
    <div style="color: <?=$color?>;margin-bottom: 5px;"><b><?=$mnschaten->usuario ?></b><?=" : ".$mnschaten->mensaje."<br>" ?></div>
<?
}
?>