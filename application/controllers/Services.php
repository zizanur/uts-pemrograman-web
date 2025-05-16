<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index() {
        $data['title'] = 'Services';
        $data['content'] = $this->load->view('content/view_services', [], true);
        $this->load->view('layouts/template', $data);
    }
}
