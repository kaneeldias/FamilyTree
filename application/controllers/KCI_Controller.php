<?php

class KCI_Controller extends CI_Controller{

    protected function loadView($view, $title = null, $data = null){
        $this->load->view('templates/header', $title);
        $this->load->view($view, $data);
        $this->load->view('templates/footer');
    }

    protected function getJSONData(){
        return json_decode(file_get_contents('php://input'), true);
    }

    protected function error($code){
        http_response_code($code);
    }

}