<?php

$uri = 'https://www.waboxapp.com/api/send/chat'; 
    $data = [
        'token' => 'e7549d0dbf698daeef86ef4c5870916c5a07d4bb548c7', //Access Token
        'uid' => '6282245937150', // Nomor Admin
        'to' => '6285331436043', // Nomor Penerima
        'custom_uid' => 'pesan10', // Selalu berubah tiap pesannya
        'text' => 'TEST'
    ];

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $uri); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($ch, CURLOPT_MAXREDIRS, 5); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 20); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 25);
    $response = json_decode(curl_exec($ch)); // execute curl
     
$info = curl_getinfo($ch); 
curl_close ($ch);

?>