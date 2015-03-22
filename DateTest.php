<?php

$startDate = new DateTime('2014-01-02');

echo $startDate->format('Y-m-d'), "\n";
echo $startDate->format('Y'), "\n";
echo (int) $startDate->format('m') - 1, "\n";
echo (int) $startDate->format('d'), "\n";

