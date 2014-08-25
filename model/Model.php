<?php 

	include_once('Book.php');
	
	include_once("../model/Database.php");
	
	$array = array();
	
	$database = new Database('localhost', 'geofoto', 'AbCd1234', 'bookstore');
	$array = $database->select();
	
	class Model {
		
		public function getBookList($arg1){
			
			$this->array = $arg1;
			
			return $this->array;
		
		}
	
		public function getBook($title){
		
			$allBooks = $this->getBookList();
			return $allBooks[$title];
			
		}
	}

?>