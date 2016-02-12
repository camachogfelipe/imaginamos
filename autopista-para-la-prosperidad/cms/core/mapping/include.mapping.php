<?php

session_start();
include("cms/core/class/db.class.php");
include("cms/core/mapping/functions.mapping.php");
include("cms/core/mapping/mapping.class.php");
//Creamos objeto database
$db = new Database();
//Conectamos
$db->connect();
/////////////////////////////////////////////////
//Tabla de consulta, definimos tantas tablas como necesitemos separadas con coma (,)
$table = "cms_configuration,cms_user,cms_news";
//$table = "cms_user";
/////////////////////////////////////////////////
//Construimos el nuevmo Mapping
$constructor = new CMS_mapping($table, $db);
/////////////////////////////////////////////////
//Realizamos el query necesario
//Si no es realmente necesario recomiendo NO usar * en el query sino solamente los campos que realmente necesitamos convertir en propiedades del objeto CMS_mapping

$db->doQuery("SELECT * FROM $table ORDER BY id_user DESC, news_id DESC", SELECT_QUERY);

$results = $db->results;
$obj = $constructor->mapping($results);
/////////////////////////////////////////////////
//Creamos las variables que sean necesarias para imprimirlas en el FRONT
////////////////////////////////////
//CONFIGURACION DEL CMS
$path = $obj->config_path[0];
$rss = $obj->config_rss[0];
$web = $obj->config_web[0];

//NOTICIAS
$title = $obj->news_title[0];
$article = shortText($obj->news_article[0], 196);

//USUARIO
$user = $obj->username_user[0];
/////////////////////////////////////////////////
//Desconectamos de la DB
$db->disconnect();

/////////////////////////////////////////////////
//Funcion para listar todos los usuarios
function selectAllUsers() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("cms_user", $db);
    $db->doQuery("SELECT * FROM cms_user ORDER BY id_user DESC", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    //print_r($obj);
    for ($i = 0; $i < count($obj->id_user); $i++)
        echo "Usuario: " . $obj->username_user[$i] . " Ciudad: " . $obj->password_user[$i] . "<br>";
    $db->disconnect();
}

/////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////////////////////////
//Funcion para crear lista desplegable de nombres de imagenes
function selectsOptionImagesNames() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("cms_gallery_pics", $db);
    $db->doQuery("SELECT * FROM cms_gallery_pics", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    //print_r($obj);
    for ($i = 0; $i < count($obj->filename); $i++)
        echo "<option>" . $obj->filename[$i] . "</option>";
    $db->disconnect();
}

/////////////////////////////////////////////////
/////////////////////////////////////////////////
//Funcion para pintar la lista de banners
function pintar_banner_imagen() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("cms_banner_superior", $db);
    $db->doQuery("SELECT * FROM cms_banner_superior", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id_banner_superior) == 1) {
        echo '<img src="cms/modules/banner/view/files/' . $obj->imagen_banner_superior . '" height="200" width="700" alt="slider1">';
    } else {
        for ($i = 0; $i < count($obj->id_banner_superior); $i++) {
            echo '<img src="cms/modules/banner/view/files/' . $obj->imagen_banner_superior[$i] . '" height="200" width="700" alt="slider1">';
        }
        $db->disconnect();
    }
}

function correosdestacados() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("correos", $db);
    $db->doQuery("SELECT * FROM correos WHERE destacado = 1", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<li><a href="' . $obj->correos . '">' . $obj->email . '</a></li>';
        ;
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<li><a href="' . $obj->correos[$i] . '">' . $obj->email[$i] . '</a></li>';
        }
        $db->disconnect();
    }
}

function correos() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("correos", $db);
    $db->doQuery("SELECT * FROM correos", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<li><a href="mailto:' . $obj->email . '">' . $obj->email . '</a></li>';
        ;
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<li><a href="mailto:' . $obj->email[$i] . '">' . $obj->email[$i] . '</a></li>';
        }
        $db->disconnect();
    }
}

function pintar_banner_texto() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("cms_banner_superior", $db);
    $db->doQuery("SELECT * FROM cms_banner_superior", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id_banner_superior) == 1) {
        echo '<div class="txtItem">
				<div class="tit">' . $obj->titulo_banner_superior . '</div>
				<div class="txt">' . $obj->texto_banner_superior . ' </div>
				<a href="' . $obj->link_banner_superior . '" class="goBtn"></a>
			</div>';
    } else {
        for ($i = 0; $i < count($obj->id_banner_superior); $i++) {
            echo '<div class="txtItem">
				<div class="tit">' . $obj->titulo_banner_superior[$i] . '</div>
				<div class="txt">' . $obj->texto_banner_superior[$i] . ' </div>
				<a href="' . $obj->link_banner_superior[$i] . '" class="goBtn"></a>
			</div>';
        }
        $db->disconnect();
    }
}

function linksecopdestacados() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("link", $db);
    $db->doQuery("SELECT * FROM link WHERE destacado = 1", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<li><a href="' . $obj->link . '">' . $obj->texto . '</a></li>';
        ;
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<li><a href="' . $obj->link[$i] . '">' . $obj->texto[$i] . '</a></li>';
        }
        $db->disconnect();
    }
}

function linksecop() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("link", $db);
    $db->doQuery("SELECT * FROM link", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<li><a href="' . $obj->link . '">' . $obj->texto . '</a></li>';
        ;
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<li><a href="' . $obj->link[$i] . '">' . $obj->texto[$i] . '</a></li>';
        }
        $db->disconnect();
    }
}

function proyectostexto($id) {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("proyecto", $db);
    $db->doQuery("SELECT * FROM proyecto WHERE id = $id", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);

    echo $obj->texto;
}

/////////////////////////////////////////////////
/////////////////////////////////////////////////
//Funcion para pintar la lista videos
function pintar_videos() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("video", $db);
    $db->doQuery("SELECT * FROM video", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<div class="videoItem clearfix">
			<div class="thumb">
				<span></span>
				<img src="http://img.youtube.com/vi/' . $obj->video . '/0.jpg" height="125" width="175" alt="thumb1">
			</div>
			<div class="txtsBox">
				<div class="title">' . $obj->titulo . '</div>
				<div class="desc">' . $obj->subtitulo . '</div>
				<div class="txt">' . $obj->texto . '</div>
				<a href="proyectoVideosDetalle.php?id=' . $obj->id . '" class="verBtn">VER</a>
			</div>
		</div>';
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<div class="videoItem clearfix">
			<div class="thumb">
				<span></span>
				<img src="http://img.youtube.com/vi/' . $obj->video[$i] . '/0.jpg" height="125" width="175" alt="thumb1">
			</div>
			<div class="txtsBox">
				<div class="title">' . $obj->titulo[$i] . '</div>
				<div class="desc">' . $obj->subtitulo[$i] . '</div>
				<div class="txt">' . $obj->texto[$i] . '</div>
				<a href="proyectoVideosDetalle.php?id=' . $obj->id[$i] . '" class="verBtn">VER</a>
			</div>
		</div>';
        }
        $db->disconnect();
    }
}

function pintar_video_detalle($id) {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("video", $db);
    $db->doQuery("SELECT * FROM video WHERE id = $id", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    echo '<h2>' . $obj->titulo . '</h2>

		<iframe width="626" height="470" src="http://www.youtube.com/embed/' . $obj->video . '" frameborder="0" allowfullscreen></iframe>

		' . $obj->textodetalle . '

<a href="proyectoVideos.php" class="volverBtn">VOLVER</a>';


    $db->disconnect();
}

function pintar_cronograma() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("cronograma", $db);
    $db->doQuery("SELECT * FROM cronograma", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);

    for ($i = 0; $i < count($obj->id); $i++) {
        echo '<li><a href="cronogramaDetalle.php?id=' . $obj->id[$i] . '">' . $obj->enlace[$i] . '</a></li>';
    }
    $db->disconnect();
}

function pintar_actividad($id) {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("actividad", $db);
    $db->doQuery("SELECT * FROM actividad WHERE cronograma_id = $id", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        $fecha = new DateTime($obj->fecha);
            $mes = $fecha->format('m');
            $dia = $fecha->format('d');
            $ano = $fecha->format('Y');
            if ($mes == "01")
                $mes = "enero";
            if ($mes == "02")
                $mes = "febrero";
            if ($mes == "03")
                $mes = "marzo";
            if ($mes == "04")
                $mes = "abril";
            if ($mes == "05")
                $mes = "mayo";
            if ($mes == "06")
                $mes = "junio";
            if ($mes == "07")
                $mes = "julio";
            if ($mes == "08")
                $mes = "agosto";
            if ($mes == "09")
                $mes = "setiembre";
            if ($mes == "11")
                $mes = "octubre";
            if ($mes == "11")
                $mes = "noviembre";
            if ($mes == "12")
                $mes = "diciembre";
        echo '<tr>
					<td>' . $obj->actividad . '</td>
					<td class="azul">'. $mes .' '.$ano.'</td>
				</tr>';
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            $fecha = new DateTime($obj->fecha[$i]);
            $mes = $fecha->format('m');
            $dia = $fecha->format('d');
            $ano = $fecha->format('Y');
            if ($mes == "01")
                $mes = "enero";
            if ($mes == "02")
                $mes = "febrero";
            if ($mes == "03")
                $mes = "marzo";
            if ($mes == "04")
                $mes = "abril";
            if ($mes == "05")
                $mes = "mayo";
            if ($mes == "06")
                $mes = "junio";
            if ($mes == "07")
                $mes = "julio";
            if ($mes == "08")
                $mes = "agosto";
            if ($mes == "09")
                $mes = "setiembre";
            if ($mes == "11")
                $mes = "octubre";
            if ($mes == "11")
                $mes = "noviembre";
            if ($mes == "12")
                $mes = "diciembre";
            echo '<tr>
					<td>' . $obj->actividad[$i] . '</td>
					<td class="azul">'. $mes .' '.$ano.'</td>
				</tr>';
        }
        $db->disconnect();
    }
}

function cantidadpresentaciones() {
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("presentaciones", $db);
    $db->doQuery("SELECT * FROM presentaciones", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);

    return count($obj->id);
}

function pintar_presentaciones() {

    //PAGINADOR    
    $cant_reg = 6;
    $num_pag = $_GET["pagina"];

    if (!$num_pag) {
        $comienzo = 0;
        $num_pag = 1;
    } else {
        $comienzo = ($num_pag - 1) * $cant_reg;
    }
    //FIN PAGINADOR    
    $cantidad = cantidadpresentaciones();
    $total_paginas = ceil($cantidad / $cant_reg);

    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("presentaciones", $db);
    $db->doQuery("SELECT * FROM presentaciones  LIMIT $comienzo,$cant_reg", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<div class="presItem clearfix">
<div class="title">' . $obj->titulo . '</div>
<div class="desc">' . $obj->subtitulo . '</div>
<div class="txt">' . $obj->texto . '</div>
			<a href="cms/modules/presentaciones/view/files/' . $obj->archivo . '" class="descBtn">Descargar</a>
</div>';
    } else {
        for ($i = 0; $i < 6; $i++) {
            if ($obj->id[$i] != '') {
                $html .= '<div class="presItem clearfix">
<div class="title">' . $obj->titulo[$i] . '</div>
<div class="desc">' . $obj->subtitulo[$i] . '</div>
<div class="txt">' . $obj->texto[$i] . '</div>
			<a href="cms/modules/presentaciones/view/files/' . $obj->archivo[$i] . '" class="descBtn">Descargar</a>
</div>';
            }
        }

        $html .= '<div class="paginator">';
        //echo $total_paginas.'------';
        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($num_pag == $i) {
                $html .= '<a href="#" class="num selected"><span>' . $num_pag . '</span></a>';
            } else {
                $html .= '<a href="proyecto.php?&pagina=' . $i . '&ancla=presentaciones" class="num">' . $i . '</a>';
            }
        }
        $html .= '</div>';

        echo $html;
        $db->disconnect();
    }
}

function pintar_concesiones() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("concesiones", $db);
    $db->doQuery("SELECT * FROM  concesiones", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<li><a href="proyectoConcesiones.php?con=' . $obj->id . '">' . $obj->titulo . '</a></li>';
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<li><a href="proyectoConcesiones.php?con=' . $obj->id[$i] . '">' . $obj->titulo[$i] . '</a></li>';
        }
        $db->disconnect();
    }
}

function concesionestexto($id) {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("concesiones", $db);
    $db->doQuery("SELECT * FROM concesiones WHERE id = $id", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);

    echo $obj->texto;
}

function cantidadcomunicados() { 
        $db = new Database();
        $db->connect();
        $constructor = new CMS_mapping("comunicados", $db);
        $db->doQuery("SELECT * FROM comunicados", SELECT_QUERY);
        $results = $db->results;
        $obj = $constructor->mapping($results);

        return count($obj->id);
    }

    function pintar_comunicados() {

        //PAGINADOR    
        $cant_reg = 4;
        $num_pag = $_GET["pagina"];

        if (!$num_pag) {
            $comienzo = 0;
            $num_pag = 1;
        } else {
            $comienzo = ($num_pag - 1) * $cant_reg;
        }
        //FIN PAGINADOR    
        $cantidad = cantidadcomunicados();
        $total_paginas = ceil($cantidad / $cant_reg);

        $db = new Database();
        $db->connect();
        $constructor = new CMS_mapping("comunicados", $db);
        $db->doQuery("SELECT * FROM comunicados ORDER BY id DESC LIMIT $comienzo,$cant_reg", SELECT_QUERY);
        $results = $db->results;
        $obj = $constructor->mapping($results);
        if (count($obj->id) == 1) {

            echo '<div class="presItem clearfix">
			<div class="title">' . $obj->titulo . '</div>
			<div class="desc">' . $obj->subtitulo . '</div>
			<div class="txt">' . $obj->texto . '</div>
			<a href="' . $obj->archivo . '" class="descBtn goRight">Ver mas</a>
		</div>';
        } else {
            for ($i = 0; $i < 4; $i++) {
                if ($obj->id[$i] != '') {
                    $html .= '<div class="presItem clearfix">
<div class="title">' . $obj->titulo[$i] . '</div>
<div class="desc">' . $obj->subtitulo[$i] . '</div>
<div class="txt">' . $obj->texto[$i] . '</div>
			<a href="' . $obj->archivo[$i] . '" class="descBtn">Ver mas</a>
</div>';
                }
            }

            $html .= '<div class="paginator">';
            //echo $total_paginas.'------';
            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($num_pag == $i) {
                    $html .= '<a href="#" class="num selected"><span>' . $num_pag . '</span></a>';
                } else {
                    $html .= '<a href="prensa.php?&pagina=' . $i . '&ancla=comunicados" class="num">' . $i . '</a>';
                }
            }
            $html .= '</div>';

            echo $html;
            $db->disconnect();
        }
    }
    
    
    function cantidadimagenes() { 
        $db = new Database();
        $db->connect();
        $constructor = new CMS_mapping("imagenes", $db);
        $db->doQuery("SELECT * FROM imagenes", SELECT_QUERY);
        $results = $db->results;
        $obj = $constructor->mapping($results);

        return count($obj->id);
    }
    
    function pintar_imagenes() {

        //PAGINADOR    
        $cant_reg = 20;
        $num_pag = $_GET["pagina"];

        if (!$num_pag) {
            $comienzo = 0;
            $num_pag = 1;
        } else {
            $comienzo = ($num_pag - 1) * $cant_reg;
        }
        //FIN PAGINADOR    
        $cantidad = cantidadimagenes();
        $total_paginas = ceil($cantidad / $cant_reg);

        $db = new Database();
        $db->connect();
        $constructor = new CMS_mapping("imagenes", $db);
        $db->doQuery("SELECT * FROM imagenes  LIMIT $comienzo,$cant_reg", SELECT_QUERY);
        $results = $db->results;
        $obj = $constructor->mapping($results);
        if (count($obj->id) == 1) {
            echo '<div class="prensaFotoBox clearfix">';
            echo '<div class="prensaFotoItem clearfix">
			<a href="cms/modules/imagenes/view/files/'.$obj->imagen2.'" class="imgFrame">
				<img src="cms/modules/imagenes/view/files/'.$obj->imagen.'" height="100" width="130" alt="prensa">
			</a>
			<a href="descarga.php?file='.$obj->imagen2.'" class="descBtn">Descargar</a>
		</div>';
           ;
           echo '</div>';
        } else {
            $html .= '<div class="prensaFotoBox clearfix">';
            for ($i = 0; $i < 20; $i++) {
                if ($obj->id[$i] != '') {
                    $html .= '<div class="prensaFotoItem clearfix">
			<a href="cms/modules/imagenes/view/files/'.$obj->imagen2[$i].'" class="imgFrame">
				<img src="cms/modules/imagenes/view/files/'.$obj->imagen[$i].'" height="100" width="130" alt="prensa">
			</a>
			<a href="descarga.php?file='.$obj->imagen2[$i].'" class="descBtn">Descargar</a>
		</div>';
                }
            }
            $html .= '</div>';
            $html .= '<div class="paginator">';
            //echo $total_paginas.'------';
            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($num_pag == $i) {
                    $html .= '<a href="#" class="num selected"><span>' . $num_pag . '</span></a>';
                } else {
                    $html .= '<a href="prensa.php?&pagina=' . $i . '&ancla=comunicados" class="num">' . $i . '</a>';
                }
            }
            $html .= '</div>';

            echo $html;
            $db->disconnect();
        }
    }
    
    function pintar_entidades() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("entidades", $db);
    $db->doQuery("SELECT * FROM entidades", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    
            echo '<fieldset class="prensaEntidadesBox">
	<legend>Entidades del Gobierno</legend>

	<table width="552">
		<tbody>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[1].'" height="106" width="221" alt=""></td>
				<td>Ministerio de Transporte<br><a href="http://www.mintransporte.gov.co" taget="_blank">www.mintransporte.gov.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[1].'&img" class="descBtn">Descargar</a></td>
			</tr>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[2].'" height="106" width="221" alt=""></td>
				<td>Prosperidad para todos<br><a href="http://www.presidencia.gov.co" taget="_blank">www.presidencia.gov.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[2].'&img" class="descBtn">Descargar</a></td>
			</tr>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[0].'" height="106" width="221" alt=""></td>
				<td>Agencia Nacional de Infraestructura<br><a href="http://www.ani.gov.co" taget="_blank">www.ani.gov.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[0].'&img" class="descBtn">Descargar</a></td>
			</tr>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[3].'" height="106" width="221" alt=""></td>
				<td>Gobernación de Antioquia<br><a href="http://www.antioquia.gov.co" taget="_blank">www.antioquia.gov.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[3].'&img" class="descBtn">Descargar</a></td>
			</tr>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[4].'" height="106" width="221" alt=""></td>
				<td>Alcaldia de Medellín<br><a href="http://www.medellin.gov.co" taget="_blank">www.medellin.gov.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[4].'&img" class="descBtn">Descargar</a></td>
			</tr>
		</tbody>
	</table>
</fieldset>

<fieldset class="prensaEntidadesBox">
	<legend>Estructurador Financiero</legend>

	<table width="552">
		<tbody>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[5].'" height="106" width="221" alt=""></td>
				<td>Bonus Banca de Inversión S.A.<br><a href="http://www.ani.gov.co" taget="_blank">www.bonus.com.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[5].'&img" class="descBtn">Descargar</a></td>
			</tr>
		</tbody>
	</table>
</fieldset>

<fieldset class="prensaEntidadesBox">
	<legend>Estructuradores Técnicos</legend>

	<table width="552">
		<tbody>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[6].'" height="106" width="221" alt=""></td>
				<td>Técnica y Proyectos S.A.<br><a href="http://www.typsa.es" taget="_blank">www.typsa.es</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[6].'&img" class="descBtn">Descargar</a></td>
			</tr>
			<tr>
				<td><img src="cms/modules/entidades/view/files/'.$obj->imagen[7].'" height="106" width="221" alt=""></td>
				<td>Consultores Regionales Asociados<br><a href="http://www.cra.com.co" taget="_blank">www.cra.com.co</a></td>
				<td><a href="descarga.php?file='.$obj->imagen[7].'&img" class="descBtn">Descargar</a></td>
			</tr>
		</tbody>
	</table>
</fieldset>';
        
        $db->disconnect();
    
}


function pintar_select_pais() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("paises", $db);
    $db->doQuery("SELECT * FROM paises", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
        echo '<select name="pais" id="pais"  class="validate[required]">';
        for ($i = 0; $i < count($obj->id); $i++) {
            echo '<option value="' . $obj->nombre[$i] . '">' . $obj->nombre[$i] . '';
        }
        echo '</select>';
        $db->disconnect();
    
}

function pintar_documentos() {

    //PAGINADOR    
    $cant_reg = 6;
    $num_pag = $_GET["pagina"];

    if (!$num_pag) {
        $comienzo = 0;
        $num_pag = 1;
    } else {
        $comienzo = ($num_pag - 1) * $cant_reg;
    }
    //FIN PAGINADOR    
    $cantidad = cantidadpresentaciones();
    $total_paginas = ceil($cantidad / $cant_reg);

    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("documentosjuridicos", $db);
    $db->doQuery("SELECT * FROM documentosjuridicos  LIMIT $comienzo,$cant_reg", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<div class="presItem clearfix">
<div class="title">' . $obj->titulo . '</div>
<div class="desc">' . $obj->subtitulo . '</div>
<div class="txt">' . $obj->texto . '</div>
			<a href="cms/modules/documentosJuridicos/view/files/' . $obj->archivo . '" class="descBtn">Descargar</a>
</div>';
    } else {
        for ($i = 0; $i < 6; $i++) {
            if ($obj->id[$i] != '') {
                $html .= '<div class="presItem clearfix">
<div class="title">' . $obj->titulo[$i] . '</div>
<div class="desc">' . $obj->subtitulo[$i] . '</div>
<div class="txt">' . $obj->texto[$i] . '</div>
			<a href="cms/modules/documentosJuridicos/view/files/' . $obj->archivo[$i] . '" class="descBtn">Descargar</a>
</div>';
            }
        }

        $html .= '<div class="paginator">';
        //echo $total_paginas.'------';
        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($num_pag == $i) {
                $html .= '<a href="#" class="num selected"><span>' . $num_pag . '</span></a>';
            } else {
                $html .= '<a href="dataroom.php?&pagina=' . $i . '&ancla=documentosJuridicos" class="num">' . $i . '</a>';
            }
        }
        $html .= '</div>';

        echo $html;
        $db->disconnect();
    }
}



/////////////////////////////////////////////////
/////////////////////////////////////////////////
//Funcion para pintar la lista de categorias/////////////////////////////////////////////////

function categoriasdataroom() {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("categoria", $db);
    $db->doQuery("SELECT * FROM categoria", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    if (count($obj->id) == 1) {
        echo '<li><a href="dataroomDetalle.php?id='.$obj->id.'">'.$obj->nombre.'</a></li>';
    } else {
        for ($i = 0; $i < count($obj->id); $i++) {
         echo '<li><a href="dataroomDetalle.php?id='.$obj->id[$i].'">'.$obj->nombre[$i].'</a></li>';
       }
        $db->disconnect();
    }
}

/////////////////////////////////////////////////
/////////////////////////////////////////////////
//Funcion para pintar niveles
function pintarniveles($id) {
    //include("cms/core/mapping/functions.mapping.php");
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("nivel_1", $db);
    $db->doQuery("SELECT * FROM nivel_1 WHERE caetgoria_id = $id", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $validatam = count($obj->id); 
    if ($validatam == 1) {
        echo '<thead>
			<tr>
					<th width="70%">'.$obj->nombre.'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
        $constructor = new CMS_mapping("documentos", $db);
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $obj->id AND nivel2 = 0 AND nivel3 = 0", SELECT_QUERY);
        $results = $db->results;
        $obj = $constructor->mapping($results);
        if(count($obj->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj->documento.'</td>
					<td>'.$obj->peso.'</td>
					<td><a href="documentos/'.$obj->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj->id) > 1){
           for ($i = 0; $i < count($obj->id); $i++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj->documento[$i].'</td>
					<td>'.$obj->peso[$i].'</td>
					<td><a href="documentos/'.$obj->documento[$i].'">Descargar</a></td>
				</tr>';   
           }
        }
         ////////////////////////////////
        //////////////////////////////////
        ////////////////////////////////
        //////////////////////////////////
        //inicio cargar datos nivel 2
        $nivel1 = $obj->id;
        $constructor = new CMS_mapping("nivel_2", $db);
    $db->doQuery("SELECT * FROM nivel_2 WHERE nivel_1_id = $nivel1", SELECT_QUERY);
    $results = $db->results;
    $obj3 = $constructor->mapping($results);
    if (count($obj3->id) == 1) {
        echo '<thead>
			<tr>
					<th width="70%" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$obj3->nombre.'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
        $constructor = new CMS_mapping("documentos", $db);
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $nivel1 AND nivel2 = $obj3->id AND nivel3 = 0", SELECT_QUERY);
        $results = $db->results;
        $obj3 = $constructor->mapping($results);
        if(count($obj3->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj3->documento.'</td>
					<td>'.$obj3->peso.'</td>
					<td><a href="documentos/'.$obj3->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj3->id) > 1){
           for ($h = 0; $h < count($obj3->id); $h++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj3->documento[$h].'</td>
					<td>'.$obj3->peso[$h].'</td>
					<td><a href="documentos/'.$obj3->documento[$h].'">Descargar</a></td>
				</tr>';   
           }
        }
    }
     if (count($obj3->id) > 1){
        for ($h = 0; $h < count($obj3->id); $h++) {  
            echo '<thead>
			<tr>
					<th width="70%" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$obj3->nombre[$h].'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
            $constructor2 = new CMS_mapping("documentos", $db);
            $hdbd = $obj3->id[$h];
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $nivel1 AND nivel2 = $hdbd AND nivel3 = 0", SELECT_QUERY);
        $results2 = $db->results;
        $obj2 = $constructor2->mapping($results2);
        if(count($obj2->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj2->documento.'</td>
					<td>'.$obj2->peso.'</td>
					<td><a href="documentos/'.$obj2->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj2->id) > 1){
           for ($h = 0; $h < count($obj2->id); $h++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj2->documento[$h].'</td>
					<td>'.$obj2->peso[$h].'</td>
					<td><a href="documentos/'.$obj2->documento[$h].'">Descargar</a></td>
				</tr>';   
           }
        }
       }
        
    }
        
        
        ////////////////////////////////
        //////////////////////////////////
        ////////////////////////////////
        //////////////////////////////////
        //fin cargar datos de nivel2
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     if ($validatam > 1){
        for ($i = 0; $i < count($obj->id); $i++) {  
            echo '<thead>
			<tr>
					<th width="70%">'.$obj->nombre[$i].'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
            $constructor2 = new CMS_mapping("documentos", $db);
            $idbd = $obj->id[$i];
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $idbd AND nivel2 = 0 AND nivel3 = 0", SELECT_QUERY);
        $results2 = $db->results;
        $obj2 = $constructor2->mapping($results2);
        if(count($obj2->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj2->documento.'</td>
					<td>'.$obj2->peso.'</td>
					<td><a href="documentos/'.$obj2->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj2->id) > 1){
           for ($j = 0; $j < count($obj2->id); $j++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj2->documento[$j].'</td>
					<td>'.$obj2->peso[$j].'</td>
					<td><a href="documentos/'.$obj2->documento[$j].'">Descargar</a></td>
				</tr>';   
           }
        }
        ////////////////////////////////
        //////////////////////////////////
        ////////////////////////////////
        //////////////////////////////////
        //inicio cargar datos nivel 2
        $nivel1 = $obj->id[$i];
        $constructor = new CMS_mapping("nivel_2", $db);
    $db->doQuery("SELECT * FROM nivel_2 WHERE nivel_1_id = $nivel1", SELECT_QUERY);
    $results = $db->results;
    $obj3 = $constructor->mapping($results);
    if (count($obj3->id) == 1) {
        echo '<thead>
			<tr>
					<th width="70%" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$obj3->nombre.'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
        $constructor = new CMS_mapping("documentos", $db);
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $nivel1 AND nivel2 = $obj3->id AND nivel3 = 0", SELECT_QUERY);
        $results = $db->results;
        $obj3 = $constructor->mapping($results);
        if(count($obj3->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj3->documento.'</td>
					<td>'.$obj3->peso.'</td>
					<td><a href="documentos/'.$obj3->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj3->id) > 1){
           for ($h = 0; $h < count($obj3->id); $h++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj3->documento[$h].'</td>
					<td>'.$obj3->peso[$h].'</td>
					<td><a href="documentos/'.$obj3->documento[$h].'">Descargar</a></td>
				</tr>';   
           }
        }
    
    }
     if (count($obj3->id) > 1){
        for ($h = 0; $h < count($obj3->id); $h++) {  
            echo '<thead>
			<tr>
					<th width="70%" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$obj3->nombre[$h].'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
            $constructor2 = new CMS_mapping("documentos", $db);
            $hdbd = $obj3->id[$h];
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $nivel1 AND nivel2 = $hdbd AND nivel3 = 0", SELECT_QUERY);
        $results2 = $db->results;
        $obj2 = $constructor2->mapping($results2);
        if(count($obj2->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj2->documento.'</td>
					<td>'.$obj2->peso.'</td>
					<td><a href="documentos/'.$obj2->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj2->id) > 1){
           for ($k = 0; $k < count($obj2->id); $k++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj2->documento[$k].'</td>
					<td>'.$obj2->peso[$k].'</td>
					<td><a href="documentos/'.$obj2->documento[$k].'">Descargar</a></td>
				</tr>';   
           }
        }
         ////////////////////////////////
        //////////////////////////////////
        ////////////////////////////////
        //////////////////////////////////
        //inicio cargar datos nivel 3
        $nivel2 = $obj3->id[$h];
        $constructor = new CMS_mapping("nivel_3", $db);
    $db->doQuery("SELECT * FROM nivel_3 WHERE nivel_2_id = $nivel2", SELECT_QUERY);
    //echo "SELECT * FROM nivel_3 WHERE nivel_2_id = $nivel2";
    //echo $nivel2;
    $results = $db->results;
    
    $obj4 = $constructor->mapping($results);
    if (count($obj4->id) == 1) {
        echo '<thead>
			<tr>
					<th width="70%" style="color:green;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$obj4->nombre.'</th>
					<th>&nbsp;</th>
					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
			</tr>
			</thead>';
        $constructor = new CMS_mapping("documentos", $db);
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $nivel1 AND nivel2 = $nivel2 AND nivel3 = $obj4->id", SELECT_QUERY);
        $results = $db->results;
        $obj4 = $constructor->mapping($results);
        if(count($obj4->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj4->documento.'</td>
					<td>'.$obj4->peso.'</td>
					<td><a href="documentos/'.$obj4->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj4->id) > 1){
           for ($g = 0; $g < count($obj4->id); $g++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj4->documento[$g].'</td>
					<td>'.$obj4->peso[$g].'</td>
					<td><a href="documentos/'.$obj4->documento.'">Descargar</a></td>
				</tr>';   
           }
        }
    }
     if (count($obj4->id) > 1){
      //  echo 'prueba:'.count($obj4->id);
        for ($g = 0; $g < count($obj4->id); $g++) {  
//            echo '<thead>
//			<tr>
//					<th width="70%" style="color:green;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$obj4->nombre[$g].'</th>
//					<th>226.3 MB</th>
//					<th><img src="img/zipIcon.png" height="32" width="37" alt=""></th>
//			</tr>
//			</thead>';
            $constructor2 = new CMS_mapping("documentos", $db);
            $gdbd = $obj4->id[$g];
        $db->doQuery("SELECT * FROM documentos WHERE nivel1 = $nivel1 AND nivel2 = $nivel2 AND nivel3 = $gdbd", SELECT_QUERY);
        $results2 = $db->results;
        $obj2 = $constructor2->mapping($results2);
        if(count($obj2->id) == 1){
            echo '<tr class="content">
					<td class="arr">'.$obj2->documento.'</td>
					<td>'.$obj2->peso.'</td>
					<td><a href="documentos/'.$obj2->documento.'">Descargar</a></td>
				</tr>';
        }
        if(count($obj2->id) > 1){
           for ($l = 0; $l < count($obj2->id); $l++) {   
          echo '<tr class="content">
					<td class="arr">'.$obj2->documento[$l].'</td>
					<td>'.$obj2->peso[$l].'</td>
					<td><a href="documentos/'.$obj2->documento.'">Descargar</a></td>
				</tr>';   
           }
        }
       }
        
    }
        
        
        ////////////////////////////////
        //////////////////////////////////
        ////////////////////////////////
        //////////////////////////////////
        //fin cargar datos de nivel3
       }
        
    }
        
        
        ////////////////////////////////
        //////////////////////////////////
        ////////////////////////////////
        //////////////////////////////////
        //fin cargar datos de nivel2
        
       }
     
     
    }
    $db->disconnect();
}
?>
