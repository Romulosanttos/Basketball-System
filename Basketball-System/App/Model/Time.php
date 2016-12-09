<?php 

namespace App\Model;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Time {

	private $idTime;
	
	private $Nome;

	private $idJogador1FK;

	private $idJogador2FK;

	private $idJogador3FK;

	private $idJogador4FK;

	private $idJogador5FK;

	private $idJogador6FK;

	private $idJogador7FK;

	private $idJogador8FK;

	private $idJogador9FK;

	private $idJogador10FK;

	private $idJogador11FK;

	private $idJogador12FK;



	function __construct($Nome, $idJogador1FK, $idJogador2FK, $idJogador3FK, $idJogador4FK, $idJogador5FK, $idJogador6FK, $idJogador7FK, $idJogador8FK, $idJogador9FK, $idJogador10FK, $idJogador11FK, $idJogador12FK) {
		$this->Nome = $Nome;
		$this->idJogador1FK = $idJogador1FK;
		$this->idJogador2FK = $idJogador2FK;
		$this->idJogador3FK = $idJogador3FK;
		$this->idJogador4FK = $idJogador4FK;
		$this->idJogador5FK = $idJogador5FK;
		$this->idJogador6FK = $idJogador6FK;
		$this->idJogador7FK = $idJogador7FK;
		$this->idJogador8FK = $idJogador8FK;
		$this->idJogador9FK = $idJogador9FK;
		$this->idJogador10FK = $idJogador10FK;
		$this->idJogador11FK = $idJogador11FK;
		$this->idJogador12FK = $idJogador12FK;


	}

		function getNome () 
		{
			return $this->Nome;
		}
		
		function getidJogador1FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador2FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador3FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador4FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador5FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador6FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador7FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador8FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador9FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador10FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador11FK () 
		{
			return $this->idJogadores1FK;
		}

		function getidJogador12FK () 
		{
			return $this->idJogadores1FK;
		}



		

		function setidJogadores1FK ($idJogador1FK) 
		{
			$this->idJogadorFK = $idJogador1FK;
		}

		function SetNome ($Nome) 
		{
			return $this->Nome;
		}

		

}