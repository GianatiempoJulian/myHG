<?php

namespace Models;


class Collection{

    private $coll_id;
    private $coll_name;
    private $coll_set;
    private $coll_year;
    
    
    

    public function __construct(){}

    /**
     * Get the value of coll_id
     */ 
    public function getColl_id()
    {
        return $this->coll_id;
    }

    /**
     * Set the value of coll_id
     *
     * @return  self
     */ 
    public function setColl_id($coll_id)
    {
        $this->coll_id = $coll_id;

        return $this;
    }

    /**
     * Get the value of coll_name
     */ 
    public function getColl_name()
    {
        return $this->coll_name;
    }

    /**
     * Set the value of coll_name
     *
     * @return  self
     */ 
    public function setColl_name($coll_name)
    {
        $this->coll_name = $coll_name;

        return $this;
    }

    /**
     * Get the value of coll_set
     */ 
    public function getColl_set()
    {
        return $this->coll_set;
    }

    /**
     * Set the value of coll_set
     *
     * @return  self
     */ 
    public function setColl_set($coll_set)
    {
        $this->coll_set = $coll_set;

        return $this;
    }

    /**
     * Get the value of coll_year
     */ 
    public function getColl_year()
    {
        return $this->coll_year;
    }

    /**
     * Set the value of coll_year
     *
     * @return  self
     */ 
    public function setColl_year($coll_year)
    {
        $this->coll_year = $coll_year;

        return $this;
    }
    }
?>