<?php
Class front_controller extends CI_Controller{
function __construct(){

	parent::__construct();
}


function main(){
	$this->load->view('mainOrder');
}

function productsave(){
	$this->load->view('productSave');
}
function profile(){
	$this->load->view('profile');
}
function statuspage(){
	$this->load->view('statusPage');
}

}