<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class home_controller extends CI_Controller {

 function __construct()
 {
   parent:: __construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('MainOrder', $data);
   }
   else
   {
     //If no session, redirect to login page
   	$this->load->view('login');
     // redirect('login', 'refresh');

   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('login', 'refresh');
 }

}

?>