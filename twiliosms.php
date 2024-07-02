<?php
require_once 'jayagadai/vendor/autoload.php'; // Ubah '/path/to' dengan lokasi instalasi library Twilio

use Twilio\Rest\Client;

$account_sid = 'AC5388dc7591f6a94aa065b487b8a1535d'; // Ganti 'your_account_sid' dengan akun SID Anda
$auth_token = 'b78aa22aea0c3539250ee94c643d84c8'; // Ganti 'your_auth_token' dengan token otentikasi Anda

$client = new Client($account_sid, $auth_token);

$message = $client->messages->create(
    '+6285333169606', // nomor telepon penerima dalam format internasional
    array(
        'from' => '+13184966385', // nomor telepon Twilio Anda yang diverifikasi
        'body' => 'Haii Saya Ganteng' // pesan SMS yang ingin dikirim
    )
);

echo 'Message SID: ' . $message->sid;
?>
