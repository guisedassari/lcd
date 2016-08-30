<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('galerias_model');
        $this->load->library('Myclass');
    }

    public function index() {
        $galerias = $this->galerias_model->visualizar_all();

        $this->load->view('painel/menus/cabecalho');
        $this->load->view('painel/galerias/index', compact('galerias'));
        $this->load->view('painel/menus/rodape');
    }

    public function add($dados = null) {
        $dados = $this->input->post();

        if ($dados != null) {
            $this->galerias_model->save();
            $this->session->set_flashdata("success", "Imagem salva com sucesso");
            redirect('#');
        }
        $this->load->view('painel/menus/cabecalho');
        $this->load->view('painel/galerias/add');
        $this->load->view('painel/menus/rodape');
    }

    public function Upload() {
        $form_data = $this->input->post();
        //carrega a biblioteca de upload do CI
        $this->load->library('upload');
        $caminho = $form_data['categoria'] . "/" . $form_data['subcategoria'] . "/";

        //define o caminho para salvar as imagens
        $path = './uploads/' . $caminho;

        //Configuração do upload
        //informa o diretorio para salvar as imagens
        $config['upload_path'] = $path;
        //define os tipos de arquivos suportados
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        //define o tamanho máximo do arquivo (em Kb)
        $config['max_size'] = '10000';
        //Criptografa o nome da imagem para nao se repetir
        $config['encrypt_name'] = TRUE;

        //verifica se o path é válido, se não for cria o diretório "uploads"
        if (!is_dir($path)) {
            mkdir($path, 0777, $recursive = true);
        }

        //Inicializa o método de upload
        $this->upload->initialize($config);

        //processa o upload e verifica o status
        if (!$this->upload->do_upload('file')) {
            //Determina o status do header
            $this->output->set_status_header('400');
            //Retorna a mensagem de erro a ser exibida
            echo $this->upload->display_errors(null, null);
        } else {
            $imagem = array('imagem' => $this->upload->data('file_name'));
            $dados = array_merge($imagem, $form_data);
            $teste = $path . $dados['imagem'];
            $this->myclass->imgsize($teste);
            if ($dados != null) {
                $this->galerias_model->save($dados);
                $this->session->set_flashdata("success", "Imagem salva com sucesso");
                redirect('#');
            }
            //Determina o status do header
            $this->output->set_status_header('200');
        }
    }

    public function delete($id_galeria = null, $imagem = null) {
        $form_data = $this->galerias_model->visualizar_id($id_galeria);
        $caminho = $form_data['categoria'] . "/" . $form_data['subcategoria'] . "/";
        
        $arquivo = '/var/www/html/lcd/uploads/' . $caminho . $form_data['imagem'];
        $arquivo_thumb = '/var/www/html/lcd/uploads/' . $caminho . $imagem;
        
        unlink($arquivo);
        unlink($arquivo_thumb);

        $this->galerias_model->deletar($id_galeria);
        $this->session->set_flashdata("success", "Imagem deletado com sucesso");
        redirect('welcome/index');
    }

}
