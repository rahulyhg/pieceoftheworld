<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class startupkit extends CI_Controller {

	public function index(){
		$this->load->view('startupkit/main');
	}
}