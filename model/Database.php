<?php

	class Database {
		
		protected $_db;
		protected $_host;
		protected $_username;
		protected $_pass;
		protected $_dbname;
		
		//MAKE CONNECTION AND SELECT DATABASE
		public function __construct($host, $username, $pass, $databasename){
			
			$this->_host = $host;
			$this->_username = $username;
			$this->_pass = $pass;
			$this->_dbname = $databasename;
			
			$this->_db = mysql_connect($this->_host, $this->_username, $this->_pass)
			OR die("There was a problem connecting to the database.");
			
			
			
			mysql_select_db($this->_dbname, $this->_db);
			mysql_query("SET NAMES utf8");
			
		}
		
		//CLOSE CONNECTION
		public function destruct(){
			
			mysql_close($this->_db);
			
		}
		
		public function select(){
				
			$sql = ('SELECT * FROM books');
			$result = mysql_query($sql);
				
			
				
			return $this->processRowSet($result);
				
		}
		
		public function processRowSet($rowSet)
		{
			$resultArray = array();
			while($row = mysql_fetch_assoc($rowSet))
			{
				array_push($resultArray, $row);
			}
		
		
			
			return $resultArray;
		}
		
		public function insert($title, $author, $description){
			
			$q1 = "INSERT INTO books (title, author, description) VALUES ('$title', '$author', '$description')";
			mysql_query($q1) OR trigger_error("Could not send query");
			
		}
		
		public function delete($title){
			
			$q1 = "DELETE FROM books WHERE title = '$title'";
			mysql_query($q1);
		}
	
		
	}