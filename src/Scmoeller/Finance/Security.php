<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

/**
 * Description of Security
 *
 * @author stefan
 */
class Security
{
    protected $isin;
    
    protected $name;
    
    protected $abbrevation;
    
    public function __construct($isin, $name, $abbrevation)
    {
        $this->setIsin($isin);
        
        $this->setName($name);
        
        $this->setAbbrevation($abbrevation);
    }
    
    public function getIsin()
    {
        return $this->isin;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAbbrevation()
    {
        return $this->abbrevation;
    }

    public function setIsin($isin)
    {
        $this->isin = $isin;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAbbrevation($abbrevation)
    {
        $this->abbrevation = $abbrevation;
    }
}
