<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index() {
        $data['title'] = 'Shop';
        $data['content'] = $this->load->view('content/view_shop', [], true);
        $this->load->view('layouts/template', $data);
    }

	public function cart() {
        $data['title'] = 'Cart';
        $data['content'] = $this->load->view('content/view_cart', [], true);
        $this->load->view('layouts/template', $data);
    }
	
	public function checkout() {
        $data['title'] = 'Check-Out';
        $data['content'] = $this->load->view('content/view_checkout', [], true);
        $this->load->view('layouts/template', $data);
    }

	public function terimakasih() {
        $data['title'] = 'Terima Kasih';
        $data['content'] = $this->load->view('content/view_terimakasih', [], true);
        $this->load->view('layouts/template', $data);
    }
}
