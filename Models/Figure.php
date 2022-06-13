<?php

namespace Models;


class Figure{

    private $figure_id;
    private $character;
    private $form;
    private $photo_name;
    private $collection_id;
    
    

    public function __construct(){}

   

    

    /**
     * Get the value of character
     */ 
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Set the value of character
     *
     * @return  self
     */ 
    public function setCharacter($character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get the value of figure_id
     */ 
    public function getFigure_id()
    {
        return $this->figure_id;
    }

    /**
     * Set the value of figure_id
     *
     * @return  self
     */ 
    public function setFigure_id($figure_id)
    {
        $this->figure_id = $figure_id;

        return $this;
    }

    /**
     * Get the value of form
     */ 
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set the value of form
     *
     * @return  self
     */ 
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }
 

    /**
     * Get the value of photo
     */ 
    public function getPhoto_name()
    {
        return $this->photo_name;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto_name($photo_name)
    {
        $this->photo_name = $photo_name;

        return $this;
    }

    /**
     * Get the value of collection_id
     */ 
    public function getCollection_id()
    {
        return $this->collection_id;
    }

    /**
     * Set the value of collection_id
     *
     * @return  self
     */ 
    public function setCollection_id($collection_id)
    {
        $this->collection_id = $collection_id;

        return $this;
    }
}


?>