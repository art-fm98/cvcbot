<?php
$access_token = 'Tn06kA54O9TDusL2993NA6H6u1/Sjv5KblMz53V7f35O0PrrV2fUECzrSktCUxm32uWa78W12A0BafcwDagfATUhkfEo0vFnvoPkNBmJKlJZcrtm3nhZVxhonPKIJnTeucpdICydKorZpEOWE8Lb0wdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;