<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Circulation_controller extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->helper('url');
 
}
	public function circulation(){
		$this->load->view('circulation');
	}
}
