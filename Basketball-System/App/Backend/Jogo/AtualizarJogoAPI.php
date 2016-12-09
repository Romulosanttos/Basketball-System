<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use App\Model\Jogo as Jogo;
use App\DAO\DAOJogo as DAOJogo;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Jogo.php';
require_once dirname(__FILE__).'/../../DAO/DAOJogo.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';
 
 $IdJogo = $_POST['1'];

 $NomeJogo = $_POST[''];

 $DataTimeJogo = $_POST[''];

 $statusJogo = $_POST[''];

 $Time1FKJogo = $_POST[''];

 $Time2FKJogo = $_POST[''];

 $Partida1FkJogo = $_POST[''];

 $Partida2FkJogo = $_POST[''];


$meuJogo = new Jogo($NomeJogo, $DataTimeJogo, $statusJogo, $Time1FKJogo, $Time2FKJogo, $Partida1FkJogo, $Partida2FkJogo);

$JogosControl = new mainController();
$Result =$JogosControl->alterarJogo($meuJogo,$IdJogo);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



