<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

/**
 * Description of newPHPClass
 *
 * @author stefan
 */
class ImportPrices 
{
    protected $symbol;
    
    protected $market;
    
    protected $startDate;
    
    protected $endDate;
    
    public function __construct($symbol, $market, $startDate, $endDate) 
    {
        
    }

    /**
     * 
     * @return array
     * @throws Exception
     */
    public function execute() 
    {
        $url = "http://ichart.finance.yahoo.com/table.csv?s=AB1.DE&c=2013&a=0&b=1&f=2013&d=11&e=31&g=d";
        
        $prices = [];
        
        if (($handle = fopen($url, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ","))) {
                array_push($prices, $data);
            }
        } else {
            throw new Exception;
        }

        fclose($handle);
        
        return $prices;
    }
}
