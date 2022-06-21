<?php

class Perkembangan extends CI_Controller {

    public function trimester1(){
        $this->load->view('perkembangan/trimester1');
    }

    public function trimester2(){
        $this->load->view('perkembangan/trimester2');
    }

    public function trimester3(){
        $this->load->view('perkembangan/trimester3');
    }
}