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
 
 $IdJogador = $_POST[''];

 $Nome = $_POST[''];

 $idTimeFK = $_POST[''];

 $idEstatisticaJogadorFK = $_POST[''];

$meuJogador = new Jogador($Nome, $idTimeFK, $idEstatisticaJogadorFK);

$JogadorsControl = new mainController();
$Result =$JogadorsControl->alterarJogador($meuJogador,$IdJogador);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



