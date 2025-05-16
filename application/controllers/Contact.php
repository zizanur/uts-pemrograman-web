<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $data['title'] = 'Contact Us';
        $data['content'] = $this->load->view('content/view_contact', [], true);
        $this->load->view('layouts/template', $data);
    }
}
