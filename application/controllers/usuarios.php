<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');

        if (!$this->session->userdata('session_id') || !$this->session->userdata('logado'))
        {
            redirect(base_url('login'));
        }
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('table');
        //$this->load->model('usuario_model');
        
    }

    public function index()
    {
        $dados = array( 'localurl'=>base_url(),
                        'content_page'=>'users/usuario_list',
                        'nome' => $this->session->userdata('nomeUsuario'),
                        'sobrenome' => $this->session->userdata('sobrenomeUsuario'),
                        'filtrarInfo'   => $this->session->userdata('filtrarInfo'),
                       );
        $this->load->view('padrao_view', $dados);
    }

}

/* End of file avisos.php */
/* Location: ./application/controllers/avisos.php */