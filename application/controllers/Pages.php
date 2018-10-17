<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function store(){
        $this->load->view('tachyons/top');
        $this->load->view('tachyons/nav');
        $this->load->view('tachyons/store');
        $this->load->view('tachyons/bottom');
    }

    public function profile() {
        $this->load->view('tachyons/top');
        $this->load->view('tachyons/nav');
        $this->load->view('tachyons/profile');
        $this->load->view('tachyons/bottom');
    }

    public function events() {

        $this->load->database();
        $query = $this->db->query("SELECT date, name, location FROM events WHERE date > NOW()");
        $data['events'] = $query->result_array();

        $this->load->view('tachyons/top');
        $this->load->view('tachyons/nav');
        $this->load->view('tachyons/events', $data);
        $this->load->view('tachyons/bottom');
    }


    public function school_of_worship(){
        $this->load->view('tachyons/top');
        $this->load->view('tachyons/nav');
        $this->load->view('tachyons/school_of_worship');
        $this->load->view('tachyons/bottom');
    }
}
