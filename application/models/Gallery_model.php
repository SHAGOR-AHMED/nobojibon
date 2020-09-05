<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends Base_Model {

	public function getGalleryAlbum(){

		return $this->db->select('*')->from('tbl_gallery_album')->order_by('galbum_id', 'DESC')->get()->result();
	}

	public function select_album_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_gallery_album');
		$this->db->where('galbum_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function Update_GallertAlbum($galbum_id){

		$query = $this->db->where('galbum_id', $galbum_id)->update('tbl_gallery_album');
		return $query;
	}

	public function deleteGalleryAlbum_by_id($id){

		$data = array('galbum_id'=>$id);
		$preInfo = $this->db->get_where('tbl_gallery_album',$data)->row();
		unlink($preInfo->photo);
		$result = $this->db->where('galbum_id',$id)->delete('tbl_gallery_album');
		return $result;
	}

//================= gallery images ================================//

	public function getAlbumImages(){

		//return $this->db->select('*')->from('tbl_gallery_images')->order_by('gimage_id', 'DESC')->get()->result();

		$this->db->select('tbl_gallery_images.*');
		$this->db->select('tbl_gallery_album.album_name');
		$this->db->from('tbl_gallery_images');
		$this->db->join('tbl_gallery_album','tbl_gallery_album.galbum_id = tbl_gallery_images.album_id');
		$get = $this->db->get();
		$result = $get->result();
		return $result;

	}

	public function deleteGalleryImage_by_id($id){

		$data = array('gimage_id'=>$id);
		$preInfo = $this->db->get_where('tbl_gallery_images',$data)->row();
		unlink($preInfo->photo);
		$result = $this->db->where('gimage_id',$id)->delete('tbl_gallery_images');
		return $result;
	}

	public function select_galleryImage_by_id($id){

		return $result = $this->db->select('*')->from('tbl_gallery_images')->where('gimage_id',$id)->get()->row();
	}

	public function Update_GalleryImage($gimage_id){

		$query = $this->db->where('gimage_id', $gimage_id)->update('tbl_gallery_images');
		return $query;
	}



//=====================for frontend ======================//

	public function select_allgalleryImages_by_id($id){

		return $this->db->select('*')->from('tbl_gallery_images')->where('album_id',$id)->get()->result();
	}


}