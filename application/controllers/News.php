<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		//List tin tuc
		if (empty($this->session->userdata('loggedin'))) {
			$this->session->set_flashdata('message', 'You must login!');
			redirect('./Users/Login','refresh');
		}
		$list=$this->news_model->list();
		$data = array('list' => $list );
		$this->load->view('templates/header');
		$this->load->view('News/list.php',$data);
		$this->load->view('templates/footer');
	}

	public function Create($value='')
	{
		//Create tin tuc
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