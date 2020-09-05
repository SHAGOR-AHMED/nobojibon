<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends Base_Model {

	public function select_about(){
		
		$result = $this->db->select('*')->from('tbl_about')->get()->result();
		return $result;
	}

	public function select_about_info_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_about');
		$this->db->where('about_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_about_info($data,$about_id){

		$query = $this->db->where('about_id', $about_id)->update('tbl_about', $data);
		return $query;
	}

	public function deleteAbout($id){

		$result = $this->db->where('about_id',$id)->delete('tbl_about');
		return $result;
	}

//============================ useful link =============================//

	public function get_links(){

		$result = $this->db->select('*')->from('tbl_link')->order_by('link_id', 'DESC')->get()->result();
		return $result;
	}

	public function select_link_info_by_id($id){

		return $result = $this->db->select('*')->from('tbl_link')->where('link_id',$id)->get()->row();
		
	}

	public function update_link_info($data,$link_id){

		$query = $this->db->where('link_id', $link_id)->update('tbl_link', $data);
		return $query;
	}

	public function deleteLink($id){

		$result = $this->db->where('link_id',$id)->delete('tbl_link');
		return $result;
	}


//============================ Contact =============================//

	public function get_contact(){

		$result = $this->db->select('*')->from('tbl_contact')->get()->result();
		return $result;
	}

	public function find_contact(){

		$result = $this->db->select('*')->from('tbl_contact')->get()->row();
		return $result;
	}

	public function select_contact_info_by_id($id){

		return $result = $this->db->select('*')->from('tbl_contact')->where('contact_id',$id)->get()->row();
	}

	public function update_contact_info($data,$contact_id){

		$query = $this->db->where('contact_id', $contact_id)->update('tbl_contact', $data);
		return $query;
	}

	// public function deleteLink($id){

	// 	$result = $this->db->where('contact_id',$id)->delete('tbl_contact');
	// 	return $result;
	// }

	public function get_Fcontact(){

		$result = $this->db->select('*')->from('tbl_footer_contact')->get()->result();
		return $result;
	}

	public function find_fcontact(){

		$result = $this->db->select('*')->from('tbl_footer_contact')->get()->row();
		return $result;
	}

	public function select_Fcontact_info_by_id($id){

		return $result = $this->db->select('*')->from('tbl_footer_contact')->where('fcontact_id',$id)->get()->row();
	}

	public function update_fcontact_info($data,$fcontact_id){

		$query = $this->db->where('fcontact_id', $fcontact_id)->update('tbl_footer_contact', $data);
		return $query;
	}


}//common_model