<?php

class Invoice extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1') {
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
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_editor/header');
        $this->load->view('templates_editor/sidebar');
        $this->load->view('editor/invoice', $data);
        $this->load->view('templates_editor/footer');
    }

    public function submit_project()
    {
        $kd_invoice      = $this->input->post('kd_invoice');
        $gambar_project  = $_FILES['gambar_project']['name'];
        $video_project   = $_FILES['video_project']['name'];

        if ($gambar_project = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_project')) {
                echo "Upload Gagal";
            } else {
                $gambar_project = $this->upload->data('file_name');
            }
        }

        if ($video_project = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = '20000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('video_project')) {
                echo "Upload Gagal";
            } else {
                $video_project = $this->upload->data('file_name');
            }
        }

        $data = [
            'kd_invoice'     => $kd_invoice,
            'gambar_project' => $gambar_project,
            'video_project'  => $video_project
        ];

        $this->model_order->submit_project($data, 'tb_order');
        redirect('editor/invoice/index');
    }

    public function hapus($kd_invoice)
    {
        $where = ['kd_invoice' => $kd_invoice];
        $this->model_invoice->hapus_invoice($where,'tb_invoice');
        redirect('editor/invoice/index');
    }
}