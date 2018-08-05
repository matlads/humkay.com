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

        $this->load->database();
        $query = $this->db->query("SELECT date, name, location FROM events WHERE date > NOW()");
        $data['events'] = $query->result_array();

        $this->load->view('top');
        $this->load->view('nav');
        $this->load->view('events', $data);
        $this->load->view('bottom');
    }


    public function school_of_worship(){
        $this->load->view('top');
        $this->load->view('nav');
        $this->load->view('school_of_worship');
        $this->load->view('bottom');
    }
}
