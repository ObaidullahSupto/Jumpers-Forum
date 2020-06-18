   <?php
/*Post Controller to create blog post and view them*/
	class Posts extends CI_Controller{
		/*View the posts*/
		public function index($offset = 0){
			//pagination config
			$config['base_url'] = base_url().'posts/index/';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-links');
			//Init pagination
			$this->pagination->initialize($config);


		// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}		
			$data['title'] = 'Latest Posts';
			$data['posts'] = $this->post_model->get_posts(FALSE,$config['per_page'],$offset );
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
	}

	/*Get Single post*/
	public function view($slug=NULL){
		$data['post'] = $this->post_model->get_posts($slug);
		$post_id = $data['post']['id'];
		$data['comments'] = $this->comment_model->get_comments($post_id);
		if(empty($data['post'])){
			show_404();
		}
		$data['title'] = $data['post'] ['title'];
		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');
	}
	/*Create Post*/
	public function create(){
		// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		$data['title'] = 'Create Post';
		$data['categories'] = $this->post_model->get_categories();
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Description','required');
		if($this->form_validation->run()===False)
		{
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		}
		else{
			 $this->post_model->create_post();
			//set message
			$this->session->set_flashdata('post_created','You Post hase been created'); 
			 redirect('posts');

		}

	}

}  


