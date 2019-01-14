<?php


$access_token = 'b6BN76vbMHuX52JURAZ9a0il0yIOyiZOy3BlJ1YTYZr82i2kta0IFENvZs015u7tAFjEv70IUxptIhe+W0cAT/VxMx1ZHF2xQfwtiQyhN1chucmpzcfb7j+WNfEHZ6W4cHw7qXko0p1AAgeeG6iPFQdB04t89/1O/w1cDnyilFU=';

$userId = 'U84fe4cf2212dbfff170e839890eca0cf';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

