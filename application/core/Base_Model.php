<?php

class Base_Model extends CI_Model{

    public function commonInsert($tbl, $data){

        return $this->db->insert($tbl, $data);
    }

     public function msg($msg){
        
        $this->session->set_flashdata('message', $msg);
    }

}//Base_Model

?>