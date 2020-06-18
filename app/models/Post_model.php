<?php
	class Post_model extends cI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = False,$limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit,$offset );
			}

			if($slug === False){
				$this->db->order_by('posts.id','DESC');//show the post LIFO
				$this->db->join('categories','categories.id = posts.category_id');

				$query = $this->db->get('posts');
				return $query-> result_array();
			}

		$query=$this->db->get_where('posts',array('slug'=>$slug));
		return $query->row_array();
		}

		public function create_post(){
			$slug = url_title($this->input->post('title'));
			$data = array(
				'title' => $this->input->post('title'),
				'slug'=>$slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id')
			);

			return $this->db->insert('posts',$data);

		}

		public function get_categories(){
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		
		}

		public function get_posts_by_category($category_id){
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get_where('posts', array('category_id' => $category_id));
			return $query->result_array();
		}

		public function get_all_post()
		{
			$this->db->order_by('posts.id','DESC');//show the post LIFO
			$this->db->join('categories','categories.id = posts.category_id');
			$query = $this->db->get('posts');
			return $query-> result_array();
		
		}

		 // public function search($query){
		 // 	$q = $this->db->from('posts')->like('title',$query)->get();
		 // 	return $q->result();
		 // }



	}
	