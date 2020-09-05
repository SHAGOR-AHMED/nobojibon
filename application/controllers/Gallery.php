<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Gallery_model');
		$this->load->helper('admin_helper');
	}

	public function index(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_album']=$this->Gallery_model->getGalleryAlbum();
        $data['admin_maincontent']=$this->load->view('admin/manage_gallery_album',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_gallery_album(){

		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_gallery_album', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_galleryAlbum(){

		$this->form_validation->set_rules('album_name', 'Album Name', 'required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_gallery_album', '', true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['album_name'] = $this->input->post('album_name');

			$data['photo'] = $this->uploadPhoto();

			//$this->debug($data);

			$result = $this->Gallery_model->commonInsert('tbl_gallery_album',$data);
			if($result){
				$msg = 'Gallery Album has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Gallery/index');
			}else{
				$msg ='Failed to Added !!!';
				$message = $this->msg($msg);
				redirect('Gallery/index');
			}
			
		}//if

	}//save_album

	public function edit_galleryAlbum($id){

		$data = array();
		$data['album_info'] = $this->Gallery_model->select_album_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_gallery_album', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_GalleryAlbum(){

		$galbum_id = $this->input->post('galbum_id',true);
		$album_name = $this->input->post('album_name',true);

		$this->db->set('album_name', $album_name);

		if(isset($galbum_id) && $galbum_id != ''){

			$data = array('galbum_id' => $galbum_id);
			$prev_info = $this->db->get_where("tbl_gallery_album",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}

		$result = $this->Gallery_model->Update_GallertAlbum($galbum_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Gallery/index');

		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Gallery/index');
		}

	}//update_photo

	public function delete_galleryAlbum($id){

		$result = $this->Gallery_model->deleteGalleryAlbum_by_id($id);
		if($result){
			$msg = 'Gallery Album has been Deleted Successfully !!!';
			$message = $this->msg($msg);
			redirect('Gallery/index');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Gallery/index');
		}
	}


	public function programDetailsByID($id=''){
		
		if(!empty($id)){

			$data = array();
			$data['title'] = '.:: Nobo Jibon | Program Details';
			$data['programDetails']=$this->Gallery_model->select_photo_by_id($id);
			$data['content'] = $this->load->view('frontend/page/program_details', $data, true);
			$this->load->view('frontend/index',$data);

		}else{

			$this->load->view('frontend/page/404_error');
		}
		
	}

//=============================== Gallery Images Phase Start=========================================//

	public function manageGalleryImages(){
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
        $data['all_albumImages']=$this->Gallery_model->getAlbumImages();
        $data['admin_maincontent']=$this->load->view('admin/manage_gallery_image',$data,true);
	 	$this->load->view('admin/admin_master',$data);
	}

	public function add_gallery_image(){

		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_gallery_image', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_galleryImage(){

		$data['album_id'] = $this->input->post('album_id');
		$data['photo'] = $this->uploadPhoto();

		//$this->debug($data);

		$result = $this->Gallery_model->commonInsert('tbl_gallery_images',$data);
		if($result){
			$msg = 'Gallery Image has been save successfully !!!';
			$message = $this->msg($msg);
			redirect('Gallery/manageGalleryImages');
		}else{
			$msg ='Failed to Added !!!';
			$message = $this->msg($msg);
			redirect('Gallery/manageGalleryImages');
		}
			
	}//save_galleryImage

	public function delete_galleryImage($id){

		$result = $this->Gallery_model->deleteGalleryImage_by_id($id);
		if($result){
			$msg = 'Gallery Image has been Deleted Successfully !!!';
			$message = $this->msg($msg);
			redirect('Gallery/manageGalleryImages');
		}else{
			$msg ='Failed to Delete !!!';
			$message = $this->msg($msg);
			redirect('Gallery/manageGalleryImages');
		}
	}

	public function edit_galleryImage($id){

		$data = array();
		$data['galleryImage_info'] = $this->Gallery_model->select_galleryImage_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_gallery_image', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_GalleryImage(){

		$gimage_id = $this->input->post('gimage_id',true);
		$album_id = $this->input->post('album_id',true);

		$this->db->set('album_id', $album_id);

		if(isset($gimage_id) && $gimage_id != ''){

			$data = array('gimage_id' => $gimage_id);
			$prev_info = $this->db->get_where("tbl_gallery_images",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$photo = $this->updatePhoto();
		}

		$result = $this->Gallery_model->Update_GalleryImage($gimage_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Gallery/manageGalleryImages');
		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Gallery/manageGalleryImages');
		}

	}//update_photo


	
}//Gallery