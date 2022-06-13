<?php

namespace DAO;

require_once("Config/Autoload.php");

use Config\Autoload as Autoload;
use \Exception as Exception;

use Models\Collection as Collection ;
use Models\Figure as Figure;

use DAO\Connection as Connection;

Autoload::Start();

Class CollectionDAO{

    private $collectionList = array();
    private $connection;
    private $tableName = "COLLECTIONS";

   

    public function GetAll(){
        try {
            $collection_list = array();

            $query = " SELECT * FROM ".$this->tableName . " ORDER BY COLL_YEAR";

            $this->connection = Connection::GetInstance();

            $resultSet = $this->connection->Execute($query);

            foreach ($resultSet as $row){

                $collection = new Collection();
                $collection->setColl_id($row["coll_id"]);
                $collection->setColl_name($row["coll_name"]);
                $collection->setColl_set($row["coll_set"]);
                $collection->setColl_year($row["coll_year"]);
               

                array_push($collection_list, $collection);

            }
            return $collection_list;
        }
        catch (Exception $ex){
            throw $ex;
        }
    }


    public function getByID($id)
    {
        try{
            $query = "SELECT * FROM ". $this->tableName . " WHERE coll_id = '{$id}'"; 

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query);

            $collection_aux = new Collection();

            if($resultSet[0]["coll_id"] == $id){
                $collection_aux = $resultSet[0];
            }
            
            return $collection_aux;
        }
        catch(Exception $ex){
            throw $ex;
        }
        
    }

   

    
    
}
?>