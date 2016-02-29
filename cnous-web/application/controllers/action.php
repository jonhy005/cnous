<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Action extends CI_Controller {
	// --------------------------------------------------PRIVATE ATTRIBUTES
	
	var $title = "home_title";
	var $menu = array ();
	
	// --------------------------------------------------PRIVATE METHODS
	
	private function alert($value){
		echo "<script>alert('".$value."');</script>";
	}
	private function getProperty($key){
		$query =$this->db->select()->from("cn_config")->where(array (
				'name' => $key
		))->get();
		if($query-> num_rows() == 1){
			$currentRow =$query->result();
			return $currentRow[0]->value;
		}else{
			return false;
		}
	}
	
	
	private function loadText($pageName,$textName) {
		$this->load->model('text_model', 'text');
		$textModel = $this->text->getByKey($pageName,$textName);
		$data['textData']=$textModel;
		$this->followLink($pageName,$data);
	}
	
	
	// -------------------------------------------------- PUBLIC METHODS
	public function getMenu() {
		return $this->menu;
	}
	public function getTitle() {
		return $this->title;
	}
	public function followLink($body,$data=array()) {
		$this->render ( $data, $body );
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
	
	public function toogleEditMode(){
		$id=$this->input->post("id");
		$this->load->model('text_model', 'text');
		$obj = $this->text->getById($id);
		$this->loadText( $obj->PAGE_NAME,$obj->TEXT_AREA_NAME);
	}
	public function submitText(){
		$content=$this->input->post("content");
		$id=$this->input->post("id");
		$this->load->model('text_model', 'text');
		$obj = $this->text->getById($id);
		$obj->TEXT=$content;
		$this->text->saveOrUpdate($obj);
		
		$this->loadText( $obj->PAGE_NAME,$obj->TEXT_AREA_NAME);
	}
}
