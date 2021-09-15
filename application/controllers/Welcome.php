<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function sample_function($sample_variable)
	{
		# Edited 1:21 AM
		# Hello Team
	}

}
