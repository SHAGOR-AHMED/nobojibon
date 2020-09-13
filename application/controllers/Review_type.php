<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review_type extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Reviewtype_model');
		$this->load->helper('admin_helper');
	}
	
	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_category']=$this->Reviewtype_model->select_all_type();
        $data['admin_maincontent']=$this->load->view('admin/manage_category',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_category(){

		$data=array();
		$data['admin_maincontent']=$this->load->view('admin/add_category','',true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function save_type(){

		$this->form_validation->set_rules('type_name', 'Program Name', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_program', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['type_name'] = $this->input->post('type_name');

			$result = $this->Reviewtype_model->commonInsert('tbl_type',$data);
			if($result){
				$msg = 'Category has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Review_type/index');
			}else{
				$msg ='Failed to Create !!!';
				$message = $this->msg($msg);
				redirect('Review_type/index');
			}
			
		}//if

	}//save_type

	public function edit_category($id){

		$data=array();
		$data['selected_info'] = $this->Reviewtype_model->select_type_info_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_type(){
		
		$data=array();
		$type_id = $this->input->post('type_id',true);
		$data['type_name']=$this->input->post('type_name',true);

		$result = $this->Reviewtype_model->update_reviewType_info($data,$type_id);
		if($result){
			$msg = 'Category has been Updated !!!';
			$message = $this->msg($msg);
			redirect('Review_type/index');
		}else{
			$msg ='Failed to Update !!!';
			$message = $this->msg($msg);
			redirect('Review_type/index');
		}
	}



	public function delete_category($id){

        $result = $this->Reviewtype_model->deleteType($id);
		if($result){
			$msg = 'Category has been Deleted !!!';
			$message = $this->msg($msg);
			redirect('Review_type/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Review_type/index');
		}
	}

}//