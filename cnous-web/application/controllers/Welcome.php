<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	var $menu=array();
	var $title="home_title";
	// --------------------------------------------------COMMON METHODS
	public function getMenu(){
		return $this->menu;
	
	}
	public function getTitle(){
		return $this->title;
	}
	
	public function followLink($body,$data=array()){
		$this->render($data,$body);
	}
	
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
