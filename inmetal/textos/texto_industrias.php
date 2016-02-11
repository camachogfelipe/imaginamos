<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>

    <body>
        <?php
        $productos = DbHandler::GetAll("SELECT * FROM cms_industrias_categorias WHERE tipo_industrias_categorias =1 ORDER BY idcms_industrias_categorias ASC");

        $html = '<h1>' . utf8_encode(nl2br($productos[0]["tiulo_industrias_categorias"])) . '</h1>
       <div class="qs_txt">
        ' . utf8_encode(nl2br($productos[0]["des_industrias_categorias"])) . '
        </div>
      ';

        echo $html;
        ?>
        <?php
        $categorias = DbHandler::GetAll("SELECT * FROM cms_industrias_categorias WHERE tipo_industrias_categorias =0 ORDER BY idcms_industrias_categorias ASC");

        for ($i = 0, $tot = count($categorias); $i < $tot; $i++) {

            $sub = DbHandler::GetAll("SELECT * FROM cms_industrias_subcategotias WHERE id_indsutrias_categorias=" . $categorias[$i]["idcms_industrias_categorias"]);
            
            
            if(($i+1) % 4 == 0){
                
                $html = '<div class="industria_panel spacer">';
            }elseif($i % 4 == 0 && $i !=0){
                
                $html = '<div class="industria_panel spacer2">';
                
            }else {
                
                 $html = '<div class="industria_panel">';
            }

           
            $html.='<div class="industria">
                <div class="industria_title">' . utf8_encode(nl2br($categorias[$i]["tiulo_industrias_categorias"])) . '</div>
                <div class="industria_txt">' . utf8_encode(nl2br($categorias[$i]["des_industrias_categorias"])) . '</div>
                
                 </div>
                 <div id="panel'.$i.'">
                <ul id="navi2">';
            for ($j = 0, $to = count($sub); $j < $to; $j++) {

                $html.='
                <li><a href="./index.php?seccion=producto&cat=' . $categorias[$i]["idcms_industrias_categorias"] . '&id=' . $sub[$j]["idcms_industrias_subcategotias"] . '">' . utf8_encode(nl2br($sub[$j]["titulo_industrias_subcategorias"])) . '</a></li>
                ';
            }
            $html.='   </ul>
            </div>
            <p class="slide"><a href="#" class="btn-slide'.$i.'"></a></p>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".btn-slide'.$i.'").click(function(){
                        $("#panel'.$i.'").slideToggle("slow");
                        $(this).toggleClass("active"); return false;
                    });
                });
            </script>
            <style>
            #panel'.$i.' {
                    position: relative;
                    z-index: 1;
                    background: url(images/bg_over.png);
                    height: 190px;

                    display: none;
                    padding: 0 0 0px;
                    margin: -40px auto 0;
            }
            a.btn-slide'.$i.' {
                    background: url(images/icon_ampliar.png) no-repeat center top;
                    text-align: center;
                    width: 57px;
                    height: 31px;
                    margin: -4px auto 0;
                    display: block;
                    text-decoration: none;
            }

            a.btn-slide'.$i.':hover {background: url(images/icon_ampliar_over.png) no-repeat center top;}
            a.btn-slide'.$i.'.active { background: url(images/icon_ampliar_active.png) no-repeat center top;}
            </style>
        ';
            echo $html;
        }
        ?>
        
   </body>
</html>
