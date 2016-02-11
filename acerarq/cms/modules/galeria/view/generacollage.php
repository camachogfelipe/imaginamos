<style type="text/css">
	.t-color {color:#333; -webkit-animation:t-color 1s ease-in-out infinite; -moz-animation:t-color 1s ease-in-out infinite; -ms-animation:t-color 1s ease-in-out infinite; -o-animation:t-color 1s ease-in-out infinite; animation:t-color 1s ease-in-out infinite;}
	@-webkit-keyframes t-color {0% {color:#333;} 50% {color:#cd1727;} 100% {color:#333;}}
	@-moz-keyframes t-color {0% {color:#333;} 50% {color:#cd1727;} 100% {color:#333;}}
	@-o-keyframes t-color {0% {color:#333;} 50% {color:#cd1727;} 100% {color:#333;}}
	@-ms-keyframes t-color {0% {color:#333;} 50% {color:#cd1727;} 100% {color:#333;}}
	@keyframes t-color {0% {color #333;} 50% {color:#cd1727;} 100% {color:#333;}}
</style>
<?php
include "../../../core/class/db.class.php";
ini_set('display_errors','On');
$id = $_REQUEST["id"];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
// Validamos si hizo post y desea subir una imagen

if ($id==1){
    $db->doQuery("SELECT  * FROM galeria where id_collage='1' ", 1);
    $datos = $db->results;
    $igT=count($datos);
    $arr='';
    for($j = 1 ; $j <= 9 ; $j++){ 
         $db->doQuery("SELECT *  FROM galeria where id_collage='1' and id_imagen='".$j."' ", 1);
         $dat= $db->results;
         $Ti=count($dat);
         if ($Ti==0){
             $arr.=$j.'-';
         }
    }
    if ($igT<9){
        echo "<div class='t-color'>Faltan las imagenes ".$arr."</div>";
    }
    ?>
    <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=1&imagen=1"><div class="mq mq-16">1</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=2"><div class="mq mq-8">2</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=3"><div class="mq mq-12">3</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=4"><div class="mq mq-16">4</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=5"><div class="mq mq-16">5</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=6"><div class="mq mq-15">6</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=7"><div class="mq mq-11">7</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=8"><div class="mq mq-16">8</div></a>
      <a href="index.php?seccion=galeria&collage=1&imagen=9"><div class="mq mq-16">9</div></a>
    </div>
    <?php
}elseif ($id==2){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='1' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==4){
        $db->doQuery("SELECT  * FROM galeria where id_collage='2' ", 1);
        $datos = $db->results;
        $igT=count($datos);
        $arr='';
        for($j = 1 ; $j <= 4 ; $j++){ 
             $db->doQuery("SELECT *  FROM galeria where id_collage='2' and id_imagen='".$j."' ", 1);
             $dat= $db->results;
             $Ti=count($dat);
             if ($Ti==0){
                 $arr.=$j.'-';
             }
        }
    
        if ($igT<4){
            echo "<div class='t-color'>Faltan las imagenes ".$arr."</div>";
        }
        ?>
        <div class="mq-seccion">
          <a href="index.php?seccion=galeria&collage=2&imagen=1"><div class="mq mq-9">1</div></a>
          <a href="index.php?seccion=galeria&collage=2&imagen=2"><div class="mq mq-12">2</div></a>
          <a href="index.php?seccion=galeria&collage=2&imagen=3"><div class="mq mq-12">3</div></a>
          <a href="index.php?seccion=galeria&collage=2&imagen=4"><div class="mq mq-11">4</div></a>
        </div>
        <?php 
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 1, para continuar con este collage</div>";
    }
     
}elseif ($id==3){
        $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='2' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==4){
            $db->doQuery("SELECT  * FROM galeria where id_collage='3' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 9 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='3' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<9){
                echo "<div class='t-color'>Faltan las imagenes ".$arr."</div>";
            }
        ?>
 <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=3&imagen=1"><div class="mq mq-10">1</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=2"><div class="mq mq-16">2</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=4"><div class="mq mq-16">4</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=5"><div class="mq mq-16">5</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=6"><div class="mq mq-12">6</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=7"><div class="mq mq-12">7</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=8"><div class="mq mq-16">8</div></a>
      <a href="index.php?seccion=galeria&collage=3&imagen=9"><div class="mq mq-16">9</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 2, para continuar con este collage</div>";
    }
}elseif ($id==4){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='3' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==9){
            $db->doQuery("SELECT  * FROM galeria where id_collage='4' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 1 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='4' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<9){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
 <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=4&imagen=1"><div class="mq mq-1">1</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 3, para continuar con este collage</div>";
    }
}elseif ($id==5){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='4' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==1){
        $db->doQuery("SELECT  * FROM galeria where id_collage='5' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 8 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='5' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<8){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
<div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=5&imagen=1"><div class="mq mq-11">1</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=2"><div class="mq mq-11">2</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=4"><div class="mq mq-16">4</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=5"><div class="mq mq-12">5</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=6"><div class="mq mq-16">6</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=7"><div class="mq mq-16">7</div></a>
      <a href="index.php?seccion=galeria&collage=5&imagen=8"><div class="mq mq-12">8</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 4, para continuar con este collage</div>";
    }
}elseif ($id==6){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='5' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==8){
        $db->doQuery("SELECT  * FROM galeria where id_collage='6' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 4 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='6' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<4){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
    <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=6&imagen=1"><div class="mq mq-11">1</div></a>
      <a href="index.php?seccion=galeria&collage=6&imagen=2"><div class="mq mq-15">2</div></a>
      <a href="index.php?seccion=galeria&collage=6&imagen=3"><div class="mq mq-15">3</div></a>
      <a href="index.php?seccion=galeria&collage=6&imagen=4"><div class="mq mq-3">4</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 5, para continuar con este collage</div>";
    }
}elseif ($id==7){
     $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='6' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==4){
            $db->doQuery("SELECT  * FROM galeria where id_collage='7' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 7 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='6' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<7){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
 <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=7&imagen=1"><div class="mq mq-11">1</div></a>
      <a href="index.php?seccion=galeria&collage=7&imagen=2"><div class="mq mq-16">2</div></a>
      <a href="index.php?seccion=galeria&collage=7&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=7&imagen=4"><div class="mq mq-16">4</div></a>
      <a href="index.php?seccion=galeria&collage=7&imagen=5"><div class="mq mq-16">5</div></a>
      <a href="index.php?seccion=galeria&collage=7&imagen=6"><div class="mq mq-15">6</div></a>
      <a href="index.php?seccion=galeria&collage=7&imagen=7"><div class="mq mq-7">7</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 6, para continuar con este collage</div>";
    }
}elseif ($id==8){
     $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='7' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==7){
        $db->doQuery("SELECT  * FROM galeria where id_collage='8' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 6 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='8' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<6){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
<div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=8&imagen=1"><div class="mq mq-13">1</div></a>
      <a href="index.php?seccion=galeria&collage=8&imagen=2"><div class="mq mq-11">2</div></a>
      <a href="index.php?seccion=galeria&collage=8&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=8&imagen=4"><div class="mq mq-16">4</div></a>
      <a href="index.php?seccion=galeria&collage=8&imagen=5"><div class="mq mq-15">5</div></a>
      <a href="index.php?seccion=galeria&collage=8&imagen=6"><div class="mq mq-11">6</div></a>
    </div>
    <?php
     }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 7, para continuar con este collage</div>";
    }
}elseif ($id==9){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='8' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==6){
        $db->doQuery("SELECT  * FROM galeria where id_collage='8' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 4 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='9' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<4){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
<div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=9&imagen=1"><div class="mq mq-2">1</div></a>
      <a href="index.php?seccion=galeria&collage=9&imagen=2"><div class="mq mq-12">2</div></a>
      <a href="index.php?seccion=galeria&collage=9&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=9&imagen=4"><div class="mq mq-16">4</div></a>
    </div>
    <?php
     }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 8, para continuar con este collage</div>";
    }
}elseif ($id==10){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='9' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==4){
        $db->doQuery("SELECT  * FROM galeria where id_collage='10' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 5 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='10' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<5){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
 <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=10&imagen=1"><div class="mq mq-10">1</div></a>
      <a href="index.php?seccion=galeria&collage=10&imagen=2"><div class="mq mq-16">2</div></a>
      <a href="index.php?seccion=galeria&collage=10&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=10&imagen=4"><div class="mq mq-11">4</div></a>
      <a href="index.php?seccion=galeria&collage=10&imagen=5"><div class="mq mq-4">5</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 9, para continuar con este collage</div>";
    }
}elseif ($id==11){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='10' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==5){
        $db->doQuery("SELECT  * FROM galeria where id_collage='11' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 3 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='11' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<3){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
<div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=11&imagen=1"><div class="mq mq-5">1</div></a>
      <a href="index.php?seccion=galeria&collage=11&imagen=2"><div class="mq mq-16">2</div></a>
      <a href="index.php?seccion=galeria&collage=11&imagen=3"><div class="mq mq-14">3</div></a>
    </div>
    <?php
     }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 10, para continuar con este collage</div>";
    }
}elseif ($id==12){
    $db->doQuery("SELECT  count(idgaleria) as total FROM galeria where id_collage='11' ", 1);
    $banner = $db->results;
    $total=$banner[0]['total'];
    if ($total==3){
        $db->doQuery("SELECT  * FROM galeria where id_collage='12' ", 1);
            $datos = $db->results;
            $igT=count($datos);
            $arr='';
            for($j = 1 ; $j <= 5 ; $j++){ 
                 $db->doQuery("SELECT *  FROM galeria where id_collage='12' and id_imagen='".$j."' ", 1);
                 $dat= $db->results;
                 $Ti=count($dat);
                 if ($Ti==0){
                     $arr.=$j.'-';
                 }
            }
            if ($igT<5){
                echo "<div class='t-color'>Faltan la imagen ".$arr."</div>";
            }
    ?>
 <div class="mq-seccion">
      <a href="index.php?seccion=galeria&collage=12&imagen=1"><div class="mq mq-6">1</div></a>
      <a href="index.php?seccion=galeria&collage=12&imagen=2"><div class="mq mq-15">2</div></a>
      <a href="index.php?seccion=galeria&collage=12&imagen=3"><div class="mq mq-16">3</div></a>
      <a href="index.php?seccion=galeria&collage=12&imagen=4"><div class="mq mq-16">4</div></a>
      <a href="index.php?seccion=galeria&collage=12&imagen=5"><div class="mq mq-8">5</div></a>
    </div>
    <?php
    }else{
        echo "<div class='t-color'>Debe de llenar todo el collage 11, para continuar con este collage</div>";
    }
}
?>