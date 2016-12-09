<?php

namespace App\Controllers;

ini_set('display_errors', true);
error_reporting(E_ALL);

use App\DAO\DAOJogo as DAOJogo;
use App\DAO\DAOPartida as DAOPartida;
use App\DAO\DAOTime as DAOTime;
use App\DAO\DAOJogador as DAOJogador;
use App\DAO\DAOEstatisticaPartida as DAOEstatisticaPartida;
use App\DAO\DAOEstatisticaJogador as DAOEstatisticaJogador;


require_once dirname(__FILE__).'/../Model/Jogo.php';
require_once dirname(__FILE__).'/../DAO/DAOJogo.php';

require_once dirname(__FILE__).'/../Model/Time.php';
require_once dirname(__FILE__).'/../DAO/DAOTime.php';

require_once dirname(__FILE__).'/../Model/Partida.php';
require_once dirname(__FILE__).'/../DAO/DAOPartida.php';

require_once dirname(__FILE__).'/../Model/Jogador.php';
require_once dirname(__FILE__).'/../DAO/DAOJogador.php';

require_once dirname(__FILE__).'/../Model/EstatisticaPartida.php';
require_once dirname(__FILE__).'/../DAO/DAOEstatisticaPartida.php';

require_once dirname(__FILE__).'/../Model/EstatisticaJogador.php';
require_once dirname(__FILE__).'/../DAO/DAOEstatisticaJogador.php';


class mainController
{


//CreateJogo
function cadastrarJogo($Jogo)
{
	$DAOJogo = new DAOJogo();
	return $DAOJogo->create($Jogo);
}

//UpdateJogo
function alterarJogo($Jogo,$idJogo)
{
	$DAOJogo = new DAOJogo();
	return $DAOJogo->update($Jogo, $idJogo);
}

//DeleteJogo
function apagarJogo($idJogo)
{
	$DAOJogo = new DAOJogo();
	return $DAOJogo->delete($idJogo);
}

//FindJogo
function buscarJogo($Jogo,$idJogo)
{
	$DAOJogo = new DAOJogo();
	return $DAOJogo->find($Jogo, $idJogo);
}

//ListJogo
function listarJogo($Jogo,$idJogo)
{
	$DAOJogo = new DAOJogo();
	return $DAOJogo->list($Jogo, $idJogo);
}

//ListJogo
function listarJogoPor($Jogo,$idJogo)
{
	$DAOJogo = new DAOJogo();
	return $DAOJogo->list($Jogo, $idJogo);
}




//CreatePartida
function inserirPartida($Partida)
{
	$DAOPartida = new DAOPartida();
	return $DAOPartida->create($Partida);
}

//UpdatePartida
function alterarPartida($Partida,$idPartida)
{
	$DAOPartida = new DAOPartida();
	return $DAOPartida->update($Partida, $idPartida);
}

//DeletePartida
function apagarPartida($idPartida)
{
	$DAOPartida = new DAOPartida();
	return $DAOPartida->delete($idPartida);
}

//FindPartida
function buscarPartida($Partida,$idPartida)
{
	$DAOPartida = new DAOPartida();
	return $DAOPartida->find($Partida, $idPartida);
}

//ListPartida
function listarPartida($Partida,$idPartida)
{
	$DAOPartida = new DAOPartida();
	return $DAOPartida->list($Partida, $idPartida);
}


//CreateTime
function inserirTime($Time)
{
	$DAOTime = new DAOTime();
	return $DAOTime->create($Time);
}

//UpdateTime
function alterarTime($Time,$idTime)
{
	$DAOTime = new DAOTime();
	return $DAOTime->update($Time, $idTime);
}

//DeleteTime
function apagarTime($idTime)
{
	$DAOTime = new DAOTime();
	return $DAOTime->delete($idTime);
}

//FindTime
function buscarTime($Time,$idTime)
{
	$DAOTime = new DAOTime();
	return $DAOTime->find($Time, $idTime);
}


//ListTime
function listarTime($Time,$idTime)
{
	$DAOTime = new DAOTime();
	return $DAOTime->list($Time, $idTime);
}


//CreateJogador
function inserirJogador($Jogador)
{
	$DAOJogador = new DAOJogador();
	return $DAOJogador->create($Jogador);
}

//UpdateJogador
function alterarJogador($Jogador,$idJogador)
{
	$DAOJogador = new DAOJogador();
	return $DAOJogador->update($Jogador, $idJogador);
}

//DeleteJogador
function apagarJogador($idJogador)
{
	$DAOJogador = new DAOJogador();
	return $DAOJogador->delete($idJogador);
}

//FindJogador
function buscarJogador($Jogador,$idJogador)
{
	$DAOJogador = new DAOJogador();
	return $DAOJogador->find($Jogador, $idJogador);
}

//ListJogador
function listarJogador($Jogador,$idJogador)
{
	$DAOJogador = new DAOJogador();
	return $DAOJogador->list($Jogador, $idJogador);
}


//CreateEstatisticaPartida
function inserirEstatisticaPartida($EstatisticaPartida)
{
	$DAOEstatisticaPartida = new DAOEstatisticaPartida();
	return $DAOEstatisticaPartida->create($EstatisticaPartida);
}

//UpdateEstatisticaPartida
function alterarEstatisticaPartida($EstatisticaPartida,$idEstatisticaPartida)
{
	$DAOEstatisticaPartida = new DAOEstatisticaPartida();
	return $DAOEstatisticaPartida->update($EstatisticaPartida, $idEstatisticaPartida);
}

//DeleteEstatisticaPartida
function apagarEstatisticaPartida($idEstatisticaPartida)
{
	$DAOEstatisticaPartida = new DAOEstatisticaPartida();
	return $DAOEstatisticaPartida->delete($idEstatisticaPartida);
}

//FindEstatisticaPartida
function buscarEstatisticaPartida($EstatisticaPartida,$idEstatisticaPartida)
{
	$DAOEstatisticaPartida = new DAOEstatisticaPartida();
	return $DAOEstatisticaPartida->find($EstatisticaPartida, $idEstatisticaPartida);
}

//ListEstatisticaPartida
function listarEstatisticaPartida($EstatisticaPartida,$idEstatisticaPartida)
{
	$DAOEstatisticaPartida = new DAOEstatisticaPartida();
	return $DAOEstatisticaPartida->list($EstatisticaPartida, $idEstatisticaPartida);
}


//CreateEstatisticaJogador
function inserirEstatisticaJogador($EstatisticaJogador)
{
	$DAOEstatisticaJogador = new DAOEstatisticaJogador();
	return $DAOEstatisticaJogador->create($EstatisticaJogador);
}

//UpdateEstatisticaJogador
function alterarEstatisticaJogador($EstatisticaJogador,$idEstatisticaJogador)
{
	$DAOEstatisticaJogador = new DAOEstatisticaJogador();
	return $DAOEstatisticaJogador->update($EstatisticaJogador, $idEstatisticaJogador);
}

//DeleteEstatisticaJogador
function apagarEstatisticaJogador($idEstatisticaJogador)
{
	$DAOEstatisticaJogador = new DAOEstatisticaJogador();
	return $DAOEstatisticaJogador->delete($idEstatisticaJogador);
}

//FindEstatisticaJogador
function buscarEstatisticaJogador($EstatisticaJogador,$idEstatisticaJogador)
{
	$DAOEstatisticaJogador = new DAOEstatisticaJogador();
	return $DAOEstatisticaJogador->find($EstatisticaJogador, $idEstatisticaJogador);
}

//ListEstatisticaJogador
function listarEstatisticaJogador($EstatisticaJogador,$idEstatisticaJogador)
{
	$DAOEstatisticaJogador = new DAOEstatisticaJogador();
	return $DAOEstatisticaJogador->list($EstatisticaJogador, $idEstatisticaJogador);
}

}