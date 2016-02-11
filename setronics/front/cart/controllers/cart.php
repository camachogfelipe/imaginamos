<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class cart extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $redes = new\ redes_sociales();
        $this->_data['datos'] = $redes->get_datos();

        $contacto = new\ contacto();
        $this->_data['data_contact'] = $contacto->get_by_id(1);

        $departamentos = new\ departamentos();
        $this->_data['deptos'] = $departamentos->get_deptos();

        $obj = new novedad();
        $this->_data['novedades'] = $obj->join_related('imagen')
                        ->order_by('fecha', 'DESC')
                        ->limit(3)->get();
        $this->db->select('cms_imagen.*');
        $this->db->from('cms_imagen');
        $this->db->join('cms_logo', 'cms_imagen.id  = cms_logo.id');
        $this->_data['logos'] = $this->getresult($this->db->get());

        //  $banners = new\ banners();
        $this->_data['dat_ban'] = array(); //$banners->get_banner();
    }

    // ----------------------------------------------------------------------

    public function index() {
        return $this->buildajax('modal_coco.php');
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout('../../front/home/views/layouts/beoro_ajax')->build($view, $data);
    }

    public function zona_segura() {
         return $this->build('zona_segura.php');
    }

    public function update() {
        $datos = array();
        $data = array(
            'rowid' => $this->_post('rowid'),
            'qty' => ($this->_post('qty')-1)
        );
        $this->cart->update($data);
        foreach ($this->cart->contents() as $items => $value){
           if($value === $this->_post('rowid')){
              $datos[$items] = $value;
              break;
           }
        }

        $datos['total_sin_iva'] = $this->cart->format_number($this->cart->total(), 2);
        $datos['total'] = $this->cart->format_number($this->cart->total() + ($this->cart->total() * 0.16), 2);


        echo print_r($datos);
    }

    public function add_to_cart() {
        $ok = false;
        $id = $this->_post('id');
        $cantidad = 1;
        $cart_product = new producto;
        $cart_product->get_by_id($id);
        if ($cart_product->exists()) {
            $carrito = $this->cart->contents();
            foreach ($carrito as $item) {
                if ($item['id'] == $id) {
                    $cantidad = 1 + $item['qty'];
                }
            }
            $data = array(
                'id' => $id,
                'qty' => $cantidad,
                'price' => ($this->current_user->group_name == 'cliente') ? $cart_product->precio_client : ($this->current_user->group_name == 'proveedor') ? $cart_product->precio_prov : "",
                'name' => $cart_product->titulo,
                'descripcion' => $cart_product->descripcion_intro,
                'price_iva' => ($this->current_user->group_name == 'cliente') ? ($cart_product->precio_client * 0.16) : ($this->current_user->group_name == 'proveedor') ? ($cart_product->precio_prov * 0.16) : 0,
            );
            if ($this->cart->insert($data)) {
                $ok = true;
                $msg = "Producto no agregado";
            }
        } else {
            $ok = false;
            $msg = "No existe el producto";
        }
        echo json_encode(array('ok' => $ok, 'message' => $msg));
    }

    // ----------------------------------------------------------------------
}
