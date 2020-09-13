<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mundane extends Base_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Photo_model');
		$this->load->model('Common_model');
		$this->load->model('Reviewtype_model');
		$this->load->model('Review_model');
	}

	public function index(){
		$data = array();
		$data['title'] = '.:: Mundane Chem ::.';
		$data['allBanner'] = $this->Photo_model->getBanner();
		$data['pancipals'] = $this->Photo_model->getPencipals();
		$data['team'] = $this->Photo_model->getTeam();
		$data['allcategory'] = $this->Reviewtype_model->select_allCategory();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/body', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function AboutUs(){
		$data = array();
		$data['title'] = '.:: Mundabe Chem | About Us';
		$data['aboutUs'] = $this->Common_model->select_about();
		$data['allcategory'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/about', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function ourPrincipals(){
		$data = array();
		$data['title'] = '.:: Mundabe Chem | Our Principals';
		$data['pancipals'] = $this->Photo_model->getPencipals();
		$data['allcategory'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/principals', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function supportTeam(){
		$data = array();
		$data['title'] = '.:: Mundabe Chem | Support Team';
		$data['team'] = $this->Photo_model->getTeam();
		$data['allcategory'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/support', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function ourCertificates(){
		$data = array();
		$data['title'] = '.:: Mundane Chem | Certificates';
		$data['certificate'] = $this->Photo_model->getCertificate();
		$data['allcategory'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/certificates', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function contactUs(){
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['title'] = '.:: Mundane | Contact Us';
		$data['contactus'] = $this->Common_model->find_contact();
		$data['allcategory'] = $this->Reviewtype_model->select_all_type();
		$data['fcontact'] = $this->Common_model->find_fcontact();
		$data['content'] = $this->load->view('frontend/page/contact', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function ProductDetailsByTypeID($id=''){

		if(!empty($id)){

			$data = array();
			$data['title'] = '.:: Mundane | Product Details';
			$data['selected_product'] = $this->Review_model->select_review_by_id($id);
			//$this->debug($data);
			$data['allcategory'] = $this->Reviewtype_model->select_all_type();
			$data['fcontact'] = $this->Common_model->find_fcontact();
			$data['content'] = $this->load->view('frontend/page/program_details', $data, true);
			$this->load->view('frontend/index',$data);

		}else{

			$this->load->view('frontend/page/404_error');
		}
		
	}//ProgramDetailsByType
	
//===================== Mailing function  ========================//

	public function sendContactMail(){

		$data = array();
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$subject = $this->input->post('subject');
		$email = $this->input->post('email');
		$comments = $this->input->post('comments');

		$this->mailer_model->sendMailToAdmin($name,$phone,$subject,$email,$comments,true);
      
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