<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function store(){
        $this->load->view('top');
        $this->load->view('nav');
        $this->load->view('store');
        $this->load->view('bottom');
    }

    public function profile() {
        $this->load->view('top');
        $this->load->view('nav');
        $this->load->view('profile');
        $this->load->view('bottom');
    }

    public function events() {
        $this->load->view('top');
        $this->load->view('nav');
        $this->load->view('events');
        $this->load->view('bottom');
    }


    public function school_of_worship(){
        $this->load->view('top');
        $this->load->view('nav');
        $this->load->view('school_of_worship');
        $this->load->view('bottom');
    }
}
