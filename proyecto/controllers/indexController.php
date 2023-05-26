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

	public function guardar(){
		$emp =new empleado();
		$emp->$nombre = $_POST['nomEmp'];
		$emp->$email = $_POST['emailEmp'];
		$emp->$sexo = $_POST['genero'];
		$emp->$area_id = $_POST['areaEmp'];
		$emp->$boletin = $_POST['boletin'];
		$emp->$descripcion = $_POST['desc'];
		$roles = array();
		if (isset($_POST['roles'])) {
			$emp->roles = $_POST['roles'];			
		}else{
			$emp->roles = 0;
		}
		
		




		
		
		
		
	}


}










?>