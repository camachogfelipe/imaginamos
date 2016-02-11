<div class="header">
 <div class="content_940 clearfix">
   <a href="index.php?seccion=home" class="btn_home"></a>
   <a href="index.php?seccion=datos" class="btn_contacto"></a>
   <a href="index.php?seccion=home"><img src="assets/img/logo.png" class="logo" /></a>
   <div class="btns_intranet right">
     <h3>INTRANET</h3>
     <?php
	 $menus = new Dbmenu_intranet;
	 $menus = $menus->getList();
	 ?>
     <ul>
     	<?php $a=0; foreach($menus as $value) : ?>
     	<li<?php echo ($a%2==0) ? ' style="margin: 5px 0"':''; ?>><a href="<?php
        	echo (!empty($value['link'])) ? $value['link']:'#'.$value['label']; ?>"><?= $value['label'] ?></a></li>
        <?php $a++; endforeach; ?>
     </ul>
   </div>
 </div>
</div>