<?php 
/*
 *CONEXION A LA BASE DE BASE  
 */

 
class Conexion{	  
    public static function Conectar() {        
        define('servidor','10.60.64.102');
        define('nombre_bd','prueba_tecnica_dev');
        define('usuario','root');
        define('password','');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
?>