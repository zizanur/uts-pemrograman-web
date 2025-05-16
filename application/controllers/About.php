<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $data['title'] = 'About';
        $data['content'] = $this->load->view('content/view_about', [], true);
        $this->load->view('layouts/template', $data);
    }
}
