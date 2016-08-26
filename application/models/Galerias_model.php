<?php

class Galerias_model extends CI_Model {
    public function save($dados = null) {
        //debbug($dados);
        if ($dados != null) {
            $this->db->insert('galerias', $dados);
        }
    }
}