<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->model('veiculo_model','veiculo');
        
        if (!$this->session->userdata('session_id') || !$this->session->userdata('logado'))
        {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $dados = array('localurl'=>base_url(),'content_page'=>'veiculo',);
        $this->load->view('padrao', $dados);
    }

}

/* End of file veiculos.php */
/* Location: ./application/controllers/veiculos.php */