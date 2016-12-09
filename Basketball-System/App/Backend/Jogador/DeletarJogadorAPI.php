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

$idJogador = $_POST['']

$JogadorControl = new mainController();
$Result =$JogadorControl->apagarJogador($idJogador);

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


