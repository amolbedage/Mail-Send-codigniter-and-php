<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CEmail {

        public function configEmail()
        {
		$config=array();
		$config['useragent'] = 'CodeIgniter';
		$config['protocol'] = 'smtp';
		//$config['mailpath'] = '/usr/sbin/sendmail';
		$config['smtp_host'] = 'mail.theaxontech.com';
		$config['smtp_user'] = 'rushikeshm@theaxontech.com';
		$config['smtp_pass'] = 'Rushi0811@';
		$config['smtp_port'] = 25; 
		$config['smtp_timeout'] = 5;
		$config['wordwrap'] = TRUE;
		$config['wrapchars'] = 76;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['validate'] = FALSE;
		$config['priority'] = 3;
		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";
		$config['bcc_batch_mode'] = FALSE;
		$config['bcc_batch_size'] = 200;     
		return $config;
       // print_r($config);
        }
}