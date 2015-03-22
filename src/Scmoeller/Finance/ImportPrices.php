<?php

namespace Scmoeller\Finance;

use DateTime;
use Exception;

/**
 * Description of newPHPClass
 *
 * @author stefan
 */
class ImportPrices 
{
    /**
     *
     * @var Security
     */
    protected $security;
    
    /**
     *
     * @var Market
     */
    protected $market;
    
    /**
     *
     * @var DateTime
     */
    protected $startDate;
    
    /**
     *
     * @var DateTime
     */
    protected $endDate;
    
    /**
     * Creates the Command.
     * 
     * @param \Scmoeller\Finance\Security $security Security
     * @param \Scmoeller\Finance\Market $market Market
     * @param DateTime $startDate Startdate
     * @param DateTime $endDate Enddate
     */
    public function __construct(Security $security, Market $market, DateTime $startDate, DateTime $endDate) 
    {
        $this->security = $security;
    
        $this->market = $market;
        
        $this->startDate = $startDate;
        
        $this->endDate = $endDate;
    }

    /**
     * 
     * @return array
     * @throws Exception
     */
    public function execute() 
    {
        $url = $this->parseUrl();
        
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
    
    /**
     * Parses the URL.
     * 
     * @return string URL
     */
    protected function parseUrl()
    {
        $baseUrl = "http://ichart.finance.yahoo.com/table.csv?";
        
        $startYear = $this->startDate->format('Y');
        
        $startMonth = (int) $this->startDate->format('m') - 1;
        
        $startDay = (int) $this->startDate->format('d');
        
        $endYear = $this->endDate->format('Y');
        
        $endMonth = (int) $this->endDate->format('m') - 1;
        
        $endDay = (int) $this->endDate->format('d');
        
        $query =    "s={$this->security->getAbbrevation()}." .
                    "{$this->market->getSymbol()}&" .
                    "c=$startYear&a=$startMonth&b=$startDay&" . 
                    "f={$endYear}&d={$endMonth}&e={$endDay}&g=d";
        
        return $baseUrl . $query;
    }
}
