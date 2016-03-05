<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tranfer_controller extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->helper('url');
 
}
	public function tranfer(){
		$this->load->view('tranfer');
	}
}
