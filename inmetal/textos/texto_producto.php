<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/custom-theme/jquery-ui-1.9.2.custom.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
    $(function() {
        $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    });
    </script>
<style>
.ui-tabs-vertical {
	width: 1000px;
}
.ui-tabs-vertical .ui-tabs-nav {
	float: left;
}
.ui-tabs-vertical .ui-tabs-nav li {
	clear: left;
}
.ui-tabs-vertical .ui-tabs-nav li a {
	display: block;
}
.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
}
.ui-tabs-vertical .ui-tabs-panel {
	float: right;
	width: 744px;
	border-bottom: 10px solid #c80600;
}
</style>
</head>

<body>
    
    
 <?php 
    if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];
        } 
   if (isset($_GET["cat"])) {
            $cat = (int) $_GET["cat"];
        } 
        
        $categorias = DbHandler::GetOne("SELECT tiulo_industrias_categorias FROM cms_industrias_categorias WHERE idcms_industrias_categorias =".$cat);
        $sub = DbHandler::GetOne("SELECT titulo_industrias_subcategorias FROM cms_industrias_subcategotias WHERE idcms_industrias_subcategotias=".$id);
        $productos = DbHandler::GetAll("SELECT * FROM cms_industrias_productos WHERE id_industrias_subcategorias=".$id);
        
        $html = '<h1>'.utf8_encode(nl2br($categorias)).'</h1>
                <div id="tabs">
                <ul>
                <div class="title_tab">'.utf8_encode(nl2br($sub)).'</div>
                ';
        
        for ($i = 0, $tot = count($productos); $i < $tot; $i++) {
            
            
            $html.='<li><a href="#tabs-'.($i+1).'">'.utf8_encode(nl2br($productos[$i]["nombre_industrias_subcategorias"])).'</a></li>';
        }
        
         $html.='</ul>';
        echo $html ;
        
         for ($j = 0, $tot1 = count($productos); $j < $tot1; $j++) {
             
             $img ='
                    <div id="tabs-'.($j+1).'">
                        <div class="ind_1"><img src="images/'.$productos[$j]["img1_industrias_productos"].'" style="width:346px; height:398px;" /></div>
                        <div class="ind_2"><img src="images/'.$productos[$j]["img2_industrias_productos"].'" style="width:199px; height:199px;"/></div>
                        <div class="ind_3"><img src="images/'.$productos[$j]["img3_industrias_productos"].'" style="width:199px; height:199px;"/></div>
                        <div class="ind_4"><img src="images/'.$productos[$j]["img4_industrias_productos"].'" style="width:199px; height:199px;"/></div>
                        <div class="ind_5">
                        <div class="ind_title">'.utf8_encode(nl2br($productos[$j]["titulo_industrias_productos"])).'</div>
                        <div class="ind_subtitle">'.utf8_encode(nl2br($productos[$j]["subtitulo_industrias_productos"])).'</div>
                        <div class="ind_txt">'.utf8_encode(nl2br($productos[$j]["des_industrias_productos"])).'</div>
                        </div>
                    </div>
                 ';
             echo $img;
         }
 ?>   
<!--<h1>INDUSTRIA<span class="negro"> LADRILLERA</span></h1>
<div id="tabs">
  <ul>
    <div class="title_tab">EXTRUSORAS</div>
    <li><a href="#tabs-1">Caracoles</a></li>
    <li><a href="#tabs-2">Rebordes</a></li>
    <li><a href="#tabs-3">Embutidores</a></li>
    <li><a href="#tabs-4">Porta-embutidores</a></li>
    <li><a href="#tabs-5">Estrellas</a></li>
    <li><a href="#tabs-6">Conos porta-estrella</a></li>
    <li><a href="#tabs-7">Camisas</a></li>
  </ul>
  <div id="tabs-1">
    <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>
  <div id="tabs-2">
     <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>
  <div id="tabs-3">
     <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>
  <div id="tabs-4">
     <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>
  <div id="tabs-5">
     <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>
  <div id="tabs-6">
    <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>
  <div id="tabs-7">
    <div class="ind_1"><img src="images/industrias/ladrillera/extrusoras/1.png" /></div>
    <div class="ind_2"><img src="images/industrias/ladrillera/extrusoras/2.png" /></div>
    <div class="ind_3"><img src="images/industrias/ladrillera/extrusoras/3.png" /></div>
    <div class="ind_4"><img src="images/industrias/ladrillera/extrusoras/4.png" /></div>
    <div class="ind_5">
      <div class="ind_title"> lorem ipsum</div>
      <div class="ind_subtitle">dolor sit ameth</div>
      <div class="ind_txt">Vivamus sit amet laoreet nunc. Nunc erat sapien, ferm entum ac semper non, dign issim at urna. </div>
    </div>
  </div>-->
</div>
</body>
</html>
