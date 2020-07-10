<?php

class Registrasi extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','E-mail','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('nohp','No Handphone','required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('editor/registrasi');
            $this->load->view('templates/footer');
        } else {
            if ($gambar_cover = '') {
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar_cover')) {
                    echo "Upload Gagal";
                } else {
                    $gambar_cover = $this->upload->data('file_name');
                }
            }
            
            $data = array(
                'id_editor'     => '',
                'nama_lengkap'  => $this->input->post('nama_lengkap'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'email'         => $this->input->post('email'),
                'alamat'        => $this->input->post('alamat'),
                'nohp'          => $this->input->post('nohp'),
                'gambar_cover'  => $_FILES['gambar_cover']['name'],
                'role_id'       => 1
            );

            $this->db->insert('tb_editor',$data);
            redirect('auth/login');
        }
        
    }
}