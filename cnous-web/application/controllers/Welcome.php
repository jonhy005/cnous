<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	// --------------------------------------------------COMMON METHODS
	// -------------------------------------------------- Controller Methods
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data["removeBackground"]=true;
		$this->followLink("welcome_message",$data);
	}
}
