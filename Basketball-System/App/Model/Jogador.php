<?php 

namespace App\Model;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Jogador {

	private $Nome;

	private $idJogador;

	private $idEstatisticaJogadorFK;	//opcional, duvida se tem isso mesmo aqui 

	private $idTimeFK;

 // esta em estatisticaJogador Pts AST MIN FG P3 LL PORCENTAGEM RO RD REB F  RB

	function __construct($Nome, $idTimeFK, $idEstatisticaJogadorFK) {
		$this->idTimeFK = $idTimeFK;
		$this->idEstatisticaJogadorFK = $idEstatisticaJogadorFK;

	}

		
		function getNome () 
		{
			return $this->Nome;
		}

		function getidEstatisticaJogadorFK () 
		{
			return $this->idEstatisticaJogadorFK;
		}


		function getidTimeFK () 
		{
			return $this->idTimeFK;
		}


		function setidEstatisticaJogadorFK ($idEstatisticaJogadorFK) 
		{
			return $this->idEstatisticaJogadorFK;
		}

		function setNome ($Nome) 
		{
			return $this->Nome;
		}

		function setidTimeFK ($idTimeFK) 
		{
			return $this->idTimeFK;
		}





}