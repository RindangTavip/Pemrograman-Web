<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['portal'] = $this->model_portal->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($kd_job)
    {
        $data['portal'] = $this->model_portal->detail_job($kd_job);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
	}
	
	public function detail_gambar($kd_job)
    {
        $data['portal'] = $this->model_portal->detail_job($kd_job);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_gambar', $data);
        $this->load->view('templates/footer');
	}
	
	public function detail_video($kd_job)
    {
        $data['portal'] = $this->model_portal->detail_job($kd_job);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_video', $data);
        $this->load->view('templates/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['portal'] = $this->model_portal->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('search', $data);
        $this->load->view('templates/footer');
    }
}
