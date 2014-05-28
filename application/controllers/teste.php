<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends CI_Controller {

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

    }
    
    public function calendar($witch)
    {
        $dados = array( 'localurl'=>base_url(),
                        'content_page'=>'',
                        'nome' => $this->session->userdata('nomeUsuario'),
                        'sobrenome' => $this->session->userdata('sobrenomeUsuario'),
                       );
        $this->load->view('cal'.$witch.'_view', $dados);
    }

}

/* End of file teste.php */
/* Location: ./application/controllers/teste.php */