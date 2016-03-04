<?php
class Text_model extends Cn_model {


	// ----------------------------------- TABLE ANME
	const tableName="cn_data";

	function getTableName(){
		return Text_model::tableName;
	}
	// ---------------------------------- CONSTANT
	// ---------------------------------- ATTRIBUTES
	var $id;
	var $page_name;
	var $raw_text;
	var $text_area_name;
	var $text;
	
	// ---------------------------------- CONSTRUCTOR
	function __construct(){
		parent::__construct();
	}


}