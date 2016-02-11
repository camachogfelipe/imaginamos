<?
    include 'cms/core/mapping/front.mapping.php'; 
    $urlvalores="cms/modules/noticias/view/files/";
    $id_chat=$_POST['idchat'];
    $mnschat=$_POST['mns'];
    if(isset($_POST['usua']))$usuario=$_POST['usua'];
    else $usuario=1;
    $mnschatenvio=mnschatenvio($id_chat,$usuario,$mnschat);
?>