<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function List()
	{
		return $this->db->get('posts')->result_array();
	}
	public function Create($author,$title,$content)
	{
		$data = array('author' => $author,'title'=>$title,'content'=>$content );
		$this->db->insert('posts', $data);
	}
}

/* End of file News_model.php */
/* Location: ./application/models/News_model.php */