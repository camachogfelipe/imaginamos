<?php

/*
 * @file               : Link.class.php
 * @brief              : Clase para manejar la subida de archivos
 * @version            : 2.9
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes
 */

class ClassFile {

  // Funciopn para subir una archivo al servidor
  public static function UploadFile($name_input_file = "", $carpeta = "", $raiz_nuevo_nombre = "") {
    $path = $carpeta;

    if ($_FILES[$name_input_file]['name']) {
      $file_size = $_FILES[$name_input_file]['size'];
      $ext = strtolower(strrchr($_FILES[$name_input_file]['name'], '.'));
      $nombre_archivo = $_FILES[$name_input_file]['name'];
      if (is_uploaded_file($_FILES[$name_input_file]['tmp_name'])) {
        // Nuevo nombre Imgaen
        $nombre = $raiz_nuevo_nombre . $ext;
        move_uploaded_file($_FILES[$name_input_file]['tmp_name'], "$path/$nombre");
        @chmod("$path/$nombre", 0777);

        //Retorno array con los parametros basicos necesaros
        return array("Status" => "Uploader", "Mensaje" => "Se subio el Archivo " . $nombre_archivo, "Ext" => $ext, "NameOriginal" => $nombre_archivo, "NameFile" => $nombre, "SizeFile" => $_FILES[$name_input_file]['size'], "URL" => "$path/$nombre");
      } else {
        return array("Status" => "Error", "Error" => "Problemas con la carpeta de upload del file");
      }
    } else {
      return array("Status" => "Error", "Error" => "No selected file");
    }
  }

  // Funciopn para subir una imagen al servidor
  public static function UploadImagenFile($name_input_file = "", $carpeta = "", $raiz_nuevo_nombre = "", $th_img_imagen = "", $width = 0, $height = 0) {
    //$path = "../$carpeta";
    $path = $carpeta;

    if ($_FILES[$name_input_file]['name']) {
      $file_size = $_FILES[$name_input_file]['size'];
      $ext = strtolower(strrchr($_FILES[$name_input_file]['name'], '.'));
      $limitedext = array(".jpg", ".png", ".gif", ".jpeg");

      if (in_array($ext, $limitedext)) {
        $nombre_archivo = $_FILES[$name_input_file]['name'];
        if (is_uploaded_file($_FILES[$name_input_file]['tmp_name'])) {
          // Nuevo nombre Imgaen
          $nombre = $raiz_nuevo_nombre . $ext;
          move_uploaded_file($_FILES[$name_input_file]['tmp_name'], "$path/$nombre");
          @chmod("$path/$nombre", 0777);

          //generamos la Thumb de la imagen
          if ($width != 0) {
            try {
              $thumb = PhpThumbFactory::create("$path/$nombre");
            }  catch (Exception $e){
              echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
            
            
            $datos = $thumb->getCurrentDimensions();
            
            if ($datos["width"] > $datos["height"] ) {
              $porcentaje = (100 * $width ) / $datos["width"];
              $newWid = ($datos["width"] * $porcentaje) / 100;
              $newHei = ($datos["height"] * $porcentaje) / 100;
              
              if ( $newHei < $height ) {
                $porcentaje = (100 * $height) / $datos["height"];
                $newWid = ($datos["width"] * $porcentaje) / 100;
                $newHei = ($datos["height"] * $porcentaje) / 100;
              }
            } else {
              $porcentaje = (100 * $height) / $datos["height"];
              $newWid = ($datos["width"] * $porcentaje) / 100;
              $newHei = ($datos["height"] * $porcentaje) / 100;
              
              if ( $newWid < $width ) {
                $porcentaje = (100 * $width ) / $datos["width"];
                $newWid = ($datos["width"] * $porcentaje) / 100;
                $newHei = ($datos["height"] * $porcentaje) / 100;
              }
            }
            $thumb->resize($newWid, $newHei);
            $thumb->cropFromCenter($width, $height);
            if (strtolower($ext) == '.png') {
              $thumb->save("$path/" . $th_img_imagen . '.png', 'png');
            } else if (strtolower($ext) == '.jpg' || strtolower($ext) == '.jpeg') {
              $thumb->save("$path/" . $th_img_imagen . '.jpg', 'jpg');
            } else if (strtolower($ext) == '.gif') {
              $thumb->save("$path/" . $th_img_imagen . '.gif', 'gif');
            }
          }

          //Retorno array con los parametros basicos necesaros
          return array("Status" => "Uploader", "Mensaje" => "Se subio el Archivo " . $nombre_archivo, "Ext" => $ext, "NameOriginal" => $nombre_archivo, "NameFile" => $nombre, "SizeFile" => $_FILES[$name_input_file]['size'], "URL" => "$path/$nombre", "Thumb" => $th_img_imagen . $ext);
        } else {
          return array("Status" => "Error", "Error" => "Problemas con la carpeta de upload del file");
        }
      } else {
        return array("Status" => "Error", "Error" => "La extencion del archivo no es valida");
      }
    } else {
      return array("Status" => "Error", "Error" => "No selected file");
    }
  }

  // Funcion para subir un audio al servidor
  public static function GenerarImagenWH($imagen = "", $nuevaImagen = "", $ext = "", $width = 0, $height = 0) {
    $varReturn = false;
    //Generamos la nueva imagen
    $thumb = PhpThumbFactory::create($imagen);
    // Obtenemos los datos de la imagen original
    $datos = $thumb->getCurrentDimensions();
    if ((int) $datos["width"] > (int) $datos["height"]) {
      $porcentaje = (100 * $height) / $datos["height"];
      $newWid = ($datos["width"] * $porcentaje) / 100;
      $newHei = ($datos["height"] * $porcentaje) / 100;
    } else {
      $porcentaje = (100 * $width ) / $datos["width"];
      $newWid = ($datos["width"] * $porcentaje) / 100;
      $newHei = ($datos["height"] * $porcentaje) / 100;
    }
    //$thumb->resize( $width, $height);

    $thumb->resize($newWid, $newHei);
    //$thumb->cropFromCenter($width, $height);

    if (strtolower($ext) == '.png') {
      $thumb->save($nuevaImagen, 'png');
      $varReturn = $nuevaImagen;
    } else if (strtolower($ext) == '.jpg' || strtolower($ext) == '.jpeg') {
      $thumb->save($nuevaImagen, 'jpg');
      $varReturn = $nuevaImagen;
    } else if (strtolower($ext) == '.gif') {
      $thumb->save($nuevaImagen, 'gif');
      $varReturn = $nuevaImagen;
    }
    return $varReturn;
  }

  // Funcion para subir un audio al servidor
  public static function GenerarImagenFromYoutube($imagen = "", $nuevaImagen = "", $ext = "", $width = 0, $height = 0) {
    $varReturn = false;
    //Generamos la nueva imagen
    $thumb = PhpThumbFactory::create($imagen);
    // Obtenemos los datos de la imagen original
    $datos = $thumb->getCurrentDimensions();
    $porcentaje = (100 * $width) / $datos["width"];

    $newWid = $width;
    $newHei = (int) ($datos["height"] * $porcentaje) / 100;

    $thumb->resize($newWid, $newHei);
    $thumb->cropFromCenter($width, $height);

    if (strtolower($ext) == '.png') {
      $thumb->save($nuevaImagen, 'png');
      $varReturn = $nuevaImagen;
    } else if (strtolower($ext) == '.jpg' || strtolower($ext) == '.jpeg') {
      $thumb->save($nuevaImagen, 'jpg');
      $varReturn = $nuevaImagen;
    } else if (strtolower($ext) == '.gif') {
      $thumb->save($nuevaImagen, 'gif');
      $varReturn = $nuevaImagen;
    }
    return $varReturn;
  }

  // Funcion para subir un audio al servidor
  public static function GenerarImagenWHFromCenter($imagen = "", $nuevaImagen = "", $ext = "", $width = 0, $height = 0) {
    $varReturn = false;
    //Generamos la nueva imagen
    $thumb = PhpThumbFactory::create($imagen);
    // Obtenemos los datos de la imagen original
    $datos = $thumb->getCurrentDimensions();
    if ($datos["width"] > $datos["height"] ) {
      $porcentaje = (100 * $width ) / $datos["width"];
      $newWid = ($datos["width"] * $porcentaje) / 100;
      $newHei = ($datos["height"] * $porcentaje) / 100;

      if ( $newHei < $height ) {
        $porcentaje = (100 * $height) / $datos["height"];
        $newWid = ($datos["width"] * $porcentaje) / 100;
        $newHei = ($datos["height"] * $porcentaje) / 100;
      }
    } else {
      $porcentaje = (100 * $height) / $datos["height"];
      $newWid = ($datos["width"] * $porcentaje) / 100;
      $newHei = ($datos["height"] * $porcentaje) / 100;

      if ( $newWid < $width ) {
        $porcentaje = (100 * $width ) / $datos["width"];
        $newWid = ($datos["width"] * $porcentaje) / 100;
        $newHei = ($datos["height"] * $porcentaje) / 100;
      }
    }
    //$thumb->resize( $width, $height);

    $thumb->resize($newWid, $newHei);
    $thumb->cropFromCenter($width, $height);

    if (strtolower($ext) == '.png') {
      $thumb->save($nuevaImagen, 'png');
      $varReturn = $nuevaImagen;
    } else if (strtolower($ext) == '.jpg' || strtolower($ext) == '.jpeg') {
      $thumb->save($nuevaImagen, 'jpg');
      $varReturn = $nuevaImagen;
    } else if (strtolower($ext) == '.gif') {
      $thumb->save($nuevaImagen, 'gif');
      $varReturn = $nuevaImagen;
    }
    return $varReturn;
  }

}

?>
