<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Review_model');
		$this->load->helper('admin_helper');
	}

	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_review']=$this->Review_model->get_review();
        $data['admin_maincontent']=$this->load->view('admin/review_manage',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

//=============================== Review =========================================//

	public function add_review(){

		$data = array();
		//$data['all_published_category'] = $this->FrontModel->select_published_category();
		$data['admin_maincontent'] = $this->load->view('admin/add_review', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_review(){

		$this->form_validation->set_rules('description', 'Review Description', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_review', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['review_type'] = $this->input->post('review_type');
			$data['description'] = $this->input->post('description');
			$data['photo'] = $this->uploadPhoto();
			//$this->debug($data);

			$result = $this->Review_model->commonInsert('tbl_review',$data);
			if($result){
				$msg = 'Program Details has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Review/index');
			}else{
				$msg ='Failed to Added !!!';
				$message = $this->msg($msg);
				redirect('Review/index');
			}
			
		}//if

	}//save_review

	public function edit_review($id){

		$data = array();
		$data['review_info'] = $this->Review_model->select_Program_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_review', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_review(){

		$review_id = $this->input->post('review_id',true);
		$review_type = $this->input->post('review_type',true);
		$review_title = $this->input->post('review_title',true);
		$description = $this->input->post('description',true);
		$video_link = $this->input->post('video_link',true);

		$this->db->set('review_type', $review_type);
		$this->db->set('review_title', $review_title);
		$this->db->set('description', $description);
		$this->db->set('video_link', $video_link);

		if(isset($review_id) && $review_id != ''){

			$data = array('review_id' => $review_id);
			$prev_info = $this->db->get_where("tbl_review",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}
		

		$result = $this->Review_model->Update_Review($review_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Review/index');

		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Review/index');
		}

	}//update_review

	public function delete_review($id){

		$result = $this->Review_model->deleteReview_by_id($id);
		if($result){
			$msg = 'Review has been Delete !!!';
			$message = $this->msg($msg);
			redirect('Review/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Review/index');
		}
	}

	
//=============================== End=========================================//
	
}