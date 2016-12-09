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

 $IdEstatisticaPartida = $_POST[''];

 $idPartidaFK = $_POST[''];

 $idJogoFK = $_POST[''];

 $TentativasArremesso = $_POST[''];

 $ArremessosConvertidos = $_POST[''];

 $PorcentagemArremessos = $_POST[''];

 $Tentativas2Pontos = $_POST[''];

 $Cestas2PontosConvertidas = $_POST[''];

 $PorcentagemCestas2Pontos = $_POST[''];

 $Tentativas3Pontos = $_POST[''];

 $Cestas3PontosConvertidas = $_POST[''];

 $PorcentagemCestas3Pontos = $_POST[''];

 $LancesLivresArremessados = $_POST[''];

 $LancesLivresconvertidos = $_POST[''];

 $PorcentagemDeAcertosLivres = $_POST[''];

 $RebotesOfensivos = $_POST[''];

 $RebotesDefensivos = $_POST[''];

 $TotalRebotes = $_POST[''];

 $Assistencias = $_POST[''];

 $Tocos = $_POST[''];

 $BolasPerdidas = $_POST[''];

 $Roubadas = $_POST[''];

 $FaltasPessoais = $_POST[''];

$minhaEstatisticaPartida = new EstatisticaPartida($idPartidaFK, $idJogoFK, $TentativasArremesso, $ArremessosConvertidos, $PorcentagemArremessos, $Tentativas2Pontos, $Cestas2PontosConvertidas , $PorcentagemCestas2Pontos, $Tentativas3Pontos, $Cestas3PontosConvertidas, $PorcentagemCestas3Pontos, $LancesLivresArremessados, $LancesLivresconvertidos,$PorcentagemDeAcertosLivres, $RebotesOfensivos, $RebotesDefensivos, $TotalRebotes, $Assistencias, $Tocos, $Roubadas, $FaltasPessoais);

$EstatisticaPartidaControl = new mainController();
$Result =$EstatisticaPartidaControl->alterarEstatisticaPartida($minhaEstatisticaPartida,$IdEstatisticaPartida);

if ($Result){	
		echo '<script> alert("Atualizado Com Sucesso") </script>  ';

}	
else 
	echo '<script> alert("Não Atualizado Com Sucesso") </script>  ';



