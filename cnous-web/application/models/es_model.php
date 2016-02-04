<?php
class Es_model extends CI_Model {

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
		
		$query = $this->db->get_where($this->getTableName(), array('id' => $id));
		if($query -> num_rows() == 1){
			return $query->row(get_class($this)); 
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
	function getByParam($paramArray){
		$query =$this->db->select()->from($this->getTableName())->where($paramArray);
		return $this->db->get();
	}
	/**
	 *
	 */
	function saveOrUpdate(){
		if(isset($this->id) && $this->id>0){
			$this->db->where('id', $this->id);
			$this->db->update($this->getTableName(), $this);
			return $this->id;
		}else if($this->id==0){
			$this->db->insert($this->getTableName(), $this);
			$this->id=$this->db->insert_id();
			return $this->id;
		}else{
			die ("Cannot persist Object with id value: ".$id);
		}
	
	}
	
}