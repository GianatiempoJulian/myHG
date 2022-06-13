<?php

    namespace Models;

    class UserXFigure
    {
        private $userID;
        private $figureID;

        public function __construct() {}

        

        /**
         * Get the value of userID
         */ 
        public function getUserID()
        {
                return $this->userID;
        }

        /**
         * Set the value of userID
         *
         * @return  self
         */ 
        public function setUserID($userID)
        {
                $this->userID = $userID;

                return $this;
        }

        /**
         * Get the value of figureID
         */ 
        public function getFigureID()
        {
                return $this->figureID;
        }

        /**
         * Set the value of figureID
         *
         * @return  self
         */ 
        public function setFigureID($figureID)
        {
                $this->figureID = $figureID;

                return $this;
        }
    }

?>