<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Photo_model');
		$this->load->model('News_model');
		$this->load->model('Common_model');
		$this->load->model('Reviewtype_model');
		$this->load->model('Review_model');
		$this->load->model('Partner_model');
		$this->load->model('Gallery_model');

	}

	public function index(){
		$data = array();
		$data['slider'] = 1;
		$data['title'] = '.:: Nobo Jibon - New Life Charity ::.';
		$data['allBanner'] = $this->Photo_model->getBanner();
		$data['about'] = $this->Photo_model->getAbout();
		$data['galleryAlbum'] = $this->Gallery_model->getGalleryAlbum();
		$data['acheivement'] = $this->Photo_model->getAcheivement();
		$data['program'] = $this->Photo_model->getProgram();
		$data['donar'] = $this->Photo_model->getDonar();
		$data['NewsEvent'] = $this->News_model->select_all_news();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/body', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function AboutUs(){
		$data = array();
		$data['title'] = '.:: Nobo Jibon | About Us';
		$data['aboutUs'] = $this->Common_model->select_about();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/about', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function Gallery(){
		$data = array();
		$data['title'] = '.:: Nobo Jibon | Gallery';
		$data['galleryAlbum'] = $this->Gallery_model->getGalleryAlbum();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/gallery', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function AlbumImages($id=''){

		if(!empty($id)){

			$data = array();
			$data['title'] = '.:: Nobo Jibon | Album Images';
			$data['all_albumImages'] = $this->Gallery_model->select_allgalleryImages_by_id($id);
			$data['allProgram'] = $this->Reviewtype_model->select_all_type();
			$data['fcontact'] = $this->Common_model->find_fcontact();
			$data['content'] = $this->load->view('frontend/page/album_images', $data, true);
			$this->load->view('frontend/index',$data);

		}else{

			$this->load->view('frontend/page/404_error');
		}
		
	}//ProgramDetailsByType

	public function Publication(){
		$data = array();
		$data['title'] = '.:: Nobo Jibon | Publication';
		$data['publication'] = $this->Photo_model->getPublication();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/publication', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function ProgramDetailsByType($id=''){

		if(!empty($id)){

			$data = array();
			$data['title'] = '.:: Nobo Jibon | Program Details';
			$data['selected_review'] = $this->Review_model->select_review_by_id($id);
			$data['allProgram'] = $this->Reviewtype_model->select_all_type();			//for menu
			$data['fcontact'] = $this->Common_model->find_fcontact();
			$data['content'] = $this->load->view('frontend/page/programdetails', $data, true);
			$this->load->view('frontend/index',$data);

		}else{

			$this->load->view('frontend/page/404_error');
		}
		
	}//ProgramDetailsByType

	public function Partner(){
		$data = array();
		$data['title'] = '.:: Nobo Jibon | Our Partner';
		$data['allPartner'] = $this->Partner_model->get_partners();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/partner', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function Achievements(){
		$data = array();
		$data['title'] = '.:: Nobo Jibon | Our Achievements';
		$data['ourAcheivement'] = $this->Photo_model->getAcheivement();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/achievements', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function UsefulLink(){
		$data = array();
		$data['title'] = '.:: Nobo Jibon | Useful Link';
		$data['allUsefulLink'] = $this->Common_model->get_links();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/useful', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function contactUs(){
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['title'] = '.:: Nobo Jibon | Contact Us';
		$data['contactus'] = $this->Common_model->find_contact();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/contact', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function Donate(){
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['title'] = '.:: Nobo Jibon | Donate Us';
		$data['contactus'] = $this->Common_model->find_contact();
		$data['allProgram'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/donate', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function newsEventDetailsByID($id=''){
		
		// if(!empty($id)){

		// 	$data = array();
		// 	$data['title'] = '.:: Nobo Jibon | News & Event Details';
		// 	$data['news_info']=$this->News_model->select_news_info_by_id($id);
		// 	$data['content'] = $this->load->view('frontend/page/news', $data, true);
		// 	$this->load->view('frontend/index',$data);

		// }else{

		// 	$this->load->view('frontend/page/404_error');
		// }

		$data = array();
		$data['title'] = '.:: Nobo Jibon | News & Event Details';
		$data['news_info']=$this->News_model->select_news_info_by_id($id);
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/news', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function programDetailsByID($id=''){
		
		if(!empty($id)){

			$data = array();
			$data['title'] = '.:: Nobo Jibon | Program Details';
			$data['programDetails']=$this->Photo_model->select_photo_by_id($id);
			$data['content'] = $this->load->view('frontend/page/program_details', $data, true);
			$this->load->view('frontend/index',$data);

		}else{

			$this->load->view('frontend/page/404_error');
		}
		
	}

//===================== Mailing function  ========================//

	public function sendContactMail(){

		$data = array();
		$name = $this->input->post('name');
		$subject = $this->input->post('subject');
		$email = $this->input->post('email');
		$comments = $this->input->post('comments');

		$this->mailer_model->sendMailToAdmin($name,$subject,$email,$comments,true);
      
    }//sendContactMail

    public function sendDonateMail(){

		$data = array();
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$from_email = $this->input->post('from_email');
		$subject = $this->input->post('subject');
		$phone = $this->input->post('phone');
		$comment = $this->input->post('comment');

		$this->mailer_model->sendDonateMailToAdmin($name,$address,$city,$state,$zip,$from_email,$subject,$phone,$comment,true);
      
    }//sendDonateMail

	

}//Welcome

?>