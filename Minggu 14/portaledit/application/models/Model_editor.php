<?php

class Model_editor extends CI_Model{
    public function dash_editor($id_editor)
    {
        $result = $this->db->where('id_editor',$id_editor)->get('tb_editor');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function tampil_data(){
        $this->db->select('*');
        $this->db->from('tb_job');
        $this->db->join('tb_editor','tb_editor.id_editor=tb_job.id_editor');
        $this->db->where('tb_editor.nama_lengkap', $this->session->userdata('nama_lengkap'));
        $this->db->where('tb_editor.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query;
    }

    public function tambah_job($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_job($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_job($where,$data,$table){
        $this->db->where($where);
        $this->db->update($data,$table);
    }

    public function hapus_job($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}