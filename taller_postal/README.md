# Taller Postal

Utiliza CMS Imaginamos version 1.7.3

## Team

* [Alexandra Gomez (Proyect Manager)]
* [Felipe Camacho (Lider de Desarrollo)]
* [Jhon Moreno (Maquetador)]
* [Elbert Tous (Desarrollador PHP)]


## Description
- Diseño Web : imaginamos.com
- © 2014 TALLER POSTAL - Todos los derechos reservados - Prohibida su reproducción parcial o total

## IMPORTANTE

- Crear un folder llamado cache en la ruta assets\ y darle permisos 777, el sistema guarda archivos cache en ese folder, si no se crea se generará un error.

### Contribuidores

### Change Log

### Instrucciones de instalación

- Descargar el zip del repositorio.
- Descomprimir en la carpeta del servidor ya sea local o en repositorio.
- En la carpeta docs/modelo se encuentra el archivo .sql que deberá ser cargado en una base de datos nueva.
- Abrir el archivo /app/config/database.php y modificar las variables:
``
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'Aca el username de tu servidor MySQL';
	$db['default']['password'] = 'Aca el Password del usuario en tu servidor MySQL';
	$db['default']['database'] = 'Nombre de la base de datos';
``
Lo anterior es necesario para que no generen conflictos en el repositorio, en una futura version se corregira esto.
- Si no existe una carpeta cache en assets/ o la carpeta uploads/ crearla y darle permisos 777
Listo! el proyecto ha sido instalado.

### Video Tutoriales