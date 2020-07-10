<?php

class Model_order extends CI_Model{
    public function tampil_data(){
        $this->db->select('*');
        $this->db->from('tb_order');
        $this->db->join('tb_invoice','tb_invoice.kd_invoice=tb_order.kd_invoice');
        $this->db->join('tb_job','tb_job.kd_job=tb_invoice.kd_job');
        $this->db->join('tb_customer','tb_customer.id_customer=tb_invoice.id_customer');
        $this->db->where('tb_customer.username', $this->session->userdata('username'));
        $result = $this->db->get();
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
    
    public function submit_project($data,$table){
        $this->db->insert($table,$data);
    }
}