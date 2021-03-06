<?php

namespace Scmoeller\Finance;

/**
 * Description of Market
 *
 * @author stefan
 */
class Market
{
    protected $id;
    
    protected $name;
    
    protected $symbol;
    
    public function __construct($id, $name, $symbol)
    {
        $this->setId($id);
        
        $this->setName($name);
        
        $this->setSymbol($symbol);
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }
}
