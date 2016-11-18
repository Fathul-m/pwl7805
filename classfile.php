<?php
/*	
	class Model
	{
		public $string;
		public $strings;
						
		public function __construct() 
		{
			$this->string = "<td>";
			$this->strings = "</td>";
		}
		
	}
	
	class Controller
	{
		private $model;
		
		public function __construct($model)
		{
			$this->model = $model;
		}
	}
	
	class View 
	{
		private $model;
		private $controller;
		public $rows;
		
		public function __construct($controller, $model)
		{
			$this->controller = $controller;
			$this->model = $model;
		}
		
		public function front() 
		{
			return $this->model->string;
			
		}
		
		public function end() 
		{
			return $this->model->strings;
			
		}
	}
*/	
	class Table 
	{
		function __construct()
		{
			$rows=$_POST['rows'];
			$cols=$_POST['cols'];
			
			for($i=1;$i<=$rows;$i++) {	
			
			echo "<tr>";
			
			for($c=1;$c<=$cols;$c++) {
			
			echo "<td><input type='text' name='row".$i."cell".$c."' id='row".$i."cell".$c."' /></td>";
			}
			echo "</tr>";
			}
		}
	}
	
	
	
?>