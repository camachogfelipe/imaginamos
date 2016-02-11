<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
      class nuSoap_lib{
          function Nusoap_lib(){
               require_once(str_replace("\\","/",APPPATH).'libraries/nusoap/lib/nusoap.php'); //If we are executing this script on a Windows server
          }
      }
?>
