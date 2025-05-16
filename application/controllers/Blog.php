<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        $data['title'] = 'Blog';
        $data['content'] = $this->load->view('content/view_blog', [], true);
        $this->load->view('layouts/template', $data);
    }
}
