<?php

class Kategori extends CI_Controller {
	public function gambar(){
        $data['gambar'] = $this->model_kategori->data_gambar()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gambar', $data);
        $this->load->view('templates/footer');
    }

    public function video(){
        $data['video'] = $this->model_kategori->data_video()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('video', $data);
        $this->load->view('templates/footer');
    }
}