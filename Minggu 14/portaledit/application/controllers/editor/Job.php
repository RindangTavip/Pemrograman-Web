<?php

class Job extends CI_Controller {

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
        $data['editor_job'] = $this->model_editor->tampil_data()->result();
        $this->load->view('templates_editor/header');
        $this->load->view('templates_editor/sidebar');
        $this->load->view('editor/job', $data);
        $this->load->view('templates_editor/footer');
    }
    
    public function tambah_job()
    {
        $desc_job       = $this->input->post('desc_job');
        $kategori       = $this->input->post('kategori');
        $tarif          = $this->input->post('tarif');
        $id_editor      = $this->input->post('id_editor');
        $gambar         = $_FILES['gambar']['name'];
        $gambar_sample  = $_FILES['gambar_sample']['name'];
        $gambar_sample2 = $_FILES['gambar_sample2']['name'];
        $video_sample   = $_FILES['video_sample']['name'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        if ($gambar_sample = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_sample')) {
                echo "Upload Gagal";
            } else {
                $gambar_sample = $this->upload->data('file_name');
            }
        }

        if ($gambar_sample2 = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_sample2')) {
                echo "Upload Gagal";
            } else {
                $gambar_sample2 = $this->upload->data('file_name');
            }
        }

        if ($video_sample = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = '20000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('video_sample')) {
                echo "Upload Gagal";
            } else {
                $video_sample = $this->upload->data('file_name');
            }
        }

        $data = [
            'desc_job'  => $desc_job,
            'kategori' => $kategori,
            'tarif' => $tarif,
            'gambar' => $gambar,
            'gambar_sample' => $gambar_sample,
            'gambar_sample2' => $gambar_sample2,
            'video_sample' => $video_sample,
            'id_editor' => $id_editor
        ];

        $this->model_editor->tambah_job($data, 'tb_job');
        redirect('editor/job/index');
    }

    public function edit($kd_job)
    {
        $where = ['kd_job' => $kd_job];
        $data['editor_job'] = $this->model_editor->edit_job($where, 'tb_job')->result();
        $this->load->view('templates_editor/header');
        $this->load->view('templates_editor/sidebar');
        $this->load->view('editor/edit_job', $data);
        $this->load->view('templates_editor/footer');
    }

    public function update()
    {
        $kd_job         = $this->input->post('kd_job');
        $desc_job       = $this->input->post('desc_job');
        $kategori       = $this->input->post('kategori');
        $tarif          = $this->input->post('tarif');
        $gambar         = $_FILES['gambar']['name'];
        $gambar_sample  = $_FILES['gambar_sample']['name'];
        $gambar_sample2 = $_FILES['gambar_sample2']['name'];
        $video_sample   = $_FILES['video_sample']['name'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        if ($gambar_sample = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_sample')) {
                echo "Upload Gagal";
            } else {
                $gambar_sample = $this->upload->data('file_name');
            }
        }

        if ($gambar_sample2 = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_sample2')) {
                echo "Upload Gagal";
            } else {
                $gambar_sample2 = $this->upload->data('file_name');
            }
        }

        if ($video_sample = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = '20000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('video_sample')) {
                echo "Upload Gagal";
            } else {
                $video_sample = $this->upload->data('file_name');
            }
        }

        $data = [
            'kd_job'    => $kd_job,
            'desc_job'  => $desc_job,
            'kategori'  => $kategori,
            'tarif'     => $tarif,
            'gambar'    => $gambar,
            'gambar_sample' => $gambar_sample,
            'gambar_sample2' => $gambar_sample2,
            'video_sample' => $video_sample
        ];
        
        $where = [ 'kd_job' => $kd_job ];

        $this->model_editor->update_job($where,'tb_job',$data);
        redirect('editor/job/index');
    }

    public function hapus($kd_job)
    {
        $where = ['kd_job' => $kd_job];
        $this->model_editor->hapus_job($where,'tb_job');
        redirect('editor/job/index');
    }

    public function detail($kd_job)
    {
        $data['portal'] = $this->model_portal->detail_job($kd_job);
        $this->load->view('templates_editor/header');
        $this->load->view('templates_editor/sidebar');
        $this->load->view('editor/detail_job', $data);
        $this->load->view('templates_editor/footer');
	}
}