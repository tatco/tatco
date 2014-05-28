<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        
        if (!$this->session->userdata('session_id') || !$this->session->userdata('logado'))
        {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $dados = array( 'localurl'      =>base_url(),
                        'content_page'  =>'dashboard_content',
                        'nome'          => $this->session->userdata('nomeUsuario'),
                        'sobrenome'     => $this->session->userdata('sobrenomeUsuario'),
                        'filtrarInfo'   => $this->session->userdata('filtrarInfo'),
                       );
        $this->load->view('padrao_view', $dados);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */