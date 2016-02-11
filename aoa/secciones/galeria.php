<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024, maximum-scale=2">
<title>AOA | Se mueve contigo</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/aoa.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
</head>

<body>

<?php include'header.php' ?>

<?php include'menu.php' ?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">Galer&iacute;a <span> de fotos</span></h2>
  </div>
</div>

<div class="content_int content_940 clearfix pager-aoa-gal">
  <ul class="con-pager clearfix">
      <?php $dbgaleria = new Dbgaleria_de_fotos();
      $galeria = $dbgaleria->getList();
      $counter = count($galeria);
      $style = '';
      ?>      
    <li>
     <?php for($i=0; $i<$counter; $i++): 
         if($i!=0){
             if($i%6==0){
               echo'</li>
                    <li>';  
             }
             if($i==2||$i==5||$i==8||$i==11){
                 $style='style="margin-right:0"';
             }else{
                 $style='';
             }
         }
         ?>
      <a href="javascript:abrirDetalleGal(<?php echo $galeria[$i]["id"];  ?>);" class="item_gal" <?php echo $style; ?> >
        <img src="img/galeria_de_fotos/<?= str_replace("original","redimension",$galeria[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" style="width: 300px !important; height: 300px !important;"/>
     </a>
            <?php 
//            if($i!=0){
//             if($i%6==0){
//               echo'</li>
//                    <li>';  
//             }
//         }
//            
            endfor; ?>
      
  	</li>  
  </ul>
  <div class="pager-nav"></div>
</div> 

<?php include'footer.php' ?>


<div class="popup_gal">
 <div class="bg_popup"></div>
 <div class="content_popup_gal">
   <a href="javascript:cerrarGal();" class="btn_close"></a>
   <div id="contenidogaleriadetalle">
   <div class="title_serv">
     <h3>Lorem ipsum</h3>
   </div>
   <div class="clearfix">
     <img src="assets/img/img_gal2.png" class="left img_detalle" width="330" height="260" />
     <div class="texto_detalle right scroll-pane">
       <p>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor, nunc eu tempor porta, mi mauris consequat mi, eget convallis ligula sem quis lectus. Donec at mauris eu turpis semper ornare. Aliquam ullamcorper lectus a tortor pellentesque fermentum. Integer porttitor, erat ut tincidunt laoreet, orci diam hendrerit neque, eu ullamcorper lacus orci at tellus. Nulla sit amet feugiat sem. Nullam semper accumsan ornare. Cras accumsan erat tincidunt tortor posuere accumsan ac sit amet enim. Morbi ligula lorem, commodo pharetra viverra vitae, auctor non sapien. Cras et lorem quis lectus faucibus rhoncus eget id ante. Aliquam justo metus, fringilla at mollis eget, facilisis vel justo. Suspendisse aliquet enim nec elit scelerisque et laoreet magna posuere.

Donec tristique suscipit nulla a interdum. Sed lobortis, mauris ac rhoncus pellentesque, mi mi porta magna, eu sollicitudin quam felis ac leo. Mauris elementum pretium convallis. Vivamus enim dui, pellentesque et scelerisque a, posuere quis ipsum. Vestibulum dapibus, eros eget suscipit viverra, nunc tellus rutrum felis, vitae tempor dolor neque a erat. Aenean ac lacus et ipsum cursus sodales. Nunc faucibus adipiscing enim et viverra. Quisque nec mauris sapien, ac rhoncus augue. Donec massa risus, molestie sit amet faucibus vitae, consequat non justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at vestibulum risus. Nam rhoncus odio id ante pulvinar non auctor arcu dignissim.
       </p>
     </div>
   </div>
  </div>
 </div>
</div>
<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/jquery.pajinate.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>

</body>
</html>
