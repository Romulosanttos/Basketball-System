<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Iface\IDAO as IDAO;
use App\Model as Jogador;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';
require_once dirname(__FILE__).'/../Model/Jogador.php';


class DAOJogador implements IDAO{
    
    public function create($Jogador){
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = " ";
        echo "<br>".$sql."<br>";

        try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    }

    public function update($Jogador, $idJogador)
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "";

        echo "<br>".$sql."<br>";

        try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    }
    
    public function delete($idJogador){
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "";
                
        echo "<br>".$sql."<br>";

        try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    }
    
    public function find($idJogador){

        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "";
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;
    }

    public function list()
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "";
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;   
    }
        public function listBy($type, $value)
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "";
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;   
    }
}