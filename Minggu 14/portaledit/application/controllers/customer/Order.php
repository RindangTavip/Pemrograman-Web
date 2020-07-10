<?php

class Order extends CI_Controller {

    public function index()
    {
        $data['customer'] = $this->model_order->tampil_data();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/sidebar');
        $this->load->view('customer/order', $data);
        $this->load->view('templates_customer/footer');
    }
}