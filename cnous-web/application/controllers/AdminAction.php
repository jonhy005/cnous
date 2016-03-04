<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class AdminAction extends CI_Controller {
	// --------------------------------------------------PRIVATE ATTRIBUTES
	function __construct() {
		parent::__construct ();
	}
	
	// -------------------------------------------------- PRIVATE METHODS
	// -------------------------------------------------- PUBLIC METHODS
	// -------------------------------------------------- CONTROLLER METHODS
	public function index() {
		$data["openLogin"]=true;
		$data["removeBackground"]=true;
		$this->followLink("welcome_message",$data);
	}
	public function editMode() {
		$login=$this->input->post("login");
		$password=$this->input->post("password");
		$data=array();
		if($login==="cnous" && $password==="toscane"){
			$data['updateSessionEditMode']=true;
			$data["removeBackground"]=true;
		}else{
			$data['updateSessionEditMode']=false;
			$data["removeBackground"]=true;
		}
		
		$this->followLink("welcome_message",$data);
	}
	public function viewMode() {
		$data=array();
		$data['updateSessionEditMode']=false;
		$data["removeBackground"]=true;
		$this->followLink("welcome_message",$data);
	}
}
