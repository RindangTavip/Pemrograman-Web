<?php

class Auth extends CI_Controller {
    public function login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Username dan/ Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('id_customer',$auth->id_customer);
                $this->session->set_userdata('nama_lengkap',$auth->nama_lengkap);
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('email',$auth->email);
                $this->session->set_userdata('alamat',$auth->alamat);
                $this->session->set_userdata('nohp',$auth->nohp);
                $this->session->set_userdata('foto',$auth->foto);
                $this->session->set_userdata('role_id',$auth->role_id);

                redirect('welcome');
            }
        }
    }

    public function login_editor()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->model_auth->cek_login2();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Username dan/ Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('id_editor',$auth->id_editor);
                $this->session->set_userdata('nama_lengkap',$auth->nama_lengkap);
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('email',$auth->email);
                $this->session->set_userdata('alamat',$auth->alamat);
                $this->session->set_userdata('nohp',$auth->nohp);
                $this->session->set_userdata('gambar_cover',$auth->gambar_cover);
                $this->session->set_userdata('role_id',$auth->role_id);

                redirect('editor/dashboard_editor');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}