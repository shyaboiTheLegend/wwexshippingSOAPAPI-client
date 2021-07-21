<?php
try {
    $soapClient = new SoapClient('http://uat.wwex.com:8090/webServices/services/SpeedFreightShipment');
} catch (\Throwable $th) {
}
