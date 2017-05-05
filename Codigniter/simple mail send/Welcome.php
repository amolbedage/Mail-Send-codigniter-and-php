<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		function  __construct(){
		parent::__construct();
		$this->load->library('paypal_lib');
		$this->load->model('userMgmt/userModel');
		$this->load->model('userMgmt/Booking');
		$this->load->library('email');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: PUT, GET, POST");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		}

	 
	public function index()
	{
		//$this->userModel->create_admin();	
		$this->load->view('home_page');
	}
	
	public function BuySuccess()
	{

	     $config['charset']      = 'utf-8';
         $config['newline']      = "\r\n";
         $config['mailtype']     = 'html'; // or html
         $config['validation']   = true; // bool whether to validate email or not      
         $this->email->initialize($config);

 $message=$this->load->view('UserDashboard/emailtemplate',$abc,true);
     
          $from_email = "racetrack@theaxontech.com"; 
          $to_email = $user_email;
          $this->email->from($from_email, 'Racetrack'); 
          $this->email->to($to_email);
          $this->email->subject('Racetrack Registration'); 
          $this->email->message('pdf');   
          $this->email->attach('temppdf/'.$randomString.'.pdf');		  
          if($this->email->send()){
                        echo "email sent";
						unlink('temppdf/'.$randomString.'.pdf');
                 }else{
                    echo"Error";
                 }
		
		
		 }
		 
  	 
	
		
	
	
	
	
}
