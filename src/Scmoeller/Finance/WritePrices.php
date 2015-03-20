<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

use PDO;

/**
 * Description of WritePrices
 *
 * @author stefan
 */
abstract class WritePrices
{
    /**
     *
     * @var array
     */
    protected $prices;
 
    /**
     *
     * @var PDO
     */
    protected $database;
    
    public function __construct(PDO $database, array $prices)
    {
        $this->database = $database;
        
        $this->prices = $prices;
    }
    
    public function execute() {}
}
