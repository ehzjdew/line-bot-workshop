<?php



require "vendor/autoload.php";

$access_token = 'b6BN76vbMHuX52JURAZ9a0il0yIOyiZOy3BlJ1YTYZr82i2kta0IFENvZs015u7tAFjEv70IUxptIhe+W0cAT/VxMx1ZHF2xQfwtiQyhN1chucmpzcfb7j+WNfEHZ6W4cHw7qXko0p1AAgeeG6iPFQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd88c242c0a72f95aa00b14e3342162b0';
// ID ที่ต้องการส่งไปหา
$pushID = '*ReceiverID*';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







