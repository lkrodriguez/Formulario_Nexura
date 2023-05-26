<?php
error_reporting(E_ALL);
include_once 'models\empleados.php';

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
		/*
		 * SE CAPTURAN LOS DATOS DEL FORMULARIO $_POST['nomEmp'];
		 * Y SE ENVIA A BASE DE DATOS $nombre 
		 */

		$emp = new empleado();
		$emp->$nombre = $_POST['nomEmp'];
		$emp->$email = $_POST['emailEmp'];
		$emp->$sexo = $_POST['genero'];
		$emp->$area_id = $_POST['areaEmp'];
		$emp->$boletin = $_POST['boletin'];
		$emp->$descripcion = $_POST['desc'];
		$roles = array();
		if (isset($_POST['roles'])) {
			$emp->id_rol = $_POST['roles'];			
		}else{
			$emp->roles = 0;
		};
		
		
		$this->MODEL->registrar($emp);
		//header("Location:index.php");
		
		
	}


}










?>