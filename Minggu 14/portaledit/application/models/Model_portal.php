<?php

class Model_portal extends CI_Model{
    public function tampil_data(){
        $this->db->select('*');
        $this->db->from('tb_job');
        $this->db->join('tb_editor','tb_editor.id_editor=tb_job.id_editor');
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

    public function detail_job($kd_job)
    {
        $result = $this->db->from('tb_job')->join('tb_editor','tb_editor.id_editor=tb_job.id_editor')->where('kd_job',$kd_job)->get();
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_job');
        $this->db->join('tb_editor','tb_editor.id_editor=tb_job.id_editor');
        $this->db->like('desc_job', $keyword);
        return $this->db->get()->result();
    }
}