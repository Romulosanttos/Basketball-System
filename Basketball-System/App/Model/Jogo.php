<?php 
//tem que buscar todas em partidas por time e rounds
namespace App\Model;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Jogo {

	private $Nome;

	private $idJogo;

	private $DataTime;

	private $status;// 0= não agendado, 1 = agendado, 2 = adiado, 3 = adiado, 4 = jogando, 5 encerrado 

	private $Time1FKFK;

	private $Time2FKFK;

	private $Partida1Fk;

	private $Partida2Fk;
	

 // DataTime status Time1FK Time2FK Partida1Fk Partida2Fk 

	function __construct($Nome, $DataTime, $status, $Time1FK, $Time2FK, $Partida1Fk, $Partida2Fk) {
		$this->DataTime = $DataTime;
		$this->status = $status;
		$this->Time1FK = $Time1FK;
		$this->Time2FK = $Time2FK;
		$this->Partida1Fk = $Partida1Fk;
		$this->Partida2Fk = $Partida2Fk;
		$this->Nome = $Nome;

	}

		function getNome () 
		{
			return $this->Nome;
		}

		function getidRelatorioTCC () 
		{
			return $this->idRelatorioTCC;
		}
		
		function getDataTime () 
		{
			return $this->DataTime;
		}
		
		function getstatus () 
		{
			return $this->status;
		}
		
		function getTime1FK () 
		{
			return $this->Time1FK;
		}

		function getTime2FK () 
		{
			return $this->Time2FK;
		}

		function getPartida1Fk () 
		{
			return $this->Partida1Fk;
		}

		function getPartida2Fk () 
		{
			return $this->Partida2Fk;
		}
		




		function setDataTime ($DataTime) 
		{
			$this->DataTime = $DataTime;
		}
		
		function Setstatus ($status) 
		{
			return $this->status;
		}
		
		function SetTime1FK ($Time1FK) 
		{
			return $this->Time1FK;
		}

		function SetTime2FK ($Time2FK) 
		{
			return $this->Time2FK;
		}

		function SetPartida1Fk ($Partida1Fk) 
		{
			return $this->Partida1Fk;
		}

		function SetPartida2Fk ($Partida2Fk) 
		{
			return $this->Partida2Fk;
		}
		
		function SetNome ($Nome) 
		{
			return $this->Nome;
		}

}