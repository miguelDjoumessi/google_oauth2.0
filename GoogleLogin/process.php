<?php
require __DIR__ . '/../vendor/autoload.php';
require 'config.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

$urls = [
    'authorization_code' => "https://accounts.google.com/o/oauth2/v2/auth",
    'access_token' => "https://oauth2.googleapis.com/token",
    'userinfo' => "https://www.googleapis.com/oauth2/v2/userinfo"
];

$client = new GuzzleHttp\Client(['timeout' => 2.0]);

try {
    $response = $client->post($urls["access_token"], [
        "form_params" => [
            'code' => $_GET['code'],
            'client_id' => GOOGLE_CLIENT_ID,
            'client_secret' => GOOGLE_SECRET_ID,
            'redirect_uri' => 'http://localhost:8000/GoogleLogin/process.php',
            'grant_type' => 'authorization_code'
        ]
    ]);

    $accessToken = json_decode($response->getBody())->access_token;

    $response = $client->get($urls["userinfo"], [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken
            ]
        ])->getBody();
    $userinfo = json_decode($response);
    if($userinfo->verified_email){
        session_start();
        $_SESSION['name'] = $userinfo->name;
        header('Location: http://localhost:8000/home.php');
        exit();
    }
} catch (ClientException $ex) {
    dd($ex->getMessage());
}


?>