<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		//List tin tuc
		if (empty($this->session->userdata('loggedin'))) {
			$this->session->set_flashdata('message', 'You must login!');
			redirect('./Users/Login');
		}
		$list=$this->news_model->list();
		$data = array('list' => $list );
		$this->load->view('templates/header');
		$this->load->view('News/list.php',$data);
		$this->load->view('templates/footer');
	}

	public function Create()
	{
		//Create tin tuc
		if (!empty($this->session->userdata('loggedin'))) {
			if ($this->session->userdata('is_admin')==1) {
				if ($this->input->post('title')!=NULL&&$this->input->post('content')!=NULL) {
					$this->news_model->Create($this->session->userdata('username'),$this->input->post('title'),$this->input->post('content'));
					redirect(base_url().'News','');
				} else {
				$this->load->view('templates/header');
				$this->load->view('News/create_form');
				$this->load->view('templates/footer');
			}
			} else {
				redirect('./');
			}
			
		} else {
			$this->session->set_flashdata('message', 'You must login!');
			redirect('./Users/Login');
		}
		
	}

	public function Update($value='')
	{
		//Update tin tuc
	}

	public function Delete($value='')
	{
		//Delete
	}
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */