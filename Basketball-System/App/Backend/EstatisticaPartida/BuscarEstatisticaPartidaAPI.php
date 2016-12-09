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

$searchfield = $_POST['searchfield'];
$type = $_POST['type'];

$EstatisticaJogadorControl = new mainController();
$Result =$EstatisticaJogadorControl->buscarEstatisticaPartida($type, $searchfield);




