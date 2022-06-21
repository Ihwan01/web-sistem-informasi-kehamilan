<?php

class Melahirkan extends CI_Controller {

    public function index(){
        $this->load->view('melahirkan/melahirkan');
    }

    public function melahirkan1(){
        $this->load->view('melahirkan/melahirkan1');
    }

    public function melahirkan2(){
        $this->load->view('melahirkan/melahirkan2');
    }
}