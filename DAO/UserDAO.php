<?php

namespace DAO;

require_once("Config/Autoload.php");

use Config\Autoload as Autoload;
use Models\User as User ;
use \Exception as Exception;
use DAO\Connection as Connection;

Autoload::Start();

Class UserDAO{

    private $userList = array();
    private $connection;
    private $tableName = "USERS";

    public function Add(User $user){
        
        try {
            $query = "INSERT INTO ".$this->tableName." (us_id,us_username,us_email,us_password,us_active) VALUES (:us_id,:us_username,:us_email,:us_password,:us_active)";

    
            $parameters["us_id"] = $user->getUser_id();
            $parameters["us_username"] = $user->getUsername();
            $parameters["us_email"] = $user->getEmail();
            $parameters["us_password"] = password_hash($user->getPassword(),PASSWORD_DEFAULT,["cost"=>5]);
            $parameters["us_active"] = $user->getActive();


            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters);

        }
        catch(Exception $ex){
            throw $ex;
        }
    }
/*
    public function Modify(JobOffer $jobOffer){

        try{

            $query = "UPDATE $this->tableName SET o_idJobPosition = :o_idJobPosition , o_idCompany = :o_idCompany, o_fecha = :o_fecha, o_description = :o_description, o_active = :o_active   WHERE o_id = :o_id";

            $parameters["o_id"] = $jobOffer->getId();
            $parameters["o_idJobPosition"] = $jobOffer->getIdJobPosition();
            $parameters["o_idCompany"] = $jobOffer->getIdCompany();
            $parameters["o_fecha"] = $jobOffer->getFecha();
            $parameters["o_description"] = $jobOffer->getDescription();
            $parameters["o_active"] = $jobOffer->getActive();
           
          

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
            $userList = array();

            $query = " SELECT * FROM ".$this->tableName;

            $this->connection = Connection::GetInstance();

            $resultSet = $this->connection->Execute($query);

            foreach ($resultSet as $row){

                $user = new User();
                $user->setUser_Id($row["us_id"]);
                $user->setUsername($row["us_username"]);
                $user->setEmail($row["us_email"]);
                $user->setPassword($row["us_password"]);
                $user->setActive($row["us_active"]);

                array_push($userList, $user);

            }
            return $userList;
        }
        catch (Exception $ex){
            throw $ex;
        }
    }

    public function existUser ($username,$password){
        try{
            $flag = 0;
            $query = "SELECT * FROM ". $this->tableName . " WHERE us_username = '{$username}'";

        $this->connection = Connection::GetInstance();
        $resultSet = $this->connection->Execute($query);
        
        if($resultSet[0]["us_username"] == $username){
            if(password_verify($password,$resultSet[0]["us_password"])){
                $flag = 1;
            }
        }  
        return $flag;
        }
        catch(Exception $ex){
            throw $ex;
        }
        
    }

    public function existUserWithMail ($username,$email){

        try{
            $users = $this->GetAll();
            $flag = 0;

            $query = "SELECT us_email FROM ". $this->tableName . " WHERE us_email = '{$email}'"; 

            $this->connection = Connection::GetInstance();

            $resultSet = $this->connection->ExecuteNonQuery($query);

            if($resultSet != 0){
                $flag = 1;
            }

            return $flag;
    }
    catch(Exception $ex){
        throw $ex;
    }
}
    

    public function searchUser($username)

    {
        try{
            $query = "SELECT * FROM ". $this->tableName . " WHERE us_username = '{$username}'"; 

            $this->connection = Connection::GetInstance();
            $resultSet = $this->connection->Execute($query);
            $user = null;
        
            
            if($resultSet){
                $user = new User();
                if($resultSet[0]["us_username"] == $username){
                    $user->setUser_id($resultSet[0]["us_id"]);
                    $user->setUsername($resultSet[0]["us_username"]);
                    $user->setEmail($resultSet[0]["us_email"]);
                    $user->setPassword($resultSet[0]["us_password"]);
                    $user->setActive($resultSet[0]["us_active"]);
                }    
            }
            
            
            return $user;
        }
        catch(Exception $ex){
            throw $ex;
        }
        
    }
    
}


?>
