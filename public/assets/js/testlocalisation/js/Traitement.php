<?php 

$homeMobileCountryCode = $_POST['homeMobileCountryCode'];
$homeMobileNetworkCode = $_POST['homeMobileNetworkCode'];
$radioType = $_POST['radioType'];
$carrier = $_POST['carrier'];
$considerIp = $_POST['considerIp'];
$cellId = $_POST['cellId'];
$locationAreaCode = $_POST['locationAreaCode'];
$mobileCountryCode = $_POST['mobileCountryCode'];
$mobileNetworkCode = $_POST['mobileNetworkCode'];
$age = $_POST['age'];
$signalStrength = $_POST['signalStrength'];
$timingAdvance = $_POST['timingAdvance'];
$macAddress = $_POST['macAddress'];
$signalStrength = $_POST['signalStrength'];
$age1 = $_POST['age1'];
$channel = $_POST['channel'];
$signalToNoiseRatio = $_POST['signalToNoiseRatio'];


$filename = 'json.json'; // /var/www/html/testlocalisation/js
    
$somecontent = '{
  "homeMobileCountryCode": '.$homeMobileCountryCode.',
  "homeMobileNetworkCode": '.$homeMobileNetworkCode.',
  "radioType": '.$radioType.',
  "carrier": '.$carrier.',
  "considerIp": '.$considerIp.',
  "cellTowers": [
     {
      "cellId": '.$cellId.',
      "locationAreaCode": '.$locationAreaCode.',
      "mobileCountryCode": '.$mobileCountryCode.',
      "mobileNetworkCode": '.$mobileNetworkCode.',
      "age": '.$age.',
      "signalStrength": '.$signalStrength.',
      "timingAdvance": '.$timingAdvance.'
    }
  ],
  "wifiAccessPoints": [
     {
      "macAddress": '.$macAddress.',
      "signalStrength": '.$signalStrength.',
      "age": '.$age1.',
      "channel": '.$channel.',
      "signalToNoiseRatio": '.$signalToNoiseRatio.'
    }
  ]
}';

    file_put_contents($filename, $somecontent);

 ?>