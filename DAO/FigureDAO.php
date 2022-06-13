<?php

namespace DAO;

require_once("Config/Autoload.php");

use Config\Autoload as Autoload;
use Models\Figure as Figure ;
use \Exception as Exception;
use DAO\Connection as Connection;

Autoload::Start();

Class FigureDAO{

    private $figureList = array();
    private $connection;
    private $tableName = "FIGURES";

    /*
    public function Add(Figure $figure){
        try {
            $query = "INSERT INTO ".$this->tableName." (us_id,us_username,us_email,us_password,us_active) VALUES (:us_id,:us_username,:us_email,:us_password,:us_active)";

            $parameters["us_id"] = $user->getUser_id();
            $parameters["us_username"] = $user->getUsername();
            $parameters["us_email"] = $user->getEmail();
            $parameters["us_password"] = $user->getPassword();
            $parameters["us_active"] = $user->getActive();


            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters);

        }
        catch(Exception $ex){
            throw $ex;
        }
    }
*/
   
    
    public function GetAll(){
        try {
            $figureList = array();

            $query = " SELECT * FROM ".$this->tableName . " ORDER BY FIG_COLLECTION_ID";

            $this->connection = Connection::GetInstance();

            $resultSet = $this->connection->Execute($query);

            foreach ($resultSet as $row){

                $figure = new Figure();
                $figure->setFigure_id($row["fig_id"]);
                $figure->setCharacter($row["fig_character"]);
                $figure->setForm($row["fig_form"]);
                $figure->setCollection_id($row["fig_collection_id"]);
                $figure->setPhoto_name($row["fig_photo_name"]);
               

                array_push($figureList, $figure);

            }
            return $figureList;
        }
        catch (Exception $ex){
            throw $ex;
        }
    }


    public function getByID($id)
    {
        try{
            $query = "SELECT * FROM ". $this->tableName . " WHERE fig_id = '{$id}'"; 

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query);
    
            $figure_aux = new Figure();
    
            $figure_aux = $resultSet[0];
        
            return $figure_aux;
        }
        catch(Exception $ex){
            throw $ex;
        }
        
    }

    public function getByCollectionID($id)
    {
        try{
            $query = "SELECT * FROM ". $this->tableName . " WHERE fig_collection_id = '{$id}'"; 

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query);

            $figure_aux = array();

            $figure_aux = $resultSet;

            return $figure_aux;
        }
        catch(Exception $ex){
            throw $ex;
        }
    }

    

   

    

    
    
}
?>



