<?php

class db{
	
	private $_conn;
	
	
	function __construct(){
		
	}
	public function dbConnect(){
		$this->_conn = mysql_connect("localhost", "root");
		if(!$this->_conn)
		{
			die("Impossibile connettersi!");
		}
	}
	public function openDb($database_name){
		mysql_select_db($database_name, $this->_conn);
	}
	public function dbClose(){
		mysql_close($this->_conn);
	}
	
	public function fetchQuery($resource) {
		$returns = array();
		while($r = mysql_fetch_array($resource)) $returns[] = $r;
		return $returns;
	}
	
	public function dbQuery($query){
		$result = mysql_query($query, $this->_conn);
		if($result) return $result;
		else echo mysql_error();
	}
	
	public function lastId() {
		
		return mysql_insert_id($this->_conn);
		
	}
		
	
	public function dbInsert($tblName, $params, $columns = array()){
		//print_r($params);
		$params = $this->_controllo($params, $columns);
		$newParams = array();
		foreach($params AS $param) $newParams[] = "'".$this->_strip($param)."'";
		$query = "
				INSERT INTO ".$tblName." 
				(".implode(",", array_keys($params)).") 
				VALUES (".implode(",", $newParams).")";
		//echo $query;
		return $this->dbQuery($query);
		//mysql_query($insert_query, $this->_conn);
	}
	
	

	public function dbUpdate($tblName, $params, $columns = array()){
	
		$newParams = array();
		foreach($params AS $param) $newParams[] = "'".$this->_strip($param)."'";
		$query = "
			UPDATE ".$tblName ." SET ";
			for ($index=1; $index<(count($params) -1); $index++)
			{
				$query .= array_keys($params)[$index]." = '";
				$query .= array_values($params)[$index] ."' , ";
			}
			$query .= array_keys($params)[$index]." = ";
			$query .= array_values($params)[$index] ." ";
			$query .= " WHERE " .array_keys($params)[0] . " = " .array_values($params)[0];
			$query .= " LIMIT 1; ";
		return $this->dbQuery($query);
		
	}
	
	public function dbDelete($tblName, $params){
		$newParams = array();
		$keys = array_keys($params);
		$values = array_values($params);
		foreach($params AS $param) $newParams[] = "'".$this->_strip($param)."'";
		
		$query = "DELETE FROM ".$tblName."
				WHERE " . array_pop($keys). " = " . array_pop($values);
		
		$this->dbQuery($query);
	}
	
	private function _strip($param) {
		return addslashes(stripslashes(trim(strip_tags($param))));		
	}
	
	private function _controllo($params, $columns = array()){
		if($columns) {
			$params = array_intersect_key($params, array_combine($columns, $columns));
		}
		return $params;
	}
}

