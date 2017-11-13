<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>isok</h1>
<?php

require_once('./response_line.php');

$channelAccessToken = '2xUVyrHQpvfeqo0zkEntrbvaEj8H12gZ/4d5J9lVfhTR0Caif2Ik0xrMFGZdYT0/L4QUfr1M6t42xoKx5ZqqvLs4HsOZrk63UHcT6N9vnFlBYKy3Z9gD3aFte2YTov2U3XwDLBQVt/MV/mJjmfFPFwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '712cf0062c32aa7cfa14e0a4f25d6084';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId     = $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp  = $client->parseEvents()[0]['timestamp'];
$message    = $client->parseEvents()[0]['message'];
$messageid  = $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

if($message['type']=='sticker')
{   
    $balas = array(
                            'replyToken' => $replyToken,                                                        
                            'messages' => array(
                                array(
                                        'type' => 'text',                                   
                                        'text' => 'Terimakasih stikernya... '                                       
                                    
                                    )
                            )
                        );
                        
}
 
$result =  json_encode($balas);

file_put_contents('./balasan.json',$result);
$client->replyMessage($balas);

?>
</body>
</html>
