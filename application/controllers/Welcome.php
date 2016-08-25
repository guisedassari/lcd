<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('painel/menus/cabecalho');
		$this->load->view('painel/galerias/corporativo/index');
		$this->load->view('painel/menus/rodape');
	}
}
