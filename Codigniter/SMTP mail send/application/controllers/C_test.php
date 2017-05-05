<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_test extends CI_Controller {
 
    function __construct()
    {
		ob_start();
        parent::__construct();
        $this->load->library("Pdf");
		
			$this->load->library('CEmail');
			$this->load->library('email');
			$this->load->model('userMgmt/userModel');
    }
 
public function sendMail()
{
$config=$this->cemail->configEmail();   
$this->email->initialize($config);

 
            // //------------ ############### This mail for offerre #########################
		    
	       // // $message=$this->load->view('UserDashboard/emailtemplate',$abc,true); 
      // $from_email = "racetrack@theaxontech.com"; 
          // $to_email = 'bedgeamol132@gmail.com';
          // $this->email->from($from_email, 'Racetrack'); 
          // $this->email->to($to_email);
          // $this->email->subject('Racetrack Booking'); 
          // $this->email->message("test");   
          // // $this->email->attach('temppdf/'.$randomString.'.pdf');		  
          // if($this->email->send()){
                        // echo "email sent";
					// //	unlink('temppdf/'.$randomString.'.pdf');
                 // }else{
 // show_error($this->email->print_debugger());
                    // echo"Error";
                 // }



}
 
	
}
 
/* End of file c_test.php */
/* Location: ./application/controllers/c_test.php */