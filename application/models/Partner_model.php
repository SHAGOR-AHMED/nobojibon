<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner_model extends Base_Model {

	public function get_partners(){

		return $this->db->select('*')->from('tbl_partner')->order_by('partner_id', 'DESC')->get()->result();
	}

	public function selectLogo_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_partner');
		$this->db->where('partner_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function Update_Partner($partner_id){

		$query = $this->db->where('partner_id', $partner_id)->update('tbl_partner');
		return $query;
	}

	public function deletePartner_by_id($id){

		$data = array('partner_id'=>$id);
		$preInfo = $this->db->get_where('tbl_partner',$data)->row();
		unlink($preInfo->photo);
		$result = $this->db->where('partner_id',$id)->delete('tbl_partner');
		return $result;
	}

//=====================for frontend ======================//

	public function getBanner(){

		return $this->db->select('*')->from('tbl_partner')->where('type',1)->order_by('partner_id', 'DESC')->get()->result();
	}



}