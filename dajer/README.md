# Imaginamos CMS

Versión estable actual : 1.7.2

## Team

* [Rigo B castro]
* [Jose Fonseca](http://josefonseca.me/)

## Description

CMS Para uso general en Imginamos.

Para la version 1.7 se ha incoporado un tema de administracion que esta disponible aca.

http://software.imaginamos.com/beoro

Para descargar el tema y explorar sus componentes

http://software.imaginamos.com/beoro.zip

## GUIA DE USUARIO

http://software.imaginamos.com/user_guide

## IMPORTANTE

- Crear un folder llamado cache en la ruta assets\ y darle permisos 777, el sistema guarda archivos cache en ese folder, si no se crea se generará un error.

### Contribuidores

Para estar en la lista por favor hacer pull request.

-   Michael Quevedo

### Change Log

1.7.2

-   Modulo OAuth para autenticación con redes sociales
-   Modulo de permisos
-   Updating Readme.
-   Agregando guia de usuario.
-   Merge de ajustes y desarrollos de Michael Quevedo.

1.7.1

-   Ajuste de bugs en creación de administradores
-   Ajuste de archivo common.js para la automatización de envio y validacion de formularios con ajax.
-   Updating Readme.

1.7 

-   Nuevo tema de administración basado en Twitter Bootstrap, mejoras y ajuste de algunos Bugs.
-   Alertas de sesión y Ajax automatizadas.
-   Mejores componentes para crear administradores.
-   Ajaxform para envio de formularios automatico.

1.6.2
 
-   Agregando Folders CSS y JS en assets del front.

### Istrucciones de instalación

- Descargar el zip del repositorio.
- Descomprimir en la carpeta del servidor ya sea local o en repositorio.
- En la carpeta docs/sql se encuentra el archivo cms_ci_sql.sql que deberá ser cargado en una base de satos nueva.
- Abrir el archivo /app/config/database.php y modificar las variables:
``
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'Aca el username de tu servidor MySQL';
	$db['default']['password'] = 'Aca el Password del usuario en tu servidor MySQL';
	$db['default']['database'] = 'Nombre de la base de datos';
``
- Abrir la carpeta /app/helpers y cambiar el nombre de los siguientes archivos.
	CMS_date_helper.php => cms_date_helper.php
	CMS_number_helper.php => cms_number_helper.php
- Abrir la carpeta /app/libraries y renombrar los siguientes archivos
	cmssmin.php => CssMin.php
	jsmin.php => JSMin.php
Lo anterior es necesario para que no generen conflictos en el repositorio, en una futura version se corregira esto.
- Si no existe una carpeta cache en assets/ crearla y darle permisos 777
- Si no exsiste un archivo .htaccess en su descarga, crearlo en la raiz y copiar el codigo del .htaccess que esta en el source del repositorio. Esto lo arreglaremos en el proximo release que hagamos del CMS.

Listo! el CMS ha sido instalado y esta listo para empezar a trabajar.

### Video Tutoriales

* [Instalación](http://software.imaginamos.com/tutorials/Instalacion/)
* [Estructura](http://software.imaginamos.com/tutorials/estructura/)