<?php

$loginId='testwwews';
$password='t420Bz';
$licenseKey= 'j4jx7wvrDDPtydjg';
$accountNumber='W317599416';



$params=array(
'loginId'=>$loginId,
'password'=>$password,
'licenseKey'=>$licenseKey,
'accountNumber'=>$accountNumber,
'freightShipmentQuoteRequest'=>'ok'
);


$opts = array(
    'http' => array(
        'user_agent' => 'http://uat.wwex.com:8090/webServices/services/SpeedFreightShipment'
    )
);
$context = stream_context_create($opts);

$wsdl = "SpeedFreightShipmnetWS.wsdl";
$soapClientOptions = array(
    'stream_context' => $context,
    'cache_wsdl' => WSDL_CACHE_NONE,

);


try {

    $client = new SoapClient($wsdl, $soapClientOptions);

    $res = $client->quoteSpeedFreightShipment($params);
    echo '<pre>'; print_r($res); echo '</pre>';
    // $xml = simplexml_load_string($res);
}
catch(Exception $e) {
    echo $e->getMessage();
}
?>