<?php

function thing($sendCity, $sendState, $sendZip, $sendCounty, $recCity, $recState, $recZip, $recCountry){
    $uri = 'http://uat.wwex.com:8090/webServices/services/SpeedFreightShipment';
    $loginId = 'testwwe';
    $password = 'test';
    $licenseKey = 'ccc';
    $accountNumber = '71581537';
    $senderCity = $sendCity; 
    $senderState = $sendState;
    $senderZip = $sendZip; 
    $senderCountry = $sendCounty;

    $receiverCity = $recCity;
    $receiverState = $recState;
    $receiverZip = $recZip;
    $receiverCountry = $recCountry;

    $configXML = "<soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:wwex='http://www.wwexship.com'>
    <soapenv:Header>
    <wwex:AuthenticationToken>
    <wwex:loginId>$loginId</wwex:loginId>
    <wwex:password>$password</wwex:password>
    <wwex:licenseKey>$licenseKey</wwex:licenseKey>
    <wwex:accountNumber>$accountNumber</wwex:accountNumber>
    </wwex:AuthenticationToken>
    </soapenv:Header>
    <soapenv:Body>
    <wwex:quoteSpeedFreightShipment>
    <wwex:freightShipmentQuoteRequest>
    <wwex:senderCity>$senderCity</wwex:senderCity>
    <wwex:senderState>$senderState</wwex:senderState>
    <wwex:senderZip>$senderZip</wwex:senderZip>
    <wwex:senderCountryCode>$senderCountry</wwex:senderCountryCode>
    <wwex:insidePickup>?</wwex:insidePickup>
    <wwex:liftgatePickup>?</wwex:liftgatePickup>
    <wwex:residentialPickup>?</wwex:residentialPickup>
    <wwex:tradeshowPickup>?</wwex:tradeshowPickup>
    <wwex:constructionSitePickup>?</wwex:constructionSitePickup>
    <wwex:limitedAccessPickup>?</wwex:limitedAccessPickup>
    <wwex:limitedAccessPickupType>?</wwex:limitedAccessPickupType>
    <wwex:receiverCity>$receiverCity</wwex:receiverCity>
    <wwex:receiverState>$receiverState</wwex:receiverState>
    <wwex:receiverZip>$receiverZip</wwex:receiverZip>
    <wwex:receiverCountryCode>$receiverCountry</wwex:receiverCountryCode>
    <wwex:insideDelivery>?</wwex:insideDelivery>
    <wwex:liftgateDelivery>?</wwex:liftgateDelivery>
    <wwex:residentialDelivery>?</wwex:residentialDelivery>
    <wwex:tradeshowDelivery>?</wwex:tradeshowDelivery>
    <wwex:constructionSiteDelivery>?</wwex:constructionSiteDelivery>
    <wwex:limitedAccessDelivery>?</wwex:limitedAccessDelivery>
    <wwex:limitedAccessDeliveryType>?</wwex:limitedAccessDeliveryType>
    <wwex:notifyBeforeDelivery>?</wwex:notifyBeforeDelivery>
    <wwex:collectOnDelivery>?</wwex:collectOnDelivery>
    <wwex:collectOnDeliveryAmount>?</wwex:collectOnDeliveryAmount>
    <wwex:CODIncludingFreightCharge>?</wwex:CODIncludingFreightCharge>
    <wwex:shipmentDate>?</wwex:shipmentDate>
    <wwex:insuranceDetail xsi:nil='true' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'/>
    <wwex:commdityDetails>
    <wwex:is11FeetShipment>?</wwex:is11FeetShipment>
    <wwex:handlingUnitDetails>
    <!--Zero or more repetitions:-->
    <wwex:wsHandlingUnit>
    <wwex:typeOfHandlingUnit>CARTON</wwex:typeOfHandlingUnit>
    <wwex:numberOfHandlingUnit>1</wwex:numberOfHandlingUnit>
    <wwex:handlingUnitHeight>0</wwex:handlingUnitHeight>
    <wwex:handlingUnitLength>0</wwex:handlingUnitLength>
    <wwex:handlingUnitWidth>0</wwex:handlingUnitWidth>
    <wwex:lineItemDetails>
    <!--Zero or more repetitions:-->
    <wwex:wsLineItem>
    <wwex:lineItemClass>85</wwex:lineItemClass>
    <wwex:lineItemWeight>80</wwex:lineItemWeight>
    <wwex:lineItemDescription>HYDRAULICS</wwex:lineItemDescription>
    <wwex:lineItemNMFC>aaaac</wwex:lineItemNMFC>
    <wwex:lineItemPieceType>BOX</wwex:lineItemPieceType>
    <wwex:piecesOfLineItem>1</wwex:piecesOfLineItem>
    <wwex:isHazmatLineItem>N</wwex:isHazmatLineItem>
    <wwex:lineItemHazmatInfo>
    <wwex:lineItemHazmatUNNumberHeader>?</wwex:lineItemHazmatUNNumberHeader>
    <wwex:lineItemHazmatUNNumber>?</wwex:lineItemHazmatUNNumber>
    <wwex:lineItemHazmatClass>?</wwex:lineItemHazmatClass>
    <wwex:lineItemHazmatEmContactPhone>?</wwex:lineItemHazmatEmContactPhone>
    <wwex:lineItemHazmatPackagingGroup>?</wwex:lineItemHazmatPackagingGroup>
    </wwex:lineItemHazmatInfo>
    </wwex:wsLineItem>
    </wwex:lineItemDetails>
    </wwex:wsHandlingUnit>
    </wwex:handlingUnitDetails>
    </wwex:commdityDetails>
    </wwex:freightShipmentQuoteRequest>
    </wwex:quoteSpeedFreightShipment>
    </soapenv:Body>
    </soapenv:Envelope>";
    
    
    try {
        
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $configXML,
            CURLOPT_HTTPHEADER => array(
                'SOAPAction: ok',
                'Authorization: Basic dGVzdHd3ZTp0ZXN0',
                'Content-Type: application/xml'
            ),
        ));
        
        $res = curl_exec($curl);
        
        curl_close($curl);
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
    try {
        echo "<pre>"; print_r($res); echo "</pre>";
        
    } catch (Exception $e) {
        echo $e->getMessage();
        
    }
    
}