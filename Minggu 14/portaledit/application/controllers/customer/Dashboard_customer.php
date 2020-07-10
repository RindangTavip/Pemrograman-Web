<?php

class Dashboard_customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');
        }
    }
    
    public function index()
	{
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/sidebar');
        $this->load->view('customer/dashboard');
        $this->load->view('templates_customer/footer');
    }
}