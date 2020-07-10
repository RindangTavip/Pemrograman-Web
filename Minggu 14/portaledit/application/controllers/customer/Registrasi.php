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
            $this->load->view('customer/registrasi');
            $this->load->view('templates/footer');
        } else {
            if ($foto = '') {
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Upload Gagal";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            
            $data = array(
                'id_customer'     => '',
                'nama_lengkap'  => $this->input->post('nama_lengkap'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'email'         => $this->input->post('email'),
                'alamat'        => $this->input->post('alamat'),
                'nohp'          => $this->input->post('nohp'),
                'foto'          => $_FILES['foto']['name'],
                'role_id'       => 2
            );

            $this->db->insert('tb_customer',$data);
            redirect('auth/login');
        }
        
    }
}