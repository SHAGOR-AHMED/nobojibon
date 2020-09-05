<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Common_model');
		$this->load->helper('admin_helper');
	}
	
	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['about']=$this->Common_model->select_about();
        $data['admin_maincontent']=$this->load->view('admin/manage_about',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_about(){

		$data=array();
		$data['admin_maincontent']=$this->load->view('admin/add_about','',true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function save_about(){

		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_about', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['description'] = $this->input->post('description');

			$result = $this->Common_model->commonInsert('tbl_about',$data);
			if($result){
				$msg = 'About has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Common/index');
			}else{
				$msg ='Failed to Create !!!';
				$message = $this->msg($msg);
				redirect('Common/index');
			}
			
		}//if

	}//save_about

	public function delete_about($id){

        $result = $this->Common_model->deleteAbout($id);
		if($result){
			$msg = 'About has been Deleted successfully !!!';
			$message = $this->msg($msg);
			redirect('Common/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Common/index');
		}
	}

	public function edit_about($id){

		$data=array();
		$data['about_info']=$this->Common_model->select_about_info_by_id($id);
		$data['admin_maincontent']=$this->load->view('admin/edit_about',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_about(){
		
		$data=array();
		$about_id = $this->input->post('about_id',true);
		$data['description']=$this->input->post('description',true);

		$result = $this->Common_model->update_about_info($data,$about_id);
		if($result){
			$msg = 'About has been Updated successfully !!!';
			$message = $this->msg($msg);
			redirect('Common/index');
		}else{
			$msg ='Failed to Update !!!';
			$message = $this->msg($msg);
			redirect('Common/index');
		}

	}

//======================= Useful Link ========================//

	public function add_link(){
		$data=array();
		$data['admin_maincontent']=$this->load->view('admin/add_link','',true);
		$this->load->view('admin/admin_master',$data);
	}

	public function manageLink(){
		$data=array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['allLinks'] = $this->Common_model->get_links();
        $data['admin_maincontent'] = $this->load->view('admin/manage_link',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}
	
	public function save_link(){

		$this->form_validation->set_rules('link_title', 'Link Title', 'required');
		$this->form_validation->set_rules('url', 'Link Url', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_link', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['link_title'] = $this->input->post('link_title');
			$data['url'] = $this->input->post('url');

			$result = $this->Common_model->commonInsert('tbl_link',$data);
			if($result){
				$msg = 'Useful Link has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Common/manageLink');
			}else{
				$msg ='Failed to Create !!!';
				$message = $this->msg($msg);
				redirect('Common/manageLink');
			}
			
		}//if

	}//save_link

	public function edit_link($id){

		$data=array();
		$data['link_info']=$this->Common_model->select_link_info_by_id($id);
		$data['admin_maincontent']=$this->load->view('admin/edit_link',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_link(){
		
		$data=array();
		$link_id = $this->input->post('link_id',true);
		$data['link_title']=$this->input->post('link_title',true);
		$data['url']=$this->input->post('url',true);

		$result = $this->Common_model->update_link_info($data,$link_id);
		if($result){
			$msg = 'Link has been Updated successfully !!!';
			$message = $this->msg($msg);
			redirect('Common/manageLink');
		}else{
			$msg ='Failed to Update !!!';
			$message = $this->msg($msg);
			redirect('Common/manageLink');
		}

	}

	public function delete_link($id){

        $result = $this->Common_model->deleteLink($id);
		if($result){
			$msg = 'Link has been Deleted successfully !!!';
			$message = $this->msg($msg);
			redirect('Common/manageLink');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Common/manageLink');
		}
	}

//======================= Contact Info ========================//


	// public function add_contact(){
	// 	$data=array();
	// 	$data['admin_maincontent']=$this->load->view('admin/add_contact','',true);
	// 	$this->load->view('admin/admin_master',$data);
	// }

	public function manageContact(){
		$data=array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['getContact'] = $this->Common_model->get_contact();
        $data['admin_maincontent'] = $this->load->view('admin/manage_contact',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}
	
	// public function save_contact(){

	// 	$this->form_validation->set_rules('link_title', 'Link Title', 'required');
	// 	$this->form_validation->set_rules('url', 'Link Url', 'required');

	// 	if($this->form_validation->run() == FALSE){

	// 		$data['admin_maincontent'] = $this->load->view('admin/add_link', '', true);
	// 		$this->load->view('admin/admin_master',$data);
	// 		return false;

	// 	}else{

	// 		$data['link_title'] = $this->input->post('link_title');
	// 		$data['url'] = $this->input->post('url');

	// 		$result = $this->Common_model->commonInsert('tbl_contact',$data);
	// 		if($result){
	// 			$msg = 'Contact Information has been created successfully !!!';
	// 			$message = $this->msg($msg);
	// 			redirect('Common/manageContact');
	// 		}else{
	// 			$msg ='Failed to Create !!!';
	// 			$message = $this->msg($msg);
	// 			redirect('Common/manageContact');
	// 		}
			
	// 	}//if

	// }//save_contact

	public function edit_contact($id){

		$data=array();
		$data['contact_info']=$this->Common_model->select_contact_info_by_id($id);
		$data['admin_maincontent']=$this->load->view('admin/edit_contact',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_contact(){
		
		$data=array();
		$contact_id = $this->input->post('contact_id',true);
		$data['contact_person']=$this->input->post('contact_person',true);
		$data['head_office']=$this->input->post('head_office',true);

		$result = $this->Common_model->update_contact_info($data,$contact_id);
		if($result){
			$msg = 'Contact Information has been Updated successfully !!!';
			$message = $this->msg($msg);
			redirect('Common/manageContact');
		}else{
			$msg ='Failed to Update !!!';
			$message = $this->msg($msg);
			redirect('Common/manageContact');
		}

	}

	// public function delete_contact($id){

 //        $result = $this->Common_model->deleteContact($id);
	// 	if($result){
	// 		$msg = 'Contact Information has been Deleted successfully !!!';
	// 		$message = $this->msg($msg);
	// 		redirect('Common/manageContact');
	// 	}else{
	// 		$msg ='Failed to Delete !!!';
	// 		$message = $this->msg($msg);
	// 		redirect('Common/manageContact');
	// 	}
	// }


	public function manageFcontact(){
		$data=array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['getFcontact'] = $this->Common_model->get_Fcontact();
        $data['admin_maincontent'] = $this->load->view('admin/manage_footer_contact',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function edit_Fcontact($id){

		$data=array();
		$data['fcontact_info']=$this->Common_model->select_Fcontact_info_by_id($id);
		$data['admin_maincontent']=$this->load->view('admin/edit_footer_contact',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_footerContact(){
		
		$data=array();
		$fcontact_id = $this->input->post('fcontact_id',true);
		$data['location']=$this->input->post('location',true);
		$data['email']=$this->input->post('email',true);
		$data['phone']=$this->input->post('phone',true);

		$result = $this->Common_model->update_fcontact_info($data,$fcontact_id);
		if($result){
			$msg = 'Footer Contact Information has been Updated successfully !!!';
			$message = $this->msg($msg);
			redirect('Common/manageFcontact');
		}else{
			$msg ='Failed to Update !!!';
			$message = $this->msg($msg);
			redirect('Common/manageFcontact');
		}

	}



}//common 