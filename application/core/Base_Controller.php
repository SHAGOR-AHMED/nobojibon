<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Base_Controller extends CI_Controller
{

    public abstract function index();

    public function __construct(){
        parent::__construct();
        $this->admin_id = $this->session->userdata('admin_id');
        
    }

    public function msg($msg){
        
        $this->session->set_flashdata('message', $msg);
    }

    public function debug($data){
        echo "<pre>";
        print_r($data);
        exit();
    }

    public function uploadPhoto(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        //$config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
        //print_r($_FILES);exit();
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['photo']['name'])) {
            return $config['upload_path'];
        }

        if ( ! $this->upload->do_upload('photo')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            return $config['upload_path'] . $fdata['file_name'];

        }

    }//uploadPhoto

    public function updatePhoto(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;

        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('photo')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            $img = $config['upload_path'] . $fdata['file_name'];
            $this->db->set('photo', $img);

        }

    }//updatePhoto


//================================= PDF =================================

    public function uploadPDF(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        //$config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
       // print_r($config);exit();
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['pdf_file']['name'])) {
            return $config['upload_path'];
        }

        if ( ! $this->upload->do_upload('pdf_file')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            return $config['upload_path'] . $fdata['file_name'];

        }

    }//uploadPDF

    public function updatePDF(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        //$config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;

        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('pdf_file')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            $pdf = $config['upload_path'] . $fdata['file_name'];
            $this->db->set('pdf_file', $pdf);

        }

    }//updatePDF


}//Base_Controller