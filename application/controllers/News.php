<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('News_model');
		$this->load->helper('admin_helper');
	}
	
	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_news']=$this->News_model->select_all_news();
        $data['admin_maincontent']=$this->load->view('admin/manage_news',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_news(){

		$data=array();
		$data['admin_maincontent']=$this->load->view('admin/add_news','',true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function save_news(){

		$this->form_validation->set_rules('date', 'News & Event Date', 'required');
		$this->form_validation->set_rules('title', 'News & Event Title', 'required');
		$this->form_validation->set_rules('description', 'News & Event Title Description', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_news', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['date'] = $this->input->post('date');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');

			$data['photo'] = $this->uploadPhoto();

			$result = $this->News_model->commonInsert('tbl_news',$data);
			if($result){
				$msg = 'News & Event has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('News/index');
			}else{
				$msg ='Failed to Create !!!';
				$message = $this->msg($msg);
				redirect('News/index');
			}
			
		}//if

	}//save_news

	public function delete_news($id){

        $result = $this->News_model->deleteNews($id);
		if($result){
			$msg = 'News & Event has been Deleted successfully !!!';
			$message = $this->msg($msg);
			redirect('News/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('News/index');
		}
	}

	public function edit_news($id){

		$data=array();
		$data['news_info']=$this->News_model->select_news_info_by_id($id);
		$data['admin_maincontent']=$this->load->view('admin/edit_news',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_news(){
		
		$data=array();
		$news_id = $this->input->post('news_id',true);
		$date = $this->input->post('date',true);
		$title =$this->input->post('title',true);
		$description =$this->input->post('description',true);

		$this->db->set('date', $date);
		$this->db->set('title', $title);
		$this->db->set('description', $description);

		if(isset($news_id) && $news_id != ''){

			$data = array('news_id' => $news_id);
			$prev_info = $this->db->get_where("tbl_news",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}

		$result = $this->News_model->update_news_info($news_id);
		if($result){
			$msg = 'News & Event has been Updated successfully !!!';
			$message = $this->msg($msg);
			redirect('News/index');
		}else{
			$msg ='Failed to Update !!!';
			$message = $this->msg($msg);
			redirect('News/index');
		}

	}

}//news