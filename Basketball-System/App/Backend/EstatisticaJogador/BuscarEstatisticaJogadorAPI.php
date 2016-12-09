<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\EstatisticaJogador as EstatisticaJogador;
use App\DAO\DAOEstatisticaJogador as DAOEstatisticaJogador;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/EstatisticaJogador.php';
require_once dirname(__FILE__).'/../../DAO/DAOEstatisticaJogador.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

$searchfield = $_POST[''];
$type = $_POST[''];

$EstatisticaJogadorControl = new mainController();
$Result =$EstatisticaJogadorControl->buscarEstatisticaJogador($type, $searchfield);




