<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teste extends CI_Controller {
    
    public function index() {
        $this->load->model('galerias_model');
        $galerias = $this->galerias_model->visualizar_all();
        $this->load->view('site/index',compact('galerias'));
        }
}