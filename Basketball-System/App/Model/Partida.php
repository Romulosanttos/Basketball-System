<?php 

namespace App\Model;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Partida {

	private $idPartida;

	private $idEstatisticaPartida;

	private $idTimeFK;

	private $Rounds;

	private $Pontos;
	

	function __construct($idEstatisticaPartida, $idTimeFK, $Rounds, $Pontos) {
		$this->idTimeFK = $idTimeFK;
		$this->idEstatisticaPartida = $idEstatisticaPartida;
		$this->Rounds = $Rounds;
		$this->Pontos = $Pontos;
	}

		function getidEstatisticaPartida () 
		{
			return $this->idEstatisticaPartida;
		}
		
		function getidTimeFK () 
		{
			return $this->idTimeFK;
		}
		
		function getPontos () 
		{
			return $this->Pontos;
		}
		
		function getRounds () 
		{
			return $this->Rounds;
		}

		

		function setidTimeFK ($idTimeFK) 
		{
			$this->idTimeFK = $idTimeFK;
		}
		
		function SetPontos ($Pontos) 
		{
			return $this->Pontos;
		}
		
		function SetRounds ($Rounds) 
		{
			return $this->Rounds;
		}

		function SetidEstatisticaPartida ($idEstatisticaPartida) 
		{
			return $this->idEstatisticaPartida;
		}

		

}