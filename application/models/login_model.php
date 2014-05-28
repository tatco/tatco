<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function acessar($dados)
    {
        // Quantidade de campos a retornar: 12
        $sql = "SELECT  u.usu_id, u.usu_master, u.usu_ativo, 
                        p.pes_nome, p.pes_sobrenome, p.pes_sexo, p.pes_dtdemissao, 
                        c.cli_nomefantasia, c.cli_tipo, c.cli_id,
                        re.rcm_fk_ttc_cliente_embarcador AS embarcador,
                        rt.rcm_fk_ttc_cliente_transportador AS transportador
                FROM ttc_usuario AS u
                INNER JOIN ttc_pessoa AS p ON p.pes_id = u.usu_fk_ttc_pessoa
                INNER JOIN ttc_cliente AS c ON c.cli_id = p.pes_fk_ttc_cliente
                LEFT OUTER JOIN ttc_relacaocomercial AS re ON re.rcm_fk_ttc_cliente_embarcador = c.cli_id
                LEFT OUTER JOIN ttc_relacaocomercial AS rt ON rt.rcm_fk_ttc_cliente_transportador = c.cli_id
                WHERE usu_email = '$dados[email]' AND usu_senha = '$dados[password]';";
        $query = $this->db->query($sql);
        
        // No retorno será conferida a quantidade de campos selecionados
        
        return $query->row_array();
    }

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */