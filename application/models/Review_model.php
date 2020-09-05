<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review_model extends Base_Model {

	public function get_review(){

		return $this->db->select('*')->from('tbl_review')->order_by('review_id', 'DESC')->get()->result();
	}

	public function select_Program_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_review');
		$this->db->where('review_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}


	public function select_review_by_id($id){

		$this->db->select('tbl_review.*');
		$this->db->select('tbl_type.type_name');
		$this->db->from('tbl_review');
		$this->db->where('review_type',$id);
		$this->db->join('tbl_type','tbl_type.type_id = tbl_review.review_type');
		$get = $this->db->get();
		$result = $get->row();
		return $result;
	}

	public function Update_Review($review_id){

		$query = $this->db->where('review_id', $review_id)->update('tbl_review');
		return $query;
	}

	public function deleteReview_by_id($id){

		$data = array('review_id'=>$id);
		$photo = $this->db->get_where('tbl_review',$data)->row();
		unlink($photo->photo);
		$result = $this->db->where('review_id',$id)->delete('tbl_review');
		return $result;
	}

	public function select_review_byTypeID($typeID){

		$this->db->select('*');
		$this->db->from('tbl_review');
		$this->db->where('review_type',$typeID);
		$this->db->where('review_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}


}//