<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Jogo as Jogo;
use App\DAO\DAOJogo as DAOJogo;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Jogo.php';
require_once dirname(__FILE__).'/../../DAO/DAOJogo.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

$typeJogo = $_POST[''];

$valueJogo = $_POST[''];

$JogoControl = new mainController();
$Result =$JogoControl->listarJogo($typeJogo, $valueJogo);

if ($Result){	
		echo '<script> alert("Jogo listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Jogo Não listado Com Sucesso") </script>  ';


