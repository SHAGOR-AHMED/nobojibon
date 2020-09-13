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

		$data['type'] = $this->input->post('type');
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
		
		$this->db->set('type', $type);

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