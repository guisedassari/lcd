<?php

class Galerias_model extends CI_Model {

    public function save($dados = null) {
        //debbug($dados);
        if ($dados != null) {
            $this->db->insert('galerias', $dados);
        }
    }

    public function visualizar_all() {
        $this->db->order_by('id_galeria', 'DESC');
        return $this->db->get('galerias')->result_array();
    }

    public function visualizar_id($id_galeria = null) {
        return $this->db->get_where('galerias', array('id_galeria' => $id_galeria))->row_array();
    }

    public function deletar($id_galeria = null) {
        return $this->db->delete('galerias', array('id_galeria' => $id_galeria));
    }

}
