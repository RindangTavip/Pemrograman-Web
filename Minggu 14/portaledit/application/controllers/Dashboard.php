<?php

class Dashboard extends CI_Controller {

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

    public function order($kd_job)
    {
        $data['portal'] = $this->model_portal->detail_job($kd_job);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('order', $data);
        $this->load->view('templates/footer');
    }

    public function proses_order()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_order');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, order anda gagal diproses!";
        }
        
    }
}
