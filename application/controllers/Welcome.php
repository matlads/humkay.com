<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->database();
        $this->load->helper('text');

        $query = $this->db->query("SELECT date, name, location FROM events WHERE date > NOW();");
        $data['events'] = $query->result_array();

        $this->load->view('tachyons/top');
        $this->load->view('tachyons/nav');
        $this->load->view('tachyons/old_index');
        $this->load->view('tachyons/events', $data);
        $this->load->view('tachyons/short_profile');
        $this->load->view('tachyons/bottom');
    }
}
