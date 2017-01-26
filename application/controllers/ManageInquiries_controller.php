<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ManageInquiries_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('ManageInquiries_model');
		
	}

	public function index()
	{
		$this->data['posts'] = $this->ManageInquiries_model->getPostsHigh();
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiries_model->getPostsMedium();
		$this->data['posts2'] = $this->ManageInquiries_model->getPostsLow();
		$this->data['posts3'] = $this->ManageInquiries_model->getFollowing();
		$this->data['posts4'] = $this->ManageInquiries_model->getCompleted();
		$this->load->view('manageInquiries_view', $this->data);
	}
}

?>