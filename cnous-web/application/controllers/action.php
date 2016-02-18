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
	public function followLink($body) {
		$this->render ( array (), $body );
	}
	
	// -------------------------------------------------- Controller Methods
	public function info() {
		$this->followLink ( "info_message" );
	}
	public function realisation() {
		$this->followLink ( "realisation_message" );
	}
	public function situation() {
		$this->followLink ( "situation_message" );
	}
	public function cadeau() {
		$this->followLink ( "cadeau_message" );
	}
	public function garanties() {
		$this->followLink ( "garanties_message" );
	}
	public function travail() {
		$this->followLink ( "travail_message" );
	}
	public function home() {
		$this->followLink ( "welcome_message" );
	}
}
