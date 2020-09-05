<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Partner_model');
		$this->load->helper('admin_helper');
	}

	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_partners'] = $this->Partner_model->get_partners();
        $data['admin_maincontent']=$this->load->view('admin/manage_partner',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_partner(){

		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_partner', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_partner(){

		$data['photo'] = $this->uploadPhoto();

		//$this->debug($data);

		$result = $this->Partner_model->commonInsert('tbl_partner',$data);
		if($result){
			$msg = 'Partner logo has been saved successfully !!!';
			$message = $this->msg($msg);
			redirect('Partner/index');
		}else{
			$msg ='Failed to Added !!!';
			$message = $this->msg($msg);
			redirect('Partner/index');
		}


	}//save_partner

	public function edit_partner($id){

		$data = array();
		$data['partner_logo'] = $this->Partner_model->selectLogo_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_partner', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_partner(){

		$partner_id = $this->input->post('partner_id',true);

		if(isset($partner_id) && $partner_id != ''){

			$data = array('partner_id' => $partner_id);
			$prev_info = $this->db->get_where("tbl_partner",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}
		

		$result = $this->Partner_model->Update_Partner($partner_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Partner/index');

		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Partner/index');
		}

	}//update_partner

	public function delete_partner($id){

		$result = $this->Partner_model->deletePartner_by_id($id);
		if($result){
			$msg = 'Partner has been Deleted Successfully !!!';
			$message = $this->msg($msg);
			redirect('Partner/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Partner/index');
		}
	}

//=============================== End=========================================//
	
}