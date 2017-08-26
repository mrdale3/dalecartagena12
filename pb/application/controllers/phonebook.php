<?php

class Phonebook extends CI_controller {


	public function _contruct()

	{
		parent::_contruct();
		$this->load->model('mdl_contacts')

	}

	public function index () {
		$this->load->view("v_dashboard");
	}
	public function aboutme () {
		$this->load->view("aboutme");

}
public function contact () {
		$this->load->view("contact");

		}
		public function hobbies () {
		$this->load->view("hobbies");
	}
	public function favoritefoods () {
		$this->load->view("favoritefoods");
	}

	public function addcontact () {
		$this->load->view("v_addcontact");
	}


	public function savecontact () {

		$data = array(
			 "fullname"=> $_POST['fullname'],

			 "contactno" => $_POST['contactno'],
);

		$this->mdl_contacts-> addnewcontact($data);
		redirect(base_url());                    
		
	}

}

	}