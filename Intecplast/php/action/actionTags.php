<?php session_start(); ?>
<?php

/**
 *
 * @author Carlos Andres Gomez Pradilla (carlosgomez9010@gmail.com | carlos@imaginamos.co)
 */
if (!isset($_SESSION['administracion'])) {
    header("location: ./../../administracion/index.php");
    exit;
}
ini_set("max_execution_time","1200");
ini_set("memory_limit","256M");

include_once './../clases.php';
include_once './../functions/textoHTML.php';
include_once './../functions/validar.php';

if ($_GET['action'] == 'e') {
    $dao = new genericDAO();
    $object = new $_GET['class']();
    $object->setid($_POST['id']);
    $object = $dao->getById($object);
    foreach ($_POST as $key => $value) {
        $$key = accents2HTML($value);
    }
    $location = "location: ./../../administracion/" . get_class($object) . ".php?id=" . $object->getid();
    foreach ($object->getVars() as $key => $value) {
        if (isset($$key)) {
            $set = 'set' . $key;
            $object->$set($$key);
        }
    }
    foreach ($HTTP_POST_FILES as $key => $value) {
        if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
            $src = "/img/";
            $imagen = $_FILES[$key]['name'];
            $imagen1 = explode(".", $imagen);
            if ($imagen1[1] == "swf" || $imagen1[1] == "SWF" || $imagen1[1] == "ppsx" || $imagen1[1] == "PPSX" || $imagen1[1] == "pptx" || $imagen1[1] == "PPTX" || $imagen1[1] == "xppt" || $imagen1[1] == "XPPT" || $imagen1[1] == "pps" || $imagen1[1] == "PPS" || $imagen1[1] == "ppt" || $imagen1[1] == "PPT" || $imagen1[1] == "docx" || $imagen1[1] == "DOCX" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "wtx" || $imagen1[1] == "WTX" || $imagen1[1] == "wri" || $imagen1[1] == "WRI" || $imagen1[1] == "txt" || $imagen1[1] == "TXT" || $imagen1[1] == "scp" || $imagen1[1] == "SCP" || $imagen1[1] == "rtf" || $imagen1[1] == "RTF" || $imagen1[1] == "log" || $imagen1[1] == "LOG" || $imagen1[1] == "idx" || $imagen1[1] == "IDX" || $imagen1[1] == "exc" || $imagen1[1] == "EXC" || $imagen1[1] == "dochtml" || $imagen1[1] == "DOCHTML" || $imagen1[1] == "diz" || $imagen1[1] == "DIZ" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "dic" || $imagen1[1] == "DIC" || $imagen1[1] == "xlam" || $imagen1[1] == "XLAM" || $imagen1[1] == "xltx" || $imagen1[1] == "XLTX" || $imagen1[1] == "xltm" || $imagen1[1] == "XLTM" || $imagen1[1] == "xlsm" || $imagen1[1] == "XLSM" || $imagen1[1] == "xlsb" || $imagen1[1] == "XLSB" || $imagen1[1] == "xlsx" || $imagen1[1] == "XLSX" || $imagen1[1] == "xla" || $imagen1[1] == "XLA" || $imagen1[1] == "xlt" || $imagen1[1] == "XLT" || $imagen1[1] == "xml" || $imagen1[1] == "XML" || $imagen1[1] == "csv" || $imagen1[1] == "CSV" || $imagen1[1] == "xls" || $imagen1[1] == "XLS" || $imagen1[1] == "pdf" || $imagen1[1] == "PDF" || $imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP") {
                $imagen2 = rand(0, 9) . rand(100, 9999) . rand(100, 9999) . "." . $imagen1[1];
                $get = 'get' . $key;
                @unlink('./../..' . $object->$get());
                move_uploaded_file($_FILES[$key]['tmp_name'], "./../.." . $src . $imagen2);
                $logo = $src . $imagen2;
                $set = 'set' . $key;
                $object->$set($logo);
            } else {
                header($location . '&error10');
                exit;
            }
        }
    }
    $dao->update($object);
    $tag = new $_GET['tag']();
    $dao->deleteDynamic($tag, "WHERE id" . $_GET['class'] . " = " . $object->getid() . " ");
    foreach ($_POST as $key => $value) {
        if ($value == "1-1") {
            $tag = new $_GET['tag']();
            $tag->setId($key);
            $set = "setId" . $_GET['class'];
            $tag->$set($object->getid());
            $dao->save($tag);
        }
    }
    $location = "location: ./../../administracion/" . get_class($object) . ".php?id=" . $object->getid();
    header($location . '&ok2');
    exit;
}

if ($_GET['action'] == 'a') {
    $dao = new genericDAO();
    $object = new $_GET['class']();
    foreach ($_POST as $key => $value) {
        $$key = accents2HTML($value);
    }
    $location = "location: ./../../administracion/" . get_class($object) . ".php?s";
    foreach ($object->getVars() as $key => $value) {
        if (isset($$key)) {
            $set = 'set' . $key;
            $object->$set($$key);
        }
    }
    $_SESSION['object'] = serialize($object);
    foreach ($HTTP_POST_FILES as $key => $value) {
        if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
            $src = "/img/";
            $imagen = $_FILES[$key]['name'];
            $imagen1 = explode(".", $imagen);
            if ($imagen1[1] == "swf" || $imagen1[1] == "SWF" || $imagen1[1] == "ppsx" || $imagen1[1] == "PPSX" || $imagen1[1] == "pptx" || $imagen1[1] == "PPTX" || $imagen1[1] == "xppt" || $imagen1[1] == "XPPT" || $imagen1[1] == "pps" || $imagen1[1] == "PPS" || $imagen1[1] == "ppt" || $imagen1[1] == "PPT" || $imagen1[1] == "docx" || $imagen1[1] == "DOCX" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "wtx" || $imagen1[1] == "WTX" || $imagen1[1] == "wri" || $imagen1[1] == "WRI" || $imagen1[1] == "txt" || $imagen1[1] == "TXT" || $imagen1[1] == "scp" || $imagen1[1] == "SCP" || $imagen1[1] == "rtf" || $imagen1[1] == "RTF" || $imagen1[1] == "log" || $imagen1[1] == "LOG" || $imagen1[1] == "idx" || $imagen1[1] == "IDX" || $imagen1[1] == "exc" || $imagen1[1] == "EXC" || $imagen1[1] == "dochtml" || $imagen1[1] == "DOCHTML" || $imagen1[1] == "diz" || $imagen1[1] == "DIZ" || $imagen1[1] == "doc" || $imagen1[1] == "DOC" || $imagen1[1] == "dic" || $imagen1[1] == "DIC" || $imagen1[1] == "xlam" || $imagen1[1] == "XLAM" || $imagen1[1] == "xltx" || $imagen1[1] == "XLTX" || $imagen1[1] == "xltm" || $imagen1[1] == "XLTM" || $imagen1[1] == "xlsm" || $imagen1[1] == "XLSM" || $imagen1[1] == "xlsb" || $imagen1[1] == "XLSB" || $imagen1[1] == "xlsx" || $imagen1[1] == "XLSX" || $imagen1[1] == "xla" || $imagen1[1] == "XLA" || $imagen1[1] == "xlt" || $imagen1[1] == "XLT" || $imagen1[1] == "xml" || $imagen1[1] == "XML" || $imagen1[1] == "csv" || $imagen1[1] == "CSV" || $imagen1[1] == "xls" || $imagen1[1] == "XLS" || $imagen1[1] == "pdf" || $imagen1[1] == "PDF" || $imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP") {
                $imagen2 = rand(0, 9) . rand(100, 9999) . rand(100, 9999) . "." . $imagen1[1];
                move_uploaded_file($_FILES[$key]['tmp_name'], "./../.." . $src . $imagen2);
                $logo = $src . $imagen2;
                $set = 'set' . $key;
                $object->$set($logo);
            } else {
                header($location . '&error10');
                exit;
            }
        }
    }
    $dao->save($object);
    $idobject = $dao->getLastId();
    foreach ($_POST as $key => $value) {
        if ($value == "1-1") {
            $tag = new $_GET['tag']();
            $tag->setId($key);
            $set = "setId" . $_GET['class'];
            $tag->$set($idobject);
            $dao->save($tag);
        }
    }


    if ($_GET['class'] == "boletin") {
        $className = get_class($object) . "esintereses";
        $object2 = new $className();
        $object2 = $dao->dynamic($object2, "WHERE id = " . $object->getBoletinescategoria());
    } else {
        if ($_GET['class'] == "noticia") {
            $className = get_class($object) . "intereses";
            $object2 = new $className();
            $object2 = $dao->dynamic($object2, "WHERE id = " . $object->getNoticiascategoria());
        } else {
            $className = get_class($object) . "intereses";
            $object2 = new $className();
            $get = "get" . ucfirst(get_class($object))."categoria";
            $object2 = $dao->dynamic($object2, "WHERE id = " . $object->$get());
        }
    }

    for ($i = 0; isset($object2[$i]); $i++) {
        $n = new notificaciones();
        $n->setEstado(0);
        $n->setClase($_GET['class']);
        $n->setFecha(date('Y-m-d H:i:s'));
        $n->setIdnotificacion($idobject);
        $n->setTiponotificacion('Nuevo(a) ' . $_GET['class']);
        $n->setIdusuario($object2[$i]->getIdusuario());
        $dao->save($n);
    }
    $location = "location: ./../../administracion/" . get_class($object) . ".php?id=" . $idobject;
    header($location . '&ok');
    exit;
}

if ($_GET['action'] == 'd') {
    $id = $_GET['id'];
    $dao = new genericDAO();
    $object = new $_GET['class']();
    $object->setid($id);
    $object = $dao->getById($object);
    $_SESSION['object'] = serialize($object);
    foreach ($object->getVars() as $key => $value) {
        if (count(explode('/img/', $value)) > 1)
            @unlink("./../.." . $value);
    }
    $result = $dao->delete($object);
    $location = "location: ./../../administracion/" . $_GET['class'] . ".php?a=" . $id;
    if (!$result) {
        header($location . '&error');
        exit;
    }
    header($location . '&ok');
    exit;
}
?>