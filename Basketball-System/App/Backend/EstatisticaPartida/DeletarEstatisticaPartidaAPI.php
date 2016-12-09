<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\EstatisticaPartida as EstatisticaPartida;
use App\DAO\DAOEstatisticaPartida as DAOEstatisticaPartida;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/EstatisticaPartida.php';
require_once dirname(__FILE__).'/../../DAO/DAOEstatisticaPartida.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

$idEstatisticaPartida = $_POST[''];

$EstatisticaPartidaControl = new mainController();
$Result =$EstatisticaPartidaControl->apagarEstatisticaPartida($idEstatisticaPartida);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


