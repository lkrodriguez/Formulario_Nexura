<?php 

/*
 * CADENA DE CONEXION A LA BASE DE DATOS
 */
 include("conexion\conexion.php");

class empleado{

    public $cdn;
    public $nombre;
    public $email;
    public $sexo;
    public $area_id;
    public $boletin;
    public $descripcion;
    public $id_rol;

    public function __construct() {
        try {
            $this->cdn =conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            $query = "SELECT 
            E.nombre,
            E.email,
            E.sexo,
            A.NOMBRE AS nombre_area,
            CASE
                WHEN boletin = 1 THEN 'Si'
                ELSE 'No'
            END AS boletin,
            rr.nombre AS nombre_rol
        FROM
            prueba_tecnica_dev.empleado E
                LEFT JOIN
            prueba_tecnica_dev.areas A ON E.area_id = A.ID
                LEFT JOIN
            prueba_tecnica_dev.empleado_rol R ON E.ID = R.empleado_id
                LEFT JOIN
            prueba_tecnica_dev.ROLES RR ON R.rol_id = RR.id";
                $smt = $this->cdn->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function cargarAreas(){
        try {
            $query = "SELECT * FROM prueba_tecnica_dev.areas";
                $smt = $this->cdn->prepare($query);
                $smt->execute();
                return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 

    public function registrar(empleado $data){
        try {
            
            $query = "INSERT INTO prueba_tecnica_dev.empleado (nombre, email, sexo, area_id, boletin, descripcion, id_rol)VALUES (?,?,?,?,?,?,?)";
                $this->cdn->prepare($query)->execute(array($data->nombre,$data->email,$data->sexo,$data->area_id,$data->boletin,$data->descripcion,$data->id_rol));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }






}

?>