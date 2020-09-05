<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Photo_model');
		$this->load->helper('admin_helper');
	}
	
	// public function index(){
	// 	$data['message'] = array();
	// 	$data['message'] = $this->session->flashdata('message');
	// 	$total = $this->db->count_all("tbl_review");
 //        $perPage = 20;
 //        $this->pagination(base_url() . 'Review/index', $perPage, $total);
 //        $data['all_review']=$this->Photo_model->select_all_review($perPage, $this->uri->segment(3));
 //        $data['admin_maincontent']=$this->load->view('admin/review_manage',$data,true);
	//  	$this->load->view('admin/admin_master',$data);
	// }

	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_photo']=$this->Photo_model->get_photo();
        $data['admin_maincontent']=$this->load->view('admin/manage_photo',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_photo(){

		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_photo', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_photo(){

		$this->form_validation->set_rules('type', 'Photo Type', 'required');
		$this->form_validation->set_rules('photo_title', 'Photo Title', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_photo', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['type'] = $this->input->post('type');
			$data['photo_title'] = $this->input->post('photo_title');
			$data['description'] = $this->input->post('description');

			$data['photo'] = $this->uploadPhoto();

			//$this->debug($data);

			$result = $this->Photo_model->commonInsert('tbl_photos',$data);
			if($result){
				$msg = 'Photo has been saved successfully !!!';
				$message = $this->msg($msg);
				redirect('Photo/index');
			}else{
				$msg ='Failed to Added !!!';
				$message = $this->msg($msg);
				redirect('Photo/index');
			}
			
		}//if

	}//save_photo

	public function edit_photo($id){

		$data = array();
		$data['photo_info'] = $this->Photo_model->select_photo_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_photo', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_photo(){

		$photo_id = $this->input->post('photo_id',true);
		$type = $this->input->post('type',true);
		$photo_title = $this->input->post('photo_title',true);
		$description = $this->input->post('description',true);

		$this->db->set('type', $type);
		$this->db->set('photo_title', $photo_title);
		$this->db->set('description', $description);

		if(isset($photo_id) && $photo_id != ''){

			$data = array('photo_id' => $photo_id);
			$prev_info = $this->db->get_where("tbl_photos",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}
		

		$result = $this->Photo_model->Update_Photo($photo_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Photo/index');

		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Photo/index');
		}

	}//update_photo

	public function delete_photo($id){

		$result = $this->Photo_model->deletePhoto_by_id($id);
		if($result){
			$msg = 'Photo has been Delete !!!';
			$message = $this->msg($msg);
			redirect('Photo/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Photo/index');
		}
	}

//=============================== End=========================================//
	
}