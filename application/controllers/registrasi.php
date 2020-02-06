<?php
/**
*
*/
class Registrasi extends CI_Controller
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model("user_beta");
	}

	public function index()
	{
		//load registration view form
		$this->load->view("registrasi");
	
	
		//Check submit button 
		if($this->input->post('daftar'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('nama');
		$e=$this->input->post('email');
		$p=$this->input->post('password');
//call saverecords method of Hello_Model and pass variables as parameter
		$this->user_beta->saverecords($n,$e,$p);		
		echo "Records Saved Successfully";
		}
		
	}
}
?>
