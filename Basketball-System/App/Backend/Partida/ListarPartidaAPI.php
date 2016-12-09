<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\Partida as Partida;
use App\DAO\DAOPartida as DAOPartida;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Partida.php';
require_once dirname(__FILE__).'/../../DAO/DAOPartida.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

 $typePartida = $_POST[''];	

 $valuePartida = $_POST[''];

 $PartidaControl = new mainController();
 $Result =$PartidaControl->listarPartida($typePartida,$valuePartida);

if ($Result){	
		echo '<script> alert("Partida listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Partida Não listado Com Sucesso") </script>  ';


