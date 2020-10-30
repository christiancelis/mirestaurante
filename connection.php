<?php 

/**
* 
*/
class Db
{
	private static $instance=NULL;
	
	function __construct(){}

	public static function getConnect(){
		try{
				if (!isset(self::$instance)) {
					$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
					self::$instance= new PDO('mysql:host=localhost;dbname=progweb','root','');
					}
					echo "conexion establecida";
		}catch(Exception $e){
			die("Error".$e->getMessage());
			echo "Linea Error".$e->getLine();
		}
		return self::$instance; 
	}
}
 ?>