<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pessoa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function acessar($dados)
    {
        $sql = "SELECT usu_id, pes_nome, cli_nomefantasia 
                FROM ttc_usuario AS u
                INNER JOIN ttc_pessoa AS p ON p.pes_id = u.usu_fk_ttc_pessoa
                INNER JOIN ttc_cliente AS c ON c.cli_id = p.pes_fk_ttc_cliente
                WHERE usu_email = '$dados[email]' AND usu_senha = '$dados[password]';";
        $query = $this->db->query($sql);
        
        return $query->row_array();
    }

}

/* End of file pessoa_model.php */
/* Location: ./application/models/pessoa_model.php */