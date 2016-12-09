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
 
 $typeTime = $_POST[''];

 $valueTime = $_POST[''];

 $TimeControl = new mainController();
 $Result =$TimeControl->listarTime($typeTime, $valueTime);

if ($Result){	
		echo '<script> alert("Time listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Time Não listado Com Sucesso") </script>  ';


