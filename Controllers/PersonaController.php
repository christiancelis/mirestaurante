<?php 

class UsuarioController{

	function __construct()
	{
		
	}

	
	function index(){
		require_once('Views/Persona/bienvenido.php');
	}


	function register(){
		require_once('Views/Persona/register.php');
	}


	function save(){
		$persona=new Persona($_POST["idpersona"],$_POST["nombres"],$_POST["apellidos"],$_POST["tipodocumento"],$_POST["telefono"],$_POST["correoelectronico"],$_POST["direccion"]);

		Persona::save($persona);
		$this->show();
	}

	function update(){
		$persona = new Persona($_POST['idpersona'],$_POST['nombres'],$_POST['apellidos'],$_POST['tipodocumento'],$_POST['telefono'],$_POST['correoelectronico'],$_POST['direccion']);
		Persona::update($persona);
		$this->show();
	}

	function updateshow(){
		$idpersona=$_GET['idpersona'];
		$persona=Persona::searchById($idpersona);
		require_once('Views/Persona/updateshow.php');
	}


	function show() {
		$listapersona=Persona::all();
		require_once('Views/Persona/show.php');
	}

	function delete(){
		$idpersona=$_GET['idpersona'];
		Persona::delete($idpersona);
		$this->show();
	}

	function search(){
		$idpersona=$_POST['idpersona'];
		$persona=Persona::searchById($idpersona);
		if (!empty($_POST['idpersona'])) {
			$idpersona=$_POST['idpersona'];
			$persona=Persona::searchById($idpersona);
			$listapersona[]=$persona;
			//var_dump($id);
			//die();
			require_once('Views/Persona/show.php');
		}else{
			$listapersona=Persona::all();

			require_once('Views/Persona/show.php');
		
	}
}

	function error(){
		require_once('Views/Persona/error.php');
	}

}
 ?>