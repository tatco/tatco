<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Avisos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->model('aviso_model');
        
        if (!$this->session->userdata('session_id') || !$this->session->userdata('logado'))
        {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $dados = array('localurl'=>base_url(),'content_page'=>'aviso','id'=>'');
        $this->load->view('padrao', $dados);
    }
    
    public function enviar($id = 0)
    {
	$this->form_validation->set_rules('msg_titulo', 'Título', 'required');
	$this->form_validation->set_rules('msg_texto', 'Texto', 'required');

	if ($this->form_validation->run() === FALSE)
	{
            $dados = array('localurl'=>base_url(),'content_page'=>'aviso',);
            $this->load->view('padrao', $dados);
	}
	else
	{
		$this->aviso_model->salvar_aviso($id);
                $dados = array( 'localurl'=>base_url(),
                                'content_page'=>'aviso_content',
                                'nome'          => $this->session->userdata('nomeUsuario'),
                                'sobrenome'     => $this->session->userdata('sobrenomeUsuario'),
                                'filtrarInfo'   => $this->session->userdata('filtrarInfo'),
                    );
                $this->load->view('padrao_view', $dados);
	}   
    }
    
}

/* End of file avisos.php */
/* Location: ./application/controllers/avisos.php */