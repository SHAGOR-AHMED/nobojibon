<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviewtype_model extends Base_Model {

	public function select_all_type(){
		
		$result = $this->db->select('*')->from('tbl_type')->get()->result();
		return $result;
	}

	public function select_type_info_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_type');
		$this->db->where('type_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_reviewType_info($data,$type_id){

		$query = $this->db->where('type_id', $type_id)->update('tbl_type', $data);
		return $query;
	}

	public function deleteType($id){

		$result = $this->db->where('type_id',$id)->delete('tbl_type');
		return $result;
	}


}//Reviewtype_model