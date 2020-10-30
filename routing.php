<?php 


$controllers=array(
	'persona'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('persona','error');
	}		
}else{
	call('persona','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'persona':
		require_once('Model/Persona.php');
		$controller= new UsuarioController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>