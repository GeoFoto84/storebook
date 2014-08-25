<?php
	
	include_once('../model/Model.php');
	
	
	
	class Controller {
		
		public $model;
		
		public function __construct(){
			
			$this->model = new Model();
		
		}
		
		public function invoke($array){
			
			
			
			if(!isset($_GET['book'])){
				
				$books = array ();
				$books = $this->model->getBookList($array);
				include('../view/booklist.php');
			
			}else{
			
				//show the requested book
				$book = $this->model->getBook($_GET['book']);
				include('../view/viewbook.php');
			
			}
		
		}
	
	}

?>