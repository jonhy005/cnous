<?php
class Text_model extends Cn_model {


	// ----------------------------------- TABLE ANME
	const tableName="cn_data";

	function getTableName(){
		return Text_model::tableName;
	}
	// ---------------------------------- CONSTANT
	// ---------------------------------- ATTRIBUTES
	var $PAGE_NAME;
	var $RAW_TEXT;
	var $TEXT_AREA_NAME;
	var $TEXT;
	
	// ---------------------------------- CONSTRUCTOR
	function __construct(){
		parent::__construct();
	}


}