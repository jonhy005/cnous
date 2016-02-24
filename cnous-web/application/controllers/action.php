<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Action extends CI_Controller {
	var $title = "home_title";
	var $menu = array ()

	;
	// --------------------------------------------------COMMON METHODS
	public function getMenu() {
		return $this->menu;
	}
	public function getTitle() {
		return $this->title;
	}
	public function followLink($body,$data=array()) {
		$this->render ( $data, $body );
	}
	
	public function loadText($pageName,$textName) {
		$this->load->model('text_model', 'text');
		$textModel = $this->text->getByKey($pageName,$textName);
		$data['textData']=$textModel;
		$this->followLink($pageName,$data);
	}
	
	// -------------------------------------------------- Controller Methods
	public function info() {
		$this->loadText( "info_message","info_message_text_1");
	}
	public function realisation() {
		$this->loadText( "realisation_message","realisation_message_text_1");
	}
	public function situation() {
		$this->loadText( "situation_message","situation_message_text_1");
	}
	public function cadeau() {
		$this->loadText( "cadeau_message","cadeau_message_text_1");
	}
	public function garanties() {
		$this->loadText( "garanties_message","garanties_message_text_1");
	}
	public function travail() {
		$this->loadText( "travail_message","travail_message_text_1");
	}
	public function home() {
		$this->loadText( "welcome_message","welcome_message_text_1");
	}
}
