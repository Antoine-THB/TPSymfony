<?php
namespace App\lib;

class Tool
{
    public $libelle;
    public $value;
    public $nb;

    public function __construct(){
        $this->libelle='libelle de defaut';
        $this->value='valeur par defaut';
        $this->nb=0;
    }

    
    

    /**
     * Get the value of nb
     */ 
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Set the value of nb
     *
     * @return  self
     */ 
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}