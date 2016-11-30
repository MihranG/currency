<?php
include('functions.php');


if ($_POST['currency'] && $_POST['sDate']) {
    $currency = $_POST['currency'];

    $eDate = new DateTime($_POST['eDate']);
    $sDate = new DateTime($_POST['sDate']);
    if ($_POST['eDate']) {
        if ($eDate < $sDate) {
            $invert = $eDate;
            $eDate = $sDate;
            $sDate = $invert;
            $invertError = true;
        }
        $dateArray = getDateRange($sDate,$eDate);
        foreach ($dateArray as $date) {
            $resultByDate = $client->ExchangeRatesByDateByISO(['date' => $date, 'ISO' => $currency]);
            $date = $resultByDate->ExchangeRatesByDateByISOResult->CurrentDate;
            $date = date("Y-m-d",strtotime($date));
            $rate = $resultByDate->ExchangeRatesByDateByISOResult->Rates->ExchangeRate->Rate;
            $outputData = Array('date' => $date, 'rate' => $rate);
            $outputDataArray[] = $outputData;
        }
        echo json_encode(['type' => 1, 'data' => $outputDataArray, 'error' => $invertError]);
    } else {
        $sDate = $sDate->format("Y-m-d");
        $resultByDate = $client->ExchangeRatesByDateByISO(['date' => $sDate, 'ISO' => $currency]);
        $date = $resultByDate->ExchangeRatesByDateByISOResult->CurrentDate;
        $date = date("Y-m-d");
        $rate = $resultByDate->ExchangeRatesByDateByISOResult->Rates->ExchangeRate->Rate;
        $outputData = Array('date' => $date, 'rate' => $rate);

        echo json_encode(['type' => 2, 'data' => $outputData]);

    }

};


