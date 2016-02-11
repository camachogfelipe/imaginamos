<?php

if(isset($_SESSION["id_productos"])){
    echo'<pre> ID<BR>';
    var_dump($_SESSION["id_productos"]);
    echo'/<pre><br><br><br>Cantidades';
   
    session_destroy();
}


?>



