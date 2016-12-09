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
$NomeEstatisticaPartida = $_POST[''];

$IdEstatisticaPartida = $_POST[''];;

$EstatisticaPartidaControl = new mainController();
$Result =$EstatisticaPartidaControl->listarEstatisticaPartida($NomeEstatisticaPartida,$IdEstatisticaPartida);

if ($Result){	
		echo '<script> alert("EstatisticaPartida listadaCom Sucesso") </script>  ';
}	
else 
	echo '<script> alert("EstatisticaPartida Não listada Com Sucesso") </script>  ';


