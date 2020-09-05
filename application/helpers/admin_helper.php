<?php

function getAlltype(){
	
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('tbl_type')->get()->result();

    foreach ($data as $d) {
        echo '<option value="' . $d->type_id . '" />  ' . $d->type_name . '<br />';
    }
}

function getAllalbum(){
    
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('tbl_gallery_album')->get()->result();

    foreach ($data as $d) {
        echo '<option value="' . $d->galbum_id . '" />  ' . $d->album_name . '<br />';
    }
}

function getAllSubcatByCatId($cat_id){
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('subcategory')->where('subcat_catid', $cat_id)->get()->result();
    $out = '';
    foreach ($data as $dd) {
        $out .= '<option value="' . $dd->subcat_id . '" >  ' . $dd->subcategory . '</option><br />';
    }
    echo empty($out) ? 'Not Set' : $out;
	
}

function getAllCountryList(){
    
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('countries')->get()->result();

    foreach ($data as $d) {
        echo '<option value="' . $d->id . '" />  ' . $d->con_name . '<br />';
    }
}

function getAllStatesByCountryId($country_id)
{
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('states')->where('country_id', $country_id)->get()->result();
    $out = '';
    foreach ($data as $dd) {
        $out .= '<option value="' . $dd->id . '" >  ' . $dd->st_name . '</option><br />';
    }
    echo empty($out) ? 'Not Set' : $out;
}

function photoTypeName($val){
    
    switch ($val) {
        case 1:
            echo "Banner";
            break;
        case 2:
            echo "About Us";
            break;
        case 3:
            echo "Gallery";
            break;
        case 4:
            echo "Achievement";
            break;
        case 5:
            echo "Program";
            break;
        case 6:
            echo "Donar";
            break;
        case 7:
            echo "Publication";
            break;
        default:
            echo "";
    }
}

function publicationStatus($val){
    
    switch ($val) {
        case 1:
            echo "Published";
            break;
        default:
            echo "Unpublished";
    }
}

function selectedStatus($val){
    
    switch ($val) {
        case 1:
            echo "Active";
            break;
        default:
            echo "Inactive";
    }
}
