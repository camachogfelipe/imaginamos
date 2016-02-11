<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * In Banner details module
 *
 * @author 	Eduard Russy - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	In Banner Module
 */
class Module_services_us extends Module {

    public $version = '1.0';
    private $namespace = 'services_us';
    private $slug_stream = 'services_us';

    public function __construct() {
        $this->load->driver('Streams');
        $this->load->library('files/files');
    }

    // ----------------------------------------------------------------------

    public function info() {
        $sections['admin_services_us'] = array(
            'name' => $this->namespace . ':title',
            'uri' => "admin/{$this->namespace}",
//            'shortcuts' => array(
//                'create' => array(
//                    'name' => $this->namespace . ':new',
//                    'uri' => "admin/{$this->namespace}/create",
//                    'class' => 'add'
//                )
//            )
        );
        return array(
            'name' => array(
                'en' => 'Nuestros Servicios (Para empresas)',
                'es' => 'Nuestros Servicios (Para empresas)'
            ),
            'description' => array(
                'en' => 'This is a PyroCMS module services_us.',
                'es' => 'Administrador de services_us principal.'
            ),
            'frontend' => true,
            'backend' => true,
            'sections' => $sections
        );
    }

    public function install() {


        $this->_clear_info();

        if (!$this->streams->streams->add_stream("lang:{$this->namespace}:title", $this->slug_stream, $this->namespace))
            return false;

        // ==== Create folder
        $folder = $this->file_folders_m->get_by('slug', 'services_us');

        if (empty($folder)) {
            $folder = Files::create_folder(0, 'services_us');

            if (!empty($folder['data'])) {
                $folder = (object) $folder['data'];
            }
        }

        // ==== Create Streams Fields

        $fields = array(
            array(
                'name' => "lang:{$this->namespace}:name",
                'slug' => 'name',
                'namespace' => $this->namespace,
                'type' => 'text',
                'extra' => array('max_length' => 100),
				'instructions' => "Max. 100 caracteres",
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:description",
                'slug' => 'description',
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:image",
                'slug' => 'images',
                'namespace' => $this->namespace,
                'type' => 'bootstrap_image',
                'extra' => array(
                    'folder' => $folder->id,
                    'allowed_types' => 'gif|png|jpg|'
                ),
				'instructions' => "370px × 250px", 
                'assign' => $this->slug_stream,
                'required' => true
            ),array(
                'name' => "lang:{$this->namespace}:name_inf",
                'slug' => 'name_inf',
                'namespace' => $this->namespace,
                'type' => 'text',
                'extra' => array('max_length' => 100),
				'instructions' => "Max. 100 caracteres",
                'assign' => $this->slug_stream,
                'title_column' => true,
                'required' => true
            ),
            array(
                'name' => "lang:{$this->namespace}:description_inf",
                'slug' => 'description_inf',
                'namespace' => $this->namespace,
                'type' => 'wysiwyg',
                'extra' => array('editor_type' => 'advanced'),
                'assign' => $this->slug_stream,
                'required' => true
            ),
        );
        if (!$this->streams->fields->add_fields($fields)) {
            return false;
        }
		
		        $default_services_us =  array('id' => '1','created' => '2013-09-14 02:01:51','updated' => '2013-09-19 23:28:37','created_by' => '2','ordering_count' => '1','name' => 'PRODUCTOS EMPRESARIALES','description' => '<p class="main_p"  none; margin: 0px 0px 10px; padding: 0px; font-size: 14px; text-align: justify; color: rgb(102, 102, 102); font-family: pt_sansregular; line-height: normal;">En ADOM tenemos productos y servicios flexibles que se ajustan a las necesidades y presupuesto de su empresa. Todos nuestros servicios est&aacute;n habilitados por la Secretar&iacute;a Distrital de Salud y cuentan con certificaci&oacute;n de calidad ICONTEC ISO 9001 y IQ-Net International.&nbsp;<br  none;" />
<br  none;" />
Sus clientes y pacientes estar&aacute;n en manos de un equipo completo e integral, liderado por m&eacute;dicos, enfermeras, terapeutas y profesionales administrativos.&nbsp;<br  none;" />
<br  none;" />
Algunos de nuestros servicios para empresas:</p>

<ul class="list_serv"  none; margin: 20px 0px 0px; padding-right: 0px; padding-left: 0px; list-style: none; color: rgb(0, 0, 0); font-family: pt_sansregular; font-size: medium; line-height: normal;">
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio1.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Consulta M&eacute;dica Domiciliaria</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio4.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Hospitalizaci&oacute;n en casa</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio2.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Turnos de enfermer&iacute;a</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio3.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Terapia f&iacute;sica</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio3.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Terapia Respiratoria</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio3.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Terapia de lenguaje y/o degluci&oacute;n</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;"><a href="http://repositorio.imaginamos.com.co/FBZ/Adom/servicio4.php?secci  none !important; text-decoration: none; color: rgb(102, 102, 102);">Especialista en casa (telemedicina)</a></li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;">Cl&iacute;nica de heridas</li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;">Farmacoterapia</li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;">Rehabilitaci&oacute;n</li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;">Insumos y medicamentos</li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;">Alquiler de equipos m&eacute;dicos</li>
 <li  none; margin: 0px 0px 10px; padding: 0px; list-style: inside url(http://repositorio.imaginamos.com.co/FBZ/Adom/assets/img/flecha_btn.png); color: rgb(102, 102, 102); font-size: 14px;">Entrenamiento a cuidadores</li>
</ul>

<p class="main_p"  none; margin: 0px 0px 10px; padding: 0px; font-size: 14px; text-align: justify; color: rgb(102, 102, 102); font-family: pt_sansregular; line-height: normal;">Brindamos asesor&iacute;a a nuestros clientes para reducir costos de hospitalizaci&oacute;n sin poner en riesgo la calidad del servicio ni la salud del paciente.</p>
','images' => '71fe362a415cb9b','name_inf' => '¿QUIERE PROTEGER A SUS CLIENTES Y EMPLEADOS LAS 24 HORAS?','description_inf' => '<p 0px="" 24="" 365="" a="" adom="" as="" class="main_p" clientes="" color:="" cuidamos="" de="" del="" diferencia="" domiciliaria="" empleados="" empresas="" en="" font-family:="" font-size:="" font-style:="" font-weight:="" horas="" la="" las="" line-height:="" los="" margin:="" o.="" otras="" padding:="" salud="" span="" sus="" text-align:="" y="">ADOM no exigimos el pago de mensualidades ni afiliaciones,&nbsp;pero a trav&eacute;s de un convenio s&iacute; nos comprometemos con su empresa a prestarle atenci&oacute;n m&eacute;dica oportuna en Bogot&aacute;.<br br="" />
Nuestro convenio contempla los siguientes compromisos con su empresa:</p>

<ul 0px="" 20px="" adom="" assets="" class="list_serv" color:="" fbz="" font-family:="" font-size:="" http:="" img="" inside="" li="" line-height:="" list-style:="" margin:="" padding-left:="" padding-right:="" padding:="" repositorio.imaginamos.com.co="">
 <li>Dar respuesta telef&oacute;nica inmediata (antes de 3 minutos) a la solicitud de atenci&oacute;n m&eacute;dica de los pacientes, e informar en esta llamada la hora en la cual ser&aacute; atendido el paciente.</li>
 <li 0px="" 24="" 7="" a="" adom="" am="" as="" assets="" color:="" de="" del="" dica="" domiciliaria="" entre="" fbz="" font-size:="" http:="" img="" inside="" las="" li="" list-style:="" los="" margin:="" n="" padding:="" prestar="" repositorio.imaginamos.com.co="" servicios="" terapias="" todos="" y="">Elaborar y archivar la historia cl&iacute;nica de cada uno de los pacientes atendidos, la cual estar&aacute; a disposici&oacute;n del paciente.</li>
 <li 0px="" a="" adom="" al="" assets="" caso="" color:="" del="" dudas="" el="" fbz="" font-size:="" hacer="" http:="" img="" inside="" la="" las="" li="" list-style:="" lo="" margin:="" n="" nico="" o="" paciente="" padding:="" para="" puedan="" que="" repositorio.imaginamos.com.co="" resolver="" seguimiento="" si="" siguiente="" verificar="" y="">Prestar orientaci&oacute;n m&eacute;dica telef&oacute;nica cuando no sea necesaria la atenci&oacute;n domiciliaria.</li>
 <li 0px="" adom="" assets="" c="" color:="" cuando="" de="" del="" en="" fbz="" font-size:="" http:="" img="" inside="" la="" laboratorio="" li="" list-style:="" margin:="" menes="" n="" paciente="" padding:="" previa="" realizar="" repositorio.imaginamos.com.co="" requeridos="" sean="" y="">Acatar los criterios y procedimientos que determine su empresa para la prestaci&oacute;n del servicio.</li>
 <li 0px="" adom="" assets="" color:="" cualquier="" fbz="" fin="" font-size:="" http:="" img="" inside="" la="" legal="" li="" list-style:="" margin:="" n="" necesaria="" o="" padding:="" para="" que="" repositorio.imaginamos.com.co="" sea="" suministrar="">Remitir al usuario para manejo institucional o especializado, con el resumen m&eacute;dico respectivo, si la situaci&oacute;n lo indica.</li>
 <li>&nbsp;</li>
 <li>&nbsp;</li>
 <li 0px="" adom="" assets="" color:="" fbz="" font-size:="" http:="" img="" inside="" list-style:="" margin:="" padding:="" repositorio.imaginamos.com.co="">Los m&eacute;dicos y dem&aacute;s profesionales de ADOM cobrar&aacute;n &uacute;nicamente por los servicios prestados, con base en las tarifas establecidas e informadas previamente en la firma del convenio</li>
</ul>
');
        $this->db->insert("default_{$this->namespace}",$default_services_us);
        return true;
    }
	
    public function uninstall() {
        // This is a core module, lets keep it around.
        return $this->_clear_info();
    }

    public function upgrade($old_version) {
        return true;
    }

    /**
     * Clear info of module (Reset)
     * 
     * @return boolean
     */
    private function _clear_info() {
        // Check foreign keys false
        $this->db->query('SET foreign_key_checks = 0;');
        $this->streams->utilities->remove_namespace($this->namespace);
        if ($this->db->table_exists('data_streams')) {
            $this->db->where('stream_namespace', $this->namespace)->delete('data_streams');
        };
        {
            $this->db->query('SET foreign_key_checks = 1;');
            return true;
        }
    }
    
   public function admin_menu(&$menu) {
        $menu['Para empresas']['Nuestros Servicios'] = 'admin/services_us';
				$menu['Para empresas']['Área Protegida'] = 'admin/pages/edit/189';
    }

}