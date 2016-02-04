<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	var $title=array(
			"race"=>"menu_trail_key_title",
			"title"=>"menu_trail_key_sub_title",
			"date"=>"menu_trail_key_date"
	);
	var $menu=array(
			"menu_key_home"=>"/nobressart/index.php/courses/trail/index",
			"menu_key_info"=>"/nobressart/index.php/courses/trail/info",
			"menu_key_access"	=>"/nobressart/index.php/courses/trail/acces",
			"menu_trail_key_pre_inscription"=>array(
					"menu_trail_key_inscription"=>"/nobressart/index.php/courses/trail/inscriptions",
					"menu_trail_key_inscription_list"=>"/nobressart/index.php/courses/trail/listeInscriptions"
			),
			"menu_key_pictures"	=>"/nobressart/index.php/courses/trail/photos",
			"menu_key_results"	=>"/nobressart/index.php/courses/trail/resultats",
			"menu_key_village"=>"/nobressart/index.php/courses/trail/village",
			"menu_key_links"=>"/nobressart/index.php/courses/trail/links",
			"menu_key_contact"=>"/nobressart/index.php/courses/trail/contact"
	
	);
	// --------------------------------------------------COMMON METHODS
	public function getMenu(){
		return $this->menu;
	
	}
	public function getTitle(){
		return $this->title;
	}
	
	public function followLink($body){
		$this->render(array(),$body);
	}
	
	// -------------------------------------------------- Controller Methods
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->followLink("welcome_message");
	}
}
