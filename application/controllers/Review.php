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
        $data['admin_maincontent']=$this->load->view('admin/manage_product',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

//=============================== Review =========================================//

	public function add_product(){

		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_product', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_product(){

		$this->form_validation->set_rules('title', 'Product Title', 'required');
		$this->form_validation->set_rules('description', 'Product Description', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_product', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['category_id'] = $this->input->post('category_id');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$data['photo'] = $this->uploadPhoto();
			$data['pdf_file'] = $this->uploadPDF();
			//$this->debug($data);

			$result = $this->Review_model->commonInsert('tbl_review',$data);
			if($result){
				$msg = 'Product has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Review/index');
			}else{
				$msg ='Failed to Added !!!';
				$message = $this->msg($msg);
				redirect('Review/index');
			}
			
		}//if

	}//save_product

	public function edit_product($id){

		$data = array();
		$data['selected_info'] = $this->Review_model->select_Program_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_product', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_product(){

		$review_id = $this->input->post('review_id',true);
		$category_id = $this->input->post('category_id',true);
		$title = $this->input->post('title',true);
		$description = $this->input->post('description',true);

		$this->db->set('category_id', $category_id);
		$this->db->set('title', $title);
		$this->db->set('description', $description);

		if(isset($review_id) && $review_id != ''){

			$data = array('review_id' => $review_id);
			$prev_info = $this->db->get_where("tbl_review",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
			
		}

		if(isset($review_id) && $review_id != ''){

			$data = array('review_id' => $review_id);
			$prev_info = $this->db->get_where("tbl_review",$data)->row();
			if(isset($_FILES['pdf_file']['name']) && ($_FILES['pdf_file']['name'] != '')){
				unlink($prev_info->pdf_file);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}

		if(isset($_FILES['pdf_file']['name']) && ($_FILES['pdf_file']['name'] != '') ){

			$pdf_file = $this->updatePDF();
		}
		

		$result = $this->Review_model->Update_product($review_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Review/index');

		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Review/index');
		}

	}//update_product

	public function delete_product($id){

		$result = $this->Review_model->deleteProductByID($id);
		if($result){
			$msg = 'Product has been Deleted !!!';
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