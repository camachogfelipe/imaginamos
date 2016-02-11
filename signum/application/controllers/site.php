<?php

class Site extends MX_Controller {

    function __construct() {
        parent::__construct();
    }


    function send() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $comment = $this->input->post('comment');

        $config = array('mailtype' => 'html');

        $msj = "";
        $msj.= "Nombre : " .$name.'<br>';
        $msj.= "Email : " .$email.'<br>';
        $msj.= "Commentario : " .$comment;

        $this->load->library('email', $config);
        $this->email->from('cms@imaginamos.com', 'Imaginamos - Signum');
        $this->email->to('ingeniero.sebas@gmail.com');
        //$this->email->to('andres.ramirez@imaginamos.com.co');
        //$this->email->bcc('andres.ramirez@imaginamos.com.co');

        $this->email->subject('Contacto Bioempak');

        $this->email->message($msj);

        //$this->session->set_userdata($data_);

        if($this->email->send()){
            echo '1';
        }else{
            echo '0';
        }
        
    }

    function index() {
        $data['banner'] = $this->db->get('banner')->result();
        $data['portfolio'] = $this->db->get('portfolio')->result();
        $data['logos'] = $this->db->get('logos')->result();
        $this->load->view('index',$data);
    }
    
    function nosotros() {
        $this->db->where('id',1);
        $data['data1'] = $this->db->get('us')->row();
        
        $this->db->where('id',2);
        $data['data2'] = $this->db->get('us')->row();
        
        $this->db->where('id',3);
        $data['data3'] = $this->db->get('us')->row();
        
        $this->db->where('id',4);
        $data['data4'] = $this->db->get('us')->row();
        
        $data['staff'] = $this->db->get('staff')->result();
        $data['staff_n'] = count($this->db->get('staff')->result());
        
        $this->load->view('nosotros',$data);
    }
    
    function staff_detail(){
        $this->db->where('id',$this->uri->segment(3));
        $data['staff'] = $this->db->get('staff')->row();
        
        $this->load->view('staff_detalle',$data);
    }
    
    function areas() {
        
        $this->db->where('id',1);
        $data['areaG'] = $this->db->get('area_general')->row();
        
        $this->db->order_by('orden','ASC');
        $data['areas'] = $this->db->get('area',6)->result();
        
        $this->db->order_by('orden','ASC');
        $data['areass'] = $this->db->get('area')->result();
        
        $this->load->view('areas',$data);
    }
    
    function servicios() {
        $this->db->order_by('orden','ASC');
        $data['area'] = $this->db->get('area')->result();
        $data['areaQ'] = count($this->db->get('area')->result());
        $data['service'] = $this->db->get('service')->result();
        $this->load->view('servicios',$data);
    }
    
    function actualidad() {
        
        $this->load->library('pagination');
        //$config['base_url']     = 'http://localhost/imaginamos/bioempak/site/news';
        $config['base_url'] = 'http://repositorio.imaginamos.com/ARA/signum/site/actualidad';
        $config['total_rows'] = count($this->db->get('actualidad')->result());
        $config['per_page'] = 6;
        $config['num_links'] = 20;
//        $config['num_tag_open'] = '<a>';
//        $config['num_tag_close'] = '</a>';
        $config['cur_tag_open'] = '<a class="activo_pg">';
        $config['cur_tag_close'] = '</a>';

        $this->pagination->initialize($config);
        
        $this->db->order_by('id','asc');
        $data['actualidad'] = $this->db->get('actualidad', $config['per_page'], $this->uri->segment(3))->result();
        //$this->load->view('noticias', $data);
        
        
        //////////////////////////////////////////
        
        $this->db->where('daily',1);
        $data['actualidadO'] = $this->db->get('actualidad')->row();
        
        //$data['actualidad'] = $this->db->get('actualidad')->result();
        $this->load->view('actualidad',$data);
    }
    
    function contactenos() {
        $this->load->view('contactenos');
    }
    
    function getDetalle(){
        $this->db->where('id',$this->uri->segment(3));
        $data['a'] = $this->db->get('actualidad')->row();
        $this->load->view('actualidad_detalle',$data);
    }


}