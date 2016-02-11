<?php
session_start();
include( '../include/define.php' );
include( '../include/config.php' );
include( '../business/function/plGeneral.fnc.php' );

//media
$type = $_GET['type'];
switch ($type){
    case 'blog':
        $id=$_GET['id'];
        $dbblog = new Dbblog();
       $blog = $dbblog->getByPk($id);
        $html='<div class="titulo-pop"><h1>'.utf8_encode($blog["titulo"]).'</h1></div>
     
   <div class="img-pop1">
     <div class="media-date2">'.substr(str_replace("-",".",utf8_encode($blog["fecha"])),2,10).'</div>
    <img src="img/blog/'.str_replace("original","redimension",$blog["imagen"]).'">
   </div>
  
   <div class="text-pop1">
    <p>'.utf8_encode($blog["texto_largo"]).'</p>
   </div>';
        break;
    case 'trailers':
        $id=$_GET['id'];
        $dbtrailers = new Dbtrailers();
        $trailers = $dbtrailers->getByPk($id);
        $html='
            <div class="titulo-pop" style="margin-top:5px;"><h1>'.utf8_encode($trailers["titulo"]).'</h1></div>
         
      <div class="video-pop">
       <iframe width="750" height="380" src="http://www.youtube.com/embed/'.utf8_encode($trailers["url"]).'" frameborder="0" allowfullscreen></iframe>
      </div>
                
     <ul class="datos-autor">
        <li>
         <h1><span>Release year:</span>  '.utf8_encode($trailers["release_year"]).' </h1>
        </li>
        <li>
          <h1><span>Director name:</span>  '.utf8_encode($trailers["director"]).' </h1>
        </li>
        <li>
          <h1><span>Producer:</span>  '.utf8_encode($trailers["producer"]).'</h1>
        </li>      
     </ul>';
        break;
    case 'industry':
        $id=$_GET['id'];
        $dbind = new Dbindustry_news();
            $ind = $dbind->getByPk($id);
        $html='<div class="titulo-pop"><h1>'.utf8_encode($ind["titulo"]).'</h1></div>
     
   <div class="img-pop1">
    <img src="img/industry_news/'.str_replace("original","redimension",$ind["imagen"]).'">
   </div>
  
   <div class="text-pop1">
    <p>'.utf8_encode($ind["texto_largo"]).' </p>
   </div>';
        
        break;
}
echo $html;

?>
