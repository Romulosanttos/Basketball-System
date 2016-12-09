<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\Jogador as Jogador;
use App\DAO\DAOJogador as DAOJogador;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/Jogador.php';
require_once dirname(__FILE__).'/../../DAO/DAOJogador.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

$typeJogador = $_POST[''];

$valueJogador = $_POST[''];

$JogadorControl = new mainController();
$Result =$JogadorControl->listarJogador($typeJogador,$valueJogador);

if ($Result){	
		echo '<script> alert("Jogador listado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Jogador Não listado Com Sucesso") </script>  ';


