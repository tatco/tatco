<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aviso_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function consultar_aviso($id = FALSE)
    {
	if ($id === FALSE)
	{
            $query = $this->db->get('ttc_aviso');
            return $query->result_array();
	}

	$query = $this->db->get_where('ttc_aviso', array('avs_id' => $id));
	return $query->row_array();
    }
    
    public function salvar_aviso($id = FALSE)
    {
	$dados = array(
            'avs_titulo' => $this->input->post('msg_titulo'),
            'avs_mensagem' => $this->input->post('msg_texto'),
            'avs_prioridade' => 'A',
            'avs_fk_ttc_usuario' => 1,
            'avs_datahora' => now()
	);
        
        if($id === FALSE)
        {
            return $this->db->insert('ttc_aviso', $dados);
        }

    }

}

/* End of file aviso_model.php */
/* Location: ./application/models/aviso_model.php */