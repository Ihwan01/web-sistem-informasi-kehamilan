<?php

class Kesuburan extends CI_Controller {
    
    public function index(){
        $this->load->view('kesuburan/kesuburan');
    }

    public function kalkulatorMasaSubur(){
        $this->load->view('kesuburan/kalkulatorMasaSubur');
    }

    public function kesuburan1(){
        $this->load->view('kesuburan/kesuburan1');
    }

    public function kesuburan2(){
        $this->load->view('kesuburan/kesuburan2');
    }
}