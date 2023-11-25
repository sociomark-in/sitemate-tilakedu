<?php

class DocumentModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public $tableName = "general_marketing_banners_website";

	public function select(array $condition = null){
		if(isset($condition)){
			if(count($condition) > 0 ){
				$this->db->where($condition);
			}
		}
		return $this->db->get($this->tableName)->result_array();
	}

	public function select_only(array $columns, array $condition) : array{
		if(count($condition) > 0){
			$this->db->where($condition);
		}
		$this->db->select($columns);
		return $this->db->get($this->tableName)->result_array();
	}

	public function insert(array $data) : bool{
		// default start time is datetime + 1 hour & end time is date + 1 day
		if($this->db->insert($this->tableName, $data)){
			return true;
		} else {
			return false;
		}
	}

	public function update(array $data, $id) : bool{
		// default start time is datetime + 1 hour & end time is date + 1 day
		$this->db->where('id', $id);
		$this->db->set($data);
		if($this->db->update($this->tableName)){
			return true;
		} else {
			return false;
		}
	}
	
	public function delete($id): bool{
		$this->db->where('id', $id);
		if($this->db->delete($this->tableName)){
			return true;
		} else {
			return false;
		}
	}
}
