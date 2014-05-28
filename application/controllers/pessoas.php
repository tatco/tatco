<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pessoas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->model('pessoa_model');
        $this->load->file('ajaxfw.php');
        
        if (!$this->session->userdata('session_id') || !$this->session->userdata('logado'))
        {
            redirect(base_url('login'));
        }
    }

    public function index()
    {   
        $dados = array('localurl'=>base_url(),'content_page'=>'pessoa_content',);
        $this->load->view('padrao_view', $dados);
    }
}

/* End of file pessoas.php */
/* Location: ./application/controllers/pessoas.php */