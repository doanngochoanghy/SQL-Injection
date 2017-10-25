<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function List()
	{
		$this->db->flush_cache();
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->join('users', 'posts.author_id = users.user_id', 'left');
		return $this->db->get()->result_array();
	}
	public function Create($author_id,$title,$content)
	{
		$data = array('author_id' => $author_id,'title'=>$title,'content'=>$content );
		$this->db->insert('posts', $data);
	}
	public function Get_post($post_id,$user_id)
	{
		$this->db->flush_cache();
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->join('users', 'posts.author_id = users.user_id', 'left');
		$this->db->where(array('post_id' => $post_id,'user_id'=>$user_id ));
		return $this->db->get()->result_array();
	}
	public function Edit($post_id,$title,$content)
	{
		$this->db->flush_cache();
		$this->db->where('post_id', $post_id);
		$this->db->update('posts',array('title' => $title, 'content'=>$content));
	}
}

/* End of file News_model.php */
/* Location: ./application/models/News_model.php */