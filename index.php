<?php
require __DIR__ . '/rawCURL.php';

    $senderArr = array('SUNRISE','FL',33325,'USA');

    $recArr = array('JACKSONVILLE','FL', 32257, 'USA' )
    $receiverCity = ;
    $receiverState = ;
    $receiverZip = ;
    $receiverCountry = ;

    echo $senderArr;
echo thing($senderArr[0], $senderArr[1],$senderArr[2], $senderArr[3], $receiverCity, $receiverState, $receiverZip, $receiverCountry);

?>