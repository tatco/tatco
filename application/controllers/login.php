<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        
        $this->load->model('login_model');
    }

    public function index()
    {
        $dados = array('localurl'=>base_url(),);
        $this->load->view('login_view', $dados);
    }

    public function entrar()
    {
        $user = $this->input->post('email');
        $pswd = $this->input->post('password');
        
        if (!empty($user) && !empty($pswd))
        {
            $resposta = $this->login_model->acessar($this->input->post());
            
            if (count($resposta)==12) //qtde de campos retornados do Model
            {   // mapeamento campos BD com variáveis de memória
                $array_items = array('logado'           => TRUE,    // variável de controle de logado
                                     'idUsuario'        => $resposta['usu_id'],
                                     'nomeUsuario'      => $resposta['pes_nome'],
                                     'sobrenomeUsuario' => $resposta['pes_sobrenome'],
                                     'usuarioMaster'    => (strtoupper($resposta['usu_master']) == 'T' ? TRUE : FALSE),
                                     'usuarioAtivo'     => (strtoupper($resposta['usu_ativo']) == 'T' ? TRUE : FALSE),
                                     'sexoUsuario'      => strtoupper($resposta['pes_sexo']),
                                     'demissaoUsuario'  => $resposta['pes_dtdemissao'],
                                     'empresaUsuario'   => $resposta['cli_nomefantasia'],
                                     'empresaTipo'      => strtoupper($resposta['cli_tipo']),
                                     'empresaID'        => $resposta['cli_id'],
                                     'filtrarID'        => empty($resposta['embarcador']) ? $resposta['transportador'] : $resposta['embarcador'],
                            );
                
                if ($array_items['empresaID'] == $array_items['filtrarID'])
                {
                    $array_items['filtrarInfo'] = "Informações Consolidadas";
                } else {
                    $array_items['filtrarInfo'] = "Informações Específicas";
                }
                
                if($array_items['usuarioAtivo']) // caso seja um usuário ainda ativo
                {
                    $this->session->set_userdata($array_items);    // criar a sessão com os dados chaves
                    redirect(base_url('dashboard'));
                }
            }
        }
        redirect(base_url('login'));    //Caso não consiga acessar, reexibe
    }
    
     public function logout()
    {
        $array_items = array('logado'           => '',    // variável de controle de logado
                             'idUsuario'        => '',
                             'nomeUsuario'      => '',
                             'sobrenomeUsuario' => '',
                             'usuarioMaster'    => '',
                             'usuarioAtivo'     => '',
                             'sexoUsuario'      => '',
                             'demissaoUsuario'  => '',
                             'empresaUsuario'   => '',
                             'empresaTipo'      => '',
                             'empresaID'        => '',
                             'filtrarID'        => '',
                             'filtrarInfo'      => '',
                            );
        
        $this->session->unset_userdata($array_items); 
        
        redirect(base_url('login'));
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */