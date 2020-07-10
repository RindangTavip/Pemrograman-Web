<?php

class Model_kategori extends CI_Model{
    public function data_gambar(){
        $array = array('kategori' => 'gambar');
        $this->db->select('*');
        $this->db->from('tb_job');
        $this->db->join('tb_editor','tb_editor.id_editor=tb_job.id_editor');
        $this->db->where($array);
        $query = $this->db->get();
        return $query;
    }

    public function data_video(){
        $array = array('kategori' => 'video');
        $this->db->select('*');
        $this->db->from('tb_job');
        $this->db->join('tb_editor','tb_editor.id_editor=tb_job.id_editor');
        $this->db->where($array);
        $query = $this->db->get();
        return $query;
    }
}