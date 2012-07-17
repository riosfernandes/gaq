<?php

class MY_Non_Public_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        //definir stylesheets para as páginas
        
        $this->template->set('styles', array('hyper_header', 'header', 'general', 'navigator', 'content', 'footer'));
        $this->template->set('js_files_jquery', $this->get_js());
        $this->template->set('js_files_aditional', array());

        $this->isLogado();
    }

    public function get_js() {
        $js_temp = array('navigator', 'footer');
        $js_files_jquery = array();
        
        foreach ($js_temp as $js) {
            $js = JSPATH . $js . '.js';
            $js_files_jquery[sha1($js)] = base_url() . $js;
        }
        
        return $js_files_jquery;
    }

    function isLogado() {

        $u = $this->session->userdata('usuario_logado');
        if (!$u) {
            redirect('login');
        }
    }

    function date_converter($_date = null) {
        $format = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';
        if ($_date != null && preg_match($format, $_date, $partes)) {
            return $partes[3] . '-' . $partes[2] . '-' . $partes[1];
        }
        return false;
    }

}

/* End of file MY_Non_Public_Controller.php */
/* Location: ./application/core/MY_Non_Public_Controller.php */