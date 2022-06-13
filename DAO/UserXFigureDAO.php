<?php

    namespace DAO;
    
    use \Exception as Exception;
    use Models\UserXFigure;

    class UserXFigureDAO
    {
        private $connection;
        private $tableName = "USERS_X_FIGURES";

        public function Add(UserXFigure $userXFigure)
        {
            try
            {
                $query = "INSERT INTO ".$this->tableName." (us_id, fig_id) VALUES (:us_id, :fig_id)";
                
                $parameters["us_id"] = $userXFigure->getUserID();
                $parameters["fig_id"] = $userXFigure->getFigureID();

                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(Exception $ex)
            {
                
            }
        }

       
        public function Delete(UserXFigure $userXFigure)
        {
            try
            {
                $user_id=$userXFigure->GetUserID();
                $figure_id=$userXFigure->getFigureID();
                
                $query = "DELETE FROM $this->tableName WHERE us_id = $user_id  AND fig_id = $figure_id";
               
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query);
            }
            catch(Exception $ex)
            {
                
            }
        }

        public function GetAll()
        {
            try
            {
                $userXFigureList = array();

                $query = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach($resultSet as $row)
                {                
                        $userXFigure = new UserXFigure();
                        $userXFigure->setUserID($row["us_id"]);
                        $userXFigure->setFigureID($row["fig_id"]);
    
                        array_push($userXFigureList, $userXFigure);
                }

                return $userXFigureList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }

        
        public function GetByUserId($id)
        {
            try
            {
                $us_x_job_list = array();

                $query = "SELECT * FROM $this->tableName WHERE us_id = $id";

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach($resultSet as $row)
                {                
                    $userXFigure = new UserXFigure();
                    $userXFigure->setUserID($row["us_id"]);
                    $userXFigure->setFigureID($row["fig_id"]);

                    array_push($us_x_job_list, $userXFigure);
                }

                return $us_x_job_list;
            }
            catch(Exception $ex)
            {
                throw $ex->getMessage();
            }
        }
       

    }
?>