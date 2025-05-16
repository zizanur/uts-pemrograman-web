<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index() {
        $data['title'] = 'Beranda';
        $data['content'] = $this->load->view('content/view_beranda', [], true);
        $this->load->view('layouts/template', $data);
    }
}
