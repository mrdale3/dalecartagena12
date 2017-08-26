<?php


class mdl_contacts extends CI_Model {



function addnewcontact($data) {
	$this->db->insert('tblcontacts',$data);
}







}