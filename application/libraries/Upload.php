<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload {

    public function __construct() {
        
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
        $config['max_size'] = '5000';
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

}
