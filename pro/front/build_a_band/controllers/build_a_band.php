<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Rigo B Castro
 */
class Build_a_band extends Front_Controller {

    protected $user_area = true;
    private $_datos = null;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index($seccion = 'crear_banda') {
        $stages = new Stage();
        $instruments = new Instrument();
        $genders = new Musical_gender();
        $talents = new Talent;

        $datos = new stdClass();

        $datos->stages = $stages->get();
        $datos->instruments = $instruments->get();
        $datos->genders = $genders->get_for_select('Género musical');
        $datos->band = $this->_datos;
        $datos->talents = $talents->get_for_select('Talento');
       
        $this->set_datos($datos);

        $this->_data['content'] = parent::view($seccion);
        $this->_data['seccion'] = $seccion;

        $this->set_title('Build a band - ' . humanize($seccion));

        return $this->build();
    }

    // ----------------------------------------------------------------------

    public function editar($band_id = null) {
        $datos = new \Band($band_id);

        $this->_datos = $datos;

        return $this->crear_banda();
    }

    // ----------------------------------------------------------------------

    public function crear_banda() {
        return $this->index();
    }

    // ----------------------------------------------------------------------

    public function crear_concierto() {
        // Musical genders
        $musical_genders = new Musical_gender;
        $datos = $this->_data['musical_genders'] = $musical_genders->get_for_select();

        return $this->index('crear_concierto', $datos);
    }

    // ----------------------------------------------------------------------
    
    public function se_busca() {
        return $this->index('se_busca');
    }

    // ----------------------------------------------------------------------

    public function accept_invitation($code) {
        $datos = new Bands_instruments_user;
        $datos->get_by_invitation_code($code);

        if ($datos->exists()) {

            $datos->is_invited = false;
            $datos->invitation_accepted = true;

            if ($datos->save()) {
                return redirect('perfil/build-a-band');
            } else {
                return show_error('Hubo un error al aceptar la invitación. Intente de nuevo más tarde o póngase en contacto con el administrador');
            }
        }
    }

    // ----------------------------------------------------------------------

    public function decline_invitation($code) {
        $datos = new Bands_instruments_user;
        $datos->get_by_invitation_code($code);

        if ($datos->exists()) {

            $datos->is_invited = false;
            $datos->invitation_accepted = false;

            if ($datos->save()) {
                return redirect('perfil/build-a-band');
            } else {
                return show_error('Hubo un error al rechazar la invitación. Intente de nuevo más tarde o póngase en contacto con el administrador');
            }
        }
    }

    // ----------------------------------------------------------------------

    public function save_concierto() {
        $this->load->model('_bands/concierto');

        $datos = new Concierto;

        $datos->fecha_hora = $this->_post('fecha');
        $datos->ciudad = $this->_post('ciudad');
        $datos->genero_musical = $this->_post('genero_musical');
        $datos->tipo_concierto = $this->_post('tipo');
        $datos->aire_libre = $this->_post('aire_libre');
        $datos->gratuito = $this->_post('gratuito');
        $datos->boleteria = $this->_post('boleteria');
        $datos->presupuesto_general = $this->_post('presupuesto_general');
        $datos->nombre_concierto = $this->_post('nombre_concierto');
        $datos->numero_bandas = $this->_post('numero_bandas');
        $datos->capacidad_estimada = $this->_post('capacidad_estimada');

        if (($this->_post('caracteristicas'))) {
            $datos->caracteristicas = serialize($this->_post('caracteristicas'));
        }

        $datos->otros = $this->_post('otros');
        $datos->presupuesto_concierto = $this->_post('presupuesto_concierto');

        if (($this->_post('caracteristicas_promocion'))) {
            $datos->caracteristicas_promocion = serialize($this->_post('caracteristicas_promocion'));
        }

        $datos->presupuesto_promocion = $this->_post('presupuesto_concierto');
        $datos->promocion = $this->_post('promocion');

        if ($this->_post('mensaje') == 'on') {
            $datos->mensaje = '1';
        } else {
            $datos->mensaje = '2';
        }

        $datos->user_id = $this->session->userdata('user_id');

        if ($datos->save()) {
            $this->set_alert('Concierto guardado exitosamente!');
        } else {
            $this->set_alert($datos->errors->string);
        }

        $this->crear_concierto();
    }
}
