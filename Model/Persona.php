<?php

class Persona
{
	private $idpersona;
	private $nombres;
	private $apellidos;
	private $tipodocumento;
	private $telefono;
	private $correoelectronico;
	private $direccion;

	function __construct($idpersona,$nombres,$apellidos,$tipodocumento,$telefono,$correoelectronico,$direccion){
		$this->setId($idpersona);
		$this->setNombres($nombres);
		$this->setApellidos($apellidos);
		$this->setTipodocumento($tipodocumento);
		$this->setTelefono($telefono);
		$this->setCorreoelectronico($correoelectronico);
		$this->setDireccion($direccion);
	}

	public function getIdpersona(){
		return $this->idpersona;
	}

	public function setId($idpersona){
		$this->idpersona = $idpersona;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}


	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getTipodocumento(){
		return $this->tipodocumento;
	}

	public function setTipodocumento($tipodocumento){
		$this->tipodocumento = $tipodocumento;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getCorreoelectronico(){
		return $this->correoelectronico;
	}

	public function setCorreoelectronico($correoelectronico){
		$this->correoelectronico = $correoelectronico;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public static function save($persona){
		$db=Db::getConnect();
		//var_dump($alumno);
		//die();
		

		$insert=$db->prepare('INSERT INTO persona VALUES (:idpersona,:nombres,:apellidos,:tipodocumento,:telefono,:correoelectronico,:direccion)');
		$insert->bindValue('idpersona',$persona->getIdpersona());
		$insert->bindValue('nombres',$persona->getNombres());
		$insert->bindValue('apellidos',$persona->getApellidos());
		$insert->bindValue('tipodocumento',$persona->getTipodocumento());
		$insert->bindValue('telefono',$persona->getTelefono());
		$insert->bindValue('correoelectronico',$persona->getCorreoelectronico());
		$insert->bindValue('direccion',$persona->getDireccion());

		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listapersona=[];

		$select=$db->query('SELECT * FROM persona order by idpersona');

		foreach($select->fetchAll() as $persona){
			$listapersona[]=new Persona($persona['idpersona'],$persona['nombres'],$persona['apellidos'],$persona['tipodocumento'],$persona['telefono'],$persona['correoelectronico'],$persona['direccion']);
		}
		return $listapersona;
	}

	public static function searchById($idpersona){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM persona WHERE idpersona=:idpersona');
		$select->bindValue('idpersona',$idpersona);
		$select->execute();

		$personaDb=$select->fetch();


		$persona = new Persona ($personaDb['idpersona'],$personaDb['nombres'], $personaDb['apellidos'], $personaDb['tipodocumento'],$personaDb['telefono'],$personaDb['correoelectronico'],$personaDb['direccion']);
		//var_dump($persona);
		//die();
		return $persona;
	}


		public static function update($persona){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE persona SET nombres=:nombres, apellidos=:apellidos, tipodocumento=:tipodocumento, telefono=:telefono, correoelectronico=:correoelectronico, direccion=:direccion WHERE idpersona=:idpersona');
		$update->bindValue('idpersona',$persona->getIdpersona());
		$update->bindValue('nombres', $persona->getNombres());
		$update->bindValue('apellidos',$persona->getApellidos());
		$update->bindValue('tipodocumento',$persona->getTipodocumento());
		$update->bindValue('telefono',$persona->getTelefono());
		$update->bindValue('correoelectronico',$persona->getCorreoelectronico());
		$update->bindValue('direccion',$persona->getDireccion());
		$update->execute();
	}

	public static function delete($idpersona){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE FROM persona WHERE idpersona=:idpersona');
		$delete->bindValue('idpersona',$idpersona);
		$delete->execute();		
	}
}
?>