<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review_model extends Base_Model {

	public function get_review(){

		$this->db->select('tbl_review.*');
		$this->db->select('tbl_type.type_name');
		$this->db->from('tbl_review');
		$this->db->join('tbl_type','tbl_type.type_id = tbl_review.category_id');
		$get = $this->db->get();
		$result = $get->result();
		return $result;
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
		$this->db->where('category_id',$id);
		$this->db->join('tbl_type','tbl_type.type_id = tbl_review.category_id');
		$get = $this->db->get();
		$result = $get->row();
		return $result;
	}

	public function Update_product($review_id){

		$query = $this->db->where('review_id', $review_id)->update('tbl_review');
		return $query;
	}

	public function deleteProductByID($id){

		$data = array('review_id'=>$id);
		$oldFile = $this->db->get_where('tbl_review',$data)->row();
		unlink($oldFile->photo);
		unlink($oldFile->pdf_file);
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