<?php

class Usuarios_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function validaUsuario($dados = null) {
        $usuario = $this->db->get_where('usuarios', array('usuario' => $dados['nome'], 'senha' => $dados['senha']))->row();
        return $usuario;
    }

}
