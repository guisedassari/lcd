<?php

class Usuarios_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('encrypt');
    }

    public function validaUsuario($dados = null) {
        $senha = hash('whirlpool', $dados['senha']);
        $usuario = $this->db->get_where('usuarios', array('usuario' => $dados['nome'], 'senha' => $senha))->row();
        return $usuario;
    }

}
