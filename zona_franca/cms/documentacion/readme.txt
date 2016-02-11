Instalacion.

1- Realizar el unzip en el directorio de trabajo.
2- Configurar los datos del motor de base de datos en: /include/config.php.
3- Ejecutar el archivo db_cms.sql en el motor de base de datos.
4- Permisos:
   Permisos 777 para el directorio /files/
   En ambiente de desarrollo permisos 777 al directorio /presentation/ y al directorio /business/model/

5- Al subir al ambiente de produccion se deben realizar las siguientes consideraciones:
   * Cambiar los permisos de 777 a 755 al directorio /presentation/ y al directorio /business/model/.
   * Cambiar los permisos de 755 a 777 al directorio /presentation/templates_c/.
   * En el archivo storefront.php eliminar la linea "&& $this->mConten!="generador.tpl".
   * En el directorio /presentation/ eliminar el archivo generador.php.
   * En el directorio /presentation/templates/ eliminar el archivo generador.tpl.

Datos de acceso iniciales:
Usuario: admin
Passwd: 1234
