<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\Partida as Partida;
use App\DAO\DAOPartida as DAOPartida;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Partida.php';
require_once dirname(__FILE__).'/../../DAO/DAOPartida.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';


$Partida = $_POST[''];
$IdPartida = $_POST['']; 

$PartidaControl = new mainController();
$Result =$PartidaControl->buscarPartida($Partida, $IdPartida);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



