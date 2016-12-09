<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Time as Time;
use App\DAO\DAOTime as DAOTime;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Time.php';
require_once dirname(__FILE__).'/../../DAO/DAOTime.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

 $Nome = $_POST[''];

 $idJogador1FK  = $_POST[''];

 $idJogador2FK = $_POST[''];

 $idJogador3FK = $_POST[''];

 $idJogador4FK = $_POST[''];

 $idJogador5FK = $_POST[''];

 $idJogador6FK = $_POST[''];

 $idJogador7FK = $_POST[''];

 $idJogador8FK = $_POST[''];

 $idJogador9FK = $_POST[''];

 $idJogador10FK = $_POST[''];

 $idJogador11FK = $_POST[''];

 $idJogador12FK = $_POST[''];




$meuTime = new Time($Nome, $idJogador1FK,  $idJogador2FK, $idJogador3FK, $idJogador4FK, $idJogador5FK, $idJogador6FK, $idJogador7FK, $idJogador8FK, $idJogador9FK, $idJogador10FK, $idJogador11FK, $idJogador12FK);

$TimeControl = new mainController();
$Result =$TimeControl->inserirTime($meuTime);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';


