<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\Jogo as Jogo;
use App\DAO\DAOJogo as DAOJogo;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Jogo.php';
require_once dirname(__FILE__).'/../../DAO/DAOJogo.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

 $NomeJogo = $_POST[''];

 $DataTimeJogo = $_POST[''];

 $statusJogo = $_POST[''];

 $Time1FKJogo = $_POST[''];

 $Time2FKJogo = $_POST[''];

 $Partida1FkJogo = $_POST[''];

 $Partida2FkJogo = $_POST[''];

echo '<script> alert($meuJogo) </script>  ';
$meuJogo = new Jogo($Nome, $DataTime, $status, $Time1FK, $Time2FK, $Partida1Fk, $Partida2Fk);

$JogoControl = new mainController();
$Result =$JogoControl->cadastrarJogo($meuJogo);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



