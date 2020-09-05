<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends Base_Model {

	public function select_all_news(){
		
		$result = $this->db->select('*')->from('tbl_news')->order_by('news_id', 'DESC')->get()->result();
		return $result;
	}

	public function select_news_info_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_news');
		$this->db->where('news_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_news_info($news_id){

		$query = $this->db->where('news_id', $news_id)->update('tbl_news');
		return $query;
	}

	public function deleteNews($id){

		$data = array('news_id'=>$id);
		$preInfo = $this->db->get_where('tbl_news',$data)->row();
		unlink($preInfo->photo);
		$result = $this->db->where('news_id',$id)->delete('tbl_news');
		return $result;
	}


}//News_model