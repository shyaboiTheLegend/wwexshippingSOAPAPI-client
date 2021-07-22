<?php
require __DIR__ . '/rawCURL.php';

    $senderArr = array('SUNRISE','FL',33325,'USA');

    $receiverCity = 'JACKSONVILLE';
    $receiverState = 'FL';
    $receiverZip = 32257;
    $receiverCountry = 'USA';

    echo $senderArr;
echo thing($senderArr[0], $senderArr[1],$senderArr[2], $senderArr[3], $receiverCity, $receiverState, $receiverZip, $receiverCountry);

?>