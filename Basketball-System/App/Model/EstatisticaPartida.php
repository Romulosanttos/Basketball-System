<?php 

namespace App\Model;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//  uma partida pode ter varias estatisticas pq pode ter mais de vez(espeTentativas3Pontos) =idJogoFK
//  no banco essa class tem que ser nula ??(andre)

class EstatisticaPartida {

	private $idEstatisticaPartida;	

	private $idPartidaFK;

	private $idJogoFK;



	private $TentativasArremesso;

	private $ArremessosConvertidos;

	private $PorcentagemArremessos;

	private $Tentativas2Pontos;

	private $Cestas2PontosConvertidas;//3P

	private $PorcentagemCestas2Pontos;

	private $Tentativas3Pontos;

	private $Cestas3PontosConvertidas;

	private $PorcentagemCestas3Pontos;

	private $LancesLivresArremessados;

	private $LancesLivresconvertidos;
	
	private $PorcentagemDeAcertosLivres;

	private $RebotesOfensivos;

	private $RebotesDefensivos;

	private $TotalRebotes;

	private $Assistencias;

	private $Tocos;

	private $BolasPerdidas;

	private $Roubadas;

	private $FaltasPessoais;


	function __construct($idPartidaFK, $idJogoFK, $TentativasArremesso, $ArremessosConvertidos, $PorcentagemArremessos, $Tentativas2Pontos, $Cestas2PontosConvertidas , $PorcentagemCestas2Pontos, $Tentativas3Pontos, $Cestas3PontosConvertidas, $PorcentagemCestas3Pontos, $LancesLivresArremessados, $LancesLivresconvertidos,$PorcentagemDeAcertosLivres, $RebotesOfensivos, $RebotesDefensivos, $TotalRebotes, $Assistencias, $Tocos, $Roubadas, $FaltasPessoais) {
		$this->TentativasArremesso = $TentativasArremesso;
		$this->ArremessosConvertidos = $ArremessosConvertidos;
		$this->PorcentagemArremessos = $PorcentagemArremessos;
		$this->Tentativas2Pontos = $Tentativas2Pontos;
		$this->Cestas2PontosConvertidas = $Cestas2PontosConvertidas;
		$this->PorcentagemCestas2Pontos = $PorcentagemCestas2Pontos;
		$this->Tentativas3Pontos = $Tentativas3Pontos;
		$this->Cestas3PontosConvertidas = $Cestas3PontosConvertidas;
		$this->PorcentagemCestas3Pontos = $PorcentagemCestas3Pontos;
		$this->LancesLivresArremessados = $LancesLivresArremessados;
		$this->PorcentagemDeAcertosLivres = $PorcentagemDeAcertosLivres;
		$this->RebotesOfensivos = $RebotesOfensivos;
		$this->RebotesDefensivos = $RebotesDefensivos;
		$this->TotalRebotes = $TotalRebotes;
		$this->Assistencias = $Assistencias;
		$this->Tocos = $Tocos;
		$this->Roubadas = $Roubadas;
		$this->FaltasPessoais = $FaltasPessoais;
		
		
		
	}

		
		function getTentativasArremesso () 
		{
			return $this->TentativasArremesso;
		}
		
		function getArremessosConvertidos () 
		{
			return $this->ArremessosConvertidos;
		}
		
		function getPorcentagemArremessos () 
		{
			return $this->PorcentagemArremessos;
		}

		function getTentativas2Pontos () 
		{
			return $this->Tentativas2Pontos;
		}

		function getCestas2PontosConvertidas () 
		{
			return $this->Cestas2PontosConvertidas;
		}

		function getidPartidaFK () 
		{
			return $this->idPartidaFK;
		}
		
		function getPORCENTAGEM () 
		{
			return $this->PORCENTAGEM;
		}

		function getTentativas3Pontos () 
		{
			return $this->Tentativas3Pontos;
		}

		function getCestas3PontosConvertidas () 
		{
			return $this->Cestas3PontosConvertidas;
		}

		function getPorcentagemCestas3Pontos () 
		{
			return $this->PorcentagemCestas3Pontos;
		}

		function getLancesLivresArremessados () 
		{
			return $this->LancesLivresArremessados;
		}

		function getLancesLivresconvertidos () 
		{
			return $this->LancesLivresconvertidos;
		}

		function getPorcentagemDeAcertosLivres () 
		{
			return $this->PorcentagemDeAcertosLivres;
		}	

		function getRebotesOfensivos () 
		{
			return $this->RebotesOfensivos;
		}	

		function getRebotesDefensivos () 
		{
			return $this->RebotesDefensivos;
		}	

		function getTotalRebotes () 
		{
			return $this->TotalRebotes;
		}	

		function getAssistencias () 
		{
			return $this->Assistencias;
		}	

		function getTocos () 
		{
			return $this->Tocos;
		}	
		function getRoubadas () 
		{
			return $this->Roubadas;
		}
		function getFaltasPessoais () 
		{
			return $this->FaltasPessoais;
		}

		function getidJogoFK () 
		{
			return $this->idJogoFK;
		}	




		function setTentativasArremesso ($TentativasArremesso) 
		{
			$this->TentativasArremesso = $TentativasArremesso;
		}
		
		function SetArremessosConvertidos ($ArremessosConvertidos) 
		{
			return $this->ArremessosConvertidos;
		}
		
		function SetPorcentagemArremessos ($PorcentagemArremessos) 
		{
			return $this->PorcentagemArremessos;
		}

		function SetTentativas2Pontos ($Tentativas2Pontos) 
		{
			return $this->Tentativas2Pontos;
		}

		function SetCestas2PontosConvertidas ($Cestas2PontosConvertidas) 
		{
			return $this->Cestas2PontosConvertidas;
		}

		function SetPorcentagemCestas2Pontos ($PorcentagemCestas2Pontos) 
		{
			return $this->PorcentagemCestas2Pontos;
		}
		
		function SetPORCENTAGEM ($PORCENTAGEM) 
		{
			return $this->PORCENTAGEM;
		}

		function SetTentativas3Pontos ($Tentativas3Pontos) 
		{
			return $this->Tentativas3Pontos;
		}

		function SetCestas3PontosConvertidas ($Cestas3PontosConvertidas) 
		{
			return $this->Cestas3PontosConvertidas;
		}

		function SetPorcentagemCestas3Pontos ($PorcentagemCestas3Pontos) 
		{
			return $this->PorcentagemCestas3Pontos;
		}

		function SetLancesLivresArremessados ($LancesLivresArremessados) 
		{
			return $this->LancesLivresArremessados;
		}

		function SetPorcentagemDeAcertosLivres ($PorcentagemDeAcertosLivres) 
		{
			return $this->PorcentagemDeAcertosLivres;
		}

		function setRebotesOfensivos ($RebotesOfensivos) 
		{
			return $this->RebotesOfensivos;
		}	

		function setRebotesDefensivos ($RebotesDefensivos) 
		{
			return $this->RebotesDefensivos;
		}	

		function setTotalRebotes ($TotalRebotes) 
		{
			return $this->TotalRebotes;
		}	

		function setAssistencias ($Assistencias) 
		{
			return $this->Assistencias;
		}	

		function setTocos ($Tocos) 
		{
			return $this->Tocos;
		}	
		function setRoubadas ($Roubadas) 
		{
			return $this->Roubadas;
		}
		function setFaltasPessoais ($FaltasPessoais) 
		{
			return $this->FaltasPessoais;
		}

		function SetidJogoFK ($idJogoFK) 
		{
			return $this->idJogoFK;
		}



}