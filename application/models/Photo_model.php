<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_model extends Base_Model {

	public function get_photo(){

		return $this->db->select('*')->from('tbl_photos')->order_by('photo_id', 'DESC')->get()->result();
	}

	public function select_photo_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_photos');
		$this->db->where('photo_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function Update_Photo($photo_id){

		$query = $this->db->where('photo_id', $photo_id)->update('tbl_photos');
		return $query;
	}

	public function deletePhoto_by_id($id){

		$data = array('photo_id'=>$id);
		$preInfo = $this->db->get_where('tbl_photos',$data)->row();
		unlink($preInfo->photo);
		$result = $this->db->where('photo_id',$id)->delete('tbl_photos');
		return $result;
	}

	//=====================for frontend ======================//

	public function getBanner(){

		return $this->db->select('*')->from('tbl_photos')->where('type',1)->order_by('photo_id', 'DESC')->get()->result();
	}

	public function getAbout(){

		return $this->db->select('*')->from('tbl_photos')->where('type',2)->order_by('photo_id', 'DESC')->limit(1)->get()->result();
	}

	public function getGallery(){

		return $this->db->select('*')->from('tbl_photos')->where('type',3)->order_by('photo_id', 'DESC')->get()->result();
	}

	public function getAcheivement(){

		return $this->db->select('*')->from('tbl_photos')->where('type',4)->order_by('photo_id', 'DESC')->limit(1)->get()->row();
	}

	public function getProgram(){

		return $this->db->select('*')->from('tbl_photos')->where('type',5)->order_by('photo_id', 'DESC')->get()->result();
	}

	public function getDonar(){

		return $this->db->select('*')->from('tbl_photos')->where('type',6)->order_by('photo_id', 'DESC')->get()->result();
	}

	public function getPublication(){

		return $this->db->select('*')->from('tbl_photos')->where('type',7)->order_by('photo_id', 'DESC')->limit(1)->get()->result();
	}


}