<?php

use Scmoeller\Finance\ImportPrices;
use Scmoeller\Finance\Security;
use Scmoeller\Finance\Market;

require_once 'src/Scmoeller/Finance/ImportPrices.php';
require_once 'src/Scmoeller/Finance/Security.php';
require_once 'src/Scmoeller/Finance/Market.php';

$security = new Security("DE0008232125", "Deutsche Lufthansa", "LHA");

$market = new Market(1, "XETRA", "DE");

$startDate = new DateTime('2015-01-02');

$endDate = new DateTime('2015-01-30');

$import = new ImportPrices($security, $market, $startDate, $endDate);

$prices = $import->execute();

print_r($prices);