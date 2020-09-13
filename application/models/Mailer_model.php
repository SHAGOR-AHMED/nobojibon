<?php
class Mailer_model extends Base_Model{

    private $from_address = "cloudnumber0707@gmail.com";
    private $admin_address = "info@mundanechem.com";

    
    public function sendMailToAdmin($name,$phone,$subject,$email,$comments){

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($email, $subject);
        $this->email->to($this->admin_address);
        $this->email->subject($subject);
        $body = 'Name-'.$name.'<br>'.'Phone-'.$phone.'<br>'.'Subject-'.$subject.'<br>'.'Comments-'.$comments;
        //print_r($body);exit;
        $this->email->message($body);
        $this->email->send();
        $this->email->clear();

        if(!$this->email->send()){
            $msg = 'Your query has been send Successfully !!!';
            $message = $this->msg($msg);
            redirect('Mundane/contactUs');
        }else{
            $msg = 'Failed !!!';
            $message = $this->msg($msg);
            redirect('Mundane/contactUs');
          }
    }//sendMailToAdmin

    public function sendDonateMailToAdmin($name,$address,$city,$state,$zip,$from_email,$subject,$phone,$comment){

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($email, $subject);
        $this->email->to($this->admin_address);
        $this->email->subject($subject);
        $body = 'Name-'.$name.'<br>'.'Subject-'.$subject.'<br>'.'Comments-'.$comment.'Address-'.$address.'<br>'.'City-'.$city.'<br>'.'State-'.$state.'Zip Code-'.$zip.'<br>'.'Phone Number-'.$phone;
        //print_r($body);exit;
        $this->email->message($body);
        $this->email->send();
        $this->email->clear();

        if(!$this->email->send()){
            $msg = 'Your query has been send Successfully !!!';
            $message = $this->msg($msg);
            redirect('Welcome/Donate');
        }else{
            $msg = 'Failed !!!';
            $message = $this->msg($msg);
            redirect('Welcome/Donate');
          }
    }//sendMailToAdmin


}//Mailer_model

?>