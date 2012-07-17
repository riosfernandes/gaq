<?php

class MY_Non_Public_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        //definir stylesheets para as páginas
        $this->template->set('styles', array('hyper_header', 'header', 'general', 'navigator', 'content', 'footer'));
        $this->template->set('js_files_jquery', array('jquery-1.7.1.min', 'navigator', 'footer'));
        $this->template->set('js_files_aditional', array());

        $this->isLogado();
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