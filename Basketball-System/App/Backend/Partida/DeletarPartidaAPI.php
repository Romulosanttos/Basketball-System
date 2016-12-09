<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();

use App\Model\Partida as Partida;
use App\DAO\DAOPartida as DAOPartida;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Partida.php';
require_once dirname(__FILE__).'/../../DAO/DAOPartida.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

$idPartida = $_POST[''];

$PartidaControl = new mainController();
$Result =$PartidaControl->apagarPartida($idPartida);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


