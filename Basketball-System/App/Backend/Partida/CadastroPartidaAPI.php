<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Partida as Partida;
use App\DAO\DAOPartida as DAOPartida;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Partida.php';
require_once dirname(__FILE__).'/../../DAO/DAOPartida.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

 $idEstatisticaPartida = $_POST[''];

 $idTimeFK = $_POST[''];

 $Rounds = $_POST[''];

 $Pontos = $_POST[''];


$minhaPartida= new Partida($idEstatisticaPartida, $idTimeFK, $Rounds, $Pontos);

$RelatorioControl = new mainController();
$Result =$RelatorioControl->inserirPartida($minhaPartida);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';


