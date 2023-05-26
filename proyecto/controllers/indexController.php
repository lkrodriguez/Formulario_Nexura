<?php
include_once 'models/empleados.php';


class indexController{

	public $MODEL ;

	public function __construct(){
		$this->MODEL = new empleado();
	}
	
	public function index (){

		require_once('view/all/header.php');
		require_once('view/index.php');
		require_once('view/all/footer.php');		
	}

	public function nuevo (){

		require_once('view/all/header.php');
		require_once('view/nuevo.php');
		require_once('view/all/footer.php');		
	}


}










?>