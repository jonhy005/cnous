<?php
class Cn_model extends CI_Model {

	// ---------------------------------- ATTRIBUTES
	var $id;
	// ---------------------------------- CONSTRUCTOR
	function __construct(){
		parent::__construct();
	}

	function getTableName(){
		die("Cannot call super class tableName, please override");
	}
	// ---------------------------------- PUBLIC METHODS
	function getId(){
		return $this->id;
	}
	function getById($id){
		
		
		$query =$this->db->select()->from($this->getTableName())->where(array (
				'id' => $id
		))->get();
		if($query-> num_rows() == 1){
			$currentRow =$query->result(get_class($this));
			return $currentRow[0];
		}else{
			return false;
		}
	
	}

	function getAllLastRows($limit){
		$query =$this->db->select()->from($this->getTableName())->order_by("id", "desc")->limit($limit);
		return $query->get()->result();
	}
	
	function getAll(){
		$query =$this->db->get($this->getTableName());
		return $query->result();
	}
	
	/**
	 * Loads List of current Object defined by the given params
	 * @param array $paramArray
	 */
	function getBykey($pageName,$textName){
		$query =$this->db->select()->from($this->getTableName())->where(array (
						'page_name' => $pageName,
						'text_area_name' => $textName
						))->get();
		if($query-> num_rows() == 1){
			$currentRow =$query->result(get_class($this));
			return $currentRow[0];
		}else{
			return false;
		}
	}
	/**
	 * Loads List of current Object defined by the given params
	 * @param array $paramArray
	 */
	function getByParam($paramArray){
		$query =$this->db->select()->from($this->getTableName())->where($paramArray);
		return $this->db->get();
	}
	/**
	 *
	 */
	function saveOrUpdate($obj){
		
		
		if(isset($obj->ID) && $obj->ID>0){
			$this->db->where('ID', $obj->ID);
			$this->db->update($this->getTableName(), $obj);
			return $obj->ID;
		}else if($obj->ID==0){
			$this->db->insert($this->getTableName(), $obj);
			$obj->ID=$this->db->insert_id();
			return $obj->ID;
		}else{
			die ("Cannot persist Object with id value: ".$id);
		}
	
	}
	
}