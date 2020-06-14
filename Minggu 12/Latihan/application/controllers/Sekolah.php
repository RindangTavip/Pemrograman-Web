<?php

class Sekolah extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['sekolah'] = $this->Sekolah_model->getData()->result();
        $data['title'] = 'Sekolah';

        $this->load->view('templates/header', $data);
        $this->load->view('sekolah/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('sekolah/add', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $logo = $_FILES['logo'];

            if ($logo = '') {
            } else {
                $config['upload_path'] = './assets/foto';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('logo')) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $logo = $this->upload->data('file_name');
                }
            }

            $data = [
                'nama'  => $nama,
                'alamat' => $alamat,
                'logo' => $logo
            ];
            
            $this->Sekolah_model->addData($data, 'sekolah');
            redirect('sekolah');
        }
        
    }

    public function delete($id)
    {
        $where = [
            'id' => $id
        ];

        $this->Sekolah_model->deleteData($where, 'sekolah');
        redirect('sekolah');
    }

    public function edit($id)
    {
        $where = ["id" => $id];
        $data['title'] = 'Edit Data';
        $data['siswa'] = $this->Sekolah_model->getDataById($where, 'sekolah')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('sekolah/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $logo = $_FILES['logo'];

        if ($logo = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                echo "Upload Gagal";
                die();
            } else {
                $logo = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama'  => $nama,
            'alamat' => $alamat,
            'logo' => $logo
        ];

        $where = ['id' => $id];

        $this->Sekolah_model->updateData($where, $data, 'sekolah');
        redirect('sekolah');
    }

    public function pdf($id)
    {
        $this->load->library('pdfgenerator');
        $where = ["id" => $id];
        $data['siswa'] = $this->Sekolah_model->getDataById($where, 'sekolah')->result();

        $html = $this->load->view('table_report', $data, true);
        $filename = 'data siswa' . time();
        $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
    }
}
?>