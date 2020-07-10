<?php

class Model_invoice extends CI_Model{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $id_customer    = $this->input->post('id_customer');
        $desc_project   = $this->input->post('desc_project');
        $batas_order    = $this->input->post('batas_order');
        $pembayaran     = $this->input->post('pembayaran');
        $kd_job         = $this->input->post('kd_job');
        $gambar_bahan   = $_FILES['gambar_bahan']['name'];
        $video_bahan    = $_FILES['video_bahan']['name'];

        if ($gambar_bahan = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_bahan')) {
                echo "Upload Gagal";
            } else {
                $gambar_bahan = $this->upload->data('file_name');
            }
        }

        if ($video_bahan = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = '20000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('video_bahan')) {
                echo "Upload Gagal";
            } else {
                $video_bahan = $this->upload->data('file_name');
            }
        }

        $invoice = [
            'id_customer'  => $id_customer,
            'desc_project' => $desc_project,
            'tgl_order'    => date('Y-m-d H:i:s'),
            'batas_order'  => $batas_order,
            'pembayaran'   => $pembayaran,
            'kd_job'       => $kd_job,
            'gambar_bahan' => $gambar_bahan,
            'video_bahan'  => $video_bahan
        ];

        $this->db->insert('tb_invoice', $invoice);
        $kd_invoice = $this->db->insert_id();

        return TRUE;
    }

    public function tampil_data(){
        $this->db->select('*');
        $this->db->from('tb_invoice');
        $this->db->join('tb_job','tb_job.kd_job=tb_invoice.kd_job');
        $this->db->join('tb_editor','tb_editor.id_editor=tb_job.id_editor');
        $this->db->where('tb_editor.username', $this->session->userdata('username'));
        $result = $this->db->get();
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

    public function hapus_invoice($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}