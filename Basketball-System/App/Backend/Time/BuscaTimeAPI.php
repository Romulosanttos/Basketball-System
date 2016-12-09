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
 
 $idTime = $_POST[''];

 $Nome = $_POST[''];



$TimeControl = new mainController();
$Result =$TimeControl->buscarTime($Nome, $idTime);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



