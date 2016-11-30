<?php
$client = new SoapClient("http://api.cba.am/exchangerates.asmx?WSDL");

function getDateRange($startDate,$endDate)
{
    /*$startDate = new DateTime($sDate);
    $endDate = new DateTime($eDate);*/
    $endDate = $endDate->modify('+1 day');
    $interval = new DateInterval('P1D');
    $range = new DatePeriod($startDate, $interval, $endDate);
    foreach ($range as $dateItem) {
        $dateRange[]=$dateItem->format("Y-m-d");
    }
    return $dateRange;
};

