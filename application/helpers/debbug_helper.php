<?php

function debbug($variavel) {
    echo '<pre>';
    print_r($variavel);
    echo '</pre>';
    die();
}

function xdebbug($variavel) {
    echo '<pre>';
    print_r($variavel);
    echo '</pre>';
}

function imgsize($img_name = NULL) {
        $this->load->library('image_lib');
        
        $config['image_library'] = 'gd2';
        $config['source_image'] = $img_name;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 50;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();

        if (!$this->image_lib->resize()) {
            
            $msg = $this->image_lib->display_errors('<p class="alert-danger">', '</p>');
            
            $this->session->set_flashdata("success", $msg);
            redirect('admin/clientes/clientes');
        }
    }
