<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


use App\Model\EstatisticaJogador as EstatisticaJogador;
use App\DAO\DAOEstatisticaJogador as DAOEstatisticaJogador;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../Model/EstatisticaJogador.php';
require_once dirname(__FILE__).'/../../DAO/DAOEstatisticaJogador.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

 $idJogadorFK = $_POST[''];

 $idJogoFK = $_POST[''];

 $Pts = $_POST[''];

 $AST = $_POST[''];

 $MIN = $_POST[''];

 $FG = $_POST[''];

 $P3 = $_POST[''];

 $LL = $_POST[''];

 $PORCENTAGEM = $_POST[''];

 $RO = $_POST[''];

 $RD = $_POST[''];

 $REB = $_POST[''];

 $F = $_POST[''];

 $RB = $_POST[''];

$minhaEstatisticajogador = new Estatisticajogador($idJogadorFK, $idJogoFK, $Pts, $AST, $MIN, $FG, $P3 , $LL, $PORCENTAGEM, $RO, $RD, $REB, $F, $RB);

$EstatisticajogadorControl = new mainController();
$Result =$EstatisticajogadorControl->inserirEstatisticaJogador($minhaEstatisticajogador);

if ($Result){	
		echo '<script> alert("Cadastrado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Cadastrado Com Sucesso") </script>  ';



