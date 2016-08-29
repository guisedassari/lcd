<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Myclass {

    public function __construct() {
        
    }

    public function imgsize($img_name = NULL) {
        $CI = & get_instance();
        $CI->load->driver('session');

        $CI->load->library('image_lib');
        
        $config['image_library'] = 'gd2';
        $config['source_image'] = $img_name;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 50;


        $CI->image_lib->initialize($config);
        $CI->image_lib->resize();

        if (!$CI->image_lib->resize()) {

            $msg = $this->image_lib->display_errors('<p class="alert-danger">', '</p>');
            $CI->session->set_flashdata("success", $msg);
        }
    }

    public function TynePNG($img_name = NULL) {
        require_once("./tinify-php-master/lib/Tinify/Exception.php");
        require_once("./tinify-php-master/lib/Tinify/ResultMeta.php");
        require_once("./tinify-php-master/lib/Tinify/Result.php");
        require_once("./tinify-php-master/lib/Tinify/Source.php");
        require_once("./tinify-php-master/lib/Tinify/Client.php");
        require_once("./tinify-php-master/lib/Tinify.php");
        \Tinify\setKey("XH9fKbvPfURySjy_kR5l7X8drrhrLihb");

        $source = \Tinify\fromFile($img_name);
        $source->toFile($img_name);
    }

}
