<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class AdminAction extends Action {
	// --------------------------------------------------PRIVATE ATTRIBUTES
	function __construct() {
		parent::__construct ();
		
		if (! $this->ion_auth->logged_in ()) {
			redirect ( 'auth/login' );
		}
	}
	
	// --------------------------------------------------PRIVATE METHODS
	// -------------------------------------------------- PUBLIC METHODS
	// -------------------------------------------------- Controller Methods
	public function toogleEditMode() {
		$id = $this->input->post ( "id" );
		$this->load->model ( 'text_model', 'text' );
		$obj = $this->text->getById ( $id );
		$this->loadText ( $obj->PAGE_NAME, $obj->TEXT_AREA_NAME );
	}
	public function submitText() {
		$content = $this->input->post ( "content" );
		$id = $this->input->post ( "id" );
		$this->load->model ( 'text_model', 'text' );
		$obj = $this->text->getById ( $id );
		$obj->TEXT = $content;
		$this->text->saveOrUpdate ( $obj );
		
		$this->loadText ( $obj->PAGE_NAME, $obj->TEXT_AREA_NAME );
	}
}
