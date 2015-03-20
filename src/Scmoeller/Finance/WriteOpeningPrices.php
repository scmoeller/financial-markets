<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

/**
 * Description of WriteOpeningPrices
 *
 * @author stefan
 */
class WriteOpeningPrices extends WritePrices
{
    public function __construct(PDO $pdo, array $prices)
    {
        parent::__construct($pdo, $prices);
    }
    
    public function execute()
    {
        $sql =  'INSERT INTO Open (isin, marketId, date, amount) ' .
                'VALUES (:isin, :marketId, :date, :amount)';
        
        $statemtent = $this->database->prepare($sql);
        
        foreach ($this->prices as $currentPrice) {
            
        }
    }
}
