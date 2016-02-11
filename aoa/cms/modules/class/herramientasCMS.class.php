<?php
class herramientasCMS {
    //Evita que la página guarde Caché
    public static function noCache() {
  header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
}
/// Corte de texto sin cortar palabras completas
    public static function shortText($text, $limit)
	{
		$text = substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '...';
		return $text;
	}
//recibe cadena y la parte en 2
	public static function dividircadena($cadena,$pos){
            $size = strlen($cadena);
            if(!$size%2==0){
                $size+1;
            }
            $mitad = $size / 2;
            $result = substr($cadena,0,$mitad);
            $result2 = substr($cadena,$mitad,$size);
            if($pos == 2){
                return $result2;
            }else{
                return $result;
               }
        }
        //Toma la URL completa de la pagina ACTUAL
        public static function dameURL(){
        $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
        return $url;    
    }

    public static function dameURL2(){
            $url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            return $url;
    }
    public static function compartirfacebook($titulo,$texto,$imagen){
            $urlcompartir="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
            $url = 'http://www.facebook.com/sharer.php?s=100&amp;p[url]='.$urlcompartir.'&amp;p[images][0]='.$imagen.'&amp;p[title]='.$titulo.'&amp;p[summary]='.$texto;
            return $url;
    }
}
?>
