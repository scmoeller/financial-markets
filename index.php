<?php

use Scmoeller\Finance\ImportPrices;
use Scmoeller\Finance\Security;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'src/Scmoeller/Finance/ImportPrices.php';

$security = new Security("DE0008232125", "Deutsche Lufthansa", "LHA");

$market = new Market(1, "XETRA", "DE");

$startDate = new DateTime('2015-01-02');

$endDate = new DateTime('2015-01-30');

$import = new ImportPrices($security, $market, $startDate, $endDate);

$import->execute();