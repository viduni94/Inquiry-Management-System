<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class inquirybutton_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		//$this->load->model('manageInquiries_model');
		
	}

	public function index()
	{
		
	}

	public function following()
	{
		$id = $this->input->post('id');
		$this->load->model('inquirybutton_model');
		$this->inquirybutton_model->following($id);
		//echo "string";

		//$this->data['posts3'] = $this->manageInquiries_model->getFollowing();

		/*foreach($posts3 as $post){ 

             echo "<tbody>"
                echo "<tr>"
                echo "<td style=\"text-align: center\"><?php echo $post->Fname; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->Lname; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->OL; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->Grade1; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->Contactno; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->Email; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->Intake; ?></td>"
                echo "<td style=\"text-align: center\"><?php echo $post->Pdate; ?></td>"
                echo "<td style=\"text-align: center\">"
                echo "<button class=\"btn btn-success btn-rounded btn-sm\" onClick=\"#\">Completed</button>"
                echo "</td>"
                echo "</tr>"
                            
            echo "</tbody>"

        }*/
	}

	public function completed()
	{
		$id = $this->input->post('id');
		$this->load->model('inquirybutton_model');
		$this->inquirybutton_model->completed($id);
	}

	public function registered()
	{
		$id = $this->input->post('id');
		$this->load->model('inquirybutton_model');
		$this->inquirybutton_model->registered($id);
	}

}


?>