<?php 

namespace App\Model;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//  um jogador pode ter varias estatisticas pq ele joga mais de uma vez(espero) =idJogoFK
//  no banco essa class tem que ser nula ??(andre)
//  Pts AST MIN FG P3 LL PORCENTAGEM RO RD REB F  RB

class EstatisticaJogador {

	private $idEstatisticaJogador;	

	private $idJogadorFK;

	private $idJogoFK;



	private $Pts;

	private $AST;

	private $MIN;

	private $FG;

	private $P3;//3P

	private $LL;

	private $PORCENTAGEM;

	private $RO;

	private $RD;

	private $REB;

	private $F;

	private $RB;



	function __construct($idJogadorFK, $idJogoFK, $Pts, $AST, $MIN, $FG, $P3 , $LL, $PORCENTAGEM, $RO, $RD, $REB, $F, $RB) {
		$this->Pts = $Pts;
		$this->AST = $AST;
		$this->MIN = $MIN;
		$this->FG = $FG;
		$this->P3 = $P3;
		$this->LL = $LL;
		$this->PORCENTAGEM = $PORCENTAGEM;
		$this->RO = $RO;
		$this->RD = $RD;
		$this->REB = $REB;
		$this->F = $F;
		$this->RB = $RB;
		$this->idJogadorFK = $idJogadorFK;

	}

		
		function getPts () 
		{
			return $this->Pts;
		}
		
		function getAST () 
		{
			return $this->AST;
		}
		
		function getMIN () 
		{
			return $this->MIN;
		}

		function getFG () 
		{
			return $this->FG;
		}

		function getP3 () 
		{
			return $this->P3;
		}

		function getidJogadorFK () 
		{
			return $this->idJogadorFK;
		}
		
		function getPORCENTAGEM () 
		{
			return $this->PORCENTAGEM;
		}

		function getRO () 
		{
			return $this->RO;
		}


		function getREB () 
		{
			return $this->REB;
		}

		function getF () 
		{
			return $this->F;
		}


		function getRB () 
		{
			return $this->RB;
		}		

		function getidJogoFK () 
		{
			return $this->idJogoFK;
		}		



		function setPts ($Pts) 
		{
			$this->Pts = $Pts;
		}
		
		function SetAST ($AST) 
		{
			return $this->AST;
		}
		
		function SetMIN ($MIN) 
		{
			return $this->MIN;
		}

		function SetFG ($FG) 
		{
			return $this->FG;
		}

		function SetP3 ($P3) 
		{
			return $this->P3;
		}

		function SetLL ($LL) 
		{
			return $this->LL;
		}
		
		function SetPORCENTAGEM ($PORCENTAGEM) 
		{
			return $this->PORCENTAGEM;
		}

		function SetRO ($RO) 
		{
			return $this->RO;
		}

		function SetRD ($RD) 
		{
			return $this->RD;
		}

		function SetREB ($REB) 
		{
			return $this->REB;
		}

		function SetF ($F) 
		{
			return $this->F;
		}

		function SetRB ($RB) 
		{
			return $this->RB;
		}

		function SetidJogoFK ($idJogoFK) 
		{
			return $this->idJogoFK;
		}


}